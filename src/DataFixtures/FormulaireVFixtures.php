<?php

namespace App\DataFixtures;

use App\Entity\FormulaireV;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class FormulaireVFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $formulaireV1 = new FormulaireV();
        $formulaireV1->setNom('Jean');
        $formulaireV1->setPrenom('Dupont');
        $formulaireV1->setEmail('jeandupont@hotmail.fr');
        $formulaireV1->setTelephone('0606060606');
        $formulaireV1->setMessage('Bonjour, je suis intéressé par votre véhicule');
        $manager->persist($formulaireV1);

        $formulaireV2 = new FormulaireV();
        $formulaireV2->setNom('Pierre');
        $formulaireV2->setPrenom('Martin');
        $formulaireV2->setEmail('pierremartin@gmailcom');
        $formulaireV2->setTelephone('0606060606');
        $formulaireV2->setMessage('Bonjour, je suis intéressé par votre véhicule');
        $manager->persist($formulaireV2);


        $manager->flush();
    }
}
