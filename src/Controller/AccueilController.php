<?php

namespace App\Controller;

use App\Repository\ProduitRepository;
use App\Repository\CategorieRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AccueilController extends AbstractController
{
    #[Route('/', name: 'app_accueil')]
    public function index(CategorieRepository $categorieRepository): Response
    {
        $categories = $categorieRepository->findAll();
        return $this->render('accueil/index.html.twig', [
            'categories' => $categories,
            "chemin_de_fer" =>[[ "name" => "Categories", "link" => "/"]]
        ]);
    }

    #[Route('/all_produit', name: 'app_all_produit')]
    public function allProduit(ProduitRepository $produitRepository): Response
    {
        return $this->render('accueil/all_produit.html.twig', [
            'produits' => $produitRepository->findAll()
        ]);
    }
}

