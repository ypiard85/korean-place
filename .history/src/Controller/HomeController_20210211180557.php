<?php

namespace App\Controller;

use DateTimeZone;

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

        $nowInLondonTz = Carbon::now(new DateTimeZone('Europe/London'));


        var_dump($nowInLondonTz);

        $text = 'ok';



        return $this->render('home/index.html.twig', [
            'text' => $text
        ]);
    }
}
