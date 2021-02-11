<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Carbon\Carbon;


class HomeController extends AbstractController
{
    /**
     * @Route("/", name="accueil")
     */
    public function index(): Response
    {

        $today = Carbon::now()->addDay();

        $today->local('kr')->isFormat('h:mm');


        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
}
