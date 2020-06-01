<?php 
    session_start();
    //valores das mensalidades
    $_SESSION["jiujitsuMensalidade"] = 69.98;
    $_SESSION["boxeMensalidade"] = 74.98;
    $_SESSION["muayThaiMensalidade"] = 89.98;
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
		<nav class="colorlib-nav" role="navigation">
			<div class="top-menu">
				<div class="container">
					<div class="row">
						<div class="col-md-2">
							<div id="colorlib-logo"><a href="index.php"><img src="images/icon.png" height="100" width="100"></a></div>
						</div>
						<div class="col-md-10 text-right menu-1">
							<ul>
								<li class="active"><a href="index.php">Inicio</a></li>
                                <li><a href="gerar_orcamento.php">Ver preços</a></li>

								
				
                                    <li class="has-dropdown ">
									<a id="#drop">Artes Marciais</a>
                                        
									<ul class="dropdown"  id="drop">
										<li><a href="jiujitsu.php">Jiu Jitsu </a></li>
                                        <li><a href="muaythai.php">Muay Thai </a></li>
                                        <li><a href="boxe.php">Boxe </a></li> 
									</ul>
                                        
								</li>
                                <li><a href="contato.php">Contato</a></li>
	
                                <li><a href="consulta.php" style="color: darkblue">Consultar</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>
		<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
			   	
			   	<li style="background-image: url(images/apresentacao.jpg);background-size:100% 100%;-webkit-background-size: 100% 100%;-o-background-size: 100% 100%;-khtml-background-size: 100% 100%;-moz-background-size: 100% 100%;">
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
        




        <div id="colorlib-services" style="background: lightgray;margin-top:710px">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
                        <h2>Os Espartanos</h2>
                        <p>Academia de artes marciais</p>
                    </div>
                </div>



            </div>
        </div>
        <div class="colorlib-classes">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
                        <h2>MODALIDADES</h2>
                    </div>
                    <div class="col-md-4 animate-box">
                        <div class="classes">
                            <div class="classes-img" style="background-image: url(images/jiu.jpg);">
                            </div>
                            <div class="desc">
                                <h3><a href="#">Jiu-Jitsu </a></h3>
                                <p>O jiu-jitsu é uma arte marcial de origem japonesa. Ela é voltada para o ataque e autodefesa. Jujutsu, mais conhecido na sua forma ocidentalizada Jiu-jitsu, ju-jitsu, é uma arte marcial japonesa que utiliza técnicas de golpes de alavancas.</p>
                                <p><a href="jiujitsu.php" class="btn-learn" style="color: darkblue">Leia Mais  <i class="icon-arrow-right3"></i></a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 animate-box">
                        <div class="classes">
                            <div class="classes-img" style="background-image: url(images/boxe.jpg);">
                            </div>
                            <div class="desc">
                                <h3><a href="#">Boxe</a></h3>
                                <p>O boxe ou pugilismo é um esporte de combate, no qual os lutadores usam apenas os punhos, tanto para a defesa, quanto para o ataque. A palavra deriva do inglês box, ou pugilismo, expressão utilizada na Inglaterra entre 1000 e 1850.</p>
                                <p><a href="#" class="btn-learn" style="color: darkblue">Leia Mais  <i class="icon-arrow-right3"></i></a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 animate-box">
                        <div class="classes">
                            <div class="classes-img" style="background-image: url(images/muay.jpg);">
                            </div>
                            <div class="desc">
                                <h3><a href="#">Muay Thai</a></h3>
                                <p>Muay thai é uma arte marcial originária da Tailândia, onde é considerado desporto nacional. Esta disciplina física e mental que inclui golpes de combate em pé, é conhecida como "a arte das oito armas"</p><br>
                                <p><a href="muaythai.php" class="btn-learn" style="color: darkblue">Leia Mais  <i class="icon-arrow-right3"></i></a></p>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
        
                            


           
    <div id="colorlib-schedule" class="colorlib-light-grey">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
                        <h2>Cronograma de aulas </h2>

                    </div>
                </div>
                
                <div class="row">
                    <div class="schedule text-center animate-box">
                        <div class="col-md-12">
                            
                            <ul class="week nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#seg" role="tab" aria-controls="seg" aria-selected="true">Segunda</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#ter" role="tab" aria-controls="ter" aria-selected="false">Terça</a>
                                </li>
                                
                                <li class="nav-item"><a class="nav-link" id="contact-tab" data-toggle="tab" href="#qua" role="tab" aria-controls="qua" aria-selected="false">Quarta</a>
                                </li>
                                <li><a class="nav-link" id="contact-tab" data-toggle="tab" href="#qui" role="tab" aria-controls="qui" aria-selected="false">Quinta</a>
                                </li>
                                <li><a class="nav-link" id="contact-tab" data-toggle="tab" href="#sex" role="tab" aria-controls="sex" aria-selected="false">Sexta</a>
                                </li>
                                <li><a class="nav-link" id="contact-tab" data-toggle="tab" href="#sab" role="tab" aria-controls="sab" aria-selected="false">Sábado</a>
                                </li>
                            </ul>
                            
                            
 <div class="tab-content" id="myTabContent">
     
  <div class="tab-pane fade" id="seg" role="tabpanel" aria-labelledby="home-tab">
     
     
     <div class="schedule-flex">
                            <div class="entry-forth">
                                
                                
                            </div>
                            <div class="entry-forth">
                                <p class="icon"><span><img src="images/muay1.png" height="70" width="70"></span></p>
                                <p class="time"><span>19:00</span></p>
                                <h3>Muay Thai</h3>
                                <p class="trainer"><span>Professor Anderson Silva</span></p>
                            </div>
                            <div class="entry-forth">
                                <p class="icon"><span><img src="images/bjj.png" height="70" width="70"></span></p>
                                <p class="time"><span>20:30</span></p>
                                <h3>Jiu Jitsu</h3>
                                <p class="trainer"><span>Professor Conor McGregor</span></p>
                            </div>
                           
                        </div>
     
     
     
     </div>
     
  <div class="tab-pane fade" id="ter" role="tabpanel" aria-labelledby="profile-tab">
     
     
     
     
     <div class="schedule-flex">
                            <div class="entry-forth">
                                <p class="icon"><span><img src="images/bjj.png" height="70" width="70"></span></p>
                                <p class="time"><span>09:00</span></p>
                                <h3>Jiu-Jitsu</h3>
                                <p class="trainer"><span>Professor Conor McGregor</span></p>
                            </div>
                            <div class="entry-forth">
                                <p class="icon"><span><img src="images/bjj.png" height="70" width="70"></span></p>
                                <p class="time"><span>17:00</span></p>
                                <h3>Jiu-Jitsu</h3>
                                <p class="trainer"><span>Professor Conor McGregor</span></p>
                            </div>
                            <div class="entry-forth">
                                <p class="icon"><span><img src="images/funcional.png" height="70" width="60" ></span></p>
                                <p class="time"><span>18:00</span></p>
                                <h3>Treino - Funcional</h3>
                                <p class="trainer"><span>Professor Conor McGregor</span></p>
                            </div>
                             <div class="entry-forth">
                                <p class="icon"><span><img src="images/bjj.png" height="70" width="70"></span></p>
                                <p class="time"><span>19:00</span></p>
                                <h3>Jiu-Jitsu para crianças </h3>
                                <p class="trainer"><span>Professor Conor McGregor</span></p>
                            </div>
         
                            
         
                            
                        </div>
      
     
     <div class="schedule-flex">
                            <div class="entry-forth">
                                <p class="icon"><span><img src="images/bjj.png" height="70" width="70"></span></p>
                                <p class="time"><span>20:00</span></p>
                                <h3>Jiu-Jitsu  </h3>
                                <p class="trainer"><span>Professor Anderson Silva</span></p>
                            </div>
                            <div class="entry-forth">
                                <p class="icon"><span><img src="images/boxe1.jpg" height="90" width="90" class="img-circle"></span></p>
                                <p class="time"><span>21:00</span></p>
                                <h3>Boxe</h3>
                                <p class="trainer"><span>Professor Anderson Silva</span></p>
                            </div>
                        
              </div>
     
     
     
     </div>
     
     
     
  <div class="tab-pane fade" id="qua" role="tabpanel" aria-labelledby="contact-tab">
     
     
     
     
    <div class="schedule-flex">
                            <div class="entry-forth">
                                
                                
                            </div>
                            <div class="entry-forth">
                                <p class="icon"><span><img src="images/muay1.png" height="70" width="70"></span></p>
                                <p class="time"><span>19:00</span></p>
                                <h3>Muay Thai</h3>
                                <p class="trainer"><span>Professor Anderson Silva</span></p>
                            </div>
                            <div class="entry-forth">
                                <p class="icon"><span><img src="images/bjj.png" height="70" width="70"></span></p>
                                <p class="time"><span>20:30</span></p>
                                <h3>Jiu Jitsu</h3>
                                <p class="trainer"><span>Professor Conor McGregor</span></p>
                            </div>
                           
                        </div>
     
     
     
     
     </div>
     
     <div class="tab-pane fade" id="qui" role="tabpanel" aria-labelledby="profile-tab">
     
     
     
     
     <div class="schedule-flex">
                            <div class="entry-forth">
                                <p class="icon"><span><img src="images/bjj.png" height="70" width="70"></span></p>
                                <p class="time"><span>09:00</span></p>
                                <h3>Jiu-Jitsu</h3>
                                <p class="trainer"><span>Professor Conor McGregor</span></p>
                            </div>
                            <div class="entry-forth">
                                <p class="icon"><span><img src="images/bjj.png" height="70" width="70"></span></p>
                                <p class="time"><span>17:00</span></p>
                                <h3>Jiu-Jitsu</h3>
                                <p class="trainer"><span>Professor Conor McGregor</span></p>
                            </div>
                            <div class="entry-forth">
                                <p class="icon"><span><img src="images/funcional.png" height="70" width="60" ></span></p>
                                <p class="time"><span>18:00</span></p>
                                <h3>Treino - Funcional</h3>
                                <p class="trainer"><span>Professor Conor McGregor</span></p>
                            </div>
                             <div class="entry-forth">
                                <p class="icon"><span><img src="images/bjj.png" height="70" width="70"></span></p>
                                <p class="time"><span>19:00</span></p>
                                <h3>Jiu-Jitsu para crianças </h3>
                                <p class="trainer"><span>Professor Conor McGregor</span></p>
                            </div>
         
                            
         
                            
                        </div>
      
     
     <div class="schedule-flex">
                            <div class="entry-forth">
                                <p class="icon"><span><img src="images/bjj.png" height="70" width="70"></span></p>
                                <p class="time"><span>20:00</span></p>
                                <h3>Jiu-Jitsu  </h3>
                                <p class="trainer"><span>Professor Anderson Silva</span></p>
                            </div>
                            <div class="entry-forth">
                                <p class="icon"><span><img src="images/boxe1.jpg" height="90" width="90" class="img-circle"></span></p>
                                <p class="time"><span>21:00</span></p>
                                <h3>Boxe</h3>
                                <p class="trainer"><span>Professor Anderson Silva</span></p>
                            </div>
                        
              </div>
     
     
     
     </div>
     
     <div class="tab-pane fade" id="sex" role="tabpanel" aria-labelledby="contact-tab">
     
     
     
     
    <div class="schedule-flex">
                            <div class="entry-forth">
                                
                                
                            </div>
                            <div class="entry-forth">
                                <p class="icon"><span><img src="images/muay1.png" height="70" width="70"></span></p>
                                <p class="time"><span>19:00</span></p>
                                <h3>Muay Thai</h3>
                                <p class="trainer"><span>Professor Anderson Silva</span></p>
                            </div>
                            <div class="entry-forth">
                                <p class="icon"><span><img src="images/bjj.png" height="70" width="70"></span></p>
                                <p class="time"><span>20:30</span></p>
                                <h3>Jiu Jitsu</h3>
                                <p class="trainer"><span>Professor Conor McGregor</span></p>
                            </div>
                           
                        </div>
     
     
     
     
     </div>
     
     <div class="tab-pane fade" id="sab" role="tabpanel" aria-labelledby="contact-tab">
     
     
     
     
    <div class="schedule-flex">
                            <div class="entry-forth">
                                
                                
                            </div>
                            <div class="entry-forth">
                                <p class="icon"><span><img src="images/bjj.png" height="70" width="70"></span></p>
                                <p class="time"><span>09:00</span></p>
                                <h3>Jiu Jitsu</h3>
                                <p class="trainer"><span>Professor Conor McGregor</span></p>
                            </div>
                            
                        </div>
     
     
     
     
     </div>
     
     
</div><!-- tab content -->
                            
                            
                            
                            
                            
                            
                            
                 </div>
             </div>
         </div>
     </div>
</div>

                
        <div class="colorlib-trainers">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
                        <h2>Professores</h2>

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-3 animate-box">
                        <div class="trainers-entry">
                            
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 animate-box">
                        <div class="trainers-entry">
                            <div class="trainer-img" style="background-image: url(images/anderson-silva.jpg);background-size:100% 100%;-webkit-background-size: 100% 100%;-o-background-size: 100% 100%;-khtml-background-size: 100% 100%;-moz-background-size: 100% 100%;"></div>
                            <div class="desc">
                                <h3>Anderson Silva</h3>
                                <span>Boxe / Muay Thai</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 animate-box">
                        <div class="trainers-entry">
                            <div class="trainer-img" style="background-image: url(images/mc-gregor.jpg);background-size:100% 100%;-webkit-background-size: 100% 100%;-o-background-size: 100% 100%;-khtml-background-size: 100% 100%;-moz-background-size: 100% 100%;"></div>
                            <div class="desc">
                                <h3>Conor McGregor</h3>
                                <span> Jiu Jitsu </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 animate-box">
                        <div class="trainers-entry">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
     
        
        
       <?php include 'rodape.php'?> 
        
       
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
        <!-- Main -->
        <script src="js/main.js"></script>
    </body>
</html>

