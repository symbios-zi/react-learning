<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Product;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AppController extends Controller
{

    public function indexAction()
    {


        // replace this example code with whatever you need
        return $this->render('app/index.html.twig');
    }
}
