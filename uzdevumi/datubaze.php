
<?php
// $conn=mysqli_connect("localhost","root","","ilonasproject");
$conn=mysqli_connect("localhost:3306","ilonasdiary","somepassword123!!","ilonasproject");
if(!$conn){
	die("Pieslēguma kļūda: ".mysqli_connect_error());
}

mysqli_set_charset($conn,"utf8");

?>

