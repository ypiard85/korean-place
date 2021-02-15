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

        $nowInLondonTz = Carbon::now(new DateTimeZone('Asia/Seoul'));
        $h = $nowInLondonTz->format('H');
        $i = $nowInLondonTz->format('i');

        return $this->render('home/index.html.twig', [
            'h' => $h,
            'i' => $i,

        ]);
    }
}
