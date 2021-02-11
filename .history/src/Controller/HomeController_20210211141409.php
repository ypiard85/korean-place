<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Carbon\Carbon;


class HomeController extends AbstractController
{

    public function __construct(Carbon $carbone)
    {
        return $this->carbon = $carbone;
    }

    /**
     * @Route("/", name="accueil")
     */
    public function index(): Response
    {

        $tomorrow = Carbon::now()->toDateTimeString();

        $tomorrow->locale('fr')->isoFormat('dddd, MMMM Do YYYY, h:mm');

        return $this->render('home/index.html.twig', [
            'tomorrow' => $tomorrow
        ]);
    }
}
