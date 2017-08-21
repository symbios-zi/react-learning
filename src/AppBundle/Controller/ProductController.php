<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Product;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\View\View;
use Symfony\Component\HttpFoundation\Response;

class ProductController extends FOSRestController
{
    public function cgetAction()
    {
        $articles = array('bim', 'bam', 'bingo');
        return new Response($articles);

    }


}
