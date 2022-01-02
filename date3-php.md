# code
````
<?php
echo(strtotime("now") . "<br>");
echo(strtotime("3 October 2005") . "<br>");
echo(strtotime("+5 hours") . "<br>");
echo(strtotime("+1 week") . "<br>");
echo(strtotime("+1 week 3 days 7 hours 5 seconds") . "<br>");
echo(strtotime("next Monday") . "<br>");
echo(strtotime("last Sunday"));

echo "<br>";

echo date("Y-m-d",strtotime("3 days"));

````
# output
````
1641115170
1128297600
1641133170
1641719970
1642004375
1641168000
1640476800
2022-01-05
````
