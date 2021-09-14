<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="uzdevumi.css" type="text/css">
    <link rel="stylesheet" href="../fonts/css/all.css" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no, viewport-fit=cover" />

    <title>Daugava</title>
</head>

<body class="daugava">

<div class="row">
    <div class="left"></div>
    <div class="center">
        <div class="upes-menu">

            <div class="upes-name"><h1 id="upe">Pievienot upi!</h1></div>
        </div>

        <div class="upes-back">
            <a href="upes.php"><span class="iconhome fas fa-home"></span></a>
        </div>
    </div>
    <div class="right"></div>
</div>


<div class="row">
    <div class="left"></div>
    <div class="center">
        <?php
        include('datubaze.php');

        if(isset($_POST['sub1'])) {
        $sql_upe="INSERT INTO latvijasupes1 (nosaukums, apraksts)
        VALUES ('".$_POST['upes_nos']."', '<div class=\"upes-text colorized\><p>".$_POST['upes_apr']."</p></div>')";
        mysqli_query($conn,$sql_upe);
        }

        ?>

        <form action="forma.php" method="post">
        <label for="upes_nos">Upes nosaukums</label>
        <input type="text" name="upes_nos"><br/>
        <label for="upes_apr">Upes apraksts</label>
        <input type="text" name="upes_apr"><br/>

        <input type="submit" name="sub1" value="Saglabat"

        </form>

    </div>
    <div class="right"></div>
</div>

<script src="script.js"></script>

</body>
</html>