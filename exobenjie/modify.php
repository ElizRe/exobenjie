<?php
    require_once('./components/header.php');
    require_once('./class/database.php');
    require_once('./class/car.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Modify Car Details</title>
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
      
    if(!empty($_POST)) {
      Car::carModify($_POST);
    }
    if(isset($_GET['id']))
    {
        $row= Car::carDetail($_GET['id']); 
    }

    
?>
<form action="modify.php?id=<?php echo $_GET['id']; ?>" method="post" name="form2">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label class="bmd-label-static"for="id">id</label>
      <input type="text" class="form-control" name="id"
      type="hidden" value = <?php echo $row['carId'] ?>>
    </div>
    <div class="form-group col-md-6">
      <label class="bmd-label-static"for="image">image</label>
      <input type="file" class="form-control" name="image" placeholder="image" value = <?php echo $row['image'] ?>>
    </div>
    <div class="form-group col-md-6">
      <label class="bmd-label-static"for="brand">brand</label>
      <input type="text" class="form-control" name="brand" placeholder="brand" value = <?php echo $row['nom'] ?>>
    </div>
  </div>
  <div class="form-group">
    <label class="bmd-label-static"for="model">Model</label>
    <input type="text" class="form-control" name="model" placeholder="model"value = <?php echo $row['model'] ?>>
  </div>
  <div class="form-group">
    <label class="bmd-label-static"for="type">Type</label>
    <input type="text" class="form-control" name="type" placeholder="type" value = <?php echo $row['type'] ?> >
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label class="bmd-label-static"for="power">Power</label>
      <input type="text" class="form-control" name="power"value = <?php echo $row['power'] ?>>
    </div>
    <div class="form-group col-md-2">
      <label class="bmd-label-static"for="weight">Weight</label>
      <input type="text" class="form-control" name="weight" value = <?php echo $row['weight'] ?>>
    </div>
    <div class="form-group col-md-2">
      <label class="bmd-label-static"for="acceleration">acceleration</label>
      <input type="text" class="form-control" name="acceleration" value = <?php echo $row['acceleration'] ?>>
    </div>
    <div class="form-group col-md-2">
      <label class="bmd-label-static"for="max_speed">Max_speed</label>
      <input type="text" class="form-control" name="max_speed" value = <?php echo $row['max_speed'] ?>>
    </div>
    <div class="form-group col-md-2">
      <label class="bmd-label-static"for="mpg">mpg</label>
      <input type="text" class="form-control" name="mpg" value = <?php echo $row['mpg'] ?>>
    </div>
  </div>
  <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></span>Submit</button>
  <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-left"></span>Return</button>
</form>
<?php
    require_once('./components/footer.php');
?>

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