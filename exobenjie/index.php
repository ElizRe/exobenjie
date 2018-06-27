<?php
    require_once('./components/header.php');
    require_once('./class/database.php');
    require_once('./class/car.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Exo Voitures</title>
    <!-- Required meta tags -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

    <!-- Material Dashboard CSS -->
    <link rel="stylesheet" href="./assets/css/material-dashboard.css">
    <link rel="stylesheet" href="./assets/css/style.css">

  </head>
  <body>
    <header>
            <div class="row">
<div class="bg-image" id="jumboid">
<img src="assets/img/spider.jpeg" class="img-responsive" alt="Alpha Romeo Spider"/>
</div>
        </header>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-xs-12 col-centered">
                    <h1><strong>Car List</strong></h1>
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Brand</th>
                                <th>Model</th>
                                <th>Action</th>  
                                </tr>
                        </thead>
                        <tbody>
<?php                          
    $result= Car::carList();
foreach ($result as $row) {
            echo '<tr>';
            echo '<td>' . $row['carId'] . '</td>';
            echo '<td>' . $row['nom'] . '</td>';
            echo '<td>' . $row['model'] . '</td>';
            echo '<td width="100">';
            echo '<a class="btn btn-primary" href="details.php?id='.$row['carId'].'"><span class="glyphicon glyphicon-pencil"></span>Details</a>';
            echo '</td>';
            echo '</tr>';
                        }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>

    <!--   Core JS Files   -->
    <script src="./assets/js/core/jquery.min.js"></script>
    <script src="./assets/js/core/popper.min.js"></script>
    <script src="./assets/js/bootstrapMaterialDesign.js"></script>

    <!--  Notifications Plugin, full documentation here: http://bootstrap-notify.remabledesigns.com/    -->
    <script src="./assets/js/plugins/bootstrap-notify.js"></script>

    <!--  Charts Plugin, full documentation here: https://gionkunz.github.io/chartist-js/ -->
    <script src="./assets/js/core/chartist.min.js"></script>

    <!-- Plugin for Scrollbar documentation here: https://github.com/utatti/perfect-scrollbar -->
    <script src="./assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>

    <!-- Demo init -->
    <script src="./assets/js/plugins/demo.js"></script>

    <!-- Material Dashboard Core initialisations of plugins and Bootstrap Material Design Library -->
    <script src="./assets/js/material-dashboard.js?v=2.1.0"></script>
    <?php
require_once('./components/footer.php');
?>
  </body>
</html>