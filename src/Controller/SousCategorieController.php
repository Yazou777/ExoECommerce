<?php

namespace App\Controller;

use App\Entity\Categorie;
use App\Entity\SousCategorie;
use App\Repository\CategorieRepository;
use App\Repository\SousCategorieRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class SousCategorieController extends AbstractController
{
    // #[Route('/sous_categorie/{sousCategorie}', name: 'app_guitares_basses')]
    // public function index(SousCategorie $sousCategorie,CategorieRepository $categorieRepository): Response
    // {
        
    //     // $sousCategories = $sousCategorieRepository->findBy([
    //     //     "categorie" => $id
    //     // ]);

    //     // $categories = $categorieRepository->find($id);
     
    //     return $this->render('sous_categorie/index.html.twig', [
    //         "sousCategorie" => $sousCategorie,
    //     //    'id' => $id,
    //     //    "chemin_de_fer" => [
    //     //     [ "name" => $categories->getNom(),"link" => "/"]
    //     //    ]
           
    //      ]);
    // }

       #[Route('/sous_categorie/{Categorie}', name: 'app_guitares_basses')]
    public function index(Categorie $Categorie,CategorieRepository $categorieRepository,SousCategorieRepository $sousCategorieRepository): Response
    {


        return $this->render('sous_categorie/index.html.twig', [
            "Categorie" => $Categorie,
            "chemin_de_fer" => [
            [ "name" => "Accueil", "link" => "/"],
            [ "name" => $Categorie->getNom(),"link" => ""],
           ]
         ]);
    }

}