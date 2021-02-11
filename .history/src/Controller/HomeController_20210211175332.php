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

        $mutable = new Carbon(12, 0, 0, 'Asie/Seoul');


        var_dump($mutable);

        $text = 'ok';



        return $this->render('home/index.html.twig', [
            'text' => $text
        ]);
    }
}
