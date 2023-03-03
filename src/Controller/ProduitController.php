<?php

namespace App\Controller;

use App\Entity\Produit;
use App\Entity\SousCategorie;
use App\Repository\ProduitRepository;
use App\Repository\SousCategorieRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ProduitController extends AbstractController
{
//     #[Route('/produit/{id}', name: 'app_guitares_electriques')]
//     public function index(ProduitRepository $produitRepository, SousCategorieRepository $sousCategorieRepository, $id): Response
//     {
//     $produits = $produitRepository->findBy([
//         "sousCategorie" => $id
//     ]);


//     $sousCategorie = $sousCategorieRepository->find($id);

//     return $this->render('produit/index.html.twig', [
//         'produits' => $produits,
//         "chemin_de_fer" => [
//             ["name" => $sousCategorie->getCategorie()->getNom(), "link" => "/sous_categorie/".$sousCategorie->getCategorie()->getId()],
//             ["name" => $sousCategorie->getNom(), "link" => " "],
//         ]
//     ]);
// }



//         #[Route('/detail_produit/{id}', name: 'app_detail_guitares_electriques')]
//     public function detail(ProduitRepository $produitRepository, $id): Response
//     {
//         $produits = $produitRepository->findBy([
//             "id" => $id
//         ]);

//         $produit = $produitRepository->find($id);

//         return $this->render('produit/detail.html.twig', [
//             'produits' => $produits,
//             "chemin_de_fer" => [
//                 ["name" => $produit->getSousCategorie()->getNom(), "link" => "/produit/".$produit->getSousCategorie()->getId()],
//                 ["name" => $produit->getNom(), "link" => " "],
//             ]
//         ]);
//     }



    #[Route('/produit/{SousCategorie}', name: 'app_guitares_electriques')]
    public function index(SousCategorie $SousCategorie,ProduitRepository $produitRepository, SousCategorieRepository $sousCategorieRepository): Response
    {

    return $this->render('produit/index.html.twig', [
        "SousCategorie" => $SousCategorie,
        "chemin_de_fer" => [
            ["name" => "Accueil", "link" => "/"],
            ["name" => $SousCategorie->getCategorie()->getNom(), "link" => "/sous_categorie/".$SousCategorie->getCategorie()->getId()],
            ["name" => $SousCategorie->getNom(), "link" => " "],
        ]
    ]);
}



        #[Route('/detail_produit/{id}', name: 'app_detail_guitares_electriques')]
    public function detail(Produit $Produit,SousCategorie $SousCategorie, ProduitRepository $produitRepository): Response
    {
     
        return $this->render('produit/detail.html.twig', [
            'Produit' => $Produit,
            "SousCategorie" => $SousCategorie,
            "chemin_de_fer" => [
                ["name" => "Accueil", "link" => "/"],
                ["name" => $SousCategorie->getCategorie()->getNom(), "link" => "/sous_categorie/".$SousCategorie->getCategorie()->getId()],
                ["name" => $Produit->getSousCategorie()->getNom(), "link" => "/produit/".$Produit->getSousCategorie()->getId()],
                ["name" => $Produit->getNom(), "link" => " "],
            ]
        ]);
    }
}