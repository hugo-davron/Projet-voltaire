<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class TestController extends AbstractController
{
    /**
     * @Route("/test", name="test")
     */
    public function affichersalut()
    {
        echo("saluuuuuuuut");
        return new Response();
    }

    /**
     * @Route("/test2", name="test")
     */
    public function afficherBonjour()
    {
    	echo("Bonnnnnjouuuuur");
    	return new Response;
    }
}
