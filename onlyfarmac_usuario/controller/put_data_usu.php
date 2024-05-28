<?php include_once('..\model\dbcon.php')?> 
<?php
    if(isset($_POST['update_cadastro'])){

        $idnew = $_REQUEST['id'];

        $name = $_POST['nome'];
        $endereco = $_POST['endereco'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];       

        $query = "UPDATE usuario SET 
        nome = '$name',
        endereco = '$endereco',
        email = '$email',
        senha = '$senha'   
        WHERE id = $idnew";     
        
        $result = mysqli_query($connection, $query);
        
        if(!$result){
            die("query Failed".mysqli_error($connection));
        }           
        else {
            header('location:..\view\usuarios.php?msg=Cadastro realizado com sucesso.');
            
        }
    }
