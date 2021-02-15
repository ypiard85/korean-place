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

        $instagram = new InstagramBasicDisplay('84f056df7717f76c74e4506e1b059979');

        $instagram->getLoginUrl(
            array(
                'user_profile',
                'user_media'
            ),
            'state'
        );

        $media = $instagram->getUserMedia();

$moreMedia = $instagram->pagination($media);

var_dump($moreMedia);


        $nowInLondonTz = Carbon::now(new DateTimeZone('Asia/Seoul'));
        $h = $nowInLondonTz->format('H');
        $i = $nowInLondonTz->format('i');

        return $this->render('home/index.html.twig', [
            'h' => $h,
            'i' => $i,

        ]);
    }
}
