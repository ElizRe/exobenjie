<?php
    require_once('./components/header.php');
    require_once('./class/database.php');
    require_once('./class/car.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Car Detail</title>
    <!-- Required meta tags -->
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-48" />
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
    <div class="container">
            <div class="row">
                <div class="col-lg-8 col-xs-12 col-centered">
                    <h1><strong>Car List</strong></h1>
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Image</th>
                                <th>Brand</th>
                                <th>Model</th>
                                <th>Type</th>
                                <th>Power</th>
                                <th>Weight</th>
                                <th>Max Speed</th>
                                <th>Acceleration</th>
                                <th>MPG</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                            <tbody>
<?php 
$row= Car::carDetail($_GET['id']);                         
?> 
        <td><?php echo $row['carId'] ?></td>
         <td><img src="<?php echo $row['image'] ; ?>" alt="my image"></td>
        <td><?php echo $row['nom'] ?></td><br/>
        <td><?php echo $row['model'] ?></td><br/>
        <td><?php echo $row['type'] ?></td><br/>
        <td><?php echo $row['power'] ?></td><br/>
        <td><?php echo $row['weight'] ?></td><br/>
        <td><?php echo $row['max_speed'] ?></td><br/>
        <td><?php echo $row['acceleration'] ?></td><br/>
        <td><?php echo $row['mpg'] ?></td>
        <td width="300"</td><br/>
        <td><a class="btn btn-primary" href="modify.php?id=<?php echo $row['carId']; ?>"><span class="glyphicon glyphicon-pencil"></span>Modify</a></td>
        <td><a class="btn btn-danger" href="delete.php?id=<?php echo $row['carId']; ?>"><span class="glyphicon glyphicon-remove"></span>Supprimer</a></td>
            </td>
            </tr>
        <form method="get" action="details.php">
        </form>
    </div>
</tbody>

    <!--   Core JS Files   -->
    <script src="assets/js/core/jquery.min.js"></script>
    <script src="assets/js/core/popper.min.js"></script>
    <script src="assets/js/bootstrapMaterialDesign.js"></script>

    <!--  Notifications Plugin, full documentation here: http://bootstrap-notify.remabledesigns.com/    -->
    <script src="assets/js/plugins/bootstrap-notify.js"></script>

    <!--  Charts Plugin, full documentation here: https://gionkunz.github.io/chartist-js/ -->
    <script src="assets/js/core/chartist.min.js"></script>

    <!-- Plugin for Scrollbar documentation here: https://github.com/utatti/perfect-scrollbar -->
    <script src="assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>

    <!-- Demo init -->
    <script src="assets/js/plugins/demo.js"></script>

    <!-- Material Dashboard Core initialisations of plugins and Bootstrap Material Design Library -->
    <script src="assets/js/material-dashboard.js?v=2.1.0"></script>
  </body>
</html>