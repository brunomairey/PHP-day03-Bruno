
<?php include 'actions/db_connect.php'; ?>
<!DOCTYPE html>

<html>
<head>
   <title>PHP CRUD  |  Add Cars</title>

   <style type= "text/css">
      </style>

</head>
<body>
<form class="mx-5" action="actions/a_create.php" method= "post">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="brand">Brand</label>
      <input type="text" class="form-control" name="brand" placeholder="brand of the car">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Model</label>
      <input type="text" class="form-control" name="model" placeholder="model of the car">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="price">Price</label>
      <input type="number" class="form-control" name="price" step="0.01" placeholder="39.99">
    </div>
    <div class="form-group col-md-4">
      <label for="inputPassword4">Rental Begin</label>
      <input type="date" class="form-control" name="rentalbegin">
    </div>
    <div class="form-group col-md-4">
      <label for="inputPassword4">Rental End</label>
      <input type="date" class="form-control" name="rentalend">
    </div>
  </div>

    <div class="form-group">
    <label for="img">Image link</label>
    <input type="text" class="form-control" name="img" placeholder="Insert Image link">
    </div>
  
  <button type="submit" class="btn btn-primary">Insert Car</button>
   <a class="btn btn-primary" href="index.php" type="button" role="button">
    Back to main Page
  </a>
</form>
<!-- 
<fieldset >
   <legend>Add User</legend>

   <form  action="actions/a_create.php" method= "post">
       <table cellspacing= "0" cellpadding="0">
           <tr>
               <th>First Name</th >
               <td><input  type="text" name="first_name"  placeholder="First Name"></td >
           </tr>    
           <tr>
               <th>Last Name</th>
               <td><input  type="text" name= "last_name" placeholder="Last Name"></td>
           </tr>
           <tr>
               <th>Date of birth</ th>
               <td><input type="date"  name="date_of_birth" placeholder ="Data of birth"></td>
           </tr>
           <tr>
               <td><button type ="submit">Insert user</button></td>
               <td ><a href= "index.php"><button  type="button">Back</ button></a></td>
           </tr >
       </table>
   </form>

</fieldset > -->
<?php $connect->close(); ?>
</body>
</html>