
<?php
$conn=mysqli_connect("localhost","root","","ilonasproject");
if(!$conn){
	die("Pieslēguma kļūda: ".mysqli_connect_error());
}

mysqli_set_charset($conn,"utf8");

?>

