@reset
Feature: Manage crops
  In order to manage crop
  As a crop
  I need to be able to retrieve, create, update and delete them through the API.

  Scenario: Create a crop
    Given There is user with email "admin@admin.com" and roles "ROLE_ADMIN,ROLE_USER"
    When I add "Content-Type" header equal to "application/ld+json"
    And I log in with email "admin@admin.com"
    And I add "Accept" header equal to "application/ld+json"
    And I send a "POST" request to "/api/crops" with body:
    """
    {
      "name": "yo ho"
    }
    """
    Then the response status code should be 201
    And the response should be in JSON
    And the header "Content-Type" should be equal to "application/ld+json; charset=utf-8"

  Scenario: Retrieve the crop list
    Given There is user with email "admin@admin.com" and roles "ROLE_ADMIN,ROLE_USER"
    And There are 1 crops
    When I add "Accept" header equal to "application/ld+json"
    And I log in with email "admin@admin.com"
    And I send a "GET" request to "/api/crops"
    Then the response status code should be 200
    And the response should be in JSON
    And the header "Content-Type" should be equal to "application/ld+json; charset=utf-8"
    And the JSON should be equal to:
    """
    {
      "@context":"/api/contexts/Crop",
      "@id":"/api/crops",
      "@type":"hydra:Collection",
      "hydra:member":[
        {
          "@id":"/api/crops/1",
          "@type":"Crop",
          "name":"Crop-0",
          "createdAt": "2011-01-01T00:00:00+00:00",
          "updatedAt": "2011-01-01T00:00:00+00:00"
        }
      ],
      "hydra:totalItems":1
    }
    """

  Scenario: Throw errors when a crop is invalid
    Given There is user with email "admin@admin.com" and roles "ROLE_ADMIN,ROLE_USER"
    And There are 1 crops
    When I add "Content-Type" header equal to "application/ld+json"
    And I log in with email "admin@admin.com"
    And I add "Accept" header equal to "application/ld+json"
    And I send a "POST" request to "/api/crops" with body:
    """
    {
      "name": "Crop-0"
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
