@reset
Feature: Manage units
  In order to manage unit
  As a user
  I need to be able to retrieve, create, update and delete them through the API.

  Scenario: Create a unit
    Given There is user with email "admin@admin.com" and roles "ROLE_ADMIN,ROLE_USER"
    And There are 1 farms
    When I add "Content-Type" header equal to "application/ld+json"
    And I log in with email "admin@admin.com"
    And I add "Accept" header equal to "application/ld+json"
    And I send a "POST" request to "/api/units" with body:
    """
    {
      "name": "First unit",
      "user": "/api/users/1",
      "farm": "/api/farms/1"
    }
    """
    Then the response status code should be 201
    And the response should be in JSON
    And the header "Content-Type" should be equal to "application/ld+json; charset=utf-8"

  Scenario: Update a unit
    Given There is user with email "admin@admin.com" and roles "ROLE_ADMIN,ROLE_USER"
    And There are 2 farms
    And There are 1 units
    When I add "Content-Type" header equal to "application/ld+json"
    And I log in with email "admin@admin.com"
    And I add "Accept" header equal to "application/ld+json"
    And I send a "PUT" request to "/api/units/1" with body:
    """
    {
      "name": "New Unit name",
      "farm": "/api/farms/2"
    }
    """
    Then the response status code should be 200
    And the response should be in JSON
    And the header "Content-Type" should be equal to "application/ld+json; charset=utf-8"

  Scenario: Retrieve the unit list
    Given There is user with email "admin@admin.com" and roles "ROLE_ADMIN,ROLE_USER"
    And There are 1 farms
    And There are 2 units
    When I add "Accept" header equal to "application/ld+json"
    And I log in with email "admin@admin.com"
    And I send a "GET" request to "/api/units"
    Then the response status code should be 200
    And the response should be in JSON
    And the header "Content-Type" should be equal to "application/ld+json; charset=utf-8"
    And the JSON should be equal to:
    """
    {
      "@context":"/api/contexts/Unit",
      "@id":"/api/units",
      "@type":"hydra:Collection",
      "hydra:member":[
        {
          "@id":"/api/units/1",
          "@type":"Unit",
          "name":"Unit-0",
          "farm":{
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
          "@id":"/api/units/2",
          "@type":"Unit",
          "name":"Unit-1",
          "farm":{
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

  Scenario: Throw errors when a unit is invalid
    Given There is user with email "admin@admin.com" and roles "ROLE_ADMIN,ROLE_USER"
    And There are 2 farms
    And There are 2 units
    When I add "Content-Type" header equal to "application/ld+json"
    And I log in with email "admin@admin.com"
    And I add "Accept" header equal to "application/ld+json"
    And I send a "POST" request to "/api/units" with body:
    """
    {
      "name": "Unit-1",
      "farm": "/api/farms/1",
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
