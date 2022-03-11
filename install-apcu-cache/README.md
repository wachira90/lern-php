# install APCU cache

## download
````
https://pecl.php.net/package/APCu

https://pecl.php.net/package/APCu/5.1.21/windows
````

## add end config php.ini

````
extension=apcu


[apcu]
apc.enabled=1
apc.shm_size=32M
apc.ttl=7200
apc.enable_cli=1
apc.serializer=php
````

## check by phpinfo search APCU

