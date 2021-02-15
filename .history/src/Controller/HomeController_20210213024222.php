<?php
namespace App\Controller;
session_start();

use DateTimeZone;

use Carbon\Carbon;

use Instagram\Auth;
use Instagram\Instagram;
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

        $auth_config = array(
            "client_id" => '778480993021145',
            "client_secret" => '0a7269b3f35dfa90603898752570b620',
            "redirect_uri" => 'http://127.0.0.1:8000/'
        );

        $auth = new Instagram\Auth( $auth_config );

        if(!isset($_SESSION['instagram_token'])){
            if(!isset($_GET['code'])){
                $auth->authorize();
            }else{
                $access_token = $auth->getAccessToken($_GET['code']);
                $_SESSION['instagram_token'] = $access_token;
            }
        }

        $instagram = new Instagram\Instagram();
        $instagram->setAccessToken($_SESSION['instagram_token']);
        $media = $instagram->getCurrentUser()->getMedia(['count' => 3]);

        $nowInLondonTz = Carbon::now(new DateTimeZone('Asia/Seoul'));
        $h = $nowInLondonTz->format('H');
        $i = $nowInLondonTz->format('i');

        return $this->render('home/index.html.twig', [
            'h' => $h,
            'i' => $i,
            'insta' => $auth
        ]);
    }
}
