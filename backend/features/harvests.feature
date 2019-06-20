@reset
Feature: Manage harvests
  In order to manage harvest
  As a user
  I need to be able to retrieve, create, update and delete them through the API.

  Scenario: Create a harvest report
    Given There is user with email "admin@admin.com" and roles "ROLE_ADMIN,ROLE_USER"
    And There are 1 farms
    And There are 1 units
    And There are 1 greenhouses
    And There are 1 customers
    And There are 1 orders
    And There are 1 varieties
    And There are 1 crops
    And There are 1 order items
    And There are 1 phases
    And There are 1 units
    And There are 1 sheets
    And There are 1 assignments
    When I add "Content-Type" header equal to "application/ld+json"
    And I log in with email "admin@admin.com"
    And I add "Accept" header equal to "application/ld+json"
    And I send a "POST" request to "/api/harvests" with body:
    """
    {
      "greenhouse": "/api/greenhouses/1",
      "assignment": "/api/assignments/1"
    }
    """
    Then the response status code should be 201
    And the response should be in JSON
    And the header "Content-Type" should be equal to "application/ld+json; charset=utf-8"

  Scenario: Update a harvest
    Given There is user with email "admin@admin.com" and roles "ROLE_ADMIN,ROLE_USER"
    And There are 1 farms
    And There are 1 units
    And There are 2 greenhouses
    And There are 1 customers
    And There are 1 orders
    And There are 1 varieties
    And There are 1 crops
    And There are 1 order items
    And There are 1 phases
    And There are 1 units
    And There are 1 sheets
    And There are 1 assignments
    And There are 2 harvests
    When I add "Content-Type" header equal to "application/ld+json"
    And I log in with email "admin@admin.com"
    And I add "Accept" header equal to "application/ld+json"
    And I send a "PUT" request to "/api/harvests/1" with body:
    """
    {
      "startedAt":"2011-01-01T00:00:00+00:00",
      "greenhouse": "/api/greenhouses/2"
    }
    """
    Then the response status code should be 200
    And the response should be in JSON
    And the header "Content-Type" should be equal to "application/ld+json; charset=utf-8"

  Scenario: Retrieve the harvest list
    Given There is user with email "admin@admin.com" and roles "ROLE_ADMIN,ROLE_USER"
    And There are 1 farms
    And There are 1 units
    And There are 1 greenhouses
    And There are 1 customers
    And There are 1 orders
    And There are 1 varieties
    And There are 1 crops
    And There are 1 order items
    And There are 1 phases
    And There are 1 units
    And There are 1 sheets
    And There are 1 assignments
    And There are 2 harvests
    When I add "Accept" header equal to "application/ld+json"
    And I log in with email "admin@admin.com"
    And I send a "GET" request to "/api/harvests"
    Then the response status code should be 200
    And the response should be in JSON
    And the header "Content-Type" should be equal to "application/ld+json; charset=utf-8"
    And the JSON should be equal to:
    """
    {
      "@context":"/api/contexts/Harvest",
      "@id":"/api/harvests",
      "@type":"hydra:Collection",
      "hydra:member":[
        {
          "@id":"/api/harvests/1",
          "@type":"Harvest",
          "startedAt":"2011-01-01T00:00:00+00:00",
          "endedAt":"2011-01-02T00:00:00+00:00",
          "fruitsCount":0.99,
          "seedsCount":0.99,
          "isApproved":false,
          "greenhouse":{
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
          "assignment":{
            "@id":"/api/assignments/1",
            "@type":"Assignment",
            "remarks":null,
            "diseaseGrade":null,
            "riskGrade":null,
            "phase":{
              "@id":"/api/phases/1",
              "@type":"Phase",
              "orderItem":{
                "@id":"/api/order_items/1",
                "@type":"OrderItem",
                "quantity":30.5,
                "deliveredAt":null,
                "stockSeedReceivedAt":null,
                "stockMaleSeedsCount":null,
                "stockFemaleSeedsCount":null,
                "order":{
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
                "crop":{
                  "@id":"/api/crops/1",
                  "@type":"Crop",
                  "name":"Crop-0",
                  "createdAt":"2011-01-01T00:00:00+00:00",
                  "updatedAt":"2011-01-01T00:00:00+00:00"
                },
                "variety":{
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
                "createdAt":"2011-01-01T00:00:00+00:00",
                "updatedAt":"2011-01-01T00:00:00+00:00"
              },
              "createdAt":"2011-01-01T00:00:00+00:00",
              "updatedAt":"2011-01-01T00:00:00+00:00"
            },
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
            "createdAt":"2011-01-01T00:00:00+00:00",
            "updatedAt":"2011-01-01T00:00:00+00:00"
          },
          "createdAt":"2011-01-01T00:00:00+00:00",
          "updatedAt":"2011-01-01T00:00:00+00:00"
        },
        {
          "@id":"/api/harvests/2",
          "@type":"Harvest",
          "startedAt":"2011-01-01T00:00:00+00:00",
          "endedAt":"2011-01-02T00:00:00+00:00",
          "fruitsCount":0.99,
          "seedsCount":0.99,
          "isApproved":false,
          "greenhouse":{
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
          "assignment":{
            "@id":"/api/assignments/1",
            "@type":"Assignment",
            "remarks":null,
            "diseaseGrade":null,
            "riskGrade":null,
            "phase":{
              "@id":"/api/phases/1",
              "@type":"Phase",
              "orderItem":{
                "@id":"/api/order_items/1",
                "@type":"OrderItem",
                "quantity":30.5,
                "deliveredAt":null,
                "stockSeedReceivedAt":null,
                "stockMaleSeedsCount":null,
                "stockFemaleSeedsCount":null,
                "order":{
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
                "crop":{
                  "@id":"/api/crops/1",
                  "@type":"Crop",
                  "name":"Crop-0",
                  "createdAt":"2011-01-01T00:00:00+00:00",
                  "updatedAt":"2011-01-01T00:00:00+00:00"
                },
                "variety":{
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
                "createdAt":"2011-01-01T00:00:00+00:00",
                "updatedAt":"2011-01-01T00:00:00+00:00"
              },
              "createdAt":"2011-01-01T00:00:00+00:00",
              "updatedAt":"2011-01-01T00:00:00+00:00"
            },
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

  Scenario: Throw errors when a harvest is invalid
    Given There is user with email "admin@admin.com" and roles "ROLE_ADMIN,ROLE_USER"
    And There are 1 farms
    And There are 1 customers
    And There are 1 orders
    And There are 1 varieties
    And There are 1 crops
    And There are 1 order items
    And There are 1 phases
    And There are 1 units
    And There are 1 sheets
    And There are 1 assignments
    And There are 1 units
    When I add "Content-Type" header equal to "application/ld+json"
    And I log in with email "admin@admin.com"
    And I add "Accept" header equal to "application/ld+json"
    And I send a "POST" request to "/api/harvests" with body:
    """
    {
      "greenhouse": "boop!"
    }
    """
    Then the response status code should be 400
    And the response should be in JSON
    And the header "Content-Type" should be equal to "application/ld+json; charset=utf-8"
