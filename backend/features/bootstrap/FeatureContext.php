<?php

use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Lexik\Bundle\JWTAuthenticationBundle\Services\JWTManagerInterface;

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context, SnippetAcceptingContext
{

    /**
     * @var JWTManagerInterface
     */
    private $jwtManager;

    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct(JWTManagerInterface $jwtManager)
    {
        $this->jwtManager = $jwtManager;
    }

    // /**
    //  * @BeforeScenario
    //  * @login
    //  *
    //  * @see https://symfony.com/doc/current/security/entity_provider.html#creating-your-first-user
    //  */
    // public function login(BeforeScenarioScope $scope)
    // {
    //     $user = new User();
    //     $user->setUsername('admin');
    //     $user->setPassword('ATestPassword');
    //     $user->setEmail('test@test.com');
    //     $user->setIsActive(true);

    //     $this->manager->persist($user);
    //     $this->manager->flush();

    //     $token = $this->jwtManager->create($user);

    //     $this->restContext = $scope->getEnvironment()->getContext(RestContext::class);
    //     $this->restContext->iAddHeaderEqualTo('Authorization', "Bearer $token");
    // }

    // /**
    //  * @AfterScenario
    //  * @logout
    //  */
    // public function logout()
    // {
    //     $this->restContext->iAddHeaderEqualTo('Authorization', '');
    // }

    // /**
    //  * @Then I log in with email :arg1
    //  */
    // public function iLogInWithEmail($arg1)
    // {
    //     $token = $this->jwtManager->create($user);

    //     $this->restContext = $scope->getEnvironment()->getContext(RestContext::class);
    //     $this->restContext->iAddHeaderEqualTo('Authorization', "Bearer $token");
    // }

}
