<?php

namespace App\DataFixtures;

use App\DataFixtures\Traits\TimestampableTrait;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\PropertyAccess\PropertyAccess;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserFixtures extends Fixture implements OrderedFixtureInterface
{

    use TimestampableTrait;

    const ADMIN_USER_REFERENCE = 'admin-user';

    private $encoder;

    public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->encoder = $encoder;
    }

    public function getOrder()
    {
        return 1;
    }

    public function load(ObjectManager $manager)
    {
        $admin = $this->make(new User(), [
            "email" => "admin@admin.com",
            "roles" => ['ROLE_USER'],
        ]);
        $manager->persist($admin);

        for ($i = 0; $i < 20; $i++) {
            $user = $this->make(new User(), [
                "email" => "user$i@admin.com",
                "roles" => ['ROLE_USER'],
            ]);
            $manager->persist($user);
        }

        $manager->flush();
        $this->addReference(self::ADMIN_USER_REFERENCE, $admin);
    }

    public function make(User $user, $data)
    {
        $accessor = PropertyAccess::createPropertyAccessorBuilder()
            ->enableExceptionOnInvalidIndex()
            ->getPropertyAccessor();

        $email = $accessor->getValue($data, '[email]');
        $username = $email;
        $roles = $accessor->getValue($data, '[roles]');
        $password = 'password';

        $user->setEmail($email);
        $user->setUsername($username);
        $user->setRoles($roles);
        $user->setIsActive(true);
        $user->setPassword($this->getPassword($user, $password));

        $this->timestamp($user);

        return $user;
    }

    private function getPassword(User $user, $plainPassword): string
    {
        return $this->encoder->encodePassword($user, $plainPassword);
    }
}
