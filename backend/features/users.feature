@reset
Feature: Manage users
  In order to manage user
  As a user
  I need to be able to retrieve, create, update and delete them through the API.

  Scenario: Create a user
    Given There is user with email "admin@admin.com" and roles "ROLE_ADMIN,ROLE_USER"
    When I add "Content-Type" header equal to "application/ld+json"
    And I log in with email "admin@admin.com"
    And I add "Accept" header equal to "application/ld+json"
    And I send a "POST" request to "/api/users" with body:
    """
    {
      "email": "test@test.com"
    }
    """
    Then the response status code should be 201
    And the response should be in JSON
    And the header "Content-Type" should be equal to "application/ld+json; charset=utf-8"

  Scenario: Retrieve the user list
    Given There is user with email "admin@admin.com" and roles "ROLE_ADMIN,ROLE_USER"
    When I add "Accept" header equal to "application/ld+json"
    And I log in with email "admin@admin.com"
    And I send a "GET" request to "/api/users"
    Then the response status code should be 200
    And the response should be in JSON
    And the header "Content-Type" should be equal to "application/ld+json; charset=utf-8"
    And the JSON should be equal to:
    """
    {
      "@context":"/api/contexts/User",
      "@id":"/api/users",
      "@type":"hydra:Collection",
      "hydra:member":[
        {
          "@id":"/api/users/1",
          "@type":"User",
          "email":"admin@admin.com",
          "username":"admin@admin.com",
          "isActive":true,
          "createdAt": "2011-01-01T00:00:00+00:00",
          "updatedAt": "2011-01-01T00:00:00+00:00"
        }
      ],
      "hydra:totalItems":1
    }
    """

  Scenario: Throw errors when a user is invalid
    Given There is user with email "admin@admin.com" and roles "ROLE_ADMIN,ROLE_USER"
    When I add "Content-Type" header equal to "application/ld+json"
    And I log in with email "admin@admin.com"
    And I add "Accept" header equal to "application/ld+json"
    And I send a "POST" request to "/api/users" with body:
    """
    {
      "email": "invalid@"
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
      "hydra:description":  "email: This value is not a valid email address.",
      "violations": [
        {
          "propertyPath": "email",
          "message": "This value is not a valid email address."
        }
      ]
    }
    """
