<?php

namespace App\Controller;

use App\Entity\Lieux;
use Doctrine\Bundle\DoctrineBundle\DoctrineBundle;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CarnetDeRouteController extends AbstractController
{
    /**
     * @Route("/carnet-de-route", name="carnet_de_route")
     */
    public function index(): Response
    {

        $lieuxAll = $this->getDoctrine()->getRepository(Lieux::class)->findAll();

        return $this->render('carnet_de_route/index.html.twig', [
            'lieuxAll' => $lieuxAll
        ]);
    }
}
