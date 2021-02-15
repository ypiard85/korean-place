<?php
namespace App\Controller;
session_start();

use DateTimeZone;

use Carbon\Carbon;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use EspressoDev\InstagramBasicDisplay\InstagramBasicDisplay;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{

    /**
     * @Route("/", name="accueil")
     */
    public function index(): Response
    {

        $instagram = new InstagramBasicDisplay([
            "appId" => '778480993021145',
            "appSecret" => '84f056df7717f76c74e4506e1b059979',
            "redirectUri" => 'http://127.0.0.1:8000/'
        ]);

        echo "<a href='{$instagram->getLoginUrl()}'>Login with Instagram</a>";


        $nowInLondonTz = Carbon::now(new DateTimeZone('Asia/Seoul'));
        $h = $nowInLondonTz->format('H');
        $i = $nowInLondonTz->format('i');

        return $this->render('home/index.html.twig', [
            'h' => $h,
            'i' => $i,

        ]);
    }
}
