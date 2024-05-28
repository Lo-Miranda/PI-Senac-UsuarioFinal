<?php include('layout\header.php'); ?>
<?php include_once('..\model\dbcon.php')?> 


 <body>
    
  <!-- O form de login é meramente ilustrativo -->
    <div class="container-fluid" style="border-radius: 20px;">
      <div class="col-md-12" style="padding-top: 50px; padding-bottom:235px;">                 
        <div class="col-md-12">
            <!-- Forms -->
            <div class="col-md-12">
             <form action="" method="">
              <div class="row">              
                <div class="col-md-12" style="font-size: 14px; font-weight: 200; padding: 20px 20px 10px 20px;">
                  <!-- E-mail -->
                  <input type="email" name="nome_comercial" placeholder="seuendereco@email.com" class="form-control">
                </div>    
                <div class="col-md-12" style="font-size: 14px; font-weight: 200; padding: 20px 20px 10px 20px;">
                   <input type="password" name="senha" placeholder="*****" class="form-control">
                </div>  
                <?php
                include_once('msgs.php'); ?>       
                
        </div>                                       
        
             
                                                    <!-- Botões -->
            <div class="box1" style="text-align: center; background-color: #FDFEFE; border-radius: 20px; padding-top=30px">             
            <a class="btn btn-primary" href="usuarios.php" role="button">Entrar</a>    
                             
            </div>
            
                
              </div>              
             </form>
            </div>
            
          </div>
        </div>  
        </div>
    </div>

    <?php include('layout\footer.php'); ?>    
