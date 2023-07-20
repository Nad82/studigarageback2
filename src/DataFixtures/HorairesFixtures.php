<?php

namespace App\DataFixtures;

use App\Entity\Horaires;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class HorairesFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $horaires = new Horaires();
        $horaires->setLundi('8h-12h 14h-18h');
        $horaires->setMardi('8h-12h 14h-18h');
        $horaires->setMercredi('8h-12h 14h-18h');
        $horaires->setJeudi('8h-12h 14h-18h');
        $horaires->setVendredi('8h-12h 14h-18h');
        $horaires->setSamedi('8h-12h 14h-18h');
        $horaires->setDimanche('Fermé');
        $manager->persist($horaires);

        $manager->flush();
    }
}
