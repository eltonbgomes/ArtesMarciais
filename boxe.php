<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Espartanos - BOXE</title>
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



/* CUSTOMIZE THE CAROUSEL
-------------------------------------------------- */

/* Carousel base class */
.carousel {
  margin-bottom: 4rem;
}
/* Since positioning the image, we need to help out the caption */
.carousel-caption {
  bottom: 3rem;
  z-index: 10;
}

/* Declare heights because of positioning of img element */
.carousel-item {
  height:450px;

  background-color: #777;
}
.carousel-item > img {
  position: absolute;
  top: 0;
  left: 0;
  min-width: 100%;
  height: 450px;

}



</style>    
        
        
	</head>
	<?php
		session_start();
		//usar dados XML
		$xml = simplexml_load_file("lutas.xml") -> boxe;
	?>
	<body>
		
	<div class="colorlib-loader"></div>

	<div id="page">
       <nav class="colorlib-nav" role="navigation">
			<div class="top-menu">
				<div class="container">
					<div class="row">
						<div class="col-md-2">
                            
						</div>
						<div class="col-md-10 text-right menu-1">
							<ul>
								<li><a href="index.php">Inicio</a></li>
								<li><a href="gerar_orcamento.php">Ver preços</a></li>

								
								
                                    <li class="has-dropdown ">
									<a id="#drop" style="color: red">Artes Marciais</a>
									<ul class="dropdown"  id="drop">
										<li><a href="jiujitsu.php">Jiu Jitsu </a></li>
                                        <li><a href="muaythai.php">Muay Thai </a></li>
                                        <li><a href="boxe.php" style="color: red">Boxe </a></li> 
									
									</ul>
								</li>								
								<li><a href="contato.php">Contato</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>
        
        
   <aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url(images/boxe1.jpg);background-size:100% 100%;-webkit-background-size: 100% 100%;-o-background-size: 100% 100%;-khtml-background-size: 100% 100%;-moz-background-size: 100% 100%;">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-sm-12 col-md-offset-3 slider-text">
				   				<div class="slider-text-inner text-center">
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
                    <li style="background-image: url(images/boxe2.jpg);background-size:100% 100%;-webkit-background-size: 100% 100%;-o-background-size: 100% 100%;-khtml-background-size: 100% 100%;-moz-background-size: 100% 100%;">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-8 col-sm-12 col-md-offset-2 slider-text">
				   				<div class="slider-text-inner text-center">
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	
			   	
			   		
			  	</ul>
		  	</div>
		</aside>
		
		
		<div class="colorlib-classes">
			<div class="container">
				<div class="row">
					<div class="col-md-8 animate-box">
						<div class="classes">
							<div class="classes-img classes-img-single" style="background-image: url(images/boxe3.jpg);"></div>
							<div class="desc">
								<h3><a href="#">Boxe</a></h3>
								<p class="text-justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;O boxe é tradicionalmente um tipo de luta que tem como principal característica o combate “homem a homem” utilizando-se apenas dos punhos. Por ser um meio de combate, o boxe apenas passou a integrar o calendário moderno dos Jogos Olímpicos em 1920, na Olimpíada de Antuérpia (Bélgica). O Comitê Olímpico Internacional acreditava que o boxe era uma prática que incitava a violência, fato que contrariava o ideal de fraternidade, mote estreitamente vinculado ao espírito olímpico.</p>
                                
								<p class="text-justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Deve-se ressaltar que o boxe é uma luta bastante tradicional no Ocidente. Há relatos de que ela era praticada entre jovens, na Creta Antiga. Outro elemento a ser considerado são os indicativos de que o boxe integrou os Jogos Olímpicos da Antiguidade. Porém, tratando de um período mais recente, foi na Inglaterra dos séculos XVIII e XIX que o boxe ficou bastante popular: era um combate de rua, lutado com as mãos desprotegidas, marcado pela violência dos golpes. A versão moderna do boxe foi oficializada em 1867, porém foram colocadas efetivamente em prática apenas em 1872, com as regras de Queensberry: o uso de luvas era obrigatório e o confronto era composto de rounds de três minutos cada. Atualmente, uma luta de boxe é constituída de dez rounds. Em alguns casos excepcionais, a partida pode ter até doze.</p>
                                <p class="text-justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Uma curiosidade é que, mesmo sob o domínio da Associação Mundial de Boxe, as regras não são as mesmas entre as competições amadoras e profissionais. Variam, inclusive, entre as diferentes comissões organizadoras profissionais. Um fato muito comum é o de antes de uma grande luta, as regras gerais e particulares são expostas em uma reunião entre as duas partes que entrarão em confronto. As organizadoras da luta também decidem sobre o tamanho do ringue, mas sua estrutura deve ser sempre a mesma em todas as lutas: trata-se de uma plataforma quadrada elevada com uma superfície de lona acolchoada. Em todo caso, a área máxima de um ringue deve ser de 6,10 metros quadrados.</p>
							</div>
						</div>
						<div class="classes-desc">
							<div class="row row-pb-lg">
								<div class="col-md-12">
									<h3>Benefícios da prática de Boxe</h3>
								</div>
								<div class="col-md-6">
									<ul>
										<?php foreach ($xml -> beneficios1 as $beneficios) { ?>
											<li><i class="icon-check"></i>
											<?php echo utf8_decode($beneficios); ?>
											</li>
						 					<?php } ?>
									</ul>
								</div>
								<div class="col-md-6">
									<ul>
                                       <?php foreach ($xml -> beneficios2 as $beneficios) { ?>
											<li><i class="icon-check"></i>
											<?php echo utf8_decode($beneficios); ?>
											</li>
						 					<?php } ?>
									</ul>
								</div>
								
							</div>


						</div>
					</div>

					<div class="col-md-4">
						<div class="side animate-box">
							<h3>Detalhes Boxe</h3>
							<ul>
								<li><span>Professor:</span> <span>Conor McGregor</span></li>
								<li><span>Aulas:</span> <span>Segunda, terça, quarta, quinta, sexta e sabado</span></li>
								<li><span>Publico alvo:</span> <span>Todos os gêneros e idades</span></li>
								<li><span>Preço:</span> <span><?php echo "R$ ".number_format($_SESSION["boxeMensalidade"], 2, ',', '.') ?></span></li>
							</ul>
						</div>
						<div class="side animate-box text-center">
							<h3>Professor</h3>
							<div class="trainers-entry">
								<div class="trainer-img" style="background-image: url(images/mc-gregor.jpg);background-size:100% 100%;-webkit-background-size: 100% 100%;-o-background-size: 100% 100%;-khtml-background-size: 100% 100%;-moz-background-size: 100% 100%;"></div>
								<div class="desc">
									<h3>Conor McGregor</h3>
									<span>Boxe</span>
								</div>
							</div>
						</div>
                        
         
					</div>
				</div>
			</div>	
            
<div class="container">
<div class="row">
<div class="col-md-12 col-lg-12 animate-box">
    
    <h3 class="text-center"><strong>Razões para praticar</strong></h3>
    <div class="col-md-1"></div>
            <div class="classes col-md-9">
							<div class="classes-img classes-img-single" style="background-image: url(images/boxe4.jpg);background-size:100% 100%;-webkit-background-size: 100% 100%;-o-background-size: 100% 100%;-khtml-background-size: 100% 100%;-moz-background-size: 100% 100%;">
                            </div>
                
							<div class="desc text-justify" style="color:black">
								<p>
                                    <ul>
                                        
                                    <strong><li>Queima de calorias:</strong> Se você está acima do peso ou se preocupa em manter a boa forma, saiba que o boxe pode ajudar você nesse quesito. Em uma hora, é possível queimar até 1200 calorias, especialmente por causa dos movimentos esquiva e pêndulo. Além do mais, bater nos sacos de areia e treinar com oponentes também são atividades intensas, que exigem muito do corpo.</li>
                                    <br>
                                    <strong><li>Definição muscular:</strong> 
                                    Os exercícios intensos praticados no boxe são excelentes para definir massa muscular, principalmente nas pernas, nos braços e na panturrilha. Além disso, é possível afinar a cintura e defini-la.</li>
                                    <br>

                                    <strong><li>Correção da postura:</strong> As mulheres, quando precisam corrigir a postura, normalmente fazem aulas de Pilates. Os homens podem praticar boxe para alinhar a coluna, porque há fortalecimento da região lombar e definição do abdômen.</li>
                                        
                                     </ul>
                                </p>

                                
								
							</div>
            
            <div class="classes-img classes-img-single" style="background-image: url(images/boxe5.jpg);background-size:100% 100%;-webkit-background-size: 100% 100%;-o-background-size: 100% 100%;-khtml-background-size: 100% 100%;-moz-background-size: 100% 100%;">
                            </div>
            
							<div class="desc text-justify" style="color:black">
								<p>
                                    <ul>
                                        
                                    <strong><li> Ganho de resistência: </strong> É claro que a alta intensidade dos exercícios praticados no boxe proporciona ganho de resistência. Portanto, se você quer aumentar a capacidade do coração e da respiração, saiba que o boxe é excelente para gerar condicionamento físico.

Mesmo nas aulas mais tranquilas é possível queimar 600 calorias, porque o atleta levantará pesos, praticará corrida, fará abdominais e atividades em circuito.</li>
                                    <br>
                                    <strong><li>Defesa Pessoal: </strong> Se você já pensou em fazer aulas de judô ou caratê para conhecer técnicas de defesa pessoal, saiba que praticar boxe pode resolver o seu problema. Além de ser um esporte, é uma atividade que ensina defesa, inclusive para uso em grandes cidades.</li>
                                    <br>

                                    <strong><li>Diversão:</strong> Talvez a razão mais importante que toda criança, e até adultos, devem começar no Boxe é porque é extremamente divertido.</li>
                                        
                                     </ul>
                                </p>

                                
								
							</div>
            
            
            
						</div>
    
        
</div>          
</div>
</div>

	
							
							
				   
        
        
        
	</div>



		



<?php include 'rodape.php'?>

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
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Counters -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>

