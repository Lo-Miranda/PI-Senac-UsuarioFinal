<?php include('layout\header.php'); ?>
<?php include_once('..\model\dbcon.php')?> 
<?php include('..\controller\carregar_data.php')?> 



<!-- Forms -->
    <div class="col-md-12">
        <form action="..\controller\put_data.php?<?php echo $id; ?>" method="post">
            <div class="row">              
                <div class="col-md-12" style="font-size: 14px; font-weight: 200; padding: 20px 20px 10px 20px;">
                  <!-- Nome comercial -->
                  <label for="nome">Nome</label>
                  <input type="text" name="nome_comercial" placeholder="Nome comercial" class="form-control"
                  value="<?php echo $row['nome_comercial'] ?>">
                  <input type="hidden" name="id" value="<?php echo $row['id']?>">
                </div>    
                  <!-- Quantidade -->
                  <label for="quantidade">Unidades</label>
                  <input type="number" style="margin-left: 20px; width: 100px;" name="quantidade" placeholder="Unidades" class="form-control"
                  value="<?php echo $row['quantidade'] ?>">
                </div>
                <div class="col-md-12" style="font-size: 14px; font-weight: 200; padding: 20px 20px 10px 20px;">
                  
<!-- Botões -->
        <div class="col-md-12" style="font-size: 14px; font-weight: 200; padding: 20px 20px 10px 20px; 
        padding-bottom: 210px; text-align: center;">
            <a class="btn btn-primary" href="remedios_lista.php" role="button">Voltar</a>
            <input type="submit" class="btn btn-success" name="update_cadastro" value="Comprar"></a>                  
        </div>
                
            </div>              
        </form>
    </div>

    <?php include('layout\footer.php'); ?> 
