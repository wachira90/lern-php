## Example 2:
The below program performs the search using the in_array() 
function in strict mode ie., the last parameter $mode is set to true 
and the function will now also check the type of values.

````
<?php
$name = array("ravi", "ram", "rani", 87);

if (in_array("ravi", $name, TRUE)) {
	echo "found \n";
} else {
	echo "not found \n";
}

if (in_array(87, $name, TRUE)) {
	echo "found \n";
} else {
	echo "not found \n";
}

if (in_array("87", $name, TRUE)) {
	echo "found \n";
} else {
	echo "not found \n";
}
````
