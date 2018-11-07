<?php

namespace Internship\DataFixtures;

use Internship\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserFixtures extends Fixture
{
    private $encoder;

    public function __construct(UserPasswordEncoderInterface $encoder)
{
    $this->encoder = $encoder;
}

    public function load(ObjectManager $manager)
    {
        $user = new User();
        $user->setFirstName('Rafi');
        $user->setLastName('Stepanyan');
        $user->setAddress('22 Tzarevetz Str');
        $user->setPostCode('4001');
        $user->setCity('Plovdiv');
        $user->setCountryCode('BG');
        $user->setUsername('admin');
        $user->setEmail('rastepanyan@gmail.com');
        $user->setPassword(
            $this->encoder->encodePassword($user, '123456')
        );
        $user->setRoles(array('ROLE_ADMIN'));

        $manager->persist($user);
        $manager->flush();
    }
}
