<!DOCTYPE html>
<html lang="en">

    <?php
        include('datubaze.php');
        $upesSelect = "SELECT * FROM latvijasupes1";
        $upesResult = $conn->query($upesSelect);
        $iconSelect = "SELECT * FROM head_right";
        $iconResult = $conn->query($iconSelect);
    ?>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="uzdevumi.css" type="text/css">
    <link rel="stylesheet" href="../styles/style.css" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no, viewport-fit=cover" />
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <title>Upes</title>
</head>

<body class="upes">

    <div class=head-r>
        <div class="flex just-center">

            <?php
            while ($icon = $iconResult->fetch_assoc()) {
            echo  '<a class="icon" title="' . $icon['title'] . '"href="' . $icon['adres'] . '">
            <img src="../images/' . $icon['icon'] . '"></a>';
            }
            ?>
        </div>
    </div>

    <div class=head-l>
        <div><a class="linker" href="../index.php">HOME</a></div>
    </div>
    <div class="row">
        <h1>LATVIJAS UPES</h1>
    </div>
    <div class="row">
        <div class="left"></div>
            <div class="center">
                <div class="menurow">
                    <?php
                    while ($upe = $upesResult->fetch_assoc()) {
                    echo '<div class="mb"><a href="daugava.php?id=' . $upe['id'] . '">' . $upe['nosaukums']  . '</a></div>';
                    }
                    ?>
                </div>
            </div>
        <div class="right"></div>
    </div>
    <div class="row">
        <div class="left"></div>
            <div class="center"><img src="../images/upes.gif" alt="Иллюстрация" width="100%"></div>
        <div class="right"></div>
    </div>



<script src="script.js"></script>
</body>
</html>