# remove slash backslash

## Use str_replace(): 1
````
$string = "people are using Iphone/'s instead of Android phone/'s";
$result = str_replace('/','',$string);
echo $result;
// Output: people are using Iphone's instead of Android phone's
````

## Use str_replace(): 2
````
$string = "people are using Iphone/'s instead of Android >=phone/'s";
$ss = array('<','>','#','=','/');
$result = str_replace($ss,'',$string);
echo $result;
// Output: people are using Iphone's instead of Android phone's
````

## If the slashes are backward slashes (as they probably are), you can use stripslashes():
````
$string = "people are using Iphone\\'s instead of Android phone\\'s";
$result = stripslashes($string);
echo $result;
// Output: people are using Iphone's instead of Android phone's
````
