<?php

namespace App\Controller;

use App\Repository\ProduitRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProduitController extends AbstractController
{
    #[Route('/produit/{id}', name: 'app_guitares_electriques')]
    public function index(ProduitRepository $produitRepository, $id): Response
    {
    $produits = $produitRepository->findBy([
        "sousCategorie" => $id
    ]);
    return $this->render('produit/index.html.twig', [
        'produits' => $produits
    ]);
}



        #[Route('/detail_produit/{id}', name: 'app_detail_guitares_electriques')]
    public function detail(ProduitRepository $produitRepository, $id): Response
    {
        $produits = $produitRepository->findBy([
            "id" => $id
        ]);
        return $this->render('produit/detail.html.twig', [
            'produits' => $produits
        ]);
    }
}
