<?php include 'actions/db_connect.php'; ?>

<!DOCTYPE html>
<html>
<head>
  

   <title>PHP CRUD</title>

   <style type ="text/css">
       .manageUser {
           width : 50%;
           margin: auto;
       }

        table {
           width: 100%;
            margin-top: 20px;
       }

   </style>

</head>
<body>


<!-- CREATE  TABLE `cars`.`cars` (
`id`  INT(11) NOT NULL AUTO_INCREMENT,
`brand` VARCHAR(255),
`model` VARCHAR(255),
`rental_begin` DATE,
 `rental_end` DATE,
 `price` Decimal(6,2),
  `img` VARCHAR(500),
`availability` enum("yes","no") DEFAULT "yes" ,
PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 -->

<?php
           $sql = "SELECT * FROM cars";
           $result = $connect->query($sql);

            if($result->num_rows == 0) {
              echo "No result";
            }
            else if ($result->num_rows == 1){
                $row = $result->fetch_assoc();?>
<div class ="manageUser">
   <a href= "create.php"><button type="button" >Add Car</button></a>
   <table  border="1" cellspacing= "0" cellpadding="0">
       <thead>
           <tr>
               <th>Car</th>
               <th >Option</th>
           </tr>
       </thead>
       <tbody>
                    <tr>
                       <td> <?= $row['brand']." ".$row['model' ] ?></td>
                       <td>
                           <a href="update.php?id=<?= $row['id']?>"><button type='button'>Edit</button></a>
                           <a href="delete.php?id=<?= $row['id']?>"><button type='button'>Delete</button></a>
                       </td>
                   </tr>
                </tbody>
                  </table>
                </div>
<!-- beg of bootstap -->

<div class="row row-cols-sm-1 row-cols-md-2 row-cols-lg-3 mx-4 justify-content-around">
    <div class="col-4 mb-4 p-2">
      <div class="card-deck" >
             <img src="<?= $row['img'] ?>" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title"><?= $row['brand']." ".$row['model' ] ?></h5>
            <p class="card-text">
       from <?= $row['rental_begin']." to ".$row['rental_end'] ?>
       <br>
            Now only for <b><?= $row['price'] ?> € per day</b></p>
                         
        </div>
  </div>
</div>
</div>
<!-- end of bootstrap -->
                <?php ;} 
             
            else {
                $rows = $result->fetch_all(MYSQLI_ASSOC);
                    ?>
<div class ="manageUser">
   <a href= "create.php"><button type="button" >Add Car</button></a>
   <table  border="1" cellspacing= "0" cellpadding="0">
       <thead>
           <tr>
               <th>Car</th>
               <th >Option</th>
           </tr>
       </thead>
       <tbody>
        <?php 
             
                             foreach ($rows as $key => $value){ ?>
                    <tr>
                       <td> <?= $value['brand']." ".$value['model' ] ?></td>
                       <td>
                           <a href="update.php?id=<?= $value['id']?>"><button type='button'>Edit</button></a>
                           <a href="delete.php?id=<?= $value['id']?>"><button type='button'>Delete</button></a>
                       </td>
                   </tr>
                   <?php ;} ?>
                </tbody>
                  </table>
                </div>
                
                  <div class="row row-cols-1 row-cols-md-2 row-cols-lg-5 justify-content-around">
               
<?php 
             
                             foreach ($rows as $key => $value){ ?>
<!-- beg of bootstap -->


    <div class="col mb-3 m-1">
      <div class="card h-100">
             <img src="<?= $value['img'] ?>" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title"><?= $value['brand']." ".$value['model' ] ?></h5>
            <p class="card-text">
       from <?= $value['rental_begin']." to ".$value['rental_end'] ?>
       <br>
            Now only for <b><?= $value['price'] ?> € per day</b></p>
                         
        </div>
  </div>
</div>

<!-- end of bootstrap -->
                <?php
               ;}
             }
             ?>
   
</div>
</body>
</html>