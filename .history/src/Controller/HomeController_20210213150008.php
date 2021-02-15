<?php
namespace App\Controller;
session_start();

use DateTimeZone;

use Carbon\Carbon;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{

    private $client;

    public function __construct(HttpClientInterface $client){
        $this->client = $client;
    }

    /**
     * @Route("/", name="accueil")
     */
    public function index(): Response
    {

        $reponse = $this->client->request(
            'GET', "https://graph.facebook.com/v9.0/oembed_post?url=yoann_piard/?hl=fr&access_token=778480993021145|84f056df7717f76c74e4506e1b059979"
        );

        $nowInLondonTz = Carbon::now(new DateTimeZone('Asia/Seoul'));
        $h = $nowInLondonTz->format('H');
        $i = $nowInLondonTz->format('i');

        return $this->render('home/index.html.twig', [
            'h' => $h,
            'i' => $i,

        ]);
    }
}
