<?php include('layout\header.php'); ?>
<?php include_once('..\model\dbcon.php')?>   

       
    <!-- Chamada para todos os produtos -->
    <div class="table-responsive table-sm" style="border-radius: 20px;">  
    <div style="padding-top:20px">
    <!-- SPAN - Palavra -->
    <div class="col-md-12" style="padding:10px 10px 10px 0px; background-color: #bff7d2;border-radius: 50px;">
              <span style="font-weight: 500; font-size: 20px;padding: 20px 20px 10px 20px">Seu perfil: </span>          
            </div>
    </div>   
       <div class="row" style="padding-bottom: 100px; padding-top: 50px;">
        <table class="table table-sm" >
            <thead>
                <tr>
                    <th>Nome</th>                                    
                    <th>Endereço</th>    
                    <th>Email</th> 
                    <th>Senha</th> 
                                 
                </tr>
            </thead>            
            <tbody>
                <?php include_once('..\controller\get_data_usu.php'); ?>
                
            </tbody>
        </table>
        </div>
                               
         <!-- Mensagens: -->
        <?php include_once('msgs.php');?>
       
         
          
        

     </div>  
<?php include('layout\footer.php'); ?> 