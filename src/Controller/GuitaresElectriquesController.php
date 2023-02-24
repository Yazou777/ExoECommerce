<?php

namespace App\Controller;

use App\Repository\ProduitRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GuitaresElectriquesController extends AbstractController
{
    #[Route('/guitares_electriques/{id}', name: 'app_guitares_electriques')]
    public function index(ProduitRepository $produitRepository, $id): Response
    {
        $produits = $produitRepository->findBy([
            "sousCategorie" => $id
        ]);
        return $this->render('guitares_electriques/index.html.twig', [
            'produits' => $produits
        ]);
    }
}
