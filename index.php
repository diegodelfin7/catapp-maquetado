<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>app cat</title>
	<link rel="stylesheet"  href="bower_components/bootstrap/dist/css/bootstrap.min.css" />
	<link rel="stylesheet"  href="public/css/app.css" />
</head>
<body>
	<div id="landing-video" class=" text-center">
		<h2 >TECNOLOGÍA</h2>
		<p>LA INNOVACIÓN ESTA EN NUESTRA SANGRE</p>
		<a data-toggle="modal"  data-target="#ModalYTCat"><img src="public/img/boton-play.png" height="112" width="112"></a>
	</div>
	<div id="landing-blockthumb">
		<div class="container text-center inner-blockthumb">
			<div class="col-md-3 col-lg-3">
				<div class="block-thumb">
					<div class="title-block-thumb">SRX</div>
					<p class="description-block-thumb">LA MEJOR RESISTENCIA ANTIDELIZANTE</p>
					<img src="public/img/srx-thumb.png" class="block-img-thumb" />
				</div>
			</div>
			<div class="col-md-3 col-lg-3">
				<div class="block-thumb">
					<div class="title-block-thumb">ITECHNOLOGY</div>
					<p class="description-block-thumb">COMBINACIÓN DE DURABILIDAD Y CONFORT</p>
					<img src="public/img/ithe-thumb.png" class="block-img-thumb" />
				</div>
			</div>
			<div class="col-md-3 col-lg-3">
				<div class="block-thumb">
					<div class="title-block-thumb">ERGO</div>
					<p class="description-block-thumb">DISEÑO ERGONÓMICO CON MAYOR FLEXIBILIDAD</p>
					<img src="public/img/ergo-thumb.png" class="block-img-thumb" />
				</div>
			</div>
			<div class="col-md-3 col-lg-3">
				<div class="block-thumb">
					<div class="title-block-thumb">ERGO LITE</div>
					<p class="description-block-thumb">DISEÑO ERGONÓMICO DE ERGO MUCHO MÁS LIGERO</p>
					<img src="public/img/ergolite-thumb.png" class="block-img-thumb" />
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<h2 class="text-center">CONTÁCTANOS</h2>
		<form>
			<div class="form-group">
				<input type="text" placeholder="NOMBRE" class="form-control" />
			</div>
			<div class="form-group">
				<input type="text" placeholder="MAIL" class="form-control" />
			</div>
			<div class="form-group">
				<textarea rows="9" cols="50" placeholder="DESCRIPCIÓN"  class="form-control" ></textarea>
			</div>
			<div class="form-group">
				<label class="col-md-4 control-label" for="singlebutton"></label>
   				<div class="col-md-4 text-center">
        					<button type="submit" class="btn btn-default">Enviar</button>
    				</div>
			</div>
		</form>
	</div>
	<script src="bower_components/jquery/dist/jquery.min.js"></script>
	<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

	<!--  Modal You Tube-->
	<div class="modal fade" id="ModalYTCat" aria-hidden="true">
		<div class="modal-dialog">
        			<div class="modal-content">
            			<div class="modal-header">
                				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                 				<h4 class="modal-title">Modal title</h4>
				</div>
            			<div class="modal-body"><div class="te"></div></div>
            			<div class="modal-footer">
                				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                				<button type="button" class="btn btn-primary">Save changes</button>
            			</div>
        			</div>
        		<!-- /.modal-content -->
    		</div>
    	<!-- /.modal-dialog -->
	</div>
</body>
</html>
