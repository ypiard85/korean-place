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
            "appSecret" => '0a7269b3f35dfa90603898752570b620',
            "redirectUri" => 'http://127.0.0.1:8000/'
        ]);

        echo "<a href='{$instagram->getLoginUrl()}'>Login with Instagram</a>";

            // Get the OAuth callback code
    $code = $_GET['code'];

    // Get the short lived access token (valid for 1 hour)
    $token = $instagram->getOAuthToken($code, true);

    // Exchange this token for a long lived token (valid for 60 days)
    $token = $instagram->getLongLivedToken($token, true);

    echo 'Your token is: ' . $token;

        $nowInLondonTz = Carbon::now(new DateTimeZone('Asia/Seoul'));
        $h = $nowInLondonTz->format('H');
        $i = $nowInLondonTz->format('i');

        return $this->render('home/index.html.twig', [
            'h' => $h,
            'i' => $i,

        ]);
    }
}
