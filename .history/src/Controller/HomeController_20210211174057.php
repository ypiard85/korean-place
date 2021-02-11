<?php

namespace App\Controller;

use Carbon\Carbon;
use Carbon\Factory;
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

        $mutable = new Carbon('Asia/Seoul');

       $test = $mutable->format('H:m');

        var_dump($test);

        $text = 'ok';



        return $this->render('home/index.html.twig', [
            'text' => $text
        ]);
    }
}