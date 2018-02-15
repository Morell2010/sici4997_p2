<?php
$producto1 = Producto::loadFromID(1);
$producto2 = Producto::loadFromID(2);
$producto3 = Producto::loadFromID(3);
$producto4 = Producto::loadFromID(4);
?>

<div class="page-section">
	<div class="page-article">
						
						<div class="row" style="text-align:center;">	
						
						<h2>Tienda</h2>     
						<p>Usted puede Comprar nuestros productos disponibles. Deberá elegir el producto y la cantidad deseada.<br>
						No puede realizar pagos a través de la aplicación, una vez seleccione el producto a comprar<br>
						tendrá 48 horas para ir a la tienda a pagarlo; de lo contrario el producto regresará al inventario.</p>
						<hr>					
						
						<!--Tienda-->
						
						
						
						
						</div>
								

						<form method="post" action="index.php?a=doTienda">
						<div class="row">							
							
						<!--********************************************************-->
						<div class="col-sm-3" style="background-color:black;">								
							<center style="color:white;">
							<hr>
							
							<p style="font-size:150%;" name="p1nombre"><?php echo $producto1->nombre; ?></p>
							
							<p style="font-size:250%;" name="p1precio">$<?php echo $producto1->precio; ?></p>						
							
							<img name="p1imageurl"src="<?php echo $producto1->imageurl; ?>" class="img-responsive" style="height:200px;" alt="Image">
							
							<div class="form-group" style="font-size:120%; font-style:italic;">
								<p>Cantidad a comprar:									
								<input name="p1cantidad" maxlength="2" type="text" class="form-control"  placeholder="00" value="" style="width:20%;padding:1px;margin:1%;font-size:120%;text-align:center;display:inline-block;">
								</p>
							</div>
							<hr>
							</center>
						</div>	
						<!--********************************************************-->

						<!--********************************************************-->
						<div class="col-sm-3" style="background-color:white;">
							<hr>		
							<center style="color:black;">						
							<p name="p2nombre" style="font-size:150%;">
								<?php echo $producto2->nombre; ?>
								</p>
							<p name="p2precio" style="font-size:250%;">						
							$<?php echo $producto2->precio; ?>
							</p>
							<img name="p2imageurl"
								 src="
								 <?php echo $producto2->imageurl; ?>
								 "
								 
								 class="img-responsive" style="height:200px;" alt="Image">
								 
							<div class="form-group" style="font-size:120%; font-style:italic;">
								<p>Cantidad a comprar:									
								
								<input name="p2cantidad" maxlength="2" type="text" class="form-control" placeholder="00" value="" style="width:20%;padding:1px;margin:1%;font-size:120%;text-align:center;display:inline-block;">
								</p>		
							</div>									
							<hr>							
							</center>
							
						</div>
						<!--********************************************************-->
				
					
					
						
						<!--********************************************************-->
						<div class="col-sm-3" style="background-color:black;">								
							<center style="color:white;">
							<hr>
							<p style="font-size:150%; " name="p3nombre" >
								
								<?php echo $producto3->nombre; ?>
							</p>
							
							
							<p style="font-size:250%;" name="p3precio">
								
								$<?php echo $producto3->precio; ?>
							</p>
							
							<img name="p3imageurl"
								 src="
								 
								 <?php echo $producto3->imageurl; ?>
								 
								 " class="img-responsive" style="height:200px;" alt="Image">
						
							<div class="form-group" style="font-size:120%; font-style:italic;">
								<p>Cantidad a comprar:									
								<input name="p3cantidad" maxlength="2" type="text" class="form-control"  placeholder="00" value="" style="width:20%;padding:1px;margin:1%;font-size:120%;text-align:center;display:inline-block;">	</p>		
							</div>
							
							<hr>
							</center>
						</div>	
						<!--********************************************************-->
	
						<!--********************************************************-->
						<div class="col-sm-3" style="background-color:white;">
							<hr>		
							<center style="color:black;">						
							<p style="font-size:150%;">
								<?php echo $producto4->nombre; ?>
								</p>
							
							<p style="font-size:250%;">
								$<?php echo $producto4->precio; ?>
								
							</p>
							
							<img
								 src="
								 <?php echo $producto4->imageurl; ?>
								 
								 
								 " class="img-responsive" style="height:200px;" alt="Image">	
							<div class="form-group" style="font-size:120%; font-style:italic;">
								<p>Cantidad a comprar:									
								<input name="p4cantidad" maxlength="2" type="text" class="form-control" placeholder="00" value="" style="width:20%;padding:1px;margin:1%;font-size:120%;text-align:center;display:inline-block;">
								</p>		
							</div>									
							<hr>							
							</center>
							
						</div>
						<!--********************************************************-->
	
						 </div>
						<br>
						<center>
						<button name="boton-compra" type="submit" class="btn btn-primary" style="width:40%; font-size:250%; text-align:center;padding:1px;margin:1px;">Comprar</button>
						</center>
        </form>

			</div>
	</div>

</div>
	


