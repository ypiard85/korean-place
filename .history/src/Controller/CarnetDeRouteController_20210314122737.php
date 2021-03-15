<?php

namespace App\Controller;

use App\Entity\Lieux;
use App\Entity\Villes;
use App\Repository\LieuxRepository;
use Doctrine\Bundle\DoctrineBundle\DoctrineBundle;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CarnetDeRouteController extends AbstractController
{

    public function __construct(LieuxRepository $lieuxRepository){
        $this->lieuxrepository = $lieuxRepository;
    }

    /**
     * @Route("/carnet-de-route", name="carnet_de_route")
     */
    public function index(): Response
    {


        $lieuxAll = $this->lieuxrepository->findLieuxAll();
        $villes = $this->getDoctrine()->getRepository(Villes::class)->findAll();

        return $this->render('carnet_de_route/index.html.twig', [
            'lieuxAll' => $lieuxAll,
            'villes' => $villes
        ]);
    }
}
