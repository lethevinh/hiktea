@reset
Feature: Manage sheets
  In order to manage sheet
  As a sheet
  I need to be able to retrieve, create, update and delete them through the API.

  Scenario: Create a sheet
    Given There is user with email "admin@admin.com" and roles "ROLE_ADMIN,ROLE_USER"
    When I add "Content-Type" header equal to "application/ld+json"
    And I log in with email "admin@admin.com"
    And I add "Accept" header equal to "application/ld+json"
    And I send a "POST" request to "/api/sheets" with body:
    """
    {
      "note": "yo ho"
    }
    """
    Then the response status code should be 201
    And the response should be in JSON
    And the header "Content-Type" should be equal to "application/ld+json; charset=utf-8"

  Scenario: Retrieve the sheet list
    Given There is user with email "admin@admin.com" and roles "ROLE_ADMIN,ROLE_USER"
    And There are 2 sheets
    When I add "Accept" header equal to "application/ld+json"
    And I log in with email "admin@admin.com"
    And I send a "GET" request to "/api/sheets"
    Then the response status code should be 200
    And the response should be in JSON
    And the header "Content-Type" should be equal to "application/ld+json; charset=utf-8"
    And the JSON should be equal to:
    """
    {
      "@context":"/api/contexts/Sheet",
      "@id":"/api/sheets",
      "@type":"hydra:Collection",
      "hydra:member":[
        {
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
        {
          "@id":"/api/sheets/2",
          "@type":"Sheet",
          "sownAt":null,
          "plantedAt":null,
          "stockSeedReceivedAt":null,
          "stockMaleSeedsCount":null,
          "stockFemaleSeedsCount":null,
          "plantsCount":0,
          "note":"Sheet-note-1",
          "smallTransplantedAt":null,
          "bigTransplantedAt":null,
          "pollinateStartedAt":null,
          "pollinateEndedAt":null,
          "harvestStartedAt":null,
          "harvestEndedAt":null,
          "createdAt":"2011-01-01T00:00:00+00:00",
          "updatedAt":"2011-01-01T00:00:00+00:00"
        }
      ],
      "hydra:totalItems":2
    }
    """
