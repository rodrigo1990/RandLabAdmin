<?php require("inc/header.php"); ?>
<body>

	<form action="landing_insertar_novedad.php" class="some_form" id="my-dropzone-element-id"enctype="multipart/form-data" method="POST">	
		<label for="titulo">Ingrese un titulo</label><br>
    <input type="text" name="titulo" id="titulo"> <br><br>
    <label for="descripcion">Descripcion</label><br>
		<input type="text" name="descripcion" id="descripcion"> <br><br>
  	
      <input type="file" name="upload[]" id="images" multiple>
      <br><br>
	      <button type="submit">Submit data and files!</button>


    <div id="imgContainer"></div>

	</form>




<script src="../js/jquery.min.js"></script>
<script src="js/dist/jquery.validate.js"></script>
<script src="js/dist/additional-methods.js"></script>
<script>

$.validator.addMethod('filesize', function (value, element, param) {
return this.optional(element) || (element.files[0].size <= param)}, 'File size must be less than {0}');


$.validator.addMethod('width', function(value, element, width) {
  return ($(element).data('imageWidth') || 0) == width;
}, function(width, element) {
  var imageWidth = $(element).data('imageWidth');
  return (imageWidth)
      ? ("La imagen debe tener un ancho de " + width + "px")
      : "Selected file is not an image.";
});


$.validator.addMethod('height', function(value, element, height) {
  return ($(element).data('imageHeight') || 0) == height;
}, function(height, element) {
  var imageHeight = $(element).data('imageHeight');
  return (imageHeight)
      ? ("La imagen debe tener un alto de " + height + "px")
      : "Selected file is not an image.";
});


jQuery(function ($) {
"use strict";
$('#my-dropzone-element-id').validate({
    errorElement: "label"
    , errorClass: "has-error"
    , submitHandler: function (form) {
        form.submit(); //return false;
    }
    , highlight: function (element) {
        $(element).closest('.form-group').removeClass('success').addClass('has-error');
    }
    , rules: {
        "upload[]": { 
            extension: "jpg,jpeg,png",
            filesize: 300000, //500kb
            width:183,
            height:123

        }
        
    },
    messages: {
        "upload[]": { 
            extension: "Please upload only jpg, jpeg format",
            filesize: "Please upload maximum 500Kb",
            width:"Imagenesd e 183 ancho",
            height:"Imagenes de 123 de alto"
        }
    }
});
});

var $submitBtn = $('.some_form').find('input:submit'),
  $photoInput = $('#images'),
  $imgContainer = $('#imgContainer');


$('#images').change(function() {

  var files = $("#images")[0].files;
  var y=0;
      for (var i = 0; i < files.length; i++)
      {
        y++;
      }

  if(y>10){
    alert("maximo 10 imagenes");
  }





  $photoInput.removeData('imageWidth');
  $imgContainer.hide().empty();

  var file = this.files[0];

  if (file.type.match(/image\/.*/)) {
    $submitBtn.attr('disabled', true);

    var reader = new FileReader();

    reader.onload = function() {
      var $img = $('<img />').attr({ src: reader.result });

      $img.on('load', function() {
        $imgContainer.append($img).show();
        var imageWidth = $img.width();
        var imageHeight = $img.height();
        $photoInput.data('imageWidth', imageWidth);
        $photoInput.data('imageHeight', imageHeight);
        if (imageWidth == 183 && imageHeight == 123 ) {
          $imgContainer.hide();
        } else {
          $img.css({ width: '400px', height: '200px' });
        }
        $submitBtn.attr('disabled', false);

        validator.element($photoInput);
      });
    }

    reader.readAsDataURL(file);
  } else {
    validator.element($photoInput);
  }
});


 $('#images').change(function () {

      

  });

</script>




































<script src="js/dropzone.js"></script>
<link rel="stylesheet" href="https://rawgit.com/enyo/dropzone/master/dist/dropzone.css">
<script>


/*document.querySelector(".cancel").onclick = function() {
  Dropzone.forElement("#my-dropzone-element-id").removeAllFiles(true);

};*/


</script>
</body>
</html>