<?php 
include "conexao.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <title>Curso em video</title>
    <script type="video.js"></script>

  </head>
  <body>
  	<?php include "nav.php" ?>
  	<?php include "carrosel.php" ?>
  	<main>
  		<br>
  		<br>
  		<br>
  		<div class="container">
  			<section id="cursos">
  				<div>
  					<p class="display-4">Cursos</p>
  				</div>
  				<div class="row">
  					<div class="col-md-4 col-lg-4">    
  						<div class="card" style="width: 18rem;">
  							<img class="card-img-top" src="img/html.png" alt="Imagem de capa do card">
  							<div class="card-body">
  								<h5 class="card-title">HTML</h5>
  								<p class="card-text">HTML do zero ao avançado</p>
  							</div>
  						</div>
  					</div>
  					<div class="col-md-4 col-lg-4">
  						<div class="card" style="width: 18rem;">
  							<img class="card-img-top" src="img/css.png" alt="Imagem de capa do card">
  							<div class="card-body">
  								<h5 class="card-title">CSS</h5>
  								<p class="card-text">CSS do zero ao avançado.</p>
  							</div>
  						</div>
  					</div>
  					<div class="col-md-4 col-lg-4">
  						<div class="card" style="width: 18rem;">
  							<img class="card-img-top" src="img/js.png" alt="Imagem de capa do card">
  							<div class="card-body">
  								<h5 class="card-title">Javascript</h5>
  								<p class="card-text">JS do zero ao avançado.</p>
  							</div>
  						</div>
  					</div>
  				</div>
  			</section>
  		</div>
  		<br>
  		<br>
  		<br>
  		<div class="container">
  			<section id="sobre">
  				<p class="display-4">Sobre</p>
  				<div class="row">
  					<div class="col col-lg-4">
  						<img src="img/guanabara.png" alt="Image Responsive">
  					</div>
  					<div class="col col-lg-6">
  						<p class="display-5">Professor: Gustavo Guanabara<br>
  							Fala pequeno gafonhoto,aqui você vai aprender tudo sobre html css e javascript do zero ao avançado e conseguir chegar ao proximo nivel da sua carreira como programador front-end.
  						</p>
  					</div>
  				</div>
  			</section>
  		</div>
  		<br>
  		<br>
  		<br>
  		<div class="container">
  			<section id="video">
  				<p class="display-4">Video</p>
  				<div class="row">
  					<div class="col-lg-10">
  						<div class="embed-responsive embed-responsive-16by9">
  							<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/videoseries?list=PLHz_AreHm4dlAnJ_jJtV29RFxnPHDuk9o"  allowfullscreen>
  							</iframe>
  						</div>
  					</div>
  				</div>
  			</section>
  		</div>
  		<br>
  		<div class="container">
  			<section id="comentarios">
  				<p class="display-4">Comentarios</p>
  				<div class="col-lg-9">
  					<div class="row">
  						<?php 
  						$sql = "SELECT * FROM posts";
  						$query = mysqli_query($conect,$sql);
  						echo "<div class='col-lg-9'>";
  						while($result = mysqli_fetch_assoc($query)){
  							echo"<h5>Nome</h5>".$result['nome'];
  							echo"<h5>E-mail</h5>".$result['email'];
  							echo"<h5>Mensagem</h5>";
  							echo"<pre style='font-family: inherit;font-size: inherit'><p align='justify'>".$result['mensagem']."</p></pre>";
  							echo"<br>";
  							echo"<br>";
  							echo"<br>";
  							echo"<br>";
  						}
  						echo "</div>";
  						echo "</div>";
  						?>
  					</div>    
  					<div class="col-lg-6 col-lg-offset-6">
  						<form action="comentarios.php"  method="post">
  							<div class="form-group">
  								<label>Nome</label>
  								<input type="text" name="nome" class="form-control" required="">
  							</div>
  							<div class="form-group">
  								<label>E-mail</label>
  								<input type="email" name="email" class="form-control" required="">
  							</div>
  							<div class="form-group">
  								<label>Mensagem</label>
  								<textarea wrap="off" name="mensagem" class="form-control" rows="14"  required="">
  								</textarea>
  							</div>
  							<input type="submit" class="btn btn-primary" value="Enviar">
  						</form>
  					</div>
  				</section>
  			</div>
  			<br>
  			<br>
  			<br>
  			<div class="float-right">
  				<a href="#top" class="btn btn-dark rounded-circle p-3 fa fa-arrow-up position-fixed" aria-hidden="true" style="bottom: 0;right:0;z-index: 10000000000000000000000 !important"></a>
  			</div>
  			<?php include "footer.php" ?>
  		</main>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>