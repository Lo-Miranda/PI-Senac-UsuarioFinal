<?php include('layout\header.php'); ?>
<?php include_once('..\model\dbcon.php')?> 

  
    
<!-- SPAN - Cadastro palavra -->
  <div class="col-md-12" style="padding:10px 10px 10px 10px; border-radius: 50px">
      <span style="background-color: #adffc8; border-radius:20px; padding: 05px;">Cadastro de usuário</span>          
  </div>
<!-- Forms -->
  <div class="col-md-12">
    <form action="..\controller\post_data.php" method="post">
      <div class="col-md-12" style="text-align: left; padding: 10px 10px;">              
                  <!-- Nome-->         
                  <label for="nome" style="padding-top:10px;">Nome: </label>         
                  <input type="text" name="nome" placeholder="Nome completo" class="form-control">
                  <input type="hidden" name="id" value="<?php echo $row['id']?>">                            
                  <!-- Endereço -->  
                  <label for="endereco" style="padding-top:10px;">Endereço: </label>                  
                  <input type="text"  name="endereco" placeholder="Endereço" class="form-control">
                  <!-- Email -->   
                  <label for="email" style="padding-top:10px;">E-mail: </label>                 
                  <input type="email"  name="email" placeholder="E-mail" class="form-control">
                  <!-- Senha -->  
                  <label for="senha" style="padding-top:10px;">Senha: </label>                  
                  <input type="passord" name="senha" placeholder="Senha" class="form-control">
        </div>            
      
                  
<!-- Botões -->
    <div class="col-md-12" style="font-size: 14px; font-weight: 200; padding: 20px 20px 10px 20px; text-align: center;">
      <a class="btn btn-primary" href="login.php" role="button">Já possui conta?</a>
      <input type="submit" class="btn btn-success" name="add_cliente" value="Cadastrar"></a>                  
    </div>
                
                          
    </form>
  </div>     
 
  <?php include('layout\footer.php'); ?> 
 
