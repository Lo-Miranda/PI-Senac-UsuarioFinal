<?php include('layout\header.php'); ?>
<?php include_once('..\model\dbcon.php')?> 

<div class="table-responsive" style="border-radius: 20px;">  
    <div style="padding-top:20px">
    <!-- SPAN - Palavra -->
            <div class="col-md-12" style="padding:10px 10px 10px 10px; background-color: #bff7d2;border-radius: 50px;">
              <span style="font-weight: 500; font-size: 20px;padding: 20px 20px 10px 20px">Sistema de controle</span>          
            </div>
    </div>   
       <div class="table-responsive">
        <table class="table table-sm table-hover table bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome comercial</th>                                    
                    <th>Preço</th>                   
                </tr>
            </thead>            
        
        </table>
        </div>
                               
         <!-- Mensagens: -->
        <?php include_once('msgs.php');?>
       
         <!-- Botão: -->
        <div class="box1">             
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" >
            <a href="remedios_lista.php">Inserir novo</a>
        </button>

     </div>  
<?php include('layout\footer.php'); ?> 