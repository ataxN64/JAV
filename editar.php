<?php
if(!isset($_GET["id"])) exit();
$id = $_GET["id"];
include_once "mood/header.php";
include_once "base_de_datos.php";
$sentencia = $base_de_datos->prepare("SELECT * FROM mercancia WHERE id = ?;");
$sentencia->execute([$id]);
$producto = $sentencia->fetch(PDO::FETCH_OBJ);
if($producto === FALSE){
	echo "¡No existe algún producto con ese ID!";
	exit();


}

?>
<?php  ?>
	<div class="col-xs-12">
		<center><h1>Editar Ingreso de articulo</h1></center>
		<br><br>
		<form method="post" action="guardarDatosEditados.php">

			<div class="container">
				<div class="row">
					<div class="col-md-5">
						<label for="codigo">ID producto:</label>
			<input value="<?php echo $producto->codigo ?>" class="form-control" name="codigo" required type="text" id="codigo" placeholder="Escribe el código">
					</div>
					<div class="col-md-5">
						<label for="precioCompra">Precio de articulo:</label>
			<input value="<?php echo $producto->precioCompra ?>" class="form-control" name="precioCompra" required type="number" id="precioCompra" placeholder="Precio de compra">
					</div>

					<div class="col-md-5">
						<label for="existencia">Cantidad:</label>
			<input value="<?php echo $producto->existencia ?>" class="form-control" name="existencia" required type="number" id="existencia" placeholder="Cantidad o existencia">
					</div>
					<div class="col-md-5">
						<label for="articulo">Descripción:</label>
			<textarea required id="articulo" name="articulo" cols="30" rows="5" class="form-control"><?php echo $producto->articulo ?></textarea>
					</div>
				</div>
			</div>
			<input type="hidden" name="id" value="<?php echo $producto->id; ?>">
	
			

			


			
<br><br>
			
		<center>
			<input class="btn btn-success" type="submit" value="Guardar">
			<a class="btn btn-danger" href="./index.php">Cancelar</a>
		</center>
		</form>
	</div>
<?php include_once "mood/footer.php" ?>
