# php

## Run it in Docker

```
sudo docker run -d -p 80:80 --name my-apache-php-app -v "$PWD":/var/www/html php:7.2-apache
sudo docker start -ai my-apache-php-app
```

Refer to [Docker Offical PHP Image](https://hub.docker.com/_/php)

### Troubleshooting

#### Turn on file uploads

To find where php.ini is

```
<?php phpinfo(); ?>
```

How to get bash or ssh into a running container in background mode?

```
sudo docker exec -i -t <container ID> /bin/bash
```

Go to the configuration file:

```
vim /usr/local/etc/php/php.ini
```

ensure that PHP is configured to allow file uploads:

```
file_uploads = On
```

#### Fix uploads directory permission

```
<?php echo exec('whoami'); ?>
```

And then change the owner of the destination directory to what you've got. Use the command:

```
cd /var/www/html
mkdir uploads
chown www-data uploads
```

And then use the command

```
chmod 755 uploads
```

to change the destination directory permission.


## Find out

```
http://localhost/script.php
http://localhost/form.php
```

## Run PHP+MYSQL services

```
cd docker-compose
sudo docker-compose up -d
curl localhost:8100/fetch.php
```