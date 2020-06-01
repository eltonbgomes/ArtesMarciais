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
		//usar dados XML
		$xml = simplexml_load_file("lutas.xml") -> jiujitsu;
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
										<li><a href="jiujitsu.php" style="color: red">Jiu Jitsu </a></li>
                                        <li><a href="muaythai.php">Muay Thai </a></li>
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
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url(images/fotos/Jiu/b2.jpg);background-size:100% 100%;-webkit-background-size: 100% 100%;-o-background-size: 100% 100%;-khtml-background-size: 100% 100%;-moz-background-size: 100% 100%;">
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
                    <li style="background-image: url(images/fotos/Jiu/b1.jpg);background-size:100% 100%;-webkit-background-size: 100% 100%;-o-background-size: 100% 100%;-khtml-background-size: 100% 100%;-moz-background-size: 100% 100%;">
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
							<div class="classes-img classes-img-single" style="background-image: url(images/classes-9.jpg);"></div>
							<div class="desc">
								<h3><a href="#">Jiu jitsu brasileiro (Bjj)</a></h3>
								<p class="text-justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Você sabe o que é jiu jitsu? Se você pensou que jiu jitsu é uma luta praticada por pessoas que têm um pitbull de estimação e que adoram arrumar briga na rua, muito bem: você errou feio !</p>
                                
								<p class="text-justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A tradução do termo jiu jitsu é “caminho suave”. Isso se deve aos seus princípios básicos, uma vez que essa prática privilegia o equilíbrio e o sistema de alavancas do corpo humano em detrimento do uso da força e das armas. Ou seja, uma luta que prioriza a consciência corporal ao invés da força, não pode ser associada às arruaças de rua.</p>
                                <p class="text-justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Os níveis de desenvolvimento de um atleta são representados pela cor da faixa que amarra o seu quimono. Para atletas adultos, as cores são: branca, azul, roxa, marrom, preta, coral e vermelha, em ordem crescente de habilidade. Já no que se refere às crianças, como modo de incentivo, há a inclusão de outras três cores de faixa, localizadas entre a branca e a azul, são elas: cinza, amarela, laranja e verde.</p>
							</div>
						</div>
						<div class="classes-desc">
							<div class="row row-pb-lg">
								<div class="col-md-12">
									<h3>Benefícios da prática de Jiu Jitsu</h3>
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
								<div class="col-md-12">
									<p class="text-justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;O esporte favorece a conduta disciplinar do praticante, de respeito as regras e ao mestre. A hierarquia rígida de graduação também contribui para que o respeito adquirido na arte marcial ultrapasse o tatame. Inclusive, o jiu-jitsu é indicado para crianças e adolescente, para controlar a hiperatividade, ansiedade e proporcionar disciplina.</p>
                                 <div class="col-md-12">
									<h4>Combate a timidez</h4>
								</div>
                                    <p class="text-justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A arte vai te tirar da zona de conforto. Nela, pessoas menores e mais fracas podem dominar outras maiores. Você vai aprender a manter a calma, controlar a ansiedade, pensar em situações sob pressão e cansaço. Este tipo de situação é algo que você vive diariamente, no trabalho, na vida acadêmica, no relacionamento. O Jiu possibilita você controlar a adrenalina e a ansiedade, sofrer menos com o frio na barriga e até a deixar a timidez de lado.</p>
                                    <br>
                                    
     
                                    <p class="text-left">Fontes :</p>
                                    <br>
                                    <p style="font-size: 12px" class="col-lg-12 text-justify">https://manualdohomemmoderno.com.br/fitness/10-motivos-para-voce-praticar-jiu-jitsu
                                    Manual do Homem Moderno<br>
                                        <br>
                                        RONDINELLI, Paula. "Jiu Jitsu"; Brasil Escola. Disponível em https://brasilescola.uol.com.br/educacao-fisica/jiu-jitsu.htm. Acesso em 09 de janeiro de 2019.
                                    </p>
                                    

								</div>
							</div>


						</div>
					</div>

					<div class="col-md-4">
						<div class="side animate-box">
							<h3>Detalhes Jiu Jitsu</h3>
							<ul>
								<li><span>Professor:</span> <span>Conor McGregor</span></li>
								<li><span>Aulas:</span> <span>Segunda, terça, quarta, quinta, sexta e sabado</span></li>
								<li><span>Publico alvo:</span> <span>Todos os gêneros e idades</span></li>
								<li><span>Preço:</span> <span><?php echo "R$ ".number_format($_SESSION["jiujitsuMensalidade"], 2, ',', '.') ?></span></li>
							</ul>
						</div>
						<div class="side animate-box text-center">
							<h3>Professor</h3>
							<div class="trainers-entry">
								<div class="trainer-img" style="background-image: url(images/mc-gregor.jpg);background-size:100% 100%;-webkit-background-size: 100% 100%;-o-background-size: 100% 100%;-khtml-background-size: 100% 100%;-moz-background-size: 100% 100%;"></div>
								<div class="desc">
									<h3>Conor McGregor</h3>
									<span>Jiu Jitsu</span>
								</div>
							</div>
						</div>
                        
                    <div class="side animate-box" style="background: white;">

                       <h4 class="text-center">Faixas Jiu jitsu</h4>
                        

                        <img src="images/fotos/Jiu/faixas.png" style="width: 100%; border: 1px solid black;">
                        
                        
                        </div>
					</div>
				</div>
			</div>	
            
<div class="container">
<div class="row">
<div class="col-md-12 col-lg-12 animate-box">
    
    <h3 class="text-center"><strong>Razões para uma criança treinar Jiu Jitsu</strong></h3>
    <div class="col-md-1"></div>
            <div class="classes col-md-9">
							<div class="classes-img classes-img-single" style="background-image: url(images/fotos/Jiu/bjjcriancas.jpg);background-size:100% 100%;-webkit-background-size: 100% 100%;-o-background-size: 100% 100%;-khtml-background-size: 100% 100%;-moz-background-size: 100% 100%;">
                            </div>
                
							<div class="desc text-justify" style="color:black">
								<p>
                                    <ul>
                                        
                                    <strong><li>Socialização:</strong> o tatame é um ótimo lugar para sua criança conhecer novos amigos. É um lugar que se reúnem pessoas de diversos países e culturas, unidos por um objetivo em comum. As amizades feitas no treino costumas ser leais e duradouras.</li>
                                    <br>
                                    <strong><li>Coordenação motora e consciência corporal:</strong> Uma criança que treina Jiu Jitsu vai melhorar naturalmente sua coordenação motora e consciência corporal. Isto vai ajudar na sua postura, caligrafia e cuidado nas atividades do dia a dia.</li>
                                    <br>

                                    <strong><li>Defesa Pessoal:</strong> Hoje em dia a segurança é preocupação de todos os pais. Uma criança que treina Jiu Jitsu vai poder se defender de um ataque de outro colega, e até seus irmãos menores do bulling. A artes marcial também ensina a criança sempre se defender na medida certa, nuca usando da covardia contra outra criança que não treina.</li>
                                        
                                     </ul>
                                </p>

                                
								
							</div>
            
            <div class="classes-img classes-img-single" style="background-image: url(images/fotos/Jiu/bjjcriancas1.jpg);background-size:100% 100%;-webkit-background-size: 100% 100%;-o-background-size: 100% 100%;-khtml-background-size: 100% 100%;-moz-background-size: 100% 100%;">
                            </div>
            
							<div class="desc text-justify" style="color:black">
								<p>
                                    <ul>
                                        
                                    <strong><li>Humildade: </strong> o Jiu Jitsu ensina as qualidades de você ser humilde inclusive na vitória. A ética de não comemorar finalizações no treino, nem comentar seus melhores golpes, ensina para a criança o valor de respeitar até os adversários mais fracos.</li>
                                    <br>
                                    <strong><li>Disciplina: </strong> o tatame nas aulas infantis é um ambiente extremamente lúdico. Mas existe hora para tudo. A criança acaba seguindo o exemplo dos alunos mais graduados e aprende a ouvir e prestar atenção em diversos momentos da aula.</li>
                                    <br>

                                    <strong><li>Diversão:</strong> Talvez a razão mais importante que toda criança, e até adultos, devem começar no Jiu Jitsu é porque é extremamente divertido.</li>
                                        
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

