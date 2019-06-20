@reset
Feature: Manage orders
  In order to manage order
  As a user
  I need to be able to retrieve, create, update and delete them through the API.

  Scenario: Create a order
    Given There is user with email "admin@admin.com" and roles "ROLE_ADMIN,ROLE_USER"
    And There are 1 customers
    When I add "Content-Type" header equal to "application/ld+json"
    And I log in with email "admin@admin.com"
    And I add "Accept" header equal to "application/ld+json"
    And I send a "POST" request to "/api/orders" with body:
    """
    {
      "number": "First order",
      "contract": "V123",
      "season": "V123",
      "customer": "/api/customers/1"
    }
    """
    Then the response status code should be 201
    And the response should be in JSON
    And the header "Content-Type" should be equal to "application/ld+json; charset=utf-8"

  Scenario: Update a order
    Given There is user with email "admin@admin.com" and roles "ROLE_ADMIN,ROLE_USER"
    And There are 2 customers
    And There are 1 orders
    When I add "Content-Type" header equal to "application/ld+json"
    And I log in with email "admin@admin.com"
    And I add "Accept" header equal to "application/ld+json"
    And I send a "PUT" request to "/api/orders/1" with body:
    """
    {
      "number": "New order number",
      "customer": "/api/customers/2"
    }
    """
    Then the response status code should be 200
    And the response should be in JSON
    And the header "Content-Type" should be equal to "application/ld+json; charset=utf-8"

  Scenario: Retrieve the order list
    Given There is user with email "admin@admin.com" and roles "ROLE_ADMIN,ROLE_USER"
    And There are 1 customers
    And There are 2 orders
    When I add "Accept" header equal to "application/ld+json"
    And I log in with email "admin@admin.com"
    And I send a "GET" request to "/api/orders"
    Then the response status code should be 200
    And the response should be in JSON
    And the header "Content-Type" should be equal to "application/ld+json; charset=utf-8"
    And the JSON should be equal to:
    """
    {
      "@context":"/api/contexts/Order",
      "@id":"/api/orders",
      "@type":"hydra:Collection",
      "hydra:member":[
        {
          "@id":"/api/orders/1",
          "@type":"Order",
          "number":"No-0",
          "contract":"Contract-0",
          "season":"Spring-0",
          "customer":{
            "@id":"/api/customers/1",
            "@type":"Customer",
            "name":"Customer-0",
            "email":"Customer0@example.com",
            "createdAt":"2011-01-01T00:00:00+00:00",
            "updatedAt":"2011-01-01T00:00:00+00:00"
          },
          "createdAt":"2011-01-01T00:00:00+00:00",
          "updatedAt":"2011-01-01T00:00:00+00:00"
        },
        {
          "@id":"/api/orders/2",
          "@type":"Order",
          "number":"No-1",
          "contract":"Contract-1",
          "season":"Spring-1",
          "customer":{
            "@id":"/api/customers/1",
            "@type":"Customer",
            "name":"Customer-0",
            "email":"Customer0@example.com",
            "createdAt":"2011-01-01T00:00:00+00:00",
            "updatedAt":"2011-01-01T00:00:00+00:00"
          },
          "createdAt":"2011-01-01T00:00:00+00:00",
          "updatedAt":"2011-01-01T00:00:00+00:00"
        }
      ],
      "hydra:totalItems":2
    }
    """

  Scenario: Throw errors when a order is invalid
    Given There is user with email "admin@admin.com" and roles "ROLE_ADMIN,ROLE_USER"
    And There are 2 customers
    And There are 2 orders
    When I add "Content-Type" header equal to "application/ld+json"
    And I log in with email "admin@admin.com"
    And I add "Accept" header equal to "application/ld+json"
    And I send a "PUT" request to "/api/orders/1" with body:
    """
    {
      "number": "No-1",
      "customer": "/api/customers/1"
    }
    """
    Then the response status code should be 400
    And the response should be in JSON
    And the header "Content-Type" should be equal to "application/ld+json; charset=utf-8"
    And the JSON should be equal to:
    """
    {
      "@context": "/api/contexts/ConstraintViolationList",
      "@type": "ConstraintViolationList",
      "hydra:title": "An error occurred",
      "hydra:description":  "number: This value is already used.",
      "violations": [
        {
          "propertyPath": "number",
          "message": "This value is already used."
        }
      ]
    }
    """
