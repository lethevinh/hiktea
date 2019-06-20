@reset
Feature: Manage progressions
  In order to manage progressions
  As a user
  I need to be able to retrieve, create, update and delete them through the API.

  Scenario: Create a progressions
    Given There is user with email "admin@admin.com" and roles "ROLE_ADMIN,ROLE_USER"
    And There are 1 sheets
    When I add "Content-Type" header equal to "application/ld+json"
    And I log in with email "admin@admin.com"
    And I add "Accept" header equal to "application/ld+json"
    And I send a "POST" request to "/api/progressions" with body:
    """
    {
      "sheet": "/api/sheets/1",
      "month": "12"
    }
    """
    Then the response status code should be 201
    And the response should be in JSON
    And the header "Content-Type" should be equal to "application/ld+json; charset=utf-8"

  Scenario: Update a progressions
    Given There is user with email "admin@admin.com" and roles "ROLE_ADMIN,ROLE_USER"
    And There are 1 sheets
    And There are 1 progressions
    When I add "Content-Type" header equal to "application/ld+json"
    And I log in with email "admin@admin.com"
    And I add "Accept" header equal to "application/ld+json"
    And I send a "PUT" request to "/api/progressions/1" with body:
    """
    {
      "month": "11"
    }
    """
    Then the response status code should be 200
    And the response should be in JSON
    And the header "Content-Type" should be equal to "application/ld+json; charset=utf-8"

  Scenario: Retrieve the progressions list
    Given There is user with email "admin@admin.com" and roles "ROLE_ADMIN,ROLE_USER"
    And There are 1 sheets
    And There are 2 progressions
    When I add "Accept" header equal to "application/ld+json"
    And I log in with email "admin@admin.com"
    And I send a "GET" request to "/api/progressions"
    Then the response status code should be 200
    And the response should be in JSON
    And the header "Content-Type" should be equal to "application/ld+json; charset=utf-8"
    And the JSON should be equal to:
    """
    {
      "@context":"/api/contexts/Progression",
      "@id":"/api/progressions",
      "@type":"hydra:Collection",
      "hydra:member":[
        {
          "@id":"/api/progressions/1",
          "@type":"Progression",
          "sheet":{
            "@id":"/api/sheets/1",
            "@type":"Sheet",
            "sownAt":null,
            "plantedAt":null,
            "stockSeedReceivedAt":null,
            "stockMaleSeedsCount":null,
            "stockFemaleSeedsCount":null,
            "plantsCount":0,
            "note":"Sheet-note-0",
            "smallTransplantedAt":null,
            "bigTransplantedAt":null,
            "pollinateStartedAt":null,
            "pollinateEndedAt":null,
            "harvestStartedAt":null,
            "harvestEndedAt":null,
            "createdAt":"2011-01-01T00:00:00+00:00",
            "updatedAt":"2011-01-01T00:00:00+00:00"
          },
          "month":"1",
          "fruitsCount":null,
          "seedsCount":null,
          "plantsCount":null,
          "seedsWeight":null,
          "unusablePlantsCount":null,
          "riskGrade":null,
          "diseaseGrade":null,
          "remarks":null,
          "createdAt":"2011-01-01T00:00:00+00:00",
          "updatedAt":"2011-01-01T00:00:00+00:00"
        },
        {
          "@id":"/api/progressions/2",
          "@type":"Progression",
          "sheet":{
            "@id":"/api/sheets/1",
            "@type":"Sheet",
            "sownAt":null,
            "plantedAt":null,
            "stockSeedReceivedAt":null,
            "stockMaleSeedsCount":null,
            "stockFemaleSeedsCount":null,
            "plantsCount":0,
            "note":"Sheet-note-0",
            "smallTransplantedAt":null,
            "bigTransplantedAt":null,
            "pollinateStartedAt":null,
            "pollinateEndedAt":null,
            "harvestStartedAt":null,
            "harvestEndedAt":null,
            "createdAt":"2011-01-01T00:00:00+00:00",
            "updatedAt":"2011-01-01T00:00:00+00:00"
          },
          "month":"2",
          "fruitsCount":null,
          "seedsCount":null,
          "plantsCount":null,
          "seedsWeight":null,
          "unusablePlantsCount":null,
          "riskGrade":null,
          "diseaseGrade":null,
          "remarks":null,
          "createdAt":"2011-01-01T00:00:00+00:00",
          "updatedAt":"2011-01-01T00:00:00+00:00"
        }
      ],
      "hydra:totalItems":2
    }
    """

  Scenario: Throw errors when a progressions is invalid
    Given There is user with email "admin@admin.com" and roles "ROLE_ADMIN,ROLE_USER"
    And There are 1 sheets
    And There are 2 progressions
    When I add "Content-Type" header equal to "application/ld+json"
    And I log in with email "admin@admin.com"
    And I add "Accept" header equal to "application/ld+json"
    And I send a "POST" request to "/api/progressions" with body:
    """
    {
      "sheet": "/api/sheet/2"
    }
    """