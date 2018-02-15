<?php
$producto1 = Order::loadFromID_p(1);
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
							
							<p style="font-size:250%;" name="p1precio"><?php echo $producto1->precio; ?></p>						
							
							<img src="<?php echo $producto1->url; ?>" class="img-responsive" style="height:200px;" alt="Image">
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
							<p style="font-size:150%;">Coleman 2 Watt Solar Battery Maintainer</p>
							<p style="font-size:250%;">$33.99</p>
							<img src="https://static.pepboys.com/images/productImages/65854100/58012%201.jpg" class="img-responsive" style="height:200px;" alt="Image">	
							<div class="form-group" style="font-size:120%; font-style:italic;">
								<p>Cantidad a comprar:									
								<input name="cp2" maxlength="2" type="text" class="form-control" placeholder="00" value="" style="width:20%;padding:1px;margin:1%;font-size:120%;text-align:center;display:inline-block;">
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
							<p style="font-size:150%;">ValuePower VP-78 Battery 600 CCA</p>
							<p style="font-size:250%;">$49.88</p>
							<img src="https://i5.walmartimages.com/asr/2f55e69c-5800-4526-a13b-e67f5dc0238f_1.d15ffe7fb0bd7318f8927eb006f92cc4.jpeg" class="img-responsive" style="height:200px;" alt="Image">
						
							<div class="form-group" style="font-size:120%; font-style:italic;">
								<p>Cantidad a comprar:									
								<input name="cp3" maxlength="2" type="text" class="form-control"  placeholder="00" value="" style="width:20%;padding:1px;margin:1%;font-size:120%;text-align:center;display:inline-block;">	</p>		
							</div>
							
							<hr>
							</center>
						</div>	
						<!--********************************************************-->
	
						<!--********************************************************-->
						<div class="col-sm-3" style="background-color:white;">
							<hr>		
							<center style="color:black;">						
							<p style="font-size:150%;">Mobil 1 0W-40 Full Synthetic Motor Oil, 5 qt.</p>
							<p style="font-size:250%;">$25.47</p>
							<img src="https://i5.walmartimages.com/asr/c9c01299-d03d-4585-a9c6-30c352716672_1.6f2ed89dcd4e89b90d6c8050c73e8a06.jpeg" class="img-responsive" style="height:200px;" alt="Image">	
							<div class="form-group" style="font-size:120%; font-style:italic;">
								<p>Cantidad a comprar:									
								<input name="cp4" maxlength="2" type="text" class="form-control" placeholder="00" value="" style="width:20%;padding:1px;margin:1%;font-size:120%;text-align:center;display:inline-block;">
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
	


