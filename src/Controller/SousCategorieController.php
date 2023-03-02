<?php

namespace App\Controller;

use App\Entity\SousCategorie;
use App\Repository\CategorieRepository;
use App\Repository\SousCategorieRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class SousCategorieController extends AbstractController
{
    #[Route('/sous_categorie/{id}', name: 'app_guitares_basses')]
    public function index(SousCategorieRepository $sousCategorieRepository,CategorieRepository $categorieRepository, $id): Response
    {
        
        $sousCategories = $sousCategorieRepository->findBy([
            "categorie" => $id
        ]);

        $categories = $categorieRepository->find($id);
     
        return $this->render('sous_categorie/index.html.twig', [
            'sousCategories' => $sousCategories,
           'id' => $id,
           "chemin_de_fer" => [
            [ "name" => $categories->getNom(),"link" => "/"]
           ]
           
        ]);
    }
 
}