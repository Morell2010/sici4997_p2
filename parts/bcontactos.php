
<style>
input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}
input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
input[type=submit]:hover {
    background-color: #45a049;
}
.container2 {
    border-radius: 5px;
   position:center;
    padding: 1% 10% 1% 10%;
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

   <h2>Contacto</h2>	  
      <p>
	  ¿Tiene alguna pregunta? <br>Contactenos en confianza.</p>  
	  
	<div class="container2" style="text-align:left;">
  <form action="/action_page.php">
    <label for="fname">Nombre</label>
    <input type="text" id="fname" name="firstname" placeholder="Nombre">

    <label for="lname">Apellido</label>
    <input type="text" id="lname" name="lastname" placeholder="Apellido">
	
	<label for="email">E-mail</label>
    <input type="text" id="email" name="email" placeholder="nombre@ejemplo.com">

    <label for="motivo">Motivo</label>
    <select id="motivo" name="motivo">
      <option value="producto">Problema con producto o servicio</option>
      <option value="pregunta">Pregunta o recomendacion</option>
      <option value="otro">Otro</option>
    </select>

    <label for="subject"><br>Asunto</label>
    <textarea id="subject" name="subject" placeholder="Escriba su mensaje aqui..." style="height:200px"></textarea>

    <input type="submit" value="Enviar">
  </form>
</div>
  </div>
  
</div>

	