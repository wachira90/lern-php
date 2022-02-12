# OS Detect

````
<?php

//By default, we assume that PHP is NOT running on windows.
$isWindows = false;

//If the first three characters PHP_OS are equal to "WIN",
//then PHP is running on a Windows operating system.
if(strcasecmp(substr(PHP_OS, 0, 3), 'WIN') == 0){
    $isWindows = true;
}

//If $isWindows is TRUE, then print out a message saying so.
if($isWindows){
    echo 'This operating system is Windows!';
}
````
