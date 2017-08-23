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

    /**
     * All products
     * @return JsonResponse
     */
    public function getProductsAction(): JsonResponse
    {
        $product = $this->getDoctrine()
            ->getRepository(Product::class)
            ->findAll();

        $jsonContent = $this->convertToJson($product);

        return new JsonResponse($jsonContent);
    }

    /**
     * @param $product
     * @return string
     */
    private function convertToJson($product): string
    {
        $serializer = new Serializer(
            array(new ObjectNormalizer()),
            array('json' => new JsonEncoder())
        );

        return $serializer->serialize($product, 'json');
    }
}
