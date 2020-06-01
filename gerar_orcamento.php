<?php 
	session_start();
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
		.input-margin input {
			margin-left: 15px;
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
								
								
								<li class="has-dropdown ">
									<a id="#drop">Artes Marciais</a>
									<ul class="dropdown"  id="drop">
										<li><a href="jiujitsuMensalidade.php">Jiu Jitsu </a></li>
                                        <li><a href="muaythai.php">Muay Thai </a></li>
                                        <li><a href="boxe.php">Boxe </a></li> 
									</ul>
								</li>	
								<li class="active"><a href="contato.php">Contato</a></li>
									</ul>
								
								
							
						</div>
					</div>
				</div>
			</div>
		</nav>
		
		<br><br><br><br>
		<div id="colorlib-contact">
			<div class="container">
				<div class="row">

					        <div class="colorlib-classes">
            <div class="container">
                <div class="row">
                    
                    <div class="col-md-4 animate-box">
                        <div class="classes">
                            <div class="classes-img" style="background-image: url(images/jiu.jpg);">
                            </div>
                            <div class="desc">
                                <h3 align="center">
                                	<a href="#">Jiu-Jitsu </a>
                                </h3>
                                <p align="center" style="font-size: 3.5rem">
                                	
                                	<?php echo "R$ ".number_format($_SESSION["jiujitsuMensalidade"], 2, ',', '.')." / Mês" ?>


                                </p>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 animate-box">
                        <div class="classes">
                            <div class="classes-img" style="background-image: url(images/boxe.jpg);">
                            </div>
                            <div class="desc">
                                <h3 align="center">
                                	<a href="#">Boxe</a>
                                </h3>
                                <p align="center" style="font-size: 3.5rem">
                                	
                                	<?php echo "R$ ".number_format($_SESSION["boxeMensalidade"], 2, ',', '.')." / Mês" ?>

                                </p>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 animate-box">
                        <div class="classes">
                            <div class="classes-img" style="background-image: url(images/muay.jpg);">
                            </div>
                            <div class="desc">
                                <h3 align="center">
                                	<a href="#">Muay Thai </a>
                                </h3>
                                <p align="center" style="font-size: 3.5rem">
                                	
                                	<?php echo "R$ ".number_format($_SESSION["muayThaiMensalidade"], 2, ',', '.')." / Mês" ?>

                                </p>
                                
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>



					<div class="col-md-10 col-md-offset-1 animate-box">
						
    
                        
                        
                        
                            

                        <h2>Vamos gerar um orçamento para você!</h2>

					<form action="pegar_dados.php" method="post">
    
							<div class="row form-group">
								<div class="col-md-6">
									<!-- <label for="fname">First Name</label> -->
									<input type="text" name="nome" id="nome" class="form-control" placeholder="Insira seu nome" required>
								</div>
								
							</div>

							<div class="row form-group">
								<div class="col-md-6">
									<!-- <label for="fname">First Name</label> -->
									<input type="number" name="cpf" id="cpf" class="form-control" placeholder="Insira seu CPF" required>
								</div>
								
							</div>

							<div class="row form-group">
								<div class="col-md-12">
									<!-- <label for="email">Email</label> -->
									<input type="email" name="email" id="email" class="form-control" placeholder="Insira o Email" required>
								</div>
							</div>

							<div class="row form-group">
								<div class="col-md-12">
									<!-- <label for="subject">Subject</label> -->
									<input type="number"  name="telefone" id="telefone" class="form-control" placeholder="Telefone para contato" required>
								</div>
							</div>
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


		
		$data_geramento = $dia . " de " . $mes . " de " . $ano;




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

		
		$data_validade = $dia . " de " . $mesSeguinte . " de " . $ano;

	?> 

							<input type="hidden" name="validade" value="<?php echo $data_validade?>" >
							<input type="hidden" name="gerado" value="<?php echo $data_geramento?>" >

							<h3>Escolha as artes marciais que você deseja treinar</h3>
							<br>

							
								<!-- Jiu Jitsu -->
									<input class="form-check-input" type="checkbox" value="true" id="jiu" name="jiu"> Jiu Jitsu
									<br>
									<div id="mesesJiu" style="display: none" class="input-margin">
										<input type="radio" name="mesesJiu" value="1" checked> 1 Mês
										<input type="radio" name="mesesJiu" value="3"> 3 Meses
										<input type="radio" name="mesesJiu" value="12"> 12 Meses
									</div>
								<!-- end Jiu Jitsu -->
								<br>



								<!-- Boxe -->
									<input class="form-check-input" type="checkbox" value="true" id="box" name="box"> Boxe
									<br>
									<div id="mesesBoxe" style="display: none" class="input-margin">
										<input type="radio" name="mesesBoxe" value="1" checked> 1 Mês
										<input type="radio" name="mesesBoxe" value="3"> 3 Meses
										<input type="radio" name="mesesBoxe" value="12"> 12 Meses
									</div>
								<!-- end Boxe -->
								<br>

								<!-- Muay Thai -->
									<input class="form-check-input" type="checkbox" value="true" id="mua" name="mua"> Muay Thai
									<br>
									<div id="mesesMuay" style="display: none" class="input-margin">
										<input type="radio" name="mesesMuay" value="1" checked> 1 Mês
										<input type="radio" name="mesesMuay" value="3"> 3 Meses
										<input type="radio" name="mesesMuay" value="12"> 12 Meses
									</div>
								<!-- end Muay Thai -->
								<br><br>
							<div class="row form-group">
								<div class="col-md-6">
									<label for="desconto">Desconto</label>
									<input type="number"  name="desconto" id="desconto" class="form-control" placeholder="Insira o desconto em porcentagem (Ex 25% = 25)" min="0" max="100">
								</div>
							</div>
								<br>
						
								<br> <br>
							<div class="form-group">
								<input type="submit" value="Gerar" class="btn btn-success" name="enviar">
								<input type="reset" value="Limpar" class="btn btn-primary" name="limpar">

							</div>
                       </form>	
                        
                
					</div>
				</div>
			</div>
		</div>
		
		
        
        <?php include 'rodape.php' ?>
        
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
	</div>
	
	<script type="text/javascript" src="gerar_orcamento.js"></script>

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

