<?php include_once "mood/header.php" ?>

<div class="col-xs-12">
	<center><h1>Ingreso de mercancia</h1></center><br>
	<form method="post" action="nuevo.php">

		<div class="container">
			<div class="row">
				<div class="col-md-5">
					<label for="codigo">ID PRODUCTO:</label>
					<input class="form-control" name="codigo" required type="text" id="codigo" placeholder="Escribe el código">
				</div>
				<div class="col-md-5">
					<label for="precioCompra">Precio de articulo:</label>
					<input class="form-control" name="precioCompra" required type="number" id="precioCompra" placeholder="Precio de compra">
					
				</div>
				<div class="col-md-5">
					<label for="existencia">Cantidad:</label>
		<input class="form-control" name="existencia" required type="number" id="existencia" placeholder="Cantidad o existencia">
				</div>
				<div class="col-md-5">
					<label for="articulo">Descripción:</label>
					<textarea required id="articulo" name="articulo" cols="30" rows="5" class="form-control"></textarea>
				</div>
			</div>
		</div>
		
	<br><br>
		
		<center><input class="btn btn-success" type="submit" value="Guardar"></center>
	</form>
</div>
<?php include_once "mood/footer.php" ?>