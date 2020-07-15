code serry

 <?php
           $sql = "SELECT * FROM cars";
           $result = $connect->query($sql);

            if($result->num_rows == 0) {
              echo "No result";
            }
            else if ($result->num_rows == 1){
                $row = $result->fetch_assoc(); ?>
                <tr> 
                       <td> <?= $row['first_name']. " ". $row['last_name' ] ?> </td>
                       <td>
                           <a href='update.php?id=<?= $row['id'] ?>'><button type='button'>Edit</button></a>
                           <a href='delete.php?id=<?= $row['id'] ?>'><button type='button'>Delete</button></a>
                       </td>
                   </tr>
                     </tbody>
                  </table>
                  </div>