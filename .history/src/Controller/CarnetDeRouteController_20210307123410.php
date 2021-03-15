<?php

namespace App\Controller;

use App\Entity\Lieux;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CarnetDeRouteController extends AbstractController
{

    public function __construct(Lieux $lieux)
    {
        $this->lieux = $lieux;
    }

    /**
     * @Route("/carnet-de-route", name="carnet_de_route")
     */
    public function index(): Response
    {



        return $this->render('carnet_de_route/index.html.twig', [
            'lieuxAll' => $lieuxAll
        ]);
    }
}
