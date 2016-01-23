<!DOCTYPE html>
<html lang="pt-br">
  <head>
  	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="assets/img/favicon-wi.ico">
	
  	<title>WebIndique :: Resultado da busca: samsung</title>
  	
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
				<h4 class="page-header">Exibindo resultados para: <span class="text-info">samsung</span></h4>							
			</div>
		</div>			

		<div class="row">
			<div class="col-md-12">
				<a href="#" class="btn btn-primary btn-sm pull-right" data-target="#modalWebindicado" data-toggle="modal"> <i class="fa fa-plus"></i> Criar Produto</a>
			</div>
		</div>
		
		<div class="row top30">
			<div class="col-md-12">
				<div class="panel panel-default">
				  	<div class="panel-heading">
				    	<h3 class="panel-title">Celular/Smartphone <small>(15 resultados encontrados)</small></h3>
				  	</div>
				  	
			  		<div class="table-responsive">
				  		<table class="table table-hover tblResultadoBusca">
				  			<thead>
					  			<tr>
					  				<th width="57%">Produto</th>
					  				<th width="15%"> </th>
					  				<th width="10%" class="text-success text-center"><small>WebIndicações</small><br>Positivas</th>
					  				<th width="5%" class="text-success text-center"><br>%</th>
					  				<th width="10%" class="text-danger text-center"><small>WebIndicações</small><br>Negativas</th>
					  				<th width="5%" class="text-danger text-center"><br>%</th>
					  				<th width="8%" class="text-primary text-center"><small>WebIndicações</small><br>Totais</th>
					  			</tr>
				  			</thead>
				  			<tbody>
					  			<tr>
					  				<td><a href="#">Samsung Galaxy S5</a></td>					  				
					  				<td>
						  				<a class="btn btn-default" href="#" data-toggle="modal" data-target="#myModal">
											WebIndicar <img src="assets/img/wi-24.png" />
										</a>
					  				</td>
					  				<td class="text-center">590</td>
					  				<td class="text-center">70%</td>
					  				<td class="text-center">150</td>
					  				<td class="text-center">30%</td>
					  				<td class="text-center">840</td>
					  			</tr>
					  			<tr>
					  				<td><a href="#">Samsung Galaxy S5 Mini</a></td>					  				
					  				<td>
					  					<a class="btn btn-default" href="#" data-toggle="modal" data-target="#myModal">
											WebIndicar <img src="assets/img/wi-24.png" />
										</a>
					  				</td>
					  				<td class="text-center">59</td>
					  				<td class="text-center">70%</td>
					  				<td class="text-center">15</td>
					  				<td class="text-center">30%</td>
					  				<td class="text-center">84</td>
					  			</tr>
					  			<tr>
					  				<td><a href="#">Samsung Galaxy S4</a></td>					  				
					  				<td>
					  					<a class="btn btn-default" href="#" data-toggle="modal" data-target="#myModal">
											WebIndicar <img src="assets/img/wi-24.png" />
										</a>
					  				</td>
					  				<td class="text-center">59</td>
					  				<td class="text-center">70%</td>
					  				<td class="text-center">15</td>
					  				<td class="text-center">30%</td>
					  				<td class="text-center">84</td>
					  			</tr>
					  			<tr>
					  				<td><a href="#">Samsung Galaxy Alpha</a></td>	
					  				<td>
					  					<a class="btn btn-default" href="#" data-toggle="modal" data-target="#myModal">
											WebIndicar <img src="assets/img/wi-24.png" />
										</a>
									</td>
					  				<td class="text-center">2</td>
					  				<td class="text-center">100%</td>
					  				<td class="text-center">-</td>
					  				<td class="text-center">-</td>
					  				<td class="text-center">2</td>
					  			</tr>
				  			</tbody>
				  		</table>
			  		</div>
				  	
				</div>
			</div>
		</div>
		
		<div class="row top30">
			<div class="col-md-12">
				<p>
					<em class="pull-right">
						Não achou o que procurava? Não tem problema. <a href="#" data-target="#myModal" data-toggle="modal">Clique aqui e cadastre um novo produto.</a>
					</em>
				</p>
			</div>
		</div>
				
    </div> <!-- /container -->

  <!-- sample modal content -->
  <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">

        
        <div class="modal-body no-padding">
          
          
          <div class="row">
			<div class="col-md-12">
				<form>
					<div class="panel panel-success no-margin no-border">
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
										<button class="btn btn-success btnWIP" type="button">
										  	<i class="fa fa-thumbs-up" style="font-size: 18px"></i><br>
										  	<span>Positiva</span>
										</button>
									</div>
								</div>
								<div class="col-md-6 col-xs-6 text-center">
									<div class="form-group">
										<button class="btn btn-danger btnWIN" type="button">
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
					</div>
				</form>
			</div>
		</div>
          
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancelar</button>
          <button type="button" class="btn btn-primary" id="btnEnviarWI">Enviar</button>
        </div>

      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->



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
          <a href="index.html" class="btn btn-default pull-left">Fechar</a>
        </div>

      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
  
  
  <!-- MODAL - CADASTRO PRODUTO -->
  <div id="modalWebindicado" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
      	<div class="modal-header">
        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        	<h4 class="modal-title text-center">WebIndicado</h4> 
      	</div>
        <div class="modal-body">
        
        	<div class="row">
				<div class="col-md-12">
					<div class="col-md-6">			
						<div class="panel panel-default btn-webindicado" data-target="produto">
							<div class="panel-body">
								<h4 class="text-center">Produtos</h4>
								<p class="text-center"><small>Smartphones, TV's, Notebooks, ...</small></p>
								<p class="text-center" style="font-size:18px;"><i class="glyphicon glyphicon-phone"></i> <i class="glyphicon glyphicon-gift"></i> <i class="glyphicon glyphicon-display"></i></p>
							</div>
						</div>
					</div>
					
					<div class="col-md-6">			
						<div class="panel panel-default btn-webindicado" data-target="estabelecimento">
							<div class="panel-body">
								<h4 class="text-center">Estabelecimentos</h4>
								<p class="text-center"><small>Bares, Restaurantes, Hotéis, ...</small></p>
								<p class="text-center" style="font-size:18px;"><i class="glyphicon glyphicon-glass"></i> <i class="glyphicon glyphicon-cutlery"></i> <i class="glyphicon glyphicon-bed"></i></p>
							</div>
						</div>
					</div>
					
					<div class="col-md-6">			
						<div class="panel panel-default btn-webindicado" data-target="viagens">
							<div class="panel-body">
								<h4 class="text-center">Viagens</h4>
								<p class="text-center"><small>Parques, Museus, ...</small></p>
								<p class="text-center" style="font-size:18px;"><i class="glyphicon glyphicon-picture"></i> <i class="glyphicon glyphicon-map-marker"></i></p>
							</div>
						</div>
					</div>
					
					<div class="col-md-6">			
						<div class="panel panel-default btn-webindicado" data-target="website">
							<div class="panel-body">
								<h4 class="text-center">Websites</h4>
								<p class="text-center"><small>e-commerce, Entretenimento, Notícias</small></p>
								<p class="text-center" style="font-size:18px;"><i class="glyphicon glyphicon-shopping-cart"></i> <i class="glyphicon glyphicon-comment"></i> <i class="glyphicon glyphicon-briefcase"></i></p>
							</div>
						</div>
					</div>
					
					<div class="col-md-12">			
						<div class="panel panel-default btn-webindicado" data-target="outros">
							<div class="panel-body">
								<h4 class="text-center">.. e muito mais</h4>							
							</div>
						</div>
					</div>
				</div>
			</div>
        
        </div>
      </div>
    </div>
  </div>
  
  
  <!-- MODAL - CADASTRO PRODUTO -->
  <div id="modalWebindicadoProd" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
      	<div class="modal-header">
        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        	<h4 class="modal-title text-center">Novo Produto</h4> 
      	</div>
        <div class="modal-body">
        
		        <div id="rootwizard">
			    	<ul>
			    	  	<li><a href="#tab1" data-toggle="tab">1. Categoria</a></li>
			    		<li><a href="#tab2" data-toggle="tab">2. Marca</a></li>
			    		<li><a href="#tab3" data-toggle="tab">3. Modelo</a></li>
			    		<li><a href="#tab4" data-toggle="tab">4. WebIndicação</a></li>
			    	</ul>
			    	<form id="frmWebIndicado">
			    	<div class="tab-content">
			    	    <div class="tab-pane" id="tab1">
			    	      <div class="row top30">
			    	      	<div class="col-md-12">
			    	      		<div class="form-group">
								    <label for="categoria">Informe a Categoria</label>
								    <input type="text" class="form-control required" id="categoria" data-wizard-input="1">
								    <p class="text-muted">Ex.: Celular, Geladeira, Notebook, etc.</p>
							  	</div>
			    	      	</div>
			    	      </div>
			    	    </div>
			    	    <div class="tab-pane" id="tab2">
			    	      <div class="row top30">
			    	      	<div class="col-md-12">
			    	      		<div class="form-group">
								    <label for="marca">Informe a Marca</label>
								    <input type="text" class="form-control required" id="marca" data-wizard-input="2">
								    <p class="text-muted">Ex.: Samsung, Consul, Dell, etc.</p>
							  	</div>
			    	      	</div>
			    	      </div>
			    	    </div>
			    		<div class="tab-pane" id="tab3">
			    			<div class="row top30">
			    	      	<div class="col-md-12">
			    	      		<div class="form-group">
								    <label for="modelo">Informe o Modelo <em style="font-weight: normal;">(opcional)</em></label>
								    <input type="text" class="form-control" id="modelo" data-wizard-input="3">
								    <p class="text-muted">Ex.: S5 Mini, Frost Free Duplex, Inspiron, etc.</p>
							  	</div>
			    	      	</div>
			    	      </div>
			    	    </div>
			    		<div class="tab-pane" id="tab4">
			    			<div class="row top30">
								<div class="col-md-12">
										<div class="panel panel-success no-margin no-border">
										  	<div class="panel-heading">
										    	<h3 class="panel-title text-center">Smartphone</h3>
										  		<h3 class="panel-title text-center"><strong>Samsung Galaxy S5</strong></h3>
										  	</div>
										  	<div class="panel-body">
										    	<div class="row">
										    		<div class="col-md-12">
										    			<p>Minha WebIndicação é <span class="txtWebIndicacao">...</span></p>
										    		</div>
												</div>
												
												<div class="row">
													<div class="col-md-6 col-xs-6 text-center">
														<div class="form-group">
															<button class="btn btn-success btnWIP" type="button">
															  	<i class="fa fa-thumbs-up" style="font-size: 18px"></i><br>
															  	<span>Positiva</span>
															</button>
														</div>
													</div>
													<div class="col-md-6 col-xs-6 text-center">
														<div class="form-group">
															<button class="btn btn-danger btnWIN" type="button">
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
										</div>
								</div>
							</div>
			    	    </div>
			    		<ul class="pager wizard">
			    			<li class="previous"><a href="#">Anterior</a></li>
			    		  	<li class="next"><a href="#" id="btnNext">Próximo</a></li>
			    		  	<li class="next finish" style="display:none;"><a href="javascript:;">Enviar</a></li>
			    		</ul>
			    	</div>
			    	</form>	
			    </div>
          
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /MODAL - CADASTRO WEBINDICADO -->


    <?php include('src/footer.php'); ?>

	<?php include('src/scripts.footer.php'); ?>
    
    <!-- Datatable JS -->
    <script src="assets/js/plugins/datatable/js/jquery.dataTables.js"></script>   
    
    <!-- Validate -->
    <script src="assets/js/plugins/jquery-validate/jquery.validate-v1.11.1.min.js"></script>
    <script src="assets/js/plugins/jquery-validate/messages_pt_BR.js"></script>
    
    <!-- Wizard -->
    <script src="assets/js/plugins/jquery.bootstrap.wizard.min.js"></script>
    
    <script type="text/javascript">
    $(document).ready(function(){

		$('.form-control').on('keypress', function(event){
			if (event.keyCode == 13){
				$('#btnNext').trigger('click');
			}
		});    	
    	
    	//Modal Principal onClick
		$('.btn-webindicado').on('click', function(){
			$('#modalWebindicadoProd').modal('show');
			$('#modalWebindicado').modal('hide');
		});

    	
    	// ---------------------------------------------------------------------------------------------------
		// Wizard
		// ---------------------------------------------------------------------------------------------------
		
		// override jquery validate plugin defaults
		$.validator.setDefaults({
		    highlight: function (element, errorClass, validClass) {
		        if (element.type === "radio") {
		            this.findByName(element.name).addClass(errorClass).removeClass(validClass);
		        } else {
		            $(element).closest('.form-group').removeClass('has-success has-feedback').addClass('has-error has-feedback');
		            $(element).closest('.form-group').find('i.glyphicon').remove();
		            $(element).closest('.form-group').append('<i class="glyphicon glyphicon-remove form-control-feedback"></i>');
		        }
		    },
		    unhighlight: function (element, errorClass, validClass) {
		        if (element.type === "radio") {
		            this.findByName(element.name).removeClass(errorClass).addClass(validClass);
		        } else {
		            $(element).closest('.form-group').removeClass('has-error has-feedback').addClass('has-success has-feedback');
		            $(element).closest('.form-group').find('i.glyphicon').remove();
		            $(element).closest('.form-group').append('<i class="glyphicon glyphicon-ok form-control-feedback"></i>');
		        }
		    },		    
		    errorElement: 'span',
		    errorClass: 'help-block',
		    errorPlacement: function(error, element) {
		        if(element.parent('.input-group').length) {
		            error.insertAfter(element.parent());
		        } else {
		            error.insertAfter(element);
		        }
		    }
		});
		var $validator = $("#frmWebIndicado").validate({
			  rules: {
			    categoria: {
			      required: true,
			      minlength: 3
			    },
			    marca: {
			      required: true,
			      minlength: 3
			    }			    
			  }
		});
	  	$('#rootwizard').bootstrapWizard({
	  		'tabClass': 'nav nav-pills',
	  		'onNext': function(tab, navigation, index) {		  		
	  			var $valid = $("#frmWebIndicado").valid();
	  			if(!$valid) {
	  				$validator.focusInvalid();
	  				return false;
	  			}
	  		},
	  		'onTabShow': function(tab, navigation, index) {
				var $total = navigation.find('li').length;
				var $current = index+1;
				
				//Seta o foco para o input
				$('.form-control').each(function(){
					if ($(this).data('wizard-input') == $current)
						$(this).focus();
				});
				
				// If it's the last tab then hide the last button and show the finish instead
				if($current >= $total) {
					$('#rootwizard').find('.pager .next').hide();
					$('#rootwizard').find('.pager .finish').show();
					$('#rootwizard').find('.pager .finish').removeClass('disabled');
				} else {
					$('#rootwizard').find('.pager .next').show();
					$('#rootwizard').find('.pager .finish').hide();
				}
				
			},
	  	});
	  	$('#rootwizard .finish').click(function() {
			alert('Finished!');
		});
	  	
		//$('#rootwizard').bootstrapWizard({'tabClass': 'nav nav-pills'});
	  	/*$('#rootwizard').bootstrapWizard({onTabShow: function(tab, navigation, index) {
			var $total = navigation.find('li').length;
			var $current = index+1;
			
			// If it's the last tab then hide the last button and show the finish instead
			if($current >= $total) {
				$('#rootwizard').find('.pager .next').hide();
				$('#rootwizard').find('.pager .finish').show();
				$('#rootwizard').find('.pager .finish').removeClass('disabled');
			} else {
				$('#rootwizard').find('.pager .next').show();
				$('#rootwizard').find('.pager .finish').hide();
			}
			
		}});
		*/
		// ---------------------------------------------------------------------------------------------------
        
        //WebIndicação Positiva
    	$(".btnWIP").click(function(){
    		// volta a cor ao botão caso tenha sido esmaecido
    		if ($(".btnWIP").hasClass("btn-off")){
	    		$(".btnWIP").removeClass("btn-off");
	    		$(".btnWIP").addClass("btn-success");    			
    		}
    		
    		var wi = "<strong class='text-success'>Positiva <i class='fa fa-thumbs-up'></i></strong>";
    		$(this).parent().parent().parent().parent().find('.txtWebIndicacao').html(wi);
    		
    		// esmaece o botão Negativo
    		$(".btnWIN").removeClass("btn-danger");
    		$(".btnWIN").addClass("btn-off");
    	});

    	//WebIndicação Negativa
    	$(".btnWIN").click(function(){
    		// volta a cor ao botão caso tenha sido esmaecido
    		if ($(".btnWIN").hasClass("btn-off")){
	    		$(".btnWIN").removeClass("btn-off");
	    		$(".btnWIN").addClass("btn-danger");    			
    		}
    		
    		var wi = "<strong class='text-danger'>Negativa <i class='fa fa-thumbs-down'></i></strong>";
    		$(this).parent().parent().parent().parent().find('.txtWebIndicacao').html(wi);

    		// esmaece o botão Positivo
    		$(".btnWIP").removeClass("btn-success");
    		$(".btnWIP").addClass("btn-off");
    	});

    	// Envia WI
    	$('#btnEnviarWI').click(function(){
        	$('#myModal').modal('hide');
        	var cont = '<div class="col-md-6"><p class="text-center"></p></div>';
        	
    		var n = noty({
                text        : 'Obrigado pela sua WebIndicação!',
                type        : 'success',
                dismissQueue: true,
                layout      : 'top',
                //theme       : 'relax',
                //timeout		: 2000,
                animation: {
                	open: 'animated bounceInLeft', // Animate.css class names
                    close: 'animated bounceOutLeft', // Animate.css class names
                    easing: 'swing', // unavailable - no need
                    speed: 500 // unavailable - no need
                }
            });
        });
    });
    </script>
  </body>
</html>
