<?php

namespace App\Controller;


use App\Repository\LieuxRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CarnetDeRouteController extends AbstractController
{

    public function __construct(LieuxRepository $lieux)
    {
        $this->lieux = $lieux;
    }

    /**
     * @Route("/carnet-de-route", name="carnet_de_route")
     */
    public function index(): Response
    {

        $lieuxAll = $this->lieux->findAll();

        dd($lieuxAll);

        return $this->render('carnet_de_route/index.html.twig', [
            'lieuxAll' => $lieuxAll
        ]);
    }
}
