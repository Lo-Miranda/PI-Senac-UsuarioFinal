<?php include_once('..\model\dbcon.php')?> 
<?php
    if(isset($_POST['update_cadastro'])){

        $idnew = $_REQUEST['id'];

        $name = $_POST['nome_comercial'];
        $quantidade = $_POST['quantidade'];

        $query = "UPDATE farmacos SET 
        nome_comercial = '$name',
        quantidade = $quantidade
        WHERE id = $idnew";     
        
        $result = mysqli_query($connection, $query);
        
        if(!$result){
            die("query Failed".mysqli_error($connection));
        }           
        else {
            header('location:..\view\remedios_lista.php?update_msg=Produto foi incluso no carrinho.');
            
        }
    }
