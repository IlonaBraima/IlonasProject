<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
        <link rel="stylesheet" href="uzdevumi.css" type="text/css">
            <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">

</head>
<body>

 <title>PHP sintakse</title>
<p>PHP macibu fails</p>

<?php
include('funkcijas.php');

echo "PHP kods";
print "vel viens kods";
echo "<h3>vel kads kods</h3>";
Echo "Case sentitive";
$skaitlis_1=12;
$Skaitlis_1=13.969;
$jauna_vertiba_33;
$rinda="Teksta mainigais";

echo "<h3>".$rinda."</h3>";

echo "<br/> Reiz: ".$reizinajums=$skaitlis_1*$Skaitlis_1;
echo "<br/> Dal: ".$reizinajums=$skaitlis_1/$Skaitlis_1;
echo "<br/> Starp: ".$reizinajums=$skaitlis_1-$Skaitlis_1;
echo "<br/> Sum: ".$reizinajums=$skaitlis_1+$Skaitlis_1;
echo "<br/> Pakap: ".$reizinajums=$skaitlis_1**2;
echo "<br><br>";

echo "!! BIJA !!", $skaitlis_1;
$skaitlis_1=$Skaitlis_1*3;
echo "<br>!! TAGAD !!".$skaitlis_1;

$jauns_teksts=$rinda.$Skaitlis_1;
echo "<h3>".$jauns_teksts."</h3>";

echo"<div class='php'>PI ".pi()."</div>";
echo"<div class='php'>SAKNE ".sqrt(144)."</div>";
echo"<div class='php'>Vesela d ".round($Skaitlis_1)."</div>";
echo"<div class='php'>G-Skaitlis ".rand(1,10)."</div>";



echo "<br/> Laukums ir: ".sturis(12, 77);
rl(25,33);
tuksa();
tuksa();
tuksa();
tuksa();
tuksa();

?>

   <div class="row">
        <div class="left"></div>
        <div class="center">
        <div class="menurow">
        <?php
$fr1='<div class="mb"><a href=';
$fr2='">"';
$fr3='</a></div>';

$upes_n=array("DAUGAVA","GAUJA","LIELUPE");
$upes_p=array("daugava.php", "gauja.html", "lielupe.html");

for ($i=0; $i < count($upes_p); $i++) {
    echo $fr1.$upes_p[$i].$fr2.$upes_n[$i].$fr3;
}

echo "<br/>Upe: ".$upes_n[0];
echo "<br/>upes mas garums: ".count($upes_n);           //count - masiva garums
echo "<br/>upe1 mainiga simvolu skaits: ".strlen($rinda); //strlen - rindas garums
$upes_n{3}="VENTA";
echo "<br/> upes mas garums tagad: ".count($upes_n);

for ($i=0; $i <10 ; $i++) {   //i++ - $i=$1+1
       echo "<br/>Cikla skaititajs: ".$i;
}

for ($i=0; $i < count($upes_n); $i++) {
       echo "<br/>elements: ".$i."upe: ".$upes_n[$i];
}

$n=4;

while($n < count($upes_n)) {
        echo"<br/>Upe: ".$upes_n[$n];
        $n=$n+1;
        }

$n=3;

        echo"<br/> N: ".$n."....... I: ".$i;

if ($n>$i) {
    echo "<br/>--- IF N lielaks par I <br/>";
} else {
    echo "<br/>---ELSE--- I lielaks par N <br/>";
}

if ($n>$i) {
    echo "<br/>---ELSEIF--- N lielaks par I <br/>";
} elseif ($n==$i) {
    echo "<br/>---ELSEIF--- N vienads ar I <br/>";
}
else {
    echo "<br/>---ELSEIF--- I lielaks par N <br/>";
}
$puse=2;

switch ($puse) {
    case '1':
        echo "<br/>Rietumi";
        //break;
    case '2':
        echo "<br/>Austrumi";
        //break;
    case '3':
        echo "<br/>Ziemeli";
        //break;
    case '4':
        echo "<br/>Dienvidi";
        //break;


    default: {
           echo"<br/>Nedosimies nekur";
           break;

           }
}

?>

        </div>
        </div>
        <div class="right"></div>
    </div>

</body>
</html>