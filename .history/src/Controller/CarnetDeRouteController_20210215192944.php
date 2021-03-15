<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CarnetDeRouteController extends AbstractController
{
    /**
     * @Route("/carnet-de-route", name="carnet_de_route")
     */
    public function index(): Response
    {

        dd('BONJOUR');

        return $this->render('carnet_de_route/index.html.twig', [
            'controller_name' => 'CarnetDeRouteController',
        ]);
    }
}
