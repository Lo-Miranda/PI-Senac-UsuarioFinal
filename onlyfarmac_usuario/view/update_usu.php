<?php include('layout\header.php'); ?>
<?php include_once('..\model\dbcon.php')?> 
<?php include('..\controller\carregar_data_usu.php')?> 

<!-- Forms -->
<div class="col-md-12">
        <form action="..\controller\put_data_usu.php?<?php echo $id; ?>" method="post">
            <div class="col-md-12" style="text-align: left; padding: 10px 10px; padding-top: 20px;
            padding-bottom: 10px;">              
                  <!-- Nome-->
                  <label for="nome">Nome: </label>
                  <input type="text" name="nome" placeholder="Nome completo" class="form-control"
                  value="<?php echo $row['nome'] ?>">
                  <input type="hidden" name="id" value="<?php echo $row['id']?>">                            
                  <!-- Endereço -->
                  <label for="endereco">Endereço: </label>
                  <input type="text"  name="endereco" placeholder="Endereço" class="form-control"
                  value="<?php echo $row['endereco'] ?>">
                  <!-- Email -->
                  <label for="email">E-mail: </label>
                  <input type="text"  name="email" placeholder="E-mail" class="form-control"
                  value="<?php echo $row['email'] ?>">
                  <!-- Senha -->
                  <label for="senha">Senha : </label>
                  <input type="number" name="senha" placeholder="Senha" class="form-control"
                  value="<?php echo $row['senha'] ?>">
               
        <div class="col-md-12" style="font-size: 14px; font-weight: 200; padding: 20px 20px 10px 20px;">                  
        <!-- Botões -->
        <div class="col-md-12" style="font-size: 14px; font-weight: 200; padding: 20px 20px 10px 20px; 
        padding-bottom: 100px; text-align: center;">
            <a class="btn btn-primary" href="login.php" role="button">Voltar</a>
            <input type="submit" class="btn btn-success" name="update_cadastro" value="Atualizar"></a>                  
        </div>
                
            </>              
        </form>
    </div>
<?php include('layout\footer.php'); ?> 

