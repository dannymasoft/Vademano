<!DOCTYPE HTML>
<html lang="es">
      <head>
        <meta charset="utf-8"/>
        <title>Login - Vademano 2015</title>
   
   		  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		  			   
          <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
	      <script src="//code.jquery.com/jquery-1.10.2.js"></script>
		  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
		
		<link rel="stylesheet" href="http://jqueryvalidation.org/files/demo/site-demos.css">
        <script src="http://jqueryvalidation.org/files/dist/jquery.validate.min.js"></script>
        <script src="http://jqueryvalidation.org/files/dist/additional-methods.min.js"></script>
 		
 		<script src="//cdn.jsdelivr.net/webshim/1.14.5/polyfiller.js"></script>
		
 			
        <style>
            input{
                margin-top:5px;
                margin-bottom:5px;
            }
            .right{
                float:right;
            }
                
            
        </style>
    </head>
    <body>
    
       <div style="background-color: #4bae4f; " >
    	 	<?php include("view/modulos/head.php"); ?>
    	 </div>
  
    
       
        <section class="col-lg-6 usuario" style="height:400px;overflow-y:scroll;">
        <table class="table table-hover">
	         <tr>
	            <th>#</th>
	    		<th>Nombre Producto</th>
	    		<th>Logo Producto</th>
	    		
	    		<th></th>
	  		</tr>
                <?php $registros = 1;?>
                 <?php foreach($resultSet as $res) {?>
	        		<tr>
	        		   
	                   <td> <?php echo $registros; ?>  </td>
		               <td> <?php echo $res->nombre_fichas; ?>     </td> 
		               
		               <td> <input type="image" name="image" src="view/DevuelveImagen.php?id_valor=<?php echo $res->id_fichas; ?>&id_nombre=id_fichas&tabla=fichas_fotos&campo=foto_fichas_fotos"  alt="<?php echo $res->nombre_fichas; ?>" width="80" height="60" >      </td>
		                 <td>   
			                	<div class="right">
			                    <a href="<?php echo $helper->url("FichasRecientes","borrarId"); ?>&id_fichas=<?php echo $res->id_fichas; ?>" class="btn btn-danger">Borrar</a>
			                </div>
			                <hr/>
		               </td>
		    		</tr>
		    		<?php $registros ++?>
		        <?php } ?>
            
            <?php 
            
            //echo "<script type='text/javascript'> alert('Hola')  ;</script>";
            
            ?>
            
       	</table>     
      </section>
   
       
      <form id="form" action="<?php echo $helper->url("Afiliaciones","InsertaAfiliados"); ?>" method="post" class="col-lg-6">
            
            <hr>
            <div class="img-responsive">
             <img alt="publicidad" src="view/images/publicidad.png">
             
            </div>
            
      </form>

   <div> 
   		 <?php include("view/modulos/servicios.php"); ?>	
   		  </div>
   		 <div style="margin-top: 20px; background-color: #4bae4f;">
   		 
   		 <?php include("view/modulos/small_slide.php"); ?>
   		 
   		 </div>
   		 
   	 	<div style="background-color: #7acb5a;">
   	 	 
    	 <footer class="col-lg-12" >
     	 	<?php include("view/modulos/footer.php"); ?>
    	 </footer>     
    	</div>
     </body>  
    </html>   