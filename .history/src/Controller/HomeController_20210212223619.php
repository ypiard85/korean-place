<?php

namespace App\Controller;

use DateTimeZone;

use Carbon\Carbon;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpClient\HttpClient;

class HomeController extends AbstractController
{

    private $client;

    public function __construct(HttpClient $client){
        $this->client = $client;
    }


    /**
     * @Route("/", name="accueil")
     */
    public function index(): Response
    {

        $nowInLondonTz = Carbon::now(new DateTimeZone('Asia/Seoul'));
        $h = $nowInLondonTz->format('H');
        $i = $nowInLondonTz->format('i');


        return $this->render('home/index.html.twig', [
            'h' => $h,
            'i' => $i
        ]);
    }
}
