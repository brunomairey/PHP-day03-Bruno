<?php 

require_once 'db_connect.php';

if ($_POST) {
   $model = $_POST['model'];
   $brand = $_POST['brand'];
   $price = $_POST['price'];

   $id = $_POST['id'];

   $sql = "UPDATE cars SET `brand` = '$brand', `model` = '$model', `price` = '$price' WHERE id = {$id}" ;
   if($connect->query($sql) === TRUE) {
       echo  "<p>Successfully Updated</p>";
       echo "<a href='../update.php?id=" .$id."'><button type='button'>Back</button></a>";
       echo  "<a href='../index.php'><button type='button'>Home</button></a>";
   } else {
        echo "Error while updating record : ". $connect->error;
   }

   $connect->close();

}

?>