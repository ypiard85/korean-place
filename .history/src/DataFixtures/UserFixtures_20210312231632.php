<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoder;

class UserFixtures extends Fixture
{

    private $passwordEncoder;

     public function __construct(UserPasswordEncoderInterface $passwordEncoder)
     {
        $this->passwordEncoder = $passwordEncoder;
     }

    public function load(ObjectManager $manager)
    {


        $user = new User();
        $user->setEmail('yoann.piard@gmail.com');
        $user->setRoles(['invite']);
        $user->setPassword($this->passwordEncoder->encodePassword( $user, 'hyunakim85'));
        $manager->persist($user);
        $manager->flush();
    }
}
