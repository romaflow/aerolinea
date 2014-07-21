<!doctype html>
<html lang="es-ar">
<head>
	<title>Aerolineas</title>
	<meta name="description" content="" />
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="text/javascript" src="/js/jquery/jquery-1.10.2.js"></script>
	<script type="text/javascript" src="/js/jquery/jquery-ui.min.js"></script>
	<script type="text/javascript" src="/js/api.js"></script>
	<link rel="icon" href="img/favicon.png" type="image/png" />
	<link rel="stylesheet" type="text/css" href="css/estilos.css" />
	<link rel="stylesheet" type="text/css" href="/js/jquery/jquery-ui.theme.min.css" />
	<link rel="stylesheet" type="text/css" href="/js/jquery/jquery-ui.structure.min.css" />
</head>

<body>
	<header class="cabecera">
		<div class="contenedor">
			<h1><a href="index.php"><span>Aerolineas</span></a></h1>
		</div>
		<nav class="nav-principal">
			<div class="contenedor">
				<ul>
					<li><a href="">Reservas</a></li>
					<li><a href="">Vuelos</a></li>
					<li class="login"><a href="">Administradores</a></li>
				</ul>
			</div>
		</nav>
	</header>
	
<script src="js/index.js">
	//var aeropuerto = new Aeropuerto();
	/*
	aeropuerto.obtener(function(aeropuerto){
		console.log(aeropuerto.codigo);
	});
	*/

</script>

<section data-interactive="contenedor" class="contenedor contenido">
	<section class="datos">
		<fieldset>
			<h2>Datos de reserva</h2>
			<div class="columna columna--doble">
				<label for="reserva">Reserva nro:</label>
				<input name="reserva" class="datos" data-interactive="datosReserva" type="text" disabled />
				<label for="nombre">Nombre y Apellido:</label>
				<input name="nombre" class="datos" data-interactive="datosNombre" type="text" disabled />
				<label for="destino">Destino:</label>
				<input name="destino" data-interactive="datosDestino" type="text" disabled />
			</div>
			<div class="columna columna--doble">
				<label for="fecha">Fecha de partida:</label>
				<input name="fecha" class="datos" data-interactive="datosFecha" type="text" disabled />
				<label for="categoria">Categoria:</label>
				<input name="categoria" class="datos" data-interactive="datosCategoria" type="text" disabled />
				<label for="origen">Origen:</label>
				<input name="origen" data-interactive="datosOrigen" type="text" disabled />
			</div>
		</fieldset>
	</section>
	<section class="buscar">		
		<fieldset>
			<div class="columna columna--doble">
				<label for="codigo_reserva">Código de reserva:</label>
				<input name="codigo_reserva" data-interactive='codigoReserva' type="text">
				<button class="boton" data-interactive='buscarReserva'>Buscar</button>
			</div>
			<div class="columna columna--doble">
			<div class="columna columna--doble">
				<button class="boton grande" data-interactive="comenzar">Consulta de vuelos</button>
			</div>
			<!-- Nuevo data-interactive -->
		</fieldset>
	</section>	
	<section data-interactive="reserva" class="reserva">
		<h2>Reservas</h2>
		
		<!-- RESERVAS Paso 1: Seleccionamos recorrido y fecha de vuelo -->
		<fieldset class="reserva" data-interactive="recorrido">
			<h3>Paso1:</h3>
			<div class="columna columna--doble">
				<label for="origen">Origen:</label>
				<select id="origen" name="origen" data-interactive="origen">
					<option value="" selected disabled>Seleccione origen</option>
				</select>
			</div>
			
			<div class="columna columna--doble">
				<label for="destino">Destino:</label>
				<select id="destino" name="destino" data-interactive="destino">
					<option value="" selected disabled>Seleccione destino</option>
				</select>
			</div>
			<div class="columna columna--doble">
				<label for="departureDate">Fecha partida:</label>
				<input type="text" id="departureDate" data-interactive="departureDate"/>
			</div>
			<div class="columna columna--doble">
				<button class="boton" data-interactive='buscar'>Buscar</button>
				<!-- Falta acción cuando no hay vuelos -->
			</div>
		</fieldset>
		
		<!-- RESERVAS Paso 2: Seleccionamos vuelo y categoría de asíento-->
		<fieldset class="vuelo" data-interactive="fieldVuelos">
			<h3>Paso 2:</h3>
			<div class="columna columna--simple">
				<div class="columna columna--doble">
					<label for="vuelos">Vuelos:</label>
					<select id="vuelos" name="vuelos" data-interactive="vuelos">
						<option value='' selected disabled>Seleccione uno</option>
					</select>
				</div>
				<div class="columna columna--doble">
					<label for="primera">Primera:</label>
					<input type="radio" id="categoria" name="categoria" value="Primera" class="hide" data-interactive="primera"/>
					<label for="economy">Economica:</label>
					<input type="radio" id="categoria" name="categoria" value="Economy" class="hide" data-interactive="economy"/>
				</div>
			</div>
			<div class="columna columna--simple">
				<button class="boton" data-interactive='reservar'>Reservar</button>
			</div>
		</fieldset>
		
		<!-- RESERVAS Paso 3a: Cargamos datos del cliente -->
		<fieldset class="datosPersonales" data-interactive="fieldDatosPersonales">
			<h3>Paso 3:</h3>
			<p>Para poder realizar la reserva necesitamos los siguientes datos:</p>
			<div class="columna columna--doble">
				<label for="nombre">Nombre y Apellido:</label>
				<input name="nombre" data-interactive="nombre" type="text">
				
				<label for="apellido">DNI:</label>
				<input name="apellido" data-interactive="dni" type="text">
			</div>
			<div class="columna columna--doble">
				<label for="email">E-mail:</label>
				<input name="email" data-interactive="email" type="email" >

				<label for="fecha">Fecha de nacimiento:</label>
				<input name="fecha" data-interactive="birthDate" type="fecha" >
			</div>
			<div class="columna columna--doble">
				<button class="boton" data-interactive='confirmar'>Confirmar reserva</button>
			</div>
		</fieldset>
		
	</section>
	
	<section class="pago">
		<h2>Pagos</h2>
		<!-- PAGOS Paso 1: Seleccionamos forma de pago -->
		<!-- Nota: si se ingresa directamente a PAGOS se pide código de reserva -->
		<form data-interactive="formPagar">
			<fieldset class="hide" data-interactive="pago">	
				<div class="columna columna--doble">
					<label for="formas_pago">Formas de pago:</label>
					<select id="formas_pago" name="formas_pago" data-interactive="formas_pago">
						<option value='' selected disabled>Seleccione uno</option>
						<option value="1">Tarjeta</option>
						<option value="2">Pago Fácil</option>
					</select>
				</div>
				
				<div class="columna columna--doble">
					<button class="boton" type="submit" data-interactive='pagar'>Pagar</button>
				</div>
				
				<!-- ¿Esto... -->
				<div class="columna columna--simple hide" data-interactive="datosTarjeta">
					<div class="columna columna--doble">
						<label for="nro_tarjeta">Número:</label>
						<input id="nro_tarjeta" name="nro_tarjeta" data-interactive="nro_tarjeta" type="text"/>
					
						<label for="cod_tarjeta">Código:</label>
						<input id="cod_tarjeta" name="cod_tarjeta" type="text"/>
					</div>
					<div class="columna columna--doble">
						<label for="vto_tarjeta">Vencimiento:</label>
						<input id="vto_tarjeta" name="vto_tarjeta" type="date"/>
						
						<label for="nom_tarjeta">Nombre y apellido:</label>
						<input id="nom_tarjeta" name="nom_tarjeta" type="text"/>
					</div>
				</div><!-- ...ya no va a ir? -->
				
				
			</fieldset>
		</form>
	</section>
	
	<!-- CHECKIN Paso 1: Seleccionamos asiento -->
	<section class="asiento hide" data-interactive="asiento">	
			<h2>Check-in</h2>
			<form data-interactive="checkinForm">
				<!-- Agregar "disabled" a los asientos que no están disponibles -->
				<fieldset class="asientos" data-interactive="asientosMapa">
					<?php

					//Falta conectar con base de datos
					$categorias = array( 'economy' => FALSE, 'primary' => TRUE); //Categorías seleccionadas
					$primary = array( "nro_filas" => 10, "nro_columnas" => 4 );
					$economy = array( "nro_filas" => 50, "nro_columnas" => 2 );

					$letra_columna = array( "A","B","C","D","E","F");
					
					
					//Imprime avión
					$i=0;
					for( $i=0; $i<$primary["nro_columnas"]; $i++ ){//Columnas primary
						echo'<div class="columna ejecutiva">
								';
						$j=0;
						for( $j=0; $j<$primary["nro_filas"]; $j++ ){
						
							$cod_asiento = $letra_columna[$i] .((string) $j+1);
							
							echo'	<input id="'.$cod_asiento.'" type="radio" name="asiento" value="'.$cod_asiento.'"';
							
							if($categorias['primary']==FALSE){ 
								echo ' disabled="disabled" '; 
							}
							
							echo '/>
									<label for="'.$cod_asiento.'">'.$cod_asiento.'</label>
									';
						}
						echo'</div>';
					}
					$i=0;
					for( $i=0; $i<$economy["nro_columnas"]; $i++){ //Columnas economy
						echo'<div class="columna economica">
								';
						$j=0;
						for( $j=0; $j<$economy["nro_filas"]; $j++ ){
						
							$cod_asiento = $letra_columna[$i+$primary["nro_columnas"]] .((string) $j+1);
							
							echo'	<input id="'.$cod_asiento.'" type="radio" name="asiento" value="'.$cod_asiento.'"';
							
							if($categorias['economy']==FALSE){ 
								echo ' disabled="disabled" '; 
							}
							
							echo '/>
									<label for="'.$cod_asiento.'">'.$cod_asiento.'</label>
									';
						}
						echo'</div>';
					}
					
				?>
				<div class="columna columna--simple">
					<input class="boton" type="submit" name="enviar" value="Enviar">
				</div>
				</fieldset>
		</form>
	</section>
		<!-- Si no lo usamos se puede borrar
		<section class="hide">	
			<div class="progreso">
				<span class="paso">1</span><span class="separador"></span>
				<span class="paso">2</span><span class="separador"></span>
				<span class="paso">3</span>
			</div>
		</section>-->
	</section>

	<footer class="pie">
			<p>&copy;Programación Web II - 2014</p>
	</footer>
</body>

</html>