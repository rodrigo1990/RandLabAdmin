<?php
  require_once("../clases/Novedad.php");
 require("inc/header.php");

$nov = new Novedad();

 ?>
<body>

	<form action="landing_insertar_novedad.php" class="some_form" id="my-dropzone-element-id"enctype="multipart/form-data" method="POST">	
		<label for="titulo">Ingrese un titulo</label><br>
    <input type="text" name="titulo" id="titulo" value="<?php $nov->listarTitulo($_GET['ID']) ?>"> <br><br>

    <label for="descripcion">Descripcion</label><br>
		<input type="text" name="descripcion" id="descripcion" value="<?php  $nov->listarDescripcion($_GET['ID']) ?>"> <br><br>

  	
      <label for="imagen1"> Imagen 1</label><br><br>
      <input type="file" name="imagen1" id="imagen1"><br><br>

      <span><?php $nov->imagen1Actual($_GET['ID']) ?></span><br>
      <img src="../uploads/<?php $nov->imagen1Actual(['ID']) ?>" alt="">
      

      <br>
      <br>

      <label for="imagen2"> Imagen 2</label><br><br>
      <input type="file" name="imagen2" id="imagen2"><br><br>
      
      <span><?php $nov->imagen2Actual($_GET['ID']) ?></span><br>
      <img src="../uploads/<?php $nov->imagen2Actual(['ID']) ?>" alt=""><br>

      <label for="imagen3"> Imagen 3</label><br><br>
      <input type="file" name="imagen3" id="imagen3"><br><br>

      <span><?php $nov->imagen3Actual($_GET['ID']) ?></span>

      <img src="../uploads/<?php $nov->imagen3Actual(['ID']) ?>" alt=""><br>

      <label for="imagen4"> Imagen 4</label><br><br>
      <input type="file" name="imagen4" id="imagen4"><br><br>

      <span><?php $nov->imagen4Actual($_GET['ID']) ?></span><br>

      <img src="../uploads/<?php $nov->imagen4Actual(['ID']) ?>" alt="">

      <label for="imagen5"> Imagen 5</label><br><br>
      <input type="file" name="imagen5" id="imagen5"><br><br>

      <span><?php $nov->imagen5Actual($_GET['ID']) ?></span><br>

      <img src="../uploads/<?php $nov->imagen5Actual(['ID']) ?>" alt=""><br>

      <label for="imagen6"> Imagen 6</label><br><br>
      <input type="file" name="imagen6" id="imagen6"><br><br>

      <span><?php $nov->imagen6Actual($_GET['ID']) ?></span><br>

      <img src="../uploads/<?php $nov->imagen6Actual(['ID']) ?>" alt=""><br>











      <label for="imagen7"> Imagen 7</label><br><br>
      <input type="file" name="imagen7" id="imagen7"><br><br>

      <span><?php $nov->imagen7Actual($_GET['ID']) ?></span><br>

      <img src="../uploads/<?php $nov->imagen7Actual(['ID']) ?>" alt=""><br>
      

      
      <label for="imagen8"> Imagen 8</label><br><br>
      <input type="file" name="imagen8" id="imagen8"><br><br>

      <span><?php $nov->imagen8Actual($_GET['ID']) ?></span><br>

      <img src="../uploads/<?php $nov->imagen8Actual(['ID']) ?>" alt=""><br>

      
      

      <label for="imagen9"> Imagen 9</label><br><br>
      <input type="file" name="imagen9" id="imagen9"><br><br>

      <span><?php $nov->imagen9Actual($_GET['ID']) ?></span><br>

      <img src="../uploads/<?php $nov->imagen9Actual(['ID']) ?>" alt=""><br>

      
      

      <label for="imagen10"> Imagen 10</label><br><br>
      <input type="file" name="imagen10" id="imagen10">

      <span><?php $nov->imagen10Actual($_GET['ID']) ?></span><br>

      <img src="../uploads/<?php $nov->imagen10Actual(['ID']) ?>" alt=""><br>
      

      

      <br><br>
	      <button type="submit">Submit data and files!</button>


    <div id="imgContainer"></div>

	</form>




<script src="../js/jquery.min.js"></script>



</body>
</html>