# How To Install PHP 7.4 on Fedora 35/34/33/32/31

## Step 1: Update Fedora system

````
sudo dnf -y update
````

## Step 2: Add REMI Repository
````
### Fedora 35
sudo dnf -y install https://rpms.remirepo.net/fedora/remi-release-35.rpm

###  Fedora 34
sudo dnf -y install https://rpms.remirepo.net/fedora/remi-release-34.rpm

###  Fedora 33
sudo dnf -y install https://rpms.remirepo.net/fedora/remi-release-33.rpm

###  Fedora 32
sudo dnf -y install https://rpms.remirepo.net/fedora/remi-release-32.rpm

###  Fedora 31
sudo dnf -y install https://rpms.remirepo.net/fedora/remi-release-31.rpm
````

## Step 3: Install PHP 7.4 on Fedora 35/34/33/32/31
````
sudo dnf config-manager --set-enabled remi
sudo  dnf module reset php

sudo dnf module install php:remi-7.4

$ php -v
PHP 7.4.12 (cli) (built: Oct 27 2020 15:01:52) ( NTS )
Copyright (c) The PHP Group
Zend Engine v3.4.0, Copyright (c) Zend Technologies
````

## if php 8
````
sudo dnf -y install dnf-plugins-core
sudo dnf config-manager --set-enabled remi
sudo dnf module reset php -y
sudo dnf module -y install php:remi-8.0
````

## To install additional PHP packages/extensions, use the command syntax:
````
sudo yum install php-xxx
````
## Example:
````
sudo dnf install php  php-cli php-fpm php-mysqlnd php-zip php-devel php-gd php-mcrypt php-mbstring php-curl php-xml php-pear php-bcmath php-json

$ php --modules
````




