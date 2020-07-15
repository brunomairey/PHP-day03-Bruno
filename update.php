<?php 

require_once 'actions/db_connect.php';

if (isset($_GET['id'])) {
   $id = $_GET['id'];

    $sql = "SELECT * FROM `cars` WHERE id = {$id}" ;
   $result = $connect->query($sql);

   $data = $result->fetch_assoc();

   $connect->close();
//echo $sql;
?>

<!DOCTYPE html>
<html>
<head>
   <title >Edit Car</title>

   <style type= "text/css">
       fieldset {
           margin : auto;
           margin-top: 100px;
            width: 50%;
       }

       table  tr th {
           padding-top: 20px;
       }
   </style>

</head>
<body>

<fieldset>
   <legend>Update Car</legend>

   <form action="actions/a_update.php"  method="post">
       <table  cellspacing="0" cellpadding= "0">
           <tr>
               <th>Brand</th>
               <td><input type="text"  name="brand" placeholder ="<?php echo $data['brand'] ?>" value="<?php echo $data['brand'] ?>"  /></td>
           </tr>    
           <tr>
               <th>Model</th>
               <td><input type= "text" name="model"  placeholder="<?php echo $data['model'] ?>" value ="<?php echo $data['model'] ?>" /></td >
           </tr>
           <tr>
               <th >Price</th>
               <td><input type ="text" name= "price" placeholder= "<?php echo $data['price'] ?>" value= "<?php echo $data['price'] ?>" /></td>
           </tr>
           <tr>
               <input type= "hidden" name= "id" value= "<?php echo $data['id']?>" />
               <td><button  type= "submit">Save Changes</button ></td>
               <td><a href= "index.php"><button  type="button" >Back</button></a></td>
           </tr>
       </table>
   </form >

</fieldset >

</body >
</html >

<?php
} else{ echo"there is no id";}
?>