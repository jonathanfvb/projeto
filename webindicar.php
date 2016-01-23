<!DOCTYPE html>
<html lang="pt-br">
  <head>
  	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="assets/img/favicon-wi.ico">
	
  	<title>WebIndique :: WebIndicando Produto</title>
  	
  	<?php include('src/scripts.header.php'); ?>
  </head>  	
  <body>

	<?php include('src/navigation.php'); ?>
    
    <!-- ---------------------------------------------------------------------------------------------------------------- -->
    <!-- ## CONTAINER ## -->
    <!-- ---------------------------------------------------------------------------------------------------------------- -->
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h3 class="page-header">WebIndicando Produto</h3>								
			</div>
		</div>		

		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<form>
					<div class="panel panel-success">
					  	<div class="panel-heading">
					    	<h3 class="panel-title text-center">Smartphone</h3>
					  		<h3 class="panel-title text-center"><strong>Samsung Galaxy S5</strong></h3>
					  	</div>
					  	<div class="panel-body">
					    	<div class="row">
					    		<div class="col-md-12">
					    			<p>Minha WebIndicação é <span id="txtWebIndicacao">...</span></p>
					    		</div>
							</div>
							
							<div class="row">
								<div class="col-md-6 col-xs-6 text-center">
									<div class="form-group">
										<button id="btnWIP" class="btn btn-success" type="button">
										  	<i class="fa fa-thumbs-up" style="font-size: 18px"></i><br>
										  	<span>Positiva</span>
										</button>
									</div>
								</div>
								<div class="col-md-6 col-xs-6 text-center">
									<div class="form-group">
										<button id="btnWIN" class="btn btn-danger" type="button">
										  	<i class="fa fa-thumbs-down" style="font-size: 18px"></i><br>
										  	<span>Negativa</span>
										</button>
									</div>
								</div>
							</div>
							
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<textarea class="form-control" placeholder="Se quiser deixe um comentário"></textarea>
									</div>
								</div>
							</div>
					  	</div>
					  	<div class="panel-footer">
					  		<button class="btn btn-default" type="button">Cancelar</button>
						  	<button class="btn btn-primary pull-right" type="button" data-toggle="modal" data-target="#modalConfirmacao">Enviar</button>
					  	</div>
					</div>
				</form>
			</div>
		</div>
    </div> <!-- /container -->
	
	<!-- sample modal content -->
  <div id="modalConfirmacao" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">

        <div class="modal-body">

          <div class="row">
			<div class="col-md-12">
				<h4>Confirmação de segurança</h4>
		
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Digite o texto abaixo" />
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-group">
							<img src="assets/img/captcha.PNG" class="img-responsive"/>
						</div>
					</div>
				</div>
			</div>
		</div>
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancelar</button>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalFinal">Enviar</button>
        </div>

      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->


  <!-- sample modal content -->
  <div id="modalFinal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">

        <div class="modal-body">

          <div class="row">
			<div class="col-md-12">
				<div class="alert alert-success" role="alert">
					<strong>Parabéns!</strong>
					Sua WebIndicação foi enviada.
				</div>
			</div>
		  </div>
          
        </div>
        <div class="modal-footer">
          <a href="index.php" class="btn btn-default pull-left">Fechar</a>
        </div>

      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

    <?php include('src/footer.php'); ?>

	<?php include('src/scripts.footer.php'); ?>
    
    <script type="text/javascript">
    $(document).ready(function(){
    	$("#btnWIP").click(function(){
    		// volta a cor ao botão caso tenha sido esmaecido
    		if ($("#btnWIP").hasClass("btn-default")){
	    		$("#btnWIP").removeClass("btn-default");
	    		$("#btnWIP").addClass("btn-success");    			
    		}
    		
    		var wi = "<strong class='text-success'>Positiva <i class='fa fa-thumbs-up'></i></strong>";
    		$("#txtWebIndicacao").html(wi);
    		
    		// esmaece o botão Negativo
    		$("#btnWIN").removeClass("btn-danger");
    		$("#btnWIN").addClass("btn-default");
    	});
    	$("#btnWIN").click(function(){
    		// volta a cor ao botão caso tenha sido esmaecido
    		if ($("#btnWIN").hasClass("btn-default")){
	    		$("#btnWIN").removeClass("btn-default");
	    		$("#btnWIN").addClass("btn-danger");    			
    		}
    		
    		var wi = "<strong class='text-danger'>Negativa <i class='fa fa-thumbs-down'></i></strong>";
    		$("#txtWebIndicacao").html(wi);
    		// esmaece o botão Positivo
    		$("#btnWIP").removeClass("btn-success");
    		$("#btnWIP").addClass("btn-default");
    	});
    });
    </script>
  </body>
</html>
