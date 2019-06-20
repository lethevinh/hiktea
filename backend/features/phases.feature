@reset
Feature: Manage phases
  In order to manage phases
  As a user
  I need to be able to retrieve, create, update and delete them through the API.

  Scenario: Create a phases
    Given There is user with email "admin@admin.com" and roles "ROLE_ADMIN,ROLE_USER"
    And There are 1 customers
    And There are 1 farms
    And There are 1 orders
    And There are 1 varieties
    And There are 1 crops
    And There are 1 order items
    When I add "Content-Type" header equal to "application/ld+json"
    And I log in with email "admin@admin.com"
    And I add "Accept" header equal to "application/ld+json"
    And I send a "POST" request to "/api/phases" with body:
    """
    {
      "orderItem": "/api/order_items/1"
    }
    """
    Then the response status code should be 201
    And the response should be in JSON
    And the header "Content-Type" should be equal to "application/ld+json; charset=utf-8"

  Scenario: Update a phases
    Given There is user with email "admin@admin.com" and roles "ROLE_ADMIN,ROLE_USER"
    And There are 1 customers
    And There are 1 farms
    And There are 1 orders
    And There are 1 varieties
    And There are 1 crops
    And There are 2 order items
    And There are 1 phases
    When I add "Content-Type" header equal to "application/ld+json"
    And I log in with email "admin@admin.com"
    And I add "Accept" header equal to "application/ld+json"
    And I send a "PUT" request to "/api/phases/1" with body:
    """
    {
      "orderItem": "/api/order_items/2"
    }
    """
    Then the response status code should be 200
    And the response should be in JSON
    And the header "Content-Type" should be equal to "application/ld+json; charset=utf-8"

  Scenario: Retrieve the phases list
    Given There is user with email "admin@admin.com" and roles "ROLE_ADMIN,ROLE_USER"
    And There are 1 customers
    And There are 1 farms
    And There are 1 orders
    And There are 1 varieties
    And There are 1 crops
    And There are 1 order items
    And There are 2 phases
    When I add "Accept" header equal to "application/ld+json"
    And I log in with email "admin@admin.com"
    And I send a "GET" request to "/api/phases"
    Then the response status code should be 200
    And the response should be in JSON
    And the header "Content-Type" should be equal to "application/ld+json; charset=utf-8"
    And the JSON should be equal to:
    """
    {
      "@context":"/api/contexts/Phase",
      "@id":"/api/phases",
      "@type":"hydra:Collection",
      "hydra:member":[
        {
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
        {
          "@id":"/api/phases/2",
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
        }
      ],
      "hydra:totalItems":2
    }
    """

  Scenario: Throw errors when a phases is invalid
    Given There is user with email "admin@admin.com" and roles "ROLE_ADMIN,ROLE_USER"
    And There are 1 customers
    And There are 1 farms
    And There are 1 orders
    And There are 1 varieties
    And There are 1 crops
    And There are 1 order items
    And There are 2 phases
    When I add "Content-Type" header equal to "application/ld+json"
    And I log in with email "admin@admin.com"
    And I add "Accept" header equal to "application/ld+json"
    And I send a "POST" request to "/api/phases" with body:
    """
    {
      "orderItem": "/api/order_items/2"
    }
    """