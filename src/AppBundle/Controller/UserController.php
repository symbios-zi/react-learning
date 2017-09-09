<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class UserController extends Controller
{

    public function registerAction(Request $request)
    {
        $userManager = $this->get('fos_user.user_manager');
        $entityManager = $this->get('doctrine')->getManager();
        $requestData = $request->request->all();

        // Do a check for existing user with userManager->findByUsername

        $user = $userManager->createUser();
        $user->setEmail($requestData['email']);
        $user->setPlainPassword($requestData['password']);
        $user->setEnabled(true);

        $userManager->updateUser($user);

        return $this->generateToken($user, 201);
    }

    protected function generateToken($user, $statusCode = 200)
    {
        // Generate the token
        $token = $this->get('lexik_jwt_authentication.jwt_manager')->create($user);

        $response = array(
            'token' => $token,
            'user'  => $user // Assuming $user is serialized, else you can call getters manually
        );

        return new JsonResponse($response, $statusCode); // Return a 201 Created with the JWT.
    }

}
