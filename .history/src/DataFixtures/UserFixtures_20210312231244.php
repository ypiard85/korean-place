<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoder;

class UserFixtures extends Fixture
{

    private $passwordEncode;

    public function __construct(UserPasswordEncoder $passwordEncode)
    {
            $this->passwordEncode = $passwordEncode;
    }

    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);

        $user = new User();
        $user->setEmail('yoann.piard@gmail.com')
            ->setRoles('invite')
        $user->setPassword($this->passwordEncoder->encodePassword( $user, 'hyunakim85'));
        $manager->persist($user)
        $manager->flush();
    }
}
