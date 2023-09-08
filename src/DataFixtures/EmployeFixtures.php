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

        $employe2 = new Employe();
        $employe2->setEmail('accumsan.interdum@icloud.org');
        $employe2->setPassword($this->passwordEncoder->hashPassword($employe2, 'accumsan.interdum'));
        $role = ['ROLE_EMPLOYE'];
        $employe2->setRoles($role);
        $manager->persist($employe2);

        $employe3 = new Employe();
        $employe3->setEmail('depotoir90@gmail.fr');
        $employe3->setPassword($this->passwordEncoder->hashPassword($employe3, 'depotoir90'));
        $role = ['ROLE_EMPLOYE'];
        $employe3->setRoles($role);
        $manager->persist($employe3);

        $employe4 = new Employe();
        $employe4->setEmail('velit.justo@icloud.com');
        $employe4->setPassword($this->passwordEncoder->hashPassword($employe4, 'velit.justo'));
        $role = ['ROLE_EMPLOYE'];
        $employe4->setRoles($role);
        $manager->persist($employe4);

        $employe5 = new Employe();
        $employe5->setEmail('proin.ultrices.duis@icloud.ca');
        $employe5->setPassword($this->passwordEncoder->hashPassword($employe5, 'proin.ultrices.duis'));
        $role = ['ROLE_EMPLOYE'];
        $employe5->setRoles($role);
        $manager->persist($employe5);

        $employe6 = new Employe();
        $employe6->setEmail('vitae.orci@protonmail.couk');
        $employe6->setPassword($this->passwordEncoder->hashPassword($employe6, 'vitae.orci'));
        $role = ['ROLE_EMPLOYE'];
        $employe6->setRoles($role);
        $manager->persist($employe6);

        $employe7 = new Employe();
        $employe7->setEmail('class.aptent@protonmail.org');
        $employe7->setPassword($this->passwordEncoder->hashPassword($employe7, 'class.aptent'));
        $role = ['ROLE_EMPLOYE'];
        $employe7->setRoles($role);
        $manager->persist($employe7);

        $manager->flush();
    }
}
