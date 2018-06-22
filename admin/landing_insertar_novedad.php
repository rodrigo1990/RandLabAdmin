<?php
require_once("../clases/Novedad.php");

$nov = new Novedad();


$nov->insertarNovedad($_POST['titulo'],
					  $_POST['descripcion'],
					  $_FILES['imagen1']['name'],
					  $_FILES['imagen2']['name'],
					  $_FILES['imagen3']['name'],
					  $_FILES['imagen4']['name'],
					  $_FILES['imagen5']['name'],
					  $_FILES['imagen6']['name'],
					  $_FILES['imagen7']['name'],
					  $_FILES['imagen8']['name'],
					  $_FILES['imagen9']['name'],
					  $_FILES['imagen10']['name']);


?>  