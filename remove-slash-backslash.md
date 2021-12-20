# remove slash backslash

## Use str_replace():
````
$string = "people are using Iphone/'s instead of Android phone/'s";
$result = str_replace('/','',$string);
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
