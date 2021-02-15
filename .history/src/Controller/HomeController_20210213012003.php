<?php

namespace App\Controller;

use DateTimeZone;

use Carbon\Carbon;
use Instagram;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class HomeController extends AbstractController
{

    /**
     * @Route("/", name="accueil")
     */
    public function index(Instagram::class $instagram): Response
    {

        $nowInLondonTz = Carbon::now(new DateTimeZone('Asia/Seoul'));
        $h = $nowInLondonTz->format('H');
        $i = $nowInLondonTz->format('i');

        $instagram->fetchInstagramPost();


        return $this->render('home/index.html.twig', [
            'h' => $h,
            'i' => $i
        ]);
    }
}
