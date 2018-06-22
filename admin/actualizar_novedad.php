<?php
require("inc/verificarSession.php");
  require_once("../clases/Novedad.php");
 require("inc/head.php");

$nov = new Novedad();

 ?>
<body>
<?php require("inc/header.php") ?>
  <div class="row">
  <div class="container">
    <h1>ACTUALIZAR NOVEDADES</h1>
  </div>
</div><br>
	<form action="landing_actualizar_novedad.php" class="some_form" id="my-dropzone-element-id"enctype="multipart/form-data" method="POST">
  <div class="row">
    <div class="container">	

      <div class="col-lg-6 col-sm-6">
        <div class="form-group">
      		<label for="titulo">Ingrese un titulo</label><br>
          <input type="text" name="titulo" id="titulo" class="form-control" value="<?php $nov->listarTitulo($_GET['ID']) ?>"> <br><br>
        </div>
      </div>

      <div class="col-lg-6 col-sm-6">
        <div class="form-group">
          <label for="descripcion">Descripcion</label><br>
      		<input type="text" name="descripcion" id="descripcion" class="form-control" value="<?php  $nov->listarDescripcion($_GET['ID']) ?>"> <br><br>
        </div>
      </div>
 


  	
      <div class="col-lg-6 col-sm-6 margin fix-height">
         <label for="">Imagen 1 </label>
            <div class="input-group">
                <label class="input-group-btn">
                    <span class="btn btn-primary">
                        Buscar&hellip; <input type="file" style="display: none;" name="imagen1">
                    </span>
                </label>
                <input type="text" class="form-control" style="color:black !important;" readonly>
            </div>
            <div class="actual-img-cont">
                  <span class="center-block">
                    <h3>IMAGEN ACTUAL:</h3><?php $nov->imagen1Actual($_GET['ID']) ?>
                  </span><br>
                <img class="center-block" src="../uploads/<?php $nov->imagen1Actual(['ID']) ?>" alt="">
            </div>
        </div>

  
      <div class="col-lg-6 col-sm-6 margin fix-height">
         <label for="">Imagen 2 </label>
            <div class="input-group">
                <label class="input-group-btn">
                    <span class="btn btn-primary">
                        Buscar&hellip; <input type="file" style="display: none;" name="imagen2">
                    </span>
                </label>
                <input type="text" class="form-control" style="color:black !important;" readonly>
            </div>
            <div class="actual-img-cont">
                  <span class="center-block">
                    <h3>IMAGEN ACTUAL:</h3><?php $nov->imagen2Actual($_GET['ID']) ?>
                  </span><br>
                <img class="center-block" src="../uploads/<?php $nov->imagen2Actual(['ID']) ?>" alt="">
            </div>
        </div>
      
      

      <div class="col-lg-6 col-sm-6 margin fix-height">
         <label for="">Imagen 3 </label>
            <div class="input-group">
                <label class="input-group-btn">
                    <span class="btn btn-primary">
                        Buscar&hellip; <input type="file" style="display: none;" name="imagen3">
                    </span>
                </label>
                <input type="text" class="form-control" style="color:black !important;" readonly>
            </div>
            <div class="actual-img-cont">
                  <span class="center-block">
                    <h3>IMAGEN ACTUAL:</h3><?php $nov->imagen3Actual($_GET['ID']) ?>
                  </span><br>
                <img class="center-block" src="../uploads/<?php $nov->imagen3Actual(['ID']) ?>" alt="">
            </div>
        </div>

      <div class="col-lg-6 col-sm-6 margin fix-height">
         <label for="">Imagen 4 </label>
            <div class="input-group">
                <label class="input-group-btn">
                    <span class="btn btn-primary">
                        Buscar&hellip; <input type="file" style="display: none;" name="imagen4">
                    </span>
                </label>
                <input type="text" class="form-control" style="color:black !important;" readonly>
            </div>
            <div class="actual-img-cont">
                  <span class="center-block">
                    <h3>IMAGEN ACTUAL:</h3><?php $nov->imagen4Actual($_GET['ID']) ?>
                  </span><br>
                <img class="center-block" src="../uploads/<?php $nov->imagen4Actual(['ID']) ?>" alt="">
            </div>
        </div>

      <div class="col-lg-6 col-sm-6 margin fix-height">
         <label for="">Imagen 5 </label>
            <div class="input-group">
                <label class="input-group-btn">
                    <span class="btn btn-primary">
                        Buscar&hellip; <input type="file" style="display: none;" name="imagen5">
                    </span>
                </label>
                <input type="text" class="form-control" style="color:black !important;" readonly>
            </div>
            <div class="actual-img-cont">
                  <span class="center-block">
                    <h3>IMAGEN ACTUAL:</h3><?php $nov->imagen5Actual($_GET['ID']) ?>
                  </span><br>
                <img class="center-block" src="../uploads/<?php $nov->imagen5Actual(['ID']) ?>" alt="">
            </div>
        </div>

      <div class="col-lg-6 col-sm-6 margin fix-height">
         <label for="">Imagen 6 </label>
            <div class="input-group">
                <label class="input-group-btn">
                    <span class="btn btn-primary">
                        Buscar&hellip; <input type="file" style="display: none;" name="imagen6">
                    </span>
                </label>
                <input type="text" class="form-control" style="color:black !important;" readonly>
            </div>
            <div class="actual-img-cont">
                  <span class="center-block">
                    <h3>IMAGEN ACTUAL:</h3><?php $nov->imagen6Actual($_GET['ID']) ?>
                  </span><br>
                <img class="center-block" src="../uploads/<?php $nov->imagen6Actual(['ID']) ?>" alt="">
            </div>
        </div>

        








      
      <div class="col-lg-6 col-sm-6 margin fix-height">
         <label for="">Imagen 7 </label>
            <div class="input-group">
                <label class="input-group-btn">
                    <span class="btn btn-primary">
                        Buscar&hellip; <input type="file" style="display: none;" name="imagen7">
                    </span>
                </label>
                <input type="text" class="form-control" style="color:black !important;" readonly>
            </div>
            <div class="actual-img-cont">
                  <span class="center-block">
                    <h3>IMAGEN ACTUAL:</h3><?php $nov->imagen7Actual($_GET['ID']) ?>
                  </span><br>
                <img class="center-block" src="../uploads/<?php $nov->imagen7Actual(['ID']) ?>" alt="">
            </div>
        </div>
      

      
      <div class="col-lg-6 col-sm-6 margin fix-height">
         <label for="">Imagen 8 </label>
            <div class="input-group">
                <label class="input-group-btn">
                    <span class="btn btn-primary">
                        Buscar&hellip; <input type="file" style="display: none;" name="imagen8">
                    </span>
                </label>
                <input type="text" class="form-control" style="color:black !important;" readonly>
            </div>
            <div class="actual-img-cont">
                  <span class="center-block">
                    <h3>IMAGEN ACTUAL:</h3><?php $nov->imagen8Actual($_GET['ID']) ?>
                  </span><br>
                <img class="center-block" src="../uploads/<?php $nov->imagen8Actual(['ID']) ?>" alt="">
            </div>
        </div>

      
      

      <div class="col-lg-6 col-sm-6 margin fix-height">
         <label for="">Imagen 9 </label>
            <div class="input-group">
                <label class="input-group-btn">
                    <span class="btn btn-primary">
                        Buscar&hellip; <input type="file" style="display: none;" name="imagen9">
                    </span>
                </label>
                <input type="text" class="form-control" style="color:black !important;" readonly>
            </div>
            <div class="actual-img-cont">
                  <span class="center-block">
                    <h3>IMAGEN ACTUAL:</h3><?php $nov->imagen9Actual($_GET['ID']) ?>
                  </span><br>
                <img class="center-block" src="../uploads/<?php $nov->imagen9Actual(['ID']) ?>" alt="">
            </div>
        </div>

      
      

      <div class="col-lg-6 col-sm-6 margin fix-height">
         <label for="">Imagen 10 </label>
            <div class="input-group">
                <label class="input-group-btn">
                    <span class="btn btn-primary">
                        Buscar&hellip; <input type="file" style="display: none;" name="imagen10">
                    </span>
                </label>
                <input type="text" class="form-control" style="color:black !important;" readonly>
            </div>
            <div class="actual-img-cont">
                  <span class="center-block">
                    <h3>IMAGEN ACTUAL:</h3><?php $nov->imagen10Actual($_GET['ID']) ?>
                  </span><br>
                <img class="center-block" src="../uploads/<?php $nov->imagen10Actual(['ID']) ?>" alt="">
            </div>
        </div>
      
    <input type="hidden" value="<?php echo  $_GET['ID']?>" name="id">


         <div class="row margin">
          <div class="container">
            <div class="col-lg-6 col-sm-6">

              <a type="submit" class="btn btn-primary left submit-btn" href="home.php">Regresar a home</a>
               
            </div>
            <div class="col-lg-6 col-sm-6">
              <button type="submit" class="btn btn-primary right submit-btn">Actualizar novedades</button>
            </div>
          </div>
        </div>
   </div>
  </div>
	</form>




<script src="../js/jquery.min.js"></script>



</body>
</html>