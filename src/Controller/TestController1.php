<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController1 extends AbstractController
{
    /**
     * @Route("/random/{max}", name="app_test2")
     */
    public function number($max)
    {
        $number = random_int(0, $max);
        return $this->render('test/random.html.twig', [
            'randomNumber' => $number
        ]);
    }
}
