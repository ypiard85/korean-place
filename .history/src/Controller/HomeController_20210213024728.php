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

        $instagram = InstagramBasicDisplay([
            "client_id" => '778480993021145',
            "client_secret" => '0a7269b3f35dfa90603898752570b620',
            "redirect_uri" => 'http://127.0.0.1:8000/'
        ]);

        echo "<a href='{$instagram->getLoginUrl()}'>Login with Instagram</a>";

        $nowInLondonTz = Carbon::now(new DateTimeZone('Asia/Seoul'));
        $h = $nowInLondonTz->format('H');
        $i = $nowInLondonTz->format('i');

        return $this->render('home/index.html.twig', [
            'h' => $h,
            'i' => $i,
            'media' => $media
        ]);
    }
}
