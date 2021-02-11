<?php

namespace App\Controller;

use Carbon\Carbon;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class HomeController extends AbstractController
{

    /**
     * @Route("/", name="accueil")
     */
    public function index(): Response
    {

        $aujourdhui = Carbon::now();

        $aujourdhui->locale('kr')->isoFormat('h:mm');

        return $this->render('home/index.html.twig', [
            'controller_name' => 'App\Controller'
        ]);
    }
}