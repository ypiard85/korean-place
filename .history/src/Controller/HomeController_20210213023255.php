<?php

namespace App\Controller;

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

       $auth = new Instagram($auth_config);


        //$auth->authorize();

        var_dump($auth);

        $nowInLondonTz = Carbon::now(new DateTimeZone('Asia/Seoul'));
        $h = $nowInLondonTz->format('H');
        $i = $nowInLondonTz->format('i');

        return $this->render('home/index.html.twig', [
            'h' => $h,
            'i' => $i
        ]);
    }
}
