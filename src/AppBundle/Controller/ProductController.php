<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Product;
use Symfony\Component\Serializer\Serializer;
use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;


class ProductController extends FOSRestController
{
    public function getProductsAction()
    {
        $product = $this->getDoctrine()
            ->getRepository(Product::class)
            ->findOneBy([]);

        $serializer = new Serializer(
            array(new ObjectNormalizer()),
            array('json' => new JsonEncoder())
        );

        $jsonContent = $serializer->serialize($product, 'json');

        return new JsonResponse($jsonContent);
    }
}
