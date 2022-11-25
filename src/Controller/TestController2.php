<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController2 extends AbstractController
{
    /**
     * @Route("/test2", name="home-page")
     */
    public function homePage(): Response
    {
        return $this->render('test/index2.html.twig', [
            'controller_name' => 'TestController2'
        ]);
    }
}
