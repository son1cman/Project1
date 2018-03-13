<?php
	/*-------------------------
	Kevin Martinez
	---------------------------*/
	
	
	$active_facturas="active";
	$active_productos="";
	$active_clientes="";
	$active_usuarios="";	
	$title="Facturas | Tomza CR";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
	<?php include("head.php");?>

  </head>
      
  <body>
	<?php
	include("navbar.php");
	?>  
	
    <div class="container">
		<div class="panel panel-info">
		<div class="panel-heading">
		    <div class="btn-group pull-right">
				<a  href="nueva_factura.php" class="btn btn-info"><span class="glyphicon glyphicon-plus" ></span> --</a>
			</div>
					
			<h4><i class='glyphicon glyphicon-search'></i> Reporte Ventas</h4>
		</div>
		
			<div class="panel-body">
				<form class="form-horizontal" role="form" id="datos_cotizacion">
				
						<div class="form-group row">
						
							<label for="q" class="col-md-2 control-label">Ruta:</label>
							<div class="col-md-2">
							<select id="q" onchange="load(1);">
							  <optgroup label="Cartago">
							  <option value="0">FACTURAS NULAS</option>
							    <option value="1">Ruta 1</option>
							    <option value="2">Ruta 2</option>
							    <option value="3">Ruta 3</option>
							    <option value="4">Ruta 4</option>
							    <option value="5">Ruta 5</option>
							    <option value="6">Ruta 6</option>
							    <option value="7">Ruta 7</option>
							    <option value="8">Ruta 8</option>
							    <option value="9">Ruta 9</option>
							    <option value="10">Ruta 10</option>
							    <option value="45">Ruta 45</option>
							    <option value="46">Ruta 46</option>
							    <option value="58">Ruta 58</option>
							    <option value="106">Ruta 106</option>
							    <option value="107">Ruta 107</option>
							    <option value="108">Ruta 108</option>
							    <option value="109">Ruta 109</option>
	    						    <option value="110">Ruta 110</option>
	    						    <option value="200">Ruta 200</option>
	    					
							  </optgroup>
							  <optgroup label="Super Gas">
							    <option value="27">Ruta 27</option>
							    <option value="28">Ruta 28</option>
							    <option value="29">Ruta 29</option>
							    <option value="30">Ruta 30</option>
							    <option value="31">Ruta 31</option>
							    <option value="32">Ruta 32</option>
							    <option value="33">Ruta 33</option>
							    <option value="34">Ruta 34</option>
							    <option value="38">Ruta 38</option>
							    <option value="39">Ruta 39</option>
							    <option value="40">Ruta 40</option>
							    <option value="47">Ruta 47</option>
							    <option value="48">Ruta 48</option>
							    <option value="59">Ruta 59</option>
							  
							  </optgroup>
							  <optgroup label="Atlatico">
							    <option value="11">Ruta 11</option>
							    <option value="17">Ruta 17</option>
							    <option value="18">Ruta 18</option>
							    <option value="19">Ruta 19</option>
							    <option value="20">Ruta 20</option>
							    <option value="504">Ruta 504</option>
							  </optgroup>
							  <optgroup label="Perez">
							    <option value="21">Ruta 21</option>
							    <option value="22">Ruta 22</option>
							    <option value="23">Ruta 23</option>
							    <option value="24">Ruta 24</option>
							    <option value="25">Ruta 25</option>
							    <option value="26">Ruta 26</option>
							    <option value="51">Ruta 51</option>
							    <option value="307">Ruta 307</option>
							  </optgroup>
							  <optgroup label="La cruz">
							    <option value="12">Ruta 12</option>
							    <option value="13">Ruta 13</option>
							    <option value="14">Ruta 14</option>
							    <option value="15">Ruta 15</option>
							    <option value="16">Ruta 16</option>
							    <option value="404">Ruta 404</option>
							    
							  </optgroup>
							</select>
							
							</div>
							<label for="d" class="col-md-2 control-label">Fecha:</label>
							<div class="col-md-2">
								<p><input type="text" id="d" placeholder="Fecha" onchange="load(1);"></p>
							</div>
							
							
							
							<div class="col-md-3">
								<button type="button" class="btn btn-default" onclick='load(1);'>
									<span class="glyphicon glyphicon-search" ></span> Buscar</button>
								<span id="loader"></span>
							</div>
							
						</div>
				
				
				
			</form>
			<!-- <div id="map" style="width:700px; height:500px; margin-left:80px;" ></div> -->
		<!-- <button onclick="initMap()">Mostrar Mapa</button>  -->
				<div id="resultados"></div><!-- Carga los datos ajax -->
				<div class='outer_div'></div><!-- Carga los datos ajax -->
			</div>
			 
		</div>	

	
	</div>

	<hr>
	
	<?php
	include("footer.php");
	?>
	
	<script type="text/javascript" src="js/VentanaCentrada.js"></script>
	<script type="text/javascript" src="js/fac.js"></script>
	  <script>
	 

              
              function distance(lat1, lon1, lat2, lon2) {
  var p = 0.017453292519943295;    // Math.PI / 180
  var c = Math.cos;
  var a = 0.5 - c((lat2 - lat1) * p)/2 + 
          c(lat1 * p) * c(lat2 * p) * 
          (1 - c((lon2 - lon1) * p))/2;

  return 12742 * Math.asin(Math.sqrt(a)); // 2 * R; R = 6371 km
}
      
           
              
	
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAPhsjCN-m5XNQwuYDRXNr9C8vao_1F-rQ&callback=initMap">
    </script>
  </body>
</html>