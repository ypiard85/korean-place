<?php

namespace App\Controller;

use DateTimeZone;

use Carbon\Carbon;
use Services\Instagram\Instagram;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{

    /**
     * @Route("/", name="accueil")
     */
    public function index(Instagram $instagram): Response
    {

        $nowInLondonTz = Carbon::now(new DateTimeZone('Asia/Seoul'));
        $h = $nowInLondonTz->format('H');
        $i = $nowInLondonTz->format('i');



       $getITem = new Instagram;



        var_dump($getITem);
        return $this->render('home/index.html.twig', [
            'h' => $h,
            'i' => $i
        ]);
    }
}
