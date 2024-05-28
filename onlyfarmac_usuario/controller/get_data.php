<?php include_once('..\model\dbcon.php')?> 
<?php
    $query = "SELECT * FROM `farmacos`";
    $result = mysqli_query($connection, $query);
    if (!$result) {
         die("query Failed".mysqli_error($connection));
    } else {
        while($row = mysqli_fetch_assoc($result)){
            ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['nome_comercial']; ?></td>                                                       
                <td><?php echo $row['quantidade']; ?></td>                            
                <td><a href="..\view\update_page_1.php?id=<?php echo $row['id']; ?>" class="btn btn-success">Ver</a></td>  
                <td><a href="..\controller\delete_data.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Del</a></td>                     
            </tr>
            <?php
        }
    }                
