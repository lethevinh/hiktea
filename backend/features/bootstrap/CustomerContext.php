<?php

use App\DataFixtures\CustomerFixtures;
use App\Entity\Customer;
use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\ORM\EntityManager;

class CustomerContext implements Context, SnippetAcceptingContext
{
    /**
     * @var EntityManager
     */
    private $manager;

    /**
     * @var CustomerFixtures
     */
    private $fixtures;

    public function __construct(ManagerRegistry $doctrine)
    {
        $this->manager = $doctrine->getManager();
        $this->fixtures = new CustomerFixtures();
    }

    /**
     * @Given There are :arg1 customers
     */
    public function thereAreCustomers($arg1)
    {
        for ($i = 0; $i < $arg1; $i++) {
            $customer = $this->fixtures->make(new Customer(), [
                "name" => "Customer-$i",
                "email" => "Customer$i@example.com",
            ]);
            $this->manager->persist($customer);
        }

        $this->manager->flush();
    }

}
