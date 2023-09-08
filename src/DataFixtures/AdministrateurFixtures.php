<?php

namespace App\DataFixtures;

use App\Entity\Administrateur;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AdministrateurFixtures extends Fixture
{
    private $passwordEncoder;

    public function __construct(UserPasswordHasherInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder; 
    }

    public function load(ObjectManager $manager): void
    {
        $administrateur = new Administrateur();
        $administrateur->setEmail('V.Parrotgarage@gmail.com');
        $administrateur->setPassword($this->passwordEncoder->hashPassword($administrateur, 'V.Parrotgarage'));
        $role = ['ROLE_ADMIN'];
        $administrateur->setRoles($role);
        $manager->persist($administrateur);

        $manager->flush();
    }
}
