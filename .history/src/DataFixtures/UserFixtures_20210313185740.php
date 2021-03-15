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
            $password = $this->passwordEncoder->encodePassword($user, 'hyunakim');
            $user->setEmail($generate->email);
            $user->setPassword($password);
            $user->setIsVerified(false);
            $user->setPseudo($generate->pseudo);
            $manager->persist($user);
        }
        $manager->flush();

    }
}
