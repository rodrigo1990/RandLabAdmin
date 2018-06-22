<?php 
require_once("../clases/novedad.php");

$novedad = new Novedad();

 ?>
<?php 

require("inc/header.php");
 ?>
<body>
	<table>
		<thead>
			<tr>
				<th>
					ID
				</th>
				<th>
					Titulo
				</th>
				<th>
					Descripcion
				</th>
				<th>
					Actualizar
				</th>
				<th>
					Eliminar
				</th>
			</tr>
		</thead>
		<tbody>
			<?php 

				$novedad->listarNovedades();
			 ?>
		</tbody>
	</table>
	
</body>
</html>