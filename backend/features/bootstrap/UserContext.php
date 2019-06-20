<?php

use App\DataFixtures\UserFixtures;
use App\Entity\User;
use Behatch\Context\RestContext;
use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Behat\Hook\Scope\BeforeScenarioScope;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\ORM\EntityManager;
use Lexik\Bundle\JWTAuthenticationBundle\Services\JWTManagerInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

/**
 * Generate user fixture data
 */
class UserContext implements Context, SnippetAcceptingContext
{
    /**
     * @var EntityManager
     */
    private $manager;

    /**
     * @var JWTManagerInterface
     */
    private $jwtManager;

    /**
     * @var UserPasswordEncoderInterface
     */
    private $encoder;

    /**
     * @var UserFixtures
     */
    private $fixtures;

    public function __construct(ManagerRegistry $doctrine, JWTManagerInterface $jwtManager, UserPasswordEncoderInterface $encoder)
    {
        $this->manager = $doctrine->getManager();
        $this->jwtManager = $jwtManager;
        $this->encoder = $encoder;
        $this->fixtures = new UserFixtures($encoder);
    }

    /**
     * @BeforeScenario
     */
    public function setRestContext(BeforeScenarioScope $scope)
    {
        $this->restContext = $scope->getEnvironment()->getContext(RestContext::class);
    }

    /**
     * @Given There is user with email :arg1 and roles :arg2
     */
    public function thereIsUserWithEmailAndRoles($arg1, $arg2)
    {
        $user = $this->fixtures->make(new User, [
            "email" => $arg1,
            "roles" => explode(",", $arg2),
        ]);

        $this->manager->persist($user);
        $this->manager->flush();
    }

    /**
     * @Then I log in with email :arg1
     */
    public function iLogInWithEmail($arg1)
    {
        $user = $this->manager->getRepository("App:User")->findOneBy(["email" => $arg1]);
        $token = $this->jwtManager->create($user);

        $this->restContext->iAddHeaderEqualTo('Authorization', "Bearer $token");
    }

}
