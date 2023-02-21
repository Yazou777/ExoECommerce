<?php

namespace App\DataFixtures;

use App\Entity\Categorie;
use App\Entity\SousCategorie;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);

        $categorie1 = new Categorie();

        $categorie1->setNom("Alimentaire");

        $manager->persist($categorie1);

        $sousCategorie1 = new SousCategorie();

        $sousCategorie1->setNom("Frais");

        $manager->persist($sousCategorie1);

        $sousCategorie2 = new SousCategorie();

        $sousCategorie2->setNom("Surgelé");

        $manager->persist($sousCategorie2);

        // Pour associer vos entités
        $categorie1->addSousCategorie($sousCategorie1);
        $categorie1->addSousCategorie($sousCategorie2);
        $manager->flush();
    }
}
