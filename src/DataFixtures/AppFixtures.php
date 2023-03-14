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
        $sousCategorie1->setImage("GuitaresElectriques.webp");

        $manager->persist($sousCategorie1);
        $categorie1->addSousCategorie($sousCategorie1);

        $produit1 = new Produit();
        $produit1->setNom("Harley Benton TE-52 NA Vintage Series");
        $produit1->setImage("HarleyTE-52.webp");
        $produit1->setPrix(158);
        $produit1->setDescription("Série Vintage:Corps en frêne américain:Manche Vintage visé en érable canadien caramélisé avec bande en Roseacer");
        $manager->persist($produit1);
        $sousCategorie1->addProduit($produit1);

        $produit1 = new Produit();
        $produit1->setNom("Larry Carlton S7FM TBL 2nd Gen");
        $produit1->setImage("Larry.webp");
        $produit1->setPrix(589);
        $produit1->setDescription("Corps en aulne:Table en érable flammé:Manche vissé en érable torréfié");
        $manager->persist($produit1);
        $sousCategorie1->addProduit($produit1);

        $produit1 = new Produit();
        $produit1->setNom("Squier Jazzmaster 40th Anniv LPB");
        $produit1->setImage("Squier.webp");
        $produit1->setPrix(344);
        $manager->persist($produit1);
        $sousCategorie1->addProduit($produit1);

        $produit1 = new Produit();
        $produit1->setNom("Harley Benton TE-20HH SBK Standard Series");
        $produit1->setImage("HarleyTE-20.webp");
        $produit1->setPrix(88);
        $manager->persist($produit1);
        $sousCategorie1->addProduit($produit1);

        $produit1 = new Produit();
        $produit1->setNom("Gibson Les Paul Standard 60s BB");
        $produit1->setImage("Gibson.webp");
        $produit1->setPrix(2290);
        $manager->persist($produit1);
        $sousCategorie1->addProduit($produit1);


        $sousCategorie1 = new SousCategorie();
        $sousCategorie1->setNom("Guitares Classiques");
        $sousCategorie1->setImage("GuitaresClassiques.webp");
        $manager->persist($sousCategorie1);
        $categorie1->addSousCategorie($sousCategorie1);


        $sousCategorie1 = new SousCategorie();
        $sousCategorie1->setNom("Basses Electriques");
        $sousCategorie1->setImage("BassesElectriques.webp");
        $manager->persist($sousCategorie1);
        $categorie1->addSousCategorie($sousCategorie1);


        $sousCategorie1 = new SousCategorie();
        $sousCategorie1->setNom("Guitares Acoustiques & Electro-Acoustiques");
        $sousCategorie1->setImage("GuitaresAE.webp");
        $manager->persist($sousCategorie1);
        $categorie1->addSousCategorie($sousCategorie1);


        $sousCategorie1 = new SousCategorie();
        $sousCategorie1->setNom("Basses Acoustiques / Semi-Acoustiques");
        $sousCategorie1->setImage("BassesASA.webp");
        $manager->persist($sousCategorie1);
        $categorie1->addSousCategorie($sousCategorie1);


        $sousCategorie1 = new SousCategorie();
        $sousCategorie1->setNom("Ukulélés");
        $sousCategorie1->setImage("Ukuleles.webp");
        $manager->persist($sousCategorie1);
        $categorie1->addSousCategorie($sousCategorie1);


        $sousCategorie1 = new SousCategorie();
        $sousCategorie1->setNom("Instruments Bluegrass");
        $sousCategorie1->setImage("InstrumentsBluegrass.webp");
        $manager->persist($sousCategorie1);
        $categorie1->addSousCategorie($sousCategorie1);


        $sousCategorie1 = new SousCategorie();
        $sousCategorie1->setNom("Guitares de Voyage");
        $sousCategorie1->setImage("GuitaresDeVoyage.webp");
        $manager->persist($sousCategorie1);
        $categorie1->addSousCategorie($sousCategorie1);


        $sousCategorie1 = new SousCategorie();
        $sousCategorie1->setNom("Autres Instruments à Cordes Pincées");
        $sousCategorie1->setImage("AutresInstruments.webp");
        $manager->persist($sousCategorie1);
        $categorie1->addSousCategorie($sousCategorie1);


        $sousCategorie1 = new SousCategorie();
        $sousCategorie1->setNom("Amplificateurs Guitares Electriques");
        $sousCategorie1->setImage("Amplificateurs.webp");
        $manager->persist($sousCategorie1);
        $categorie1->addSousCategorie($sousCategorie1);

        $produit1 = new Produit();
        $produit1->setNom("Boss Katana 50 MKII");
        $produit1->setImage("BossKatana.webp");
        $produit1->setPrix(279);
        $manager->persist($produit1);
        $sousCategorie1->addProduit($produit1);





        $categorie2 = new Categorie();
        $categorie2->setNom("Batteries & Percussions");
        $categorie2->setImage("BatteriesPercussions.webp");
        $manager->persist($categorie2);

        $sousCategorie2 = new SousCategorie();
        $sousCategorie2->setNom("Batteries Acoustiques");
        $sousCategorie2->setImage("BatteriesAcoustiques.webp");
        $manager->persist($sousCategorie2);
        $categorie2->addSousCategorie($sousCategorie2);




        $categorie3 = new Categorie();
        $categorie3->setNom("Pianos & Claviers");
        $categorie3->setImage("Piano.webp");
        $manager->persist($categorie3);

        $categorie4 = new Categorie();
        $categorie4->setNom("Studio & Enregistrement");
        $categorie4->setImage("Studio.webp");
        $manager->persist($categorie4);

        $categorie5 = new Categorie();
        $categorie5->setNom("Logiciels Musicaux");
        $categorie5->setImage("Logiciels.webp");
        $manager->persist($categorie5);

        $categorie6 = new Categorie();
        $categorie6->setNom("Sonorisation");
        $categorie6->setImage("Sonorisation.webp");
        $manager->persist($categorie6);


        
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
