<?php include_once('..\model\dbcon.php')?> 
<?php
    $query = "SELECT * FROM `usuario`";
    $result = mysqli_query($connection, $query);
    if (!$result) {
         die("query Failed".mysqli_error($connection));
    } else {
        while($row = mysqli_fetch_assoc($result)){
            ?>
            <tr>
                <td><?php echo $row['nome']; ?></td>                                                       
                <td><?php echo $row['endereco']; ?></td>  
                <td><?php echo $row['email']; ?></td>   
                <td><?php echo $row['senha']; ?></td> 
            </tr>    
            <tr>
                <td></td>                
                <td><a href="..\view\update_usu.php?id=<?php echo $row['id']; ?>" class="btn btn-primary" 
                >Atualizar perfil</a></td>
                <td><a href="..\view\remedios_lista.php?id=<?php echo $row['id']; ?>" class="btn btn-secondary" 
                >Sua lista de medicamentos</a></td>                  
            </tr>                        
                                                    
            
            <?php
        }
    }                
