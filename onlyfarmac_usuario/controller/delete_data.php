<?php include_once('..\model\dbcon.php')?> 
<?php
   
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
    
        $query = "DELETE from farmacos WHERE id = $id";
        
        $result = mysqli_query($connection, $query);
        if (!$result) {
            die("query Failed".mysqli_error($connection));
        }
        else {
            header('location:..\view\remedios_lista.php?delete_msg=Produto excluído da sua lista.');   
            
        }
        
    } else {
        print_r('morri');
    }

