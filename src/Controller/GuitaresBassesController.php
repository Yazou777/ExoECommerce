<?php

namespace App\Controller;

use App\Entity\SousCategorie;
use App\Repository\SousCategorieRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GuitaresBassesController extends AbstractController
{
    #[Route('/guitares_basses', name: 'app_guitares_basses')]
    public function index(SousCategorieRepository $sousCategorieRepository): Response
    {
        return $this->render('guitares_basses/index.html.twig', [
            'controller_name' => 'GuitaresBassesController',
             'sousCategories' => $sousCategorieRepository->findAll()
        ]);
    }
}
