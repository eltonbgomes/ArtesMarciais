<?php 

$cliente = json_decode(file_get_contents('cliente.json'));

?>
<!DOCTYPE HTML>
<html lang="pt-BR">
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Espartanos</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,700,900" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	
	<!-- Flaticons  -->
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->


		<style type="text/css">
			
			.dados {
				margin-left: 1.5rem;
			}

		</style>

	</head>
	<body>
		
	<div class="colorlib-loader"></div>

	<div id="page">
		<nav class="colorlib-nav" role="navigation" style="background: black">
			<div class="top-menu">
				<div class="container">
					<div class="row">
						<div class="col-md-4">
							<div id="colorlib-logo"><a href="index.php" style="font-size:18px">Espartanos</a></div>
						</div>
						<div class="col-md-8 text-right menu-1">
							<ul>
								<li ><a href="index.php">Inicio</a></li>
								<li ><a href="gerar_orcamento.php">Ver preços</a></li>

								
								
								<li class="has-dropdown ">
									<a id="#drop">Artes Marciais</a>
									<ul class="dropdown"  id="drop">
										<li><a href="jiujitsu.php">Jiu Jitsu </a></li>
                                        <li><a href="muaythai.php">Muay Thai </a></li>
                                        <li><a href="boxe.php">Boxe </a></li> 
									</ul>
								</li>	
								<li class="active"><a href="consulta.php">Consulta</a></li>
									</ul>
								
								
							
						</div>
					</div>
				</div>
			</div>
		</nav>
		
		<br><br><br><br>
		<div id="colorlib-contact">
			<div class="container">
				<h1>Orçamento do Último cliente</h1><br><br>

				<h2 style="color: green">Cliente gerou orçamento em : <?php echo $cliente->gerado ?></h2>
				<h2 style="color: red">Validade do orçamento : <?php echo $cliente->validade ?></h2>
				<br><br>

				<h2>Dados pessoais</h2>
				<p class="dados">Nome: <?php echo $cliente->nome ?></p>
				<p class="dados">CPF: <?php echo $cliente->cpf ?></p>
				<p class="dados">Email: <?php echo $cliente->email ?></p>
				<p class="dados">Telefone: <?php echo $cliente->telefone ?></p>

				<h2>Artes Marciais</h2>

				<?php 

				$valor_total = 0;

					if(isset($cliente->jiu)){
						if($cliente->mesesJiu == 1) {
							echo "Jiu jitsu: ". $cliente->mesesJiu." mes<br>";
						} else {
							echo "Jiu jitsu: ". $cliente->mesesJiu." meses<br>";
						}
						echo "R$ ".number_format($cliente->mesesJiu*70, 2, ',', '.');
						echo "<hr>";

						$valor_total += $cliente->mesesJiu*70;
					}

					if(isset($cliente->mua)){
						if($cliente->mesesMuay == 1) {
							echo "Muay Thai: ". $cliente->mesesMuay." mes<br>";
						} else {
							echo "Muay Thai: ". $cliente->mesesMuay." meses<br>";
						}
						echo "R$ ".number_format($cliente->mesesMuay*90, 2, ',', '.');
						echo "<hr>";

						$valor_total += $cliente->mesesMuay*90;

					}

					if(isset($cliente->box)){
						if($cliente->mesesBoxe == 1) {
							echo "Boxe: ". $cliente->mesesBoxe." mes<br>";
						} else {
							echo "Boxe: ". $cliente->mesesBoxe." meses<br>";
						}
						echo "R$ ".number_format($cliente->mesesBoxe*75, 2, ',', '.');
						echo "<hr>";

						$valor_total += $cliente->mesesBoxe*75;

					}

				?>

				<?php 

				if($cliente->desconto != "" && $cliente->desconto != 0 && $cliente->desconto < 100){
					echo "O cliente possui cupom de " . $cliente->desconto . "% de desconto !<hr>";
					echo "<h3>Preço total: R$ " . number_format(	($valor_total * (1 - ($cliente->desconto/100))), 2, ',', '.') ."</h3>";

				} else {
					echo "O cliente <span style='color:red'>NÃO</span> possui cupom de desconto !<hr>";
					echo "<h3>Preço total: R$ " . number_format($valor_total, 2, ',', '.') . "</h3>";

				}



				 ?>


			</div>
		</div>
		
		
        
        <?php include 'rodape.php' ?>
        
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Owl carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Counters -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
	<script src="js/google_map.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>

