<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\User;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserFixtures extends Fixture
{

    private $passwordEncoder;

     public function __construct(UserPasswordEncoderInterface $passwordEncoder)
     {
        $this->passwordEncoder = $passwordEncoder;
     }

    public function load(ObjectManager $manager)
    {


        for($i = 0; $i < 10; $i++){
            $user = new User();
            $user->setEmail($generate->email);
            $user->setRoles($generate->roles);
            $user->setPassword('hyunakim');
            $user->setIsVerified(0);
            $manager->persist($user);
        }
        $manager->flush();

    }
}