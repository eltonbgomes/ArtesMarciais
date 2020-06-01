<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Espartanos - BJJ - Jiu Jitsu</title>
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
                                        <li><a href="muaythai.php" style="color: red">Muay Thai </a></li>
                                        <li><a href="boxe.php">Boxe </a></li> 
									
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
			<div class="flexslider" style="background:gray">
				<ul class="slides">
			   	<li style="background-image: url(images/img_bg_3.jpg);background-size:100% 100%;-webkit-background-size: 100% 100%;-o-background-size: 100% 100%;-khtml-background-size: 100% 100%;-moz-background-size: 100% 100%;">
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
                    <li style="background-image: url(images/fotos/muay/b1.jpg);background-size:100% 100%;-webkit-background-size: 100% 100%;-o-background-size: 100% 100%;-khtml-background-size: 100% 100%;-moz-background-size: 100% 100%;">
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
			   	  <li style="background-image: url(images/fotos/muay/b3.jpg);background-size:100% 100%;-webkit-background-size: 100% 100%;-o-background-size: 100% 100%;-khtml-background-size: 100% 100%;-moz-background-size: 100% 100%;">
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
					<div class="col-md-7 animate-box">
						<div class="classes">
							<div class="classes-img classes-img-single" style="background-image: url(images/fotos/muay/b.jpg);"></div>
							
                            </div>
					   </div>
                    <div class="col-lg-5">
                    <div class="desc">
								<h3 class="text-center"><a href="#">Muay Thai</a></h3>
								<p class="text-justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;O muay thai é uma das artes marciais que mais têm se destacado nas academias. O esporte possui origem tailandesa e também pode ser conhecido como “Boxe Tailandês”.</p>
                                
								<p class="text-justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;É comum se questionar sobre quais contribuições um determinado esporte pode oferecer à sua vida, essa é uma pergunta chave para se apaixonar pelos exercícios. Os chutes e socos são muito recomendados para aqueles que desejam queimar as gordurinhas extras, mas os benefícios do Muay Thai não se limitam a isso.</p>
                                
                                
                                
                                
                                
							     </div>
                    </div>
                    <div class="col-lg-12" style="margin-top:25px">
                    <p class="text-justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Se você está pensando em se inscrever em uma turma, conheça os principais benefícios do Muay Thai, e quais contribuições são válidas para sua vida.</p>
                    
                    
                    </div>
                    <div class="col-md-8 animate-box">
						<div class="classes">
                            <h3 class="text-center">1 - Disciplina</h3>
							<div class="classes-img classes-img-single" style="background-image: url(images/fotos/muay/disciplina.jpg);"></div>
                    <div class="desc">
								<p class="text-justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ela é fundamental não só no Muay Thai, mas em todos os esportes. A disciplina pode ser aplicada desde o início da prática, mas o aprendizado contribui para que respeite os limites dos adversários, e admita que a oposição deve existir apenas no posicionamento das aulas. A disciplina adquirida com o esporte pode não só ser posta em prática durante a aula, mas sim construir uma melhor doutrina comportamental em diversos campos da vida.
                                </p>
                                
                                
                                
							     </div>
                            
                            
					   </div>
				  
                    
						<div class="classes">
                            <h3 class="text-center">2 - Coordenação motora</h3>
							<div class="classes-img classes-img-single" style="background-image: url(images/fotos/muay/coragem.jpg);background-size:100% 100%;-webkit-background-size: 100% 100%;-o-background-size: 100% 100%;-khtml-background-size: 100% 100%;-moz-background-size: 100% 100%;"></div>
                    <div class="desc">
								<p class="text-justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Esquiva, chuta, jab… Pois é, conciliar golpes e movimentos utilizando diversos membros de seu corpo pode se tornar uma tarefa difícil, mas isso ocorre apenas inicialmente. Os treinos regulares possibilitam que você se sinta cada vez mais preparado para atingir o oponente, ou se proteger de algum ataque. 
</p>
                                
								<p class="text-justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Alguns benefícios do Muay Thai neste campo são que o seu tempo de reação será reduzido, seu reflexo ficará mais aguçado, e você se manterá em evolução enquanto se dedicar ao esporte.</p>
                                
                                
                                
                                
                                
							     </div>
                            
                            
					   </div>
				  
                    
						<div class="classes">
                            <h3 class="text-center">3 - Emagrece</h3>
							<div class="classes-img classes-img-single" style="background-image: url(images/fotos/muay/emagrece.jpg);background-size:100% 100%;-webkit-background-size: 100% 100%;-o-background-size: 100% 100%;-khtml-background-size: 100% 100%;-moz-background-size: 100% 100%;"></div>
                    <div class="desc">
								<p class="text-justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;O Muay Thai tem sido escolhido por diversas pessoas, e essa procura pode ser justificada principalmente pela sua contribuição para perda de peso. Se você praticar em média 90 minutos dessa luta, é possível eliminar em torno de 750 a 800 calorias, o que pode ser muito positivo para pessoas que estão com uma dieta voltada para perda de peso. Os benefícios do Muay Thai visam também a função cardiorrespiratória, o que favorece o melhor controle de respiração, e também a função metabólica.</p>
                                
							     </div>
                            
                            
					   </div>
				  
                    
						<div class="classes">
                            <h3 class="text-center">4 - Força</h3>
							<div class="classes-img classes-img-single" style="background-image: url(images/fotos/muay/força.jpg);background-size:100% 100%;-webkit-background-size: 100% 100%;-o-background-size: 100% 100%;-khtml-background-size: 100% 100%;-moz-background-size: 100% 100%;"></div>
                    <div class="desc">
								<p class="text-justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;O treinamento regular de Muay Thai pode ajudar a construir maior aptidão de resistência. Durante as aulas, o seu corpo ficará exposto a rotinas de exercícios de alta intensidade, o que favorece na sua evolução corporal, tornando-se assim mais forte e resistente. Dentro das academias, é importante destacar que não deve ser aplicada força sobre os oponentes, mas o conhecimento sobre os movimentos contribui para seu corpo ficar mais forte e preparado para possíveis choques ou pancadas.</p>
                                
							     </div>
                            
                            
					   </div>
                    
                </div>
                    <div class="col-md-4">
                    <div class="side animate-box">
							<h3 class="text-center">Detalhes Muay Thai</h3>
							<ul>
								<li><span>Professor:</span> <span>Anderson Silva</span></li>
								<li><span>Aulas:</span> <span>Segunda, terça, quarta, quinta, sexta e sabado</span></li>
								<li><span>Publico alvo:</span> <span>Todos os gêneros e idades</span></li>
								<li><span>Preço:</span> <span><?php echo "R$ ".number_format($_SESSION["muayThaiMensalidade"], 2, ',', '.') ?></span></li>
							</ul>
						</div>
                        
                        
                       						<div class="side animate-box text-center">
							<h3 class="text-center">Professor</h3>
							<div class="trainers-entry">
								<div class="trainer-img" style="background-image: url(images/anderson-silva.jpg);background-size:100% 100%;-webkit-background-size: 100% 100%;-o-background-size: 100% 100%;-khtml-background-size: 100% 100%;-moz-background-size: 100% 100%;"></div>
								<div class="desc">
									<h3>Anderson Silva</h3>
									<span>Muay Thai</span>
								</div>
							</div>
						</div> 
                        <div class="side animate-box" style="background: white;">

                       <h4 class="text-center">Graduação Muay Thai</h4>
                        

                        <img src="images/fotos/muay/graduacao.jpg" style="width: 100%; border: 1px solid black;height:400px">
                        
                        
                        </div> 
                    
                    </div>
            </div>
            </div>
	</div> <!-- Fim div colorlib classes -->
        
		
		



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

