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




        var_dump(date_default_timezone_get('Asia/Seoul'));

        $text = 'ok';



        return $this->render('home/index.html.twig', [
            'text' => $text
        ]);
    }
}
