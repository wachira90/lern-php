# lern-php
lern-php


## add php 

````
location ~ \.php$ {
  try_files $uri =404;
  fastcgi_split_path_info ^(.+\.php)(/.+)$;
  fastcgi_pass unix:/run/php/php7.2-fpm.sock;
  fastcgi_index index.php;
  include fastcgi_params;
  fastcgi_param  SCRIPT_FILENAME $document_root$fastcgi_script_name;
}
````    
