<?php

namespace App\Controller;

use DateTimeZone;

use Carbon\Carbon;
use Services\InstagramApi\InstagramApi;

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

        $insta = new InstagramApi();

        $insta->getPost();

        $nowInLondonTz = Carbon::now(new DateTimeZone('Asia/Seoul'));
        $h = $nowInLondonTz->format('H');
        $i = $nowInLondonTz->format('i');


        return $this->render('home/index.html.twig', [
            'h' => $h,
            'i' => $i
        ]);
    }
}
