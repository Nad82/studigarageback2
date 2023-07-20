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

        $manager->flush();
    }
}
