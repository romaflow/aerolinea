﻿
<?php include('includes/header.php'); ?>

	<section class="contenedor contenido">
		
		<h2>Reservas</h2>
		
		<h3>Paso1:</h3>
		<form>
			<fieldset>
				<div class="columna columna--triple">
					<label for="nombre">Nombre:</label>
					<input name="nombre" type="text">
					
					<label for="apellido">Apellido:</label>
					<input name="apellido" type="text" >
								
					<label for="telefono">Teléfono:</label>
					<input name="telefono" type="text">
				</div>
				
				<div class="columna columna--triple">
					<label for="empresa">Empresa:</label>
					<input name="empresa" type="text">
					 
					<label for="email">E-mail:</label>
					<input name="email" type="text" >
					
					<label for="mensaje">Mensaje</label>
					<textarea name="mensaje"></textarea>
				</div>
				
				<div class="columna columna--triple">
					<label for="empresa">Empresa:</label>
					<input name="empresa" type="text">
					 
					<label for="email">E-mail:</label>
					<input name="email" type="text" >
					
					<label for="mensaje">Mensaje</label>
					<textarea name="mensaje"></textarea>
				</div>
			</fieldset>	
			
			<input class="boton" type="submit" name="enviar" value="Enviar">
		</form>
		
		<h2>Pagos</h2>
		<form>
			<fieldset>
				<div class="columna columna--doble">
					<label for="empresa">Empresa:</label>
					<input name="empresa" type="text">
					 
					<label for="email">E-mail:</label>
					<input name="email" type="text" >
					
					<label for="mensaje">Mensaje</label>
					<textarea name="mensaje"></textarea>
				</div>
				
				<div class="columna columna--doble">
					<label for="nombre">Nombre:</label>
					<input name="nombre" type="text">
					
					<label for="apellido">Apellido:</label>
					<input name="apellido" type="text" >
								
					<label for="telefono">Teléfono:</label>
					<input name="telefono" type="text">
					
					<label for="empresa">Empresa:</label>
					<input name="empresa" type="text">
					 
					<label for="email">E-mail:</label>
					<input name="email" type="text" >
					
					<label for="mensaje">Mensaje</label>
					<textarea name="mensaje"></textarea>
				</div>
			</fieldset>	
			
			<input class="boton" type="submit" name="enviar" value="Enviar">
		</form>
		
		<h2>Asiento</h2>
		<form>
			<fieldset class="asientos">
				<div class="columna ejecutiva">
					<input id="A1" type="radio" name="asiento" value="A1" />
					<label for="A1">A1</label>
					<input id="A2" type="radio" name="asiento" value="A2" />
					<label for="A2">A2</label>
					<input id="A3" type="radio" name="asiento" value="A3" />
					<label for="A3">A3</label>
					<input disabled="disabled" id="A4" type="radio" name="asiento" value="A4" />
					<label class="ocupado" for="A4">A4</label>
					<input id="A5" type="radio" name="asiento" value="A5" />
					<label for="A5">A5</label>
					<input id="A6" type="radio" name="asiento" value="A6" />
					<label for="A6">A6</label>
					<input id="A7" type="radio" name="asiento" value="A7" />
					<label for="A7">A7</label>
					<input id="A8" type="radio" name="asiento" value="A8" />
					<label for="A8">A8</label>
					<input id="A9" type="radio" name="asiento" value="A9" />
					<label for="A9">A9</label>
					<input id="A10" type="radio" name="asiento" value="A10" />
					<label for="A10">A10</label>
				</div>
				
				<div class="columna ejecutiva">
					<input id="B1" type="radio" name="asiento" value="B1" />
					<label for="B1">B1</label>
					<input id="B2" type="radio" name="asiento" value="B2" />
					<label for="B2">B2</label>
					<input id="B3" type="radio" name="asiento" value="B3" />
					<label for="B3">B3</label>
					<input id="B4" type="radio" name="asiento" value="B4" />
					<label for="B4">B4</label>
					<input id="B5" type="radio" name="asiento" value="B5" />
					<label for="B5">B5</label>
					<input id="B6" type="radio" name="asiento" value="B6" />
					<label for="B6">B6</label>
					<input id="B7" type="radio" name="asiento" value="B7" />
					<label for="B7">B7</label>
					<input id="B8" type="radio" name="asiento" value="B8" />
					<label for="B8">B8</label>
					<input id="B9" type="radio" name="asiento" value="B9" />
					<label for="B9">B9</label>
					<input id="B10" type="radio" name="asiento" value="B10" />
					<label for="B10">B10</label>
				</div>
				
				<div class="columna economica">
					<input id="C1" type="radio" name="asiento" value="C1" />
					<label for="C1">C1</label>
					<input id="C2" type="radio" name="asiento" value="C2" />
					<label for="C2">C2</label>
					<input disabled="disabled" id="C3" type="radio" name="asiento" value="C3" />
					<label class="ocupado" for="C3">C3</label>
					<input id="C4" type="radio" name="asiento" value="C4" />
					<label for="C4">C4</label>
					<input id="C5" type="radio" name="asiento" value="C5" />
					<label for="C5">C5</label>
					<input id="C6" type="radio" name="asiento" value="C6" />
					<label for="C6">C6</label>
					<input id="C7" type="radio" name="asiento" value="C7" />
					<label for="C7">C7</label>
					<input id="C8" type="radio" name="asiento" value="C8" />
					<label for="C8">C8</label>
					<input id="C9" type="radio" name="asiento" value="C9" />
					<label for="C9">C9</label>
					<input id="C10" type="radio" name="asiento" value="C10" />
					<label for="C10">C10</label>
				</div>
				
				<div class="columna economica">
					<input id="D1" type="radio" name="asiento" value="D1" />
					<label for="D1">D1</label>
					<input id="D2" type="radio" name="asiento" value="D2" />
					<label for="D2">D2</label>
					<input id="D3" type="radio" name="asiento" value="D3" />
					<label for="D3">D3</label>
					<input id="D4" type="radio" name="asiento" value="D4" />
					<label for="D4">D4</label>
					<input id="D5" type="radio" name="asiento" value="D5" />
					<label for="D5">D5</label>
					<input id="D6" type="radio" name="asiento" value="D6" />
					<label for="D6">D6</label>
					<input id="D7" type="radio" name="asiento" value="D7" />
					<label for="D7">D7</label>
					<input id="D8" type="radio" name="asiento" value="D8" />
					<label for="D8">D8</label>
					<input disabled="disabled" id="D9" type="radio" name="asiento" value="D9" />
					<label class="ocupado" for="D9">D9</label>
					<input id="D10" type="radio" name="asiento" value="D10" />
					<label for="D10">D10</label>
				</div>
				
				<div class="columna economica">
					<input id="E1" type="radio" name="asiento" value="E1" />
					<label for="E1">E1</label>
					<input id="E2" type="radio" name="asiento" value="E2" />
					<label for="E2">E2</label>
					<input id="E3" type="radio" name="asiento" value="E3" />
					<label for="E3">E3</label>
					<input id="E4" type="radio" name="asiento" value="E4" />
					<label for="E4">E4</label>
					<input id="E5" type="radio" name="asiento" value="E5" />
					<label for="E5">E5</label>
					<input id="E6" type="radio" name="asiento" value="E6" />
					<label for="E6">E6</label>
					<input id="E7" type="radio" name="asiento" value="E7" />
					<label for="E7">E7</label>
					<input id="E8" type="radio" name="asiento" value="E8" />
					<label for="E8">E8</label>
					<input id="E9" type="radio" name="asiento" value="E9" />
					<label for="E9">E9</label>
					<input id="E10" type="radio" name="asiento" value="E10" />
					<label for="E10">E10</label>
				</div>
			</fieldset>
			
			<input class="boton" type="submit" name="enviar" value="Enviar">
		</form>
		<div class="progreso">
			<span class="paso">1</span><span class="separador"></span>
			<span class="paso">2</span><span class="separador"></span>
			<span class="paso">3</span>
		</div>
	</section>

<?php include('includes/footer.php'); ?>