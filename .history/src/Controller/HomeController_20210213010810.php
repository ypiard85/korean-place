<?php

namespace App\Controller;

use DateTimeZone;

use Carbon\Carbon;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class HomeController extends AbstractController
{

    private $client;

    public function __construct(HttpClientInterface $client){
        $this->client = $client;
    }

    public function fetchInstagramPost(): void {
        $response = $this->client->request(
            'GET',
            'https://graph.facebook.com/v9.0/instagram_oembed?url=https://www.instagram.com/p/fA9uwTtkSN/&access_token=778480993021145|84f056df7717f76c74e4506e1b059979'
        );


    }


    /**
     * @Route("/", name="accueil")
     */
    public function index(): Response
    {

        $nowInLondonTz = Carbon::now(new DateTimeZone('Asia/Seoul'));
        $h = $nowInLondonTz->format('H');
        $i = $nowInLondonTz->format('i');

        fetchInstagramPost();

        return $this->render('home/index.html.twig', [
            'h' => $h,
            'i' => $i
        ]);
    }
}
