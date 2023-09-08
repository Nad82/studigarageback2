<?php

namespace App\DataFixtures;

use App\Entity\Temoignage;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class TemoignageFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $temoignage1 = new Temoignage();
        $temoignage1->setNom('Jean');
        $temoignage1->setPrenom('Dupont');
        $temoignage1->setCommentaires('Très bon garage, je recommande !');
        $temoignage1->setNotes('5');
        $manager->persist($temoignage1);

        $temoignage2 = new Temoignage();
        $temoignage2->setNom('Pierre');
        $temoignage2->setPrenom('Martin');
        $temoignage2->setCommentaires('Ma voiture a été réparée en 2 jours, je suis très satisfait !');
        $temoignage2->setNotes('4');
        $manager->persist($temoignage2);

        $temoignage3 = new Temoignage();
        $temoignage3->setNom('Paul');
        $temoignage3->setPrenom('Marie');
        $temoignage3->setCommentaires('Je suis très contente de mon achat !');
        $temoignage3->setNotes('5');
        $manager->persist($temoignage3);

        $temoignage4 = new Temoignage();
        $temoignage4->setNom('Jacques');
        $temoignage4->setPrenom('François');
        $temoignage4->setCommentaires('délai très long pour récupérer ma voiture');
        $temoignage4->setNotes('2');
        $manager->persist($temoignage4);

        $temoignage5 = new Temoignage();
        $temoignage5->setNom('Verty');
        $temoignage5->setPrenom('Samantha');
        $temoignage5->setCommentaires('Super garage');
        $temoignage5->setNotes('5');
        $manager->persist($temoignage5);

        $temoignage6 = new Temoignage();
        $temoignage6->setNom('Grant');
        $temoignage6->setPrenom('Francois');
        $temoignage6->setCommentaires('Ma voiture a été prise en charge correctement');
        $temoignage6->setNotes('4');
        $manager->persist($temoignage6);

        $temoignage7 = new Temoignage();
        $temoignage7->setNom('Souillet');
        $temoignage7->setPrenom('Marie');
        $temoignage7->setCommentaires('La réparation de ma voiture a été longue');
        $temoignage7->setNotes('2');
        $manager->persist($temoignage7);

        $temoignage8 = new Temoignage();
        $temoignage8->setNom('Houille');
        $temoignage8->setPrenom('Gérard');
        $temoignage8->setCommentaires('Le meilleur garage');
        $temoignage8->setNotes('5');
        $manager->persist($temoignage8);

        $temoignage9 = new Temoignage();
        $temoignage9->setNom('Fresio');
        $temoignage9->setPrenom('Angelo');
        $temoignage9->setCommentaires('Satisfait');
        $temoignage9->setNotes('3');
        $manager->persist($temoignage9);



        $manager->flush();
    }
}
