<?php

namespace App\DataFixtures;

use DateTime;
use App\Entity\Produit;
use App\Entity\Commande;
use App\Entity\Contient;
use App\Entity\Categorie;
use App\Entity\Utilisateur;
use App\Entity\SousCategorie;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);

        $categorie1 = new Categorie();
        $categorie1->setNom("Guitare & Basses");
        $categorie1->setImage("guitares&basses.webp");
        $manager->persist($categorie1);




        $sousCategorie1 = new SousCategorie();
        $sousCategorie1->setNom("Guitares Electriques");
        $manager->persist($sousCategorie1);
        $categorie1->addSousCategorie($sousCategorie1);

        $produit1 = new Produit();
        $produit1->setNom("Larry Carlton S7FM TBL 2nd Gen");
        $manager->persist($produit1);
        $sousCategorie1->addProduit($produit1);




        $sousCategorie2 = new SousCategorie();
        $sousCategorie2->setNom("Guitares Classiques");
        $manager->persist($sousCategorie2);
        $categorie1->addSousCategorie($sousCategorie2);




        $sousCategorie3 = new SousCategorie();
        $sousCategorie3->setNom("Basse Electriques");
        $manager->persist($sousCategorie3);
        $categorie1->addSousCategorie($sousCategorie3);



        
        $utilisateur1 = new Utilisateur();
        $utilisateur1->setEmail("test@mail.fr");
        $utilisateur1->setPassword("1234");
       // $utilisateur1->setRoles(["ROLE_USER"]);
        $manager->persist($utilisateur1);

        $commande1= new Commande();
        $commande1->setDateCommande(\DateTimeImmutable::createFromMutable(new DateTime("2023-02-22")));
        $commande1->setTotal("1");
        $manager->persist($commande1);
        $utilisateur1->addCommande($commande1);





        $contient1 = new Contient();
        $contient1->setQuantite(1);
        $manager->persist($contient1);
        $commande1->addContient($contient1);
        $produit1->addContient($contient1);

        $manager->flush();
    }
}
