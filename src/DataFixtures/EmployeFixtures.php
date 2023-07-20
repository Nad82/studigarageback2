<?php

namespace App\DataFixtures;

use App\Entity\Employe;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class EmployeFixtures extends Fixture
{
    private $passwordEncoder;
    
    public function __construct(UserPasswordHasherInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }

    public function load(ObjectManager $manager)
    {
        $employe1 = new Employe();
        $employe1->setEmail('vehicule77start@gmail.com');
        $employe1->setPassword($this->passwordEncoder->hashPassword($employe1, 'vehicule77start'));
        $role = ['ROLE_EMPLOYE'];
        $employe1->setRoles($role);
        $manager->persist($employe1);
        
        $manager->flush();
    }
}
