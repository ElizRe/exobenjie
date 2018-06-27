<?php
require_once('class/database.php');
class Car
{

static public function carList()
{
$statement = Database::connect()->query('SELECT *, car.id AS carId from car
INNER JOIN brand on car.brand = brand.id ORDER BY car.id');
return $statement->fetchAll();
}

static public function carDetail($id)
{
$statement = Database::connect()->query("SELECT *, car.id AS carId FROM car INNER JOIN brand on car.brand = brand.id WHERE car.id = $id");
return $statement->fetch();
}

static public function carModify($data)
{
$statement = Database::connect()->query("UPDATE car SET model='".$data['model']."',power='".$data['power']."',weight='".$data['weight']."',image='".$data['image']."',max_speed='".$data['max_speed']."',acceleration='".$data['acceleration']."',mpg='".$data['mpg']."',brand='".$data['brand']."',type='".$data['type']."'
	WHERE id=".$data['id']);
}

static public function carDelete($id)
{
	try
	{
$statement = Database::connect()->query("DELETE FROM car WHERE id = $id");
echo'<h1>Car Deleted</h1>';
            header("Refresh:1; url=/index.php");
            
    }
        catch(PDOException $e) {
            print "Error!  " . $e->getMessage() . "<br/>";
            die();

	}
}

static public function carInsert($model,$power,$weight,$image,$max_speed,$acceleration,$mpg,$brand,$type)
{ 

try
        {
        $statement = Database::connect()->prepare("INSERT INTO car(model,power,weight,image,max_speed,acceleration,mpg,brand,type)
            VALUES(:model,:power,:weight,:image,:max_speed,:acceleration,:mpg,:brand,:type)");
            $create->execute(array(':model'=> $model,':power'=> $power,':weight'=> $weight,':image'=> $image,':max_speed'=> $max_speed,':acceleration'=> $acceleration,':mpg'=> $mpg,':brand'=> $brand,':type'=> $type));

            echo'<h1>Car Added</h1>';
            	header("Refresh:1; url=/index.php");
            
        }
        catch(PDOException $e) {
            print "Erreur!  " . $e->getMessage() . "<br/>";
            die();
        }
}
}
?>