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
        $formulaireG1->setTelephone('0606062606');
        $formulaireG1->setMessage('Bonjour, Faites vous des réparations sur les voitures de type Lan Rover?');
        $manager->persist($formulaireG1);

        $formulaireG2 = new FormulaireG();
        $formulaireG2->setNom('Pierre');
        $formulaireG2->setPrenom('Martin');
        $formulaireG2->setEmail('pierremartin@gmailcom');
        $formulaireG2->setTelephone('0606060606');
        $formulaireG2->setMessage('Bonjour, Changez-vous les climatisations?');
        $manager->persist($formulaireG2);

        $formulaireG3 = new FormulaireG();
        $formulaireG3->setNom('Nuloir');
        $formulaireG3->setPrenom('Rose');
        $formulaireG3->setEmail('nRose@hotmail.fr');
        $formulaireG3->setTelephone('0765433545');
        $formulaireG3->setMessage('Faites-vous le remplacement des bougies?');
        $manager->persist($formulaireG3);

        $formulaireG4 = new FormulaireG();
        $formulaireG4->setNom('Boitre');
        $formulaireG4->setPrenom('Anna');
        $formulaireG4->setEmail('anna.b@gmail.com');
        $formulaireG4->setTelephone('0657453490');
        $formulaireG4->setMessage('Pouvez-vous faire le changement de ma batterie de ma Mercedes');
        $manager->persist($formulaireG4);

        $formulaireG5 = new FormulaireG();
        $formulaireG5->setNom('Joity');
        $formulaireG5->setPrenom('Eric');
        $formulaireG5->setEmail('ericj@hotmail.fr');
        $formulaireG5->setTelephone('0656789076');
        $formulaireG5->setMessage('Faites-vous l équilbrage des roues avants');
        $manager->persist($formulaireG5);

        $formulaireG6 = new FormulaireG();
        $formulaireG6->setNom('Saze');
        $formulaireG6->setPrenom('Robert');
        $formulaireG6->setEmail('s.rob@msn.fr');
        $formulaireG6->setTelephone('0654908767');
        $formulaireG6->setMessage('Je souhaiterai changer la couleur de ma voiture entièrement');
        $manager->persist($formulaireG6);

        $formulaireG7 = new FormulaireG();
        $formulaireG7->setNom('Jig');
        $formulaireG7->setPrenom('Julie');
        $formulaireG7->setEmail('jj@hotmail.com');
        $formulaireG7->setTelephone('0606060606');
        $formulaireG7->setMessage('0628907656');
        $manager->persist($formulaireG7);

        $manager->flush();
    }
}
