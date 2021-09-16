
<?php
$conn=mysqli_connect("localhost","root","","upes");
if(!$conn){
	die("Pieslēguma kļūda: ".mysqli_connect_error());
}

mysqli_set_charset($conn,"utf8");

?>

