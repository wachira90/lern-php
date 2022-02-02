# Tuning php fpm

## Find pm.max_children 

## run this command 
````
ps --no-headers -o "rss,cmd" -C php-fpm | awk '{ sum+=$1 } END { printf ("%d%s\n", sum/NR/1024,"M") }'
````
## result
````
85MB
````

## Formula ( example RAM 6 GB )
````
6144MB / 85MB = 72.28
````


## Put value

pm.max_children value 2, 4, 6, 8, 16, 32, 64, 128 ....

location /etc/php-fpm.conf , /etc/opt/remi/php72/php-fpm.conf

````
pm = dynamic
pm.max_children = 64
pm.start_servers = 8
pm.min_spare_servers = 4
pm.max_spare_servers = 16
pm.max_requests = 500
````

## Trace error by kill Process if long time 
````
request_terminate_timeout = 120s
request_slowlog_timeout = 120s
slowlog = /var/log/slowlog-site1.log
````


## Final
````
pm = dynamic
pm.max_children = 64
pm.start_servers = 8
pm.min_spare_servers = 4
pm.max_spare_servers = 16
pm.max_requests = 500
request_terminate_timeout = 120s
request_slowlog_timeout = 120s
slowlog = /var/log/slowlog-site1.log
````
