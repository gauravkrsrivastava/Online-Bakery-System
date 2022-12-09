<?php

$con=new mysqli("localhost","root","","Bakery");
$result=$con->query("SELECT * FROM Bakery");

foreach($result as $value){
	echo $value['Name'];
	echo"<br>";
	echo $value['Email'];
	echo"<br>";
	echo $value['Address'];
	echo"<br>";
	echo $value['Phone'];
	echo"<br>";
	echo $value['Date'];
	echo"<br>";
	echo $value['Time'];
	echo"<br>";
	echo $value['CakeFlavour'];
	echo"<br>";
	echo $value['Kg'];
	echo"<br>";
}


?>