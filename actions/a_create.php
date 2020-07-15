<?php 

require_once 'db_connect.php';

if ($_POST) {
   $brand = $_POST['brand'];
   $model = $_POST['model'];
    $price = $_POST['price'];
     $rentalbegin = $_POST['rentalbegin']; 
     $rentalend = $_POST['rentalend'];
   $img = $_POST['img'];

  
  $sql = "INSERT INTO `cars` (`brand`, `model`, `rental_begin`, `rental_end`, `price`, `img`) VALUES ('$brand', '$model', '$rentalbegin', '$rentalend', '$price', '$img')";
    if($connect->query($sql) === TRUE) {
       echo "<p>New Record Successfully Created</p>" ;
       echo "<a href='../create.php'><button type='button' class=\"btn btn-primary\">Back</button></a>";
        echo "<a href='../index.php'><button type='button' class=\"btn btn-primary\">Home</button></a>";
   } else  {
       echo "Error " . $sql . ' ' . $connect->connect_error;
   }

   $connect->close();
}

?>