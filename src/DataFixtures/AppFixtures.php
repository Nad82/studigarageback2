<?php

namespace App\DataFixtures;

use App\Entity\administrateur;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $administrateur = new administrateur();
        $administrateur->setEmail('VParrotGarage@hotmail.com');
        $administrateur->setPassword('Maserati');
        $manager->persist($administrateur);

        $manager->flush();
    }
}
