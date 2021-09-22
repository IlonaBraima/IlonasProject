<div class=head-r>
    <div class="flex just-center">
        <?php
        while ($icon = $iconResult->fetch_assoc()) {
            echo  '<a href="' . $icon['adres'] . '"class="' . $icon['fonts'] . '"title="' . $icon['title'] . '"></a>';
        }
        ?>
    </div>
</div>
