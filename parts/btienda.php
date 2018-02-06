	<style>	
	* {
    box-sizing: border-box;
}
/* Create two equal columns that floats next to each other */
.column {
    float: left;
    width: 50%;
    padding: 10px;
}
/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}
/* Style the buttons */
.btn {
    border: none;
    outline: none;
    padding: 12px 16px;
    background-color: black;
    cursor: pointer;
}
.btn:hover {
    background-color: #aaa;
}
.btn.active {
    background-color: #666;
    color: white;
}
</style>
	


			
	
<div class="page-section">
<div class="page-article">

	<div class="page-paragraph">
	<h2 style="text-align:center;">¡Bienvenidos!</h2>
		<p style="text-align:center;"><br>
		E&D Quick Lube es un taller donde se ofrecen varios productos y servicios.<br>
		Entre ellos podemos mencionar: lavado de autos, cambio de aceite y filtro, reparación, venta e instalación de neumáticos, mecánica liviana, venta de piezas para vehículos, entre otros. 
		
		</p>
	</div>		
	<hr>
				
<div class="row" style="text-align:center;">	

   <h2>Tienda</h2>     
<p>Usted puede Comprar nuestros productos disponibles.<br>
Deberá elegir el producto y la cantidad deseada.<br>
 No puede realizar pagos a través de la aplicación, <br>
 una vez seleccione el producto a comprar tendrá 48 horas para ir a la tienda a pagarlo;<br>
 de lo contrario el producto regresará al inventario.</p>
  <br><br>
  <!--Tienda-->
  

<div id="btnContainer" >
<button class="btn" onclick="listView()"><i class="fa fa-bars"></i> List</button> 
<button class="btn active" onclick="gridView()"><i class="fa fa-th-large"></i> Grid</button>
</div>
<br>

<div class="row">
  <div class="column" style="background-color:#aaa;">
    <h2 style="color:black;">East Penn Battery Booster Cables - $12.99</h2>
	<br>
	<center><img src=" https://static.pepboys.com/images/productImages/35428100/04852.jpg" class="img-responsive" style="width:200px;" alt="Image">	</center>

  </div>
  <div class="column" style="background-color:white;">   
	
	<h2 style="color:black;">Coleman 2 Watt Solar Battery Maintainer - $33.99</h2>
	<br>
		<center>
	<img src="https://static.pepboys.com/images/productImages/65854100/58012%201.jpg " class="img-responsive" style="width:200px;text-align:center;" alt="Image">	</center>
	
  </div>
</div>



  <!--Tienda-->
  
  <br><br>
	  
	  <br><br>
</div>
  </div>
  
  

<script>
// Get the elements with class="column"
var elements = document.getElementsByClassName("column");
// Declare a loop variable
var i;
// List View
function listView() {
    for (i = 0; i < elements.length; i++) {
        elements[i].style.width = "100%";
    }
}
// Grid View
function gridView() {
    for (i = 0; i < elements.length; i++) {
        elements[i].style.width = "50%";
    }
}
/* Optional: Add active class to the current button (highlight it) */
var container = document.getElementById("btnContainer");
var btns = container.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>
  
</div>
