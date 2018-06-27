<?php
    require_once('./components/header.php');
    require_once('./class/database.php');
    require_once('./class/car.php');
?>
<body>
    <?php

    if(isset($_GET['id']))
    {
        $id =($_GET['id']);
        Car::carDelete($id);
    }
    ?>
</body>
</html>