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

        $aujourdhui = Carbon::now('Seoul/SouthKorea');

        $aujourdhui->locale('ar')->isoFormat('h:mm');

        return $this->render('home/index.html.twig', [
            'dates' => $aujourdhui
        ]);
    }
}