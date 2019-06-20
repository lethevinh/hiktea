@reset
Feature: Manage greenhouses
  In order to manage greenhouse
  As a user
  I need to be able to retrieve, create, update and delete them through the API.

  Scenario: Create a greenhouse
    Given There is user with email "admin@admin.com" and roles "ROLE_ADMIN,ROLE_USER"
    And There are 1 farms
    And There are 1 units
    When I add "Content-Type" header equal to "application/ld+json"
    And I log in with email "admin@admin.com"
    And I add "Accept" header equal to "application/ld+json"
    And I send a "POST" request to "/api/greenhouses" with body:
    """
    {
      "code": "ABCXD",
      "user": "/api/users/1",
      "unit": "/api/units/1",
      "acreage": 22
    }
    """
    Then the response status code should be 201
    And the response should be in JSON
    And the header "Content-Type" should be equal to "application/ld+json; charset=utf-8"

  Scenario: Update a greenhouse
    Given There is user with email "admin@admin.com" and roles "ROLE_ADMIN,ROLE_USER"
    And There are 1 farms
    And There are 1 units
    And There are 2 greenhouses
    When I add "Content-Type" header equal to "application/ld+json"
    And I log in with email "admin@admin.com"
    And I add "Accept" header equal to "application/ld+json"
    And I send a "PUT" request to "/api/greenhouses/1" with body:
    """
    {
      "code": "New code"
    }
    """
    Then the response status code should be 200
    And the response should be in JSON
    And the header "Content-Type" should be equal to "application/ld+json; charset=utf-8"

  Scenario: Retrieve the greenhouse list
    Given There is user with email "admin@admin.com" and roles "ROLE_ADMIN,ROLE_USER"
    And There are 1 farms
    And There are 1 units
    And There are 2 greenhouses
    When I add "Accept" header equal to "application/ld+json"
    And I log in with email "admin@admin.com"
    And I send a "GET" request to "/api/greenhouses"
    Then the response status code should be 200
    And the response should be in JSON
    And the header "Content-Type" should be equal to "application/ld+json; charset=utf-8"
    And the JSON should be equal to:
    """
    {
      "@context":"/api/contexts/Greenhouse",
      "@id":"/api/greenhouses",
      "@type":"hydra:Collection",
      "hydra:member":[
        {
          "@id":"/api/greenhouses/1",
          "@type":"Greenhouse",
          "code":"Greenhouse-0",
          "acreage":0.22,
          "unit":{
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
          "createdAt":"2011-01-01T00:00:00+00:00",
          "updatedAt":"2011-01-01T00:00:00+00:00"
        },
        {
          "@id":"/api/greenhouses/2",
          "@type":"Greenhouse",
          "code":"Greenhouse-1",
          "acreage":0.22,
          "unit":{
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
          "createdAt":"2011-01-01T00:00:00+00:00",
          "updatedAt":"2011-01-01T00:00:00+00:00"
        }
      ],
      "hydra:totalItems":2
    }
    """

  Scenario: Throw errors when a greenhouse is invalid
    Given There is user with email "admin@admin.com" and roles "ROLE_ADMIN,ROLE_USER"
    And There are 1 farms
    And There are 1 units
    And There are 2 greenhouses
    When I add "Content-Type" header equal to "application/ld+json"
    And I log in with email "admin@admin.com"
    And I add "Accept" header equal to "application/ld+json"
    And I send a "PUT" request to "/api/greenhouses/1" with body:
    """
    {
      "code": "Greenhouse-1"
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
      "hydra:description":  "code: This value is already used.",
      "violations": [
        {
          "propertyPath": "code",
          "message": "This value is already used."
        }
      ]
    }
    """
