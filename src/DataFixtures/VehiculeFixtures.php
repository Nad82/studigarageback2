<?php

namespace App\DataFixtures;

use App\Entity\Vehicule;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class VehiculeFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {   
        $vehicule1 = new Vehicule();
        $vehicule1->setPrix('3500');
        $vehicule1->setKilometrage('250000');
        $vehicule1->setAnnee('2005');
        $vehicule1->setEquipements('Climatisation, airbag, vitres électriques');
        $manager->persist($vehicule1);

        

        $vehicule2 = new Vehicule();
        $vehicule2->setPrix('5000');
        $vehicule2->setKilometrage('150000');
        $vehicule2->setAnnee('2010');
        $vehicule2->setEquipements('Climatisation, airbag, vitres électriques');
        $manager->persist($vehicule2);

        $vehicule3 = new Vehicule();
        $vehicule3->setPrix('8000');
        $vehicule3->setKilometrage('50000');
        $vehicule3->setAnnee('2015');
        $vehicule3->setEquipements('Climatisation, airbag, vitres électriques');
        $manager->persist($vehicule3);

        $vehicule4 = new Vehicule();
        $vehicule4->setPrix('10000');
        $vehicule4->setKilometrage('10000');
        $vehicule4->setAnnee('2020');
        $vehicule4->setEquipements('Climatisation, airbag, vitres électriques');
        $manager->persist($vehicule4);

        $vehicule5 = new Vehicule();
        $vehicule5->setPrix('15000');
        $vehicule5->setKilometrage('10000');
        $vehicule5->setAnnee('2020');
        $vehicule5->setEquipements('Climatisation, airbag, vitres électriques');
        $manager->persist($vehicule5);

        $manager->flush();
    }
}
