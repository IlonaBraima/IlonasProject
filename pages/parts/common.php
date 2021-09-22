<?php
include('../../uzdevumi/datubaze.php');
$iconSelect = "SELECT * FROM `head_right`";
$iconResult = $conn->query($iconSelect);

function getSidebar($isHomePage = false) { ?>
    <div class="head-r">
        <div class="flex just-center">
            <?php
            while ($icon = $iconResult->fetch_assoc()) {
                echo  '<a href="' . $icon['adres'] . '"class="' . $icon['fonts'] . '"title="' . $icon['title'] . '"></a>';
            }
            ?>
        </div>
    </div>
    <?php if (!$isHomePage) { ?>
        <div class="head-l">
            <div><a class="linker" href="../index.php">HOME</a></div>
        </div>
    <?php }
}