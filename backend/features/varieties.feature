@reset
Feature: Manage varieties
  In order to manage variety
  As a user
  I need to be able to retrieve, create, update and delete them through the API.

  Scenario: Create a variety
    Given There is user with email "admin@admin.com" and roles "ROLE_ADMIN,ROLE_USER"
    And There are 1 customers
    When I add "Content-Type" header equal to "application/ld+json"
    And I log in with email "admin@admin.com"
    And I add "Accept" header equal to "application/ld+json"
    And I send a "POST" request to "/api/varieties" with body:
    """
    {
      "name": "First variety",
      "code": "V123",
      "customer": "/api/customers/1"
    }
    """
    Then the response status code should be 201
    And the response should be in JSON
    And the header "Content-Type" should be equal to "application/ld+json; charset=utf-8"

  Scenario: Update a variety
    Given There is user with email "admin@admin.com" and roles "ROLE_ADMIN,ROLE_USER"
    And There are 2 customers
    And There are 1 varieties
    When I add "Content-Type" header equal to "application/ld+json"
    And I log in with email "admin@admin.com"
    And I add "Accept" header equal to "application/ld+json"
    And I send a "PUT" request to "/api/varieties/1" with body:
    """
    {
      "name": "New Unit name",
      "customer": "/api/customers/2"
    }
    """
    Then the response status code should be 200
    And the response should be in JSON
    And the header "Content-Type" should be equal to "application/ld+json; charset=utf-8"

  Scenario: Retrieve the variety list
    Given There is user with email "admin@admin.com" and roles "ROLE_ADMIN,ROLE_USER"
    And There are 1 customers
    And There are 2 varieties
    When I add "Accept" header equal to "application/ld+json"
    And I log in with email "admin@admin.com"
    And I send a "GET" request to "/api/varieties"
    Then the response status code should be 200
    And the response should be in JSON
    And the header "Content-Type" should be equal to "application/ld+json; charset=utf-8"
    And the JSON should be equal to:
    """
    {
      "@context":"/api/contexts/Variety",
      "@id":"/api/varieties",
      "@type":"hydra:Collection",
      "hydra:member":[
        {
          "@id":"/api/varieties/1",
          "@type":"Variety",
          "name":"Variety-0",
          "code":"Variety-code-0",
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
          "@id":"/api/varieties/2",
          "@type":"Variety",
          "name":"Variety-1",
          "code":"Variety-code-1",
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

  Scenario: Throw errors when a variety is invalid
    Given There is user with email "admin@admin.com" and roles "ROLE_ADMIN,ROLE_USER"
    And There are 2 customers
    And There are 2 varieties
    When I add "Content-Type" header equal to "application/ld+json"
    And I log in with email "admin@admin.com"
    And I add "Accept" header equal to "application/ld+json"
    And I send a "POST" request to "/api/varieties" with body:
    """
    {
      "name": "Variety-1",
      "code": "Variety-code-14",
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
      "hydra:description":  "name: This value is already used.",
      "violations": [
        {
          "propertyPath": "name",
          "message": "This value is already used."
        }
      ]
    }
    """
