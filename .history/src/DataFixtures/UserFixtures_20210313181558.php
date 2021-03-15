<?php

namespace App\DataFixtures;

use Faker;
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

        $generate = Faker\Factory::create();

        for($i = 0; $i < 10; $i++){
            $user = new User();
            $user->setEmail($generate->email);
            $user->setPassword('hyunakim');
            $user->setIsVerified(0);
            $manager->persist($user);
        }
        $manager->flush();

    }
}
