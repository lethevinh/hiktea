@reset
Feature: Manage farms
  In order to manage farm
  As a user
  I need to be able to retrieve, create, update and delete them through the API.

  Scenario: Create a farm
    Given There is user with email "admin@admin.com" and roles "ROLE_ADMIN,ROLE_USER"
    When I add "Content-Type" header equal to "application/ld+json"
    And I log in with email "admin@admin.com"
    And I add "Accept" header equal to "application/ld+json"
    And I send a "POST" request to "/api/farms" with body:
    """
    {
      "name": "Super farm",
      "user": "/api/users/1"
    }
    """
    Then the response status code should be 201
    And the response should be in JSON
    And the header "Content-Type" should be equal to "application/ld+json; charset=utf-8"

  Scenario: Update a farm
    Given There is user with email "admin@admin.com" and roles "ROLE_ADMIN,ROLE_USER"
    And There are 2 farms
    When I add "Content-Type" header equal to "application/ld+json"
    And I log in with email "admin@admin.com"
    And I add "Accept" header equal to "application/ld+json"
    And I send a "PUT" request to "/api/farms/1" with body:
    """
    {
      "name": "New Farm name"
    }
    """
    Then the response status code should be 200
    And the response should be in JSON
    And the header "Content-Type" should be equal to "application/ld+json; charset=utf-8"

  Scenario: Retrieve the farm list
    Given There is user with email "admin@admin.com" and roles "ROLE_ADMIN,ROLE_USER"
    And There are 2 farms
    When I add "Accept" header equal to "application/ld+json"
    And I log in with email "admin@admin.com"
    And I send a "GET" request to "/api/farms"
    Then the response status code should be 200
    And the response should be in JSON
    And the header "Content-Type" should be equal to "application/ld+json; charset=utf-8"
    And the JSON should be equal to:
    """
    {
      "@context":"/api/contexts/Farm",
      "@id":"/api/farms",
      "@type":"hydra:Collection",
      "hydra:member":[
        {
          "@id":"/api/farms/1",
          "@type":"Farm",
          "name":"Farm-0",
          "user":{
            "@id":"/api/users/1",
            "@type":"User",
            "email":"admin@admin.com",
            "username":"admin@admin.com",
            "isActive":true,
            "createdAt":"2011-01-01T00:00:00+00:00",
            "updatedAt":"2011-01-01T00:00:00+00:00"
          },
          "createdAt":"2011-01-01T00:00:00+00:00",
          "updatedAt":"2011-01-01T00:00:00+00:00"
        },
        {
          "@id":"/api/farms/2",
          "@type":"Farm",
          "name":"Farm-1",
          "user":{
            "@id":"/api/users/1",
            "@type":"User",
            "email":"admin@admin.com",
            "username":"admin@admin.com",
            "isActive":true,
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

  Scenario: Throw errors when a farm is invalid
    Given There is user with email "admin@admin.com" and roles "ROLE_ADMIN,ROLE_USER"
    And There are 2 farms
    When I add "Content-Type" header equal to "application/ld+json"
    And I log in with email "admin@admin.com"
    And I add "Accept" header equal to "application/ld+json"
    And I send a "POST" request to "/api/farms" with body:
    """
    {
      "name": "Farm-1",
      "user": "/api/users/1"
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
