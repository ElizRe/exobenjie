<?php
    require_once('./components/header.php');
    require_once('./class/database.php');
    require_once('./class/car.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Add A New Car!</title>
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
    <?php
if(isset($_POST['save']))
    {
        $image = $_POST($_POST['image']);
        $brand = $_POST($_POST['brand']);
        $model = $_POST['model'];
        $type = $_POST['type'];
        $power = $_POST['power'];
        $weight = $_POST['weight'];
        $max_speed = $_POST['max_speed'];
        $acceleration = $_POST['acceleration'];
        $mpg = $_POST['mpg'];
        
$row= Car::carInsert();
}
?>

<form action="insert.php" method="post" name="form1" enctype="multipart/form-data">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label class="bmd-label-static"for="brand">Brand</label>
      <input type="text" class="form-control" name="brand">
    </div>
  <div class="form-group col-md-6">
    <label class="bmd-label-static"for="model">Model</label>
    <input type="text" class="form-control" name="model">
  </div>
  <div class="form-group col-md-6">
    <label class="bmd-label-static"for="type">Type</label>
    <input type="text" class="form-control" name="type">
  </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-2">
      <label class="bmd-label-static"for="power">Power</label>
      <input type="text" class="form-control" name="power">
    </div>
    <div class="form-group col-md-2">
      <label class="bmd-label-static"for="weight">Weight</label>
      <input type="text" class="form-control" name="weight">
    </div>
    <div class="form-group col-md-2">
      <label class="bmd-label-static"for="max_speed">Max_speed</label>
      <input type="text" class="form-control" name="max_speed">
    </div>
    <div class="form-group col-md-2">
      <label class="bmd-label-static"for="acceleration">Acceleration</label>
      <input type="text" class="form-control" name="acceleration">
    </div>
    <div class="form-group col-md-2">
      <label class="bmd-label-static"for="mpg">MPG</label>
      <input type="text" class="form-control" name="mpg">
    </div>
    <div class="form-groupcol-md-2">
            <label for="image">Select your image:</label>
            <input type="file" id="image" name="image">
    </div>
    </div>
    <div class="form-actions">
    <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-pencil"></span> Submit</button>
    <a class="btn btn-primary" href="index.php"><span class="glyphicon glyphicon-arrow-left"></span> Return</a>
  </div>
</form>

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
    <?php
require_once('./components/footer.php');
?>
  </body>
</html>