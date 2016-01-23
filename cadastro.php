<!DOCTYPE html>
<html lang="pt-br">
  <head>
  	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="assets/img/favicon-wi.ico">
	
  	<title>WebIndique :: Novo Cadastro</title>
  	
  	<!-- Le Styles -->
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
				<h3 class="page-header">Novo Cadastro</h3>								
			</div>
		</div>	
	
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">			  		
				  	<div class="panel-body">
				  		<form>
				  			<div class="row">
    							<div class="col-md-6">  	
								  	<div class="form-group">
									    <label for="nome">Nome</label>
									    <div class="input-group">
										    <div class="input-group-addon"><i class="fa fa-user"></i></div>
										    <input type="text" class="form-control" id="nome" placeholder="Informe seu nome">
									    </div>
								  	</div>
								</div>							
		    				
		    					<div class="col-md-6">					    			
				    				<div class="form-group">
									    <label for="email">Email</label>
									    <div class="input-group">
										    <div class="input-group-addon">@</div>
										    <input type="email" class="form-control" id="email" placeholder="Informe seu e-mail">
									    </div>
								  	</div>
							  	</div>
							</div>
							
							<div class="row">
	    						<div class="col-md-6">
								  	<div class="form-group">
									    <label for="senha">Senha</label>
									    <div class="input-group">
										    <div class="input-group-addon"><i class="fa fa-lock"></i></div>
										    <input type="password" class="form-control" id="senha" placeholder="Mínimo 6 caracteres">
									    </div>
								  	</div>
							  	</div>
							  	
							  	<div class="col-md-6">
								  	<div class="form-group">
									    <label for="senha2">Confirme a senha</label>
									    <div class="input-group">
										    <div class="input-group-addon"><i class="fa fa-lock"></i></div>
										    <input type="password" class="form-control" id="senha2" placeholder="Digite a senha novamente">
									    </div>
								  	</div>
							  	</div>
							</div>
																													
							<div class="row">
    							<div class="col-md-6">  	
								  	<div class="form-group">
									    <label for="data-nascimento">Data de Nascimento</label>
									    <div class="input-group">
										    <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
										    <input type="date" class="form-control" id="data-nascimento" placeholder="dd/mm/aaaa">
									    </div>
								  	</div>
				    			</div>
							
    							<div class="col-md-6">
								  	<div class="form-group">
									    <label for="sexo">Sexo</label>
									    <div class="row">
									    	<div class="col-md-6">
									    		<input type="radio" name="sexo" value="M" class=""> Masculino
									    	</div>
									    	<div class="col-md-6">
									    		<input type="radio" name="sexo" value="F" class=""> Feminino
									    	</div>
									    </div>
								  	</div>
				    			</div>
							</div>
							
							<div class="row">
    							<div class="col-md-12">  	
								  	<div class="form-group">
									    <label for="uf">País</label>
									    <select class="form-control" id="pais">
									    	<option value="">Brasil</option>
									    </select>
								  	</div>
				    			</div>
							</div>
							
							<div class="row">
    							<div class="col-md-4">  	
								  	<div class="form-group">
									    <label for="uf">UF</label>
									    <select class="form-control" id="uf">
									    	<option value="">Selecione a UF</option>
									    </select>
								  	</div>
				    			</div>
							
    							<div class="col-md-8">
								  	<div class="form-group">
									    <label for="cidade">Cidade</label>
									    <select class="form-control" id="cidade">
									    	<option value="">Selecione a Cidade</option>
									    </select>
								  	</div>
				    			</div>
							</div>
						</form>													
				  	</div>
				  	<div class="panel-footer">
				  		<button class="btn btn-default" type="button">Cancelar</button>
					  	<button class="btn btn-primary pull-right" type="submit">Salvar</button>
				  	</div>
				</div>
			</div>
		</div>
    </div> <!-- /container -->
	
    <?php include('src/footer.php'); ?>

    <!-- Le Scripts -->
	<?php include('src/scripts.footer.php'); ?>
    
    <script src="assets/js/cidades-estados-1.4-utf8.js"></script>
    
    <script type="text/javascript">
    new dgCidadesEstados({
        cidade: document.getElementById('cidade'),
        estado: document.getElementById('uf')
	});
	
    $(document).ready(function(){
    	
    });
    </script>
  </body>
</html>
