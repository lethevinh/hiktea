# Lamdai

Backend API for lamdai project

## Getting Started

This project is shipped with docker ready configurations, however if you want to configure your custom stack or having different local setup just follow the `docker-compose.yaml` for detail.

### Prerequisites
- Symfony 4 + PHP 7.1
- Nginx
- Mysql

Generate SSH keys:
```
$ mkdir -p config/jwt # For Symfony3+, no need of the -p option
$ openssl genrsa -out config/jwt/private.pem -aes256 4096
$ openssl rsa -pubout -in config/jwt/private.pem -out config/jwt/public.pem
```

Run local development enviroment with docker
```shell
docker-compose up
```

### Development

#### Naming rules

Model should only have `camelCase` attribute, if you happend to use `snake_case` field - please modify the model

```php
class User {
	/**
     * @ORM\Column(type="boolean")
     * @Groups({"write", "read"})
     */
    private $isActive;


    public function getIsActive():  ? bool
    {
        return $this->isActive;
    }

    public function setIsActive(bool $isActive) : self
    {
        $this->isActive = $isActive;

        return $this;
    }
}
```

#### Fixtures data

Create new fixtures, suffix class with `Fixture`

```
php bin/console make:fixtures
```


Load fixtures

```shell
php bin/console doctrine:fixtures:load

```

#### Authentication

Get authorization JWT token
```shell
curl -X POST -H "Content-Type: application/json" http://localhost:8000/login/check -d '{"username":"admin@admin.com","password":"password"}' 
```

Copy the token, go to localhost:8000/docs and paste `Bearer ${TOKEN}` in the authorize box. Now you can explore the API the application supports.

### Running the tests

Prepare the test database `lamdai_test`
Access the dev container - then run behat if you are developing a feature
```shell
docker-compose run php-fpm-test bash
php vendor/bin/behat
```


## Deployment

TODO
