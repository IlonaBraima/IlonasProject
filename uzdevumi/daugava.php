<!DOCTYPE html>
<html lang="en">

<?php
        include('datubaze.php');
        $upes_id=$_GET['id'];
        if($upes_id<1) {
        $upes_id=1;
        }

        $select="SELECT id, nosaukums, apraksts FROM latvijasupes1 WHERE id=".$upes_id;
        $select_img="SELECT id, name, photo FROM upes_img WHERE upes_id=".$upes_id;
        $result=$conn->query($select);
        $result_img=$conn->query($select_img);
        $rinda=$result->fetch_assoc();

?>



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

                        <div class="upes-name"><h1 id="upe"><?php echo $rinda["nosaukums"]?></h1></div>
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
                    <p class="daugavafont">
                        <?php
                        echo $rinda["apraksts"]
                        ?>
                    </p>
                </div>
             <div class="right"></div>
    </div>
    <div class="row">
            <div class="left"></div>
                <div class="center slider_control">
                          <button onclick="left()" class="slider-button slider-button--left">
                            <span class="far fa-hand-point-left"></span>
                          </button>
                          <button onclick="right()" class= "slider-button slider-button--right">
                            <span class="far fa-hand-point-right"></span>
                          </button>
                </div>
            <div class="right"></div>
    </div>
    <div class="row">
            <div class="left"></div>
                <div class="center">
                    <?php
                    while($rinda_img=$result_img->fetch_assoc()){
                    echo '<div class="daugavaimg"><img class="z" src="../images/' .$rinda_img["photo"]. '" alt="Фото1"
                    title="Daugava" /></div>';
                    }
                    ?>
                    </div>
            <div class="right"></div>
    </div>


<script src="script.js"></script>

</body>
</html>