# php

## Run it in Docker

```
sudo docker run -d -p 80:80 --name my-apache-php-app -v "$PWD":/var/www/html php:7.2-apache
sudo docker start -ai my-apache-php-app
```

Refer to [Docker Offical PHP Image](https://hub.docker.com/_/php)
