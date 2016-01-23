<!DOCTYPE html>
<html lang="pt-br">
  <head>
  	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="assets/img/favicon-wi.ico">
	
  	<title>WebIndique</title>
  	
  	<?php include('src/scripts.header.php'); ?>
  </head>  	
  <body>

	<?php include('src/navigation.php'); ?>

    <!-- ---------------------------------------------------------------------------------------------------------------- -->
    <!-- ## CONTAINER ## -->
    <!-- ---------------------------------------------------------------------------------------------------------------- -->
	<div class="container">		
		<div class="row top10">
		  	<div class="col-md-6 col-md-offset-3">
		  		<form action="resultado.busca.produto.php" method="post">
			  		<label>Digite aqui o que você procura</label>						
					<div class="input-group">					
				      	<input type="text" class="form-control" placeholder="Ex.: Smart TV, Notebook, Samsung, LG, etc...">
				      	<span class="input-group-btn">
				        	<button class="btn btn-primary" type="submit"><i class="fa fa-search"></i></button>
				      	</span>
				    </div><!-- /input-group -->
			    </form>
		  	</div>
		</div>
		
		<div class="row top30">
			<div class="col-md-6">
				<div class="panel panel-success">
				  	<div class="panel-heading">
				    	Top5 WebIndicações Positivas
				  	</div>
				  	<div class="panel-body no-padding">
				    	<div class="list-group no-margin">
						  <a href="#" class="list-group-item">Samsung Galaxy S5 <span class="badge">5.720</span></a>
						  <a href="#" class="list-group-item">LG Smart TV Led <span class="badge">3.200</span></a>						  
						  <a href="#" class="list-group-item">Iphone 5S <span class="badge">1.900</span></a>
						  <a href="#" class="list-group-item">Samsung Galaxy S5 Mini <span class="badge">735</span></a>
						  <a href="#" class="list-group-item">Notebook Asus <span class="badge">410</span></a>
						</div>
				  	</div>
				</div>
			</div>
			
			<div class="col-md-6">
				<div class="panel panel-danger">
				  	<div class="panel-heading">
				    	Top5 WebIndicações Negativas
				  	</div>
				  	<div class="panel-body no-padding">
				    	<div class="list-group no-margin">
						  <a href="#" class="list-group-item">Samsung Galaxy S5 <span class="badge">5.720</span></a>
						  <a href="#" class="list-group-item">LG Smart TV Led <span class="badge">3.200</span></a>						  
						  <a href="#" class="list-group-item">Iphone 5S <span class="badge">1.900</span></a>
						  <a href="#" class="list-group-item">Samsung Galaxy S5 Mini <span class="badge">735</span></a>
						  <a href="#" class="list-group-item">Notebook Asus <span class="badge">410</span></a>
						</div>
				  	</div>
				</div>
			</div>
		</div>
		
		<div class="row equal top30">
			<div class="col-md-4">
				<div class="panel panel-info">
				  	<div class="panel-heading">
				    	<h3 class="panel-title">O que é WebIndique?</h3>
				  	</div>
				  	<div class="panel-body">
				    	<p>É um site no qual é possível saber a avaliação dos consumidores sobre um determinado produto.</p>

						<p>As avaliações podem ser positivas ou negativas. Dessa forma é possível analisar a avaliação geral 
						dos consumidores em relação à um produto =)</p>
				  	</div>
				</div>
			</div>
			
			<div class="col-md-4">
				<div class="panel panel-warning">
				  	<div class="panel-heading">
				    	<h3 class="panel-title">Por que WebIndicar?</h3>
				  	</div>
				  	<div class="panel-body">
				    	<p>Por que a sua opinião pode ser muito importante para alguém. <i class="fa fa-smile-o"></i></p>

						<p>Tem uma avaliação positiva sobre algo?<br>
						Então <strong class="text-success">WebIndique Positivo <i class="fa fa-thumbs-up"></i> </strong></p>
						
						<p>Agora, se sua avaliação for negativa <br>
						<strong class="text-danger">WebIndique Negativo <i class="fa fa-thumbs-down"></i> </strong></p>
				  	</div>
				</div>
			</div>
			
			<div class="col-md-4">
				<div class="panel panel-success">
				  	<div class="panel-heading">
				    	<h3 class="panel-title">WebIndique agora</h3>
				  	</div>
				  	<div class="panel-body">
				    	<p>Comprou um produto e quer deixar sua opinião?</p>

						<p>Então <a href="webindicar.php">clique aqui</a> e WebIndique agora!</p>
				  	</div>
				</div>
			</div>
		</div>				
    </div> <!-- /container -->
        
    <?php include('src/footer.php'); ?>

	<?php include('src/scripts.footer.php'); ?>
  </body>
</html>
