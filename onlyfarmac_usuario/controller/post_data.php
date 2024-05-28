<?php
 include_once('..\model\dbcon.php'); 

if(isset($_POST['add_cliente'])) {    

    $name = str_replace("'", "", $_POST['nome']);
    $endereco = str_replace("'", "", $_POST['endereco']);
    $email = str_replace("'", "", $_POST['email']);
    $senha = str_replace("'", "", $_POST['senha']);
    
    if($name == "" || empty($name)){
        header('login.php?message=Campo de "Nome" está vazio.');
    }
    else {
        $query = "INSERT into usuario (nome, endereco, email, senha)
        values 
        ('$name', '$endereco', '$email', '$senha')";
        
        $result = mysqli_query($connection, $query);

        if(!$result) {
            die("query Failed".mysqli_error($connection));
        } else {
            
            header('location:..\view\login.php?msg=Cadastro realizado com sucesso.');
        }
    }
}
