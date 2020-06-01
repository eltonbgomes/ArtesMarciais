<?php
session_start();

$nome = $_POST["nome"];
$cpf = $_POST["cpf"];
$email = $_POST["email"];
$telefone = $_POST["telefone"];


if(isset($_POST["mua"])){
	$mua = "true"; 
} else {
	$mua = "false"; 
}

if(isset($_POST["box"])){
	$box = "true"; 
} else {
	$box = "false"; 
}

if(isset($_POST["jiu"])){
	$jiu = "true"; 
} else {
	$jiu = "false"; 
}



// SALVANDO EM JSON
	$fp = fopen("cliente.json", "w");
	fwrite($fp,json_encode($_POST));
	fclose($fp);
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
								<li><a href="consulta.php">Consulta</a></li>
									</ul>
								
								
							
						</div>
					</div>
				</div>
			</div>
		</nav>
		
		<br><br><br><br>
		<div id="colorlib-contact">
			<div class="container">
				<h1>Olá, <?php echo $nome ?>.</h1><br><br>



<?php
		$dia = date('d');
		$numMes = 0; 
		$mes = date('m');
		$ano = date('Y'); 

		
			switch ($mes) {
				case 1:
					$mes = "Janeiro";
					$numMes = 1; 
					break;

				case 2:
					$mes = "Fevereiro";
					$numMes = 2; 
					break;	

				case 3:
					$mes = "Março";
					$numMes = 3; 
					break;	

				case 4:
					$mes = "Abril";
					$numMes = 4; 
					break;	

				case 5:
					$mes = "Maio";
					$numMes = 5; 
					break;

				case 6:
					$mes = "Junho";
					$numMes = 6; 
					break;

				case 7:
					$mes = "Julho";
					$numMes = 7; 
					break;

				case 8:
					$mes = "Agosto";
					$numMes = 8; 
					break;

				case 9:
					$mes = "Setembro";
					$numMes = 9; 
					break;

				case 10:
					$mes = "Outubro";
					$numMes = 10; 
					break;	

				case 11:
					$mes = "Novembro";
					$numMes = 11; 
					break;

				case 12:
					$mes = "Dezembro";
					$numMes = 12; 
					break;
			}


		$texto_orcamento = "Seu orçamento foi gerado em: Jundiaí, <span style='color:green'>" . $dia . " de " . $mes . " de " . $ano . "</span> e ";
	
		$mesSeguinte = $numMes+1;
			switch ($mesSeguinte) {
				case 1:
					$mesSeguinte = "Janeiro";
					break;

				case 2:
					$mesSeguinte = "Fevereiro";
					break;	

				case 3:
					$mesSeguinte = "Março";
					break;	

				case 4:
					$mesSeguinte = "Abril";
					break;	

				case 5:
					$mesSeguinte = "Maio";
					break;

				case 6:
					$mesSeguinte = "Junho";
					break;

				case 7:
					$mesSeguinte = "Julho";
					break;

				case 8:
					$mesSeguinte = "Agosto";
					break;

				case 9:
					$mesSeguinte = "Setembro";
					break;

				case 10:
					$mesSeguinte = "Outubro";
					break;	

				case 11:
					$mesSeguinte = "Novembro";
					break;

				case 12:
					$mesSeguinte = "Dezembro";
					break;
			}

		$texto_orcamento .= "possui validade até:  <span style='color:red'>" . $dia . " de " . $mesSeguinte . " de " . $ano . "</span>.";

		
		?>



				<h4><?php echo $texto_orcamento . "<br>";?></h4>
				
				

				<h4><u>Artes Marciais escolhidas e seu  preço final:</u></h4>
				<hr>
				<?php

				$valor_total = 0;

				$cursos_escolhidos = "";
				if($jiu == "true"){
					$cursos_escolhidos .= "Jiu Jitsu: ".$_POST["mesesJiu"]." mes(es).<br> Total de R$ ".
					number_format($_SESSION["jiujitsuMensalidade"]*$_POST["mesesJiu"], 2, ',', '.')."<br><hr>";


					$valor_total += $_SESSION["jiujitsuMensalidade"]*$_POST["mesesJiu"];

				}		
		
				if($box == "true"){
					$cursos_escolhidos .= "Boxe: ".$_POST["mesesBoxe"]." mes(es).<br> Total de R$ ".
					number_format($_SESSION["boxeMensalidade"]*$_POST["mesesBoxe"], 2, ',', '.')."<br><hr>";


					$valor_total += $_SESSION["boxeMensalidade"]*$_POST["mesesBoxe"];
		
				}

				if($mua == "true"){
					$cursos_escolhidos .= "Muay Thai: ".$_POST["mesesMuay"]." mes(es). <br>Total de R$ ".
					number_format($_SESSION["muayThaiMensalidade"]*$_POST["mesesMuay"], 2, ',', '.')."<br><hr>";


					$valor_total += $_SESSION["muayThaiMensalidade"]*$_POST["mesesMuay"];

				}



				echo $cursos_escolhidos;


				if($_POST["desconto"] != "" && $_POST["desconto"] != 0 && $_POST["desconto"] < 100 ){
						$valor_desconto = $_POST["desconto"]/100 * $valor_total;
						$valor_total = $valor_total * ( 1 - ($_POST["desconto"]/100) ); 
						echo "Você inseriu um cupom de " . $_POST["desconto"] . "% de desconto.<br>";
						echo "Valor do desconto: R$ " . number_format($valor_desconto, 2, ',', '.'). "<br>";

						echo "<br><b>Valor total com desconto: R$ " . number_format($valor_total, 2, ',', '.') . "</b>";
				} else {
					echo "<b>Valor total: R$ " . number_format($valor_total, 2, ',', '.') . "</b>"; 
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


