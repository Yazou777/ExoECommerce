<?php

namespace App\Controller;

use App\Entity\SousCategorie;
use App\Repository\SousCategorieRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class GuitaresBassesController extends AbstractController
{
    #[Route('/guitares_basses/{id}', name: 'app_guitares_basses')]
    public function index(SousCategorieRepository $sousCategorieRepository, $id): Response
    {
        
        $sousCategories = $sousCategorieRepository->findBy([
            "categorie" => $id
        ]);
        return $this->render('guitares_basses/index.html.twig', [
            'sousCategories' => $sousCategories,
           'id' => $id
           
        ]);
    }
}