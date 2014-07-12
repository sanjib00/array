<?php

$cars = array("volvo"=>"1950","toyota"=>"1967","Honda"=>"1980");
print_r($cars);
echo "<br/>";

foreach($cars as $x=>$x_value)
{
	echo "The " . $x ." car was produced on "  . $x_value . "<br/>";
	

}


?>

