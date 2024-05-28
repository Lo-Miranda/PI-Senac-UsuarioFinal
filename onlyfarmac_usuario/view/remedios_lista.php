<?php include('layout\header.php'); ?>
<?php include_once('..\model\dbcon.php')?>     

       
    <!-- Chamada para todos os produtos -->
    <div class="table-responsive" style="border-radius: 20px;">  
    <div style="padding-top:20px">
    <!-- SPAN - Palavra -->
    <div class="col-md-12" style="padding:10px 10px 10px 10px; background-color: #bff7d2;border-radius: 50px;">
              <span style="font-weight: 500; font-size: 20px;padding: 20px 20px 10px 20px">SUA LISTA: </span>          
            </div>
    </div>   
       <div class="table-responsive">
        <table class="table table-sm table-hover table bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome comercial</th>                                    
                    <th>Unidades</th>                   
                </tr>
            </thead>            
            <tbody>
                <?php include_once('..\controller\get_data.php'); ?>
                
            </tbody>
        </table>
        </div>
                               
         <!-- Mensagens: -->
        <?php include_once('msgs.php');?>
       
         <!-- Botão: -->
         <div class="col-md-12" style="font-size: 14px; font-weight: 200; padding: 20px 20px 10px 20px; text-align: center;">
            <a class="btn btn-primary" href="usuarios.php" role="button">Voltar</a>                          
        </div>

     </div>  
     <?php include('layout\footer.php'); ?> 