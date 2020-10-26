<div id="myblac" class="container-fluid p-0">
    <?php
    // HEADER BACKGROUND
    include 'App/HeaderImg.php';
    // KATEGORY KONATINER
    include 'App/KategoryCon.php';

    ?>
</div>
    <?php
    // MY DIALOG
    require_once 'App/MyDialog.php';

    ?>

<?php // FOR AJAX SELECT ALL FOTO FOR KATEGORY ?>
<div id="mykat" class="container-fluid p-0 display-non">
    <div id="body"></div>
</div>