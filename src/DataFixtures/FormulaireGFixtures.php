<?php

namespace App\DataFixtures;

use App\Entity\FormulaireG;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class FormulaireGFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $formulaireG1 = new FormulaireG();
        $formulaireG1->setNom('Jean');
        $formulaireG1->setPrenom('Dupont');
        $formulaireG1->setEmail('dupontjean@gmail.fr');
        $formulaireG1->setTelephone('0606060606');
        $formulaireG1->setMessage('Bonjour, Faites vous des réparations sur les voitures de type Lan Rover?');
        $manager->persist($formulaireG1);

        $formulaireG2 = new FormulaireG();
        $formulaireG2->setNom('Pierre');
        $formulaireG2->setPrenom('Martin');
        $formulaireG2->setEmail('pierremartin@gmailcom');
        $formulaireG2->setTelephone('0606060606');
        $formulaireG2->setMessage('Bonjour, Changez-vous les climatisations?');
        $manager->persist($formulaireG2);
;

        $manager->flush();
    }
}
