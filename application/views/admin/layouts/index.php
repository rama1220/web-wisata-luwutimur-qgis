<!DOCTYPE html>
<html lang="en">
<?php include 'head1.php' ?>

<body class="nav-md">
    <div class="container body">
        <div class="main_container"></div>



        <!-- page content -->

        <?= $content ?>


        <?php include 'javascript.php' ?>

        <?php
        if (isset($js)) {
            echo $js;
        }
        ?>

</body>

</html>