<!--Author: Template Stock
Author URL: http://templatestock.co
-->
<!DOCTYPE html>
<html>
<head>
<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Onepage Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="./above/css/bootstrap.css" rel='stylesheet' type='text/css'/>
<link href="./above/css/style.css" rel="stylesheet" type="text/css" media="all" />	    
	    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<script type="text/javascript" src="./above/js/move-top.js"></script>
<script type="text/javascript" src="./above/js/easing.js"></script>
 <script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
			});
		});
	</script>
</head>
<body>
<div class="header" id="head">	
      <div class="container"> 
         <div class="header-top">
      		 <div class="logo">
				<a href="index.html"><img src="../above/images/logo.png" alt=""/></a>
			 </div>
		   <div class="top-menu">
		   	<span class="menu"> </span>
			<ul>
			 	<nav class="cl-effect-5">
				<li><a class="active" href="index.html"><span data-hover="Home">Maison</span></a></li>
				<li><a href="#about" class="scroll"><span data-hover="about">A propos</span></a></li>
				<li><a href="#work" class="scroll"><span data-hover="work"><span>Jobs</span></a></li>
				<li><a href="#services" class="scroll"><span data-hover="services">Services</span></a></li>
				<li><a href="#contact" class="scroll"><span data-hover="contact">Contact</span></a></li>
				</nav>
			 </ul>
			 </div>
			 <!--script-nav-->
		 <script>
		 $("span.menu").click(function(){
		 $(".top-menu ul").slideToggle("slow" , function(){
		 });
		 });
		 </script>
			<div class="clearfix"></div>
		 </div>  
		  <div class="index-banner">
       	   <div class="wmuSlider example1">
			   <div class="wmuSliderWrapper">
				   <article style="position: absolute; width: 100%; opacity: 0;"> 
				   	<div class="banner-wrap">
				   	       	<div class="banner_center">
				   		 		<h1>Bonjour,</h1> 
				   		 		<h2>Je suis <span>Developpeur & Web Designer</span></h2>
				   		 		
				   		 		</div>
				   		 </div>
					</article>
				   <article style="position: relative; width: 100%; opacity: 1;"> 
				   	   	<div class="banner-wrap">
							  <div class="banner_center">
				   		 		<h1>Bonjour,</h1> 
				   		 		<h2>Je suis <span>Developpeur & Web Designer</span></h2>
				   		 		
				   		 		</div>
				   		  </div>
				   </article>
				   <article style="position: absolute; width: 100%; opacity: 0;">
				   	  	<div class="banner-wrap">
							 <div class="banner_center">
				   		 		<h1>Bonjour,</h1> 
				   		 		<h2>Je suis <span>Developpeur & Web Designer</span></h2>
				   		 		
				   		 		</div>
				   		 </div>
					 </article>
				 </div>
				
            </div>
            <script src="js/jquery.wmuSlider.js"></script> 
			  <script>
       			$('.example1').wmuSlider();         
   		     </script> 	           	      
      </div>
	 </div>     
	</div>
	<div class="content">
		<div class="about-section" id="about" id="about">
	<div class="container">
		<div class="about-header">
			<h3>A propos</h3>
			<div class="about-imag">
			<img src="../above/images/devcov.jpg" alt="" width="180" height="180"/>
			</div>
			<div class="about-text">
		 		<p>
				Mon job est donc de créer des produits pour le web : cela peut aller d’une simple page vitrine à une application web.<br />
				Je peux porter plusieurs casquettes pour le même projet, du cahier des charges du client à la conception et modélisation,<br/>
				en passant par le développement des API (Application Programming Interface) en back-end,<br />
				la création des pages avec l’intégration du design, ou encore m’occuper de la mise en place du système et/ou des serveurs.
				</p>
			</div>
			<div class="clearfix"></div>
			</div>
			<div class="about-sectiongrids">
				<div class="col-md-6 about-leftgrid">
				<?php for($i=0; $i < count($skills->getSkills())/2 ; $i++){?>
					<div class="polls">
					<div class="poll">
						<div class="poll-desc">
							<h4><?= $skills->getSkills()[$i]->getType(); ?></h4>
						</div>
						<div class="percentage">
							<p><?= $skills->getSkills()[$i]->getPercent(); ?>%</p>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="skills">
			            <div style="width:<?=$skills->getSkills()[$i]->getPercent(); ?>%"> </div>
	                    </div>
	            </div>
				<?php } ?>
			</div>
	<div class="col-md-6 about-rightgrid">
		
		<?php for($i=count($skills->getSkills())/2; $i < count($skills->getSkills()) ; $i++){?>
					<div class="polls">
					<div class="poll">
						<div class="poll-desc">
							<h4><?= $skills->getSkills()[$i]->getType(); ?></h4>
						</div>
						<div class="percentage">
							<p><?= $skills->getSkills()[$i]->getPercent(); ?>%</p>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="skills">
			            <div style="width:<?=$skills->getSkills()[$i]->getPercent(); ?>%"> </div>
	                    </div>
	            </div>
				<?php } ?>
	</div>
	<div class="arrow1">
	<a href="#work" class="scroll"><img src="../above/images/arrow1.png" alt=""/></a>
					</div>
	</div>
	</div>
	<!-- about-section-ends -->
	<div class="works-section" id="work" id="work">
	   <div class="works-header">
			<h3>works</h3>
			<p>Au quotidien, quelques uns de mes outils sont:</p>
			<ul>
				<li class="resp-tab-item">VSCode, un IDE (Integrated Development Environment), soit un éditeur de texte avec des fonctionnalités avancées pour le développement</li>
				<li class="resp-tab-item">Laravel, Lumen et autres frameworks logiciels.</li><br />
				<li class="resp-tab-item">Composer, NPM : des gestionnaires de dépendance logicielle</li><br />
				<li class="resp-tab-item">Git, un VCS (Version, Control, System)</li><br />
				<li class="resp-tab-item">PHPUNIT, l'utilisation de test unitaire pour un développement plus sūr</li><br />
			</ul>
		</div>
		<div class="portfolio-section-bottom-row" id="portfolio">
			<div class="container">
				
						<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
					<script type="text/javascript">
						$(document).ready(function () {
							$('#horizontalTab').easyResponsiveTabs({
								type: 'default', //Types: default, vertical, accordion           
								width: 'auto', //auto or any width like 600px
								fit: true   // 100% fit in a container
							});
						});
						
					</script>
						<link rel="stylesheet" href="css/swipebox.css">
							<script src="js/jquery.swipebox.min.js"></script> 
								<script type="text/javascript">
									jQuery(function($) {
										$(".swipebox").swipebox();
									});
								</script>
							<!-- Portfolio Ends Here -->
						
 
				<div class="arrow">
					<a href="#services" class="scroll"><img src="../above/images/arrow.png" alt=""/></a>
				</div>
			</div>
		</div>
	</div>
	<!-- portfolio-section-ends -->
	<div class="services-section" id="services">
			<div class="container"> 
			<div class="services-header">
				<h3>Services</h3>
					
			</div>
			<div class="services-sectiongrids">
			<div class="col-md-4 services-grid">
					<img src="../above/images/img1.png" alt=""/>
					<h4>webdesign</h4>
					<p>Création du design , selon cahier des charges</p>
			</div>
			<div class="col-md-4 services-grid">
				<img src="../above/images/pic-5.jpg" alt="" width="128" height="128"/>
					<h4>TDD</h4>
					<p>Réalisation de test unitaires pour une meilleur gestion de votre projet.</p>
				</div>
				
				<div class="col-md-4 services-grid">
					<img src="../above/images/img3.png" alt=""/>
					<h4>web development</h4>
					<p>Mise en application de votre projet web</p>
				</div>
				<div class="clearfix"></div>
				<div class="arrow1">
					<a href="#contact" class="scroll"><img src="../above/images/arrow1.png" alt=""/></a>
			</div>
		</div>
		</div>
		</div>
		<!-- services-section-ends -->
	</div>
	<div class="footer-section" id="contact" id="contact">
			<div class="container"> 
			<div class="contact-header">
				<h3> contact</h3>
					<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. </p>
			</div>
			<div class="social-icon">
				<a href="#"><i class="icon1"></i></a>
				<a href="#"><i class="icon2"></i></a>
				<a href="#"><i class="icon3"></i></a>
				<a href="#"><i class="icon4"></i></a>
				<a href="#"><i class="icon5"></i></a>
				<a href="#"><i class="icon6"></i></a>
				<a href="#"><i class="icon7"></i></a>
				<a href="#"><i class="icon8"></i></a>
			</div>
			<div class="contact">
				<form action="/" method="post">
					<div class="col-md-4 contactgrid">
						<input name="name" type="text" class="text" value=" nom" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'name';}">
					</div>
					<div class="col-md-4 contactgrid">
						<input type="text" class="text" value="e-mail" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'email';}">
					</div>
					<div class="col-md-4 contactgrid">
						<input type="text" class="text" value="téléphone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'phone';}">
					</div>
					<div class="col-md-8 contactgrid1">
						<textarea onfocus="if(this.value == 'Votre message') this.value='';" onblur="if(this.value == '') this.value='Votre Message';" >Your Message</textarea>
					</div>
					<div class="col-md-4 contactgrid2">
						<input type="submit" value="[envoyer mon message]">
					</div>
				   <div class="clearfix"></div>
				</form>
			</div>
			<div class="footer-bottom">

					</div>
					<script type="text/javascript">
						$(document).ready(function() {
							
							$().UItoTop({ easingType: 'easeOutQuart' });
							
						});
					</script>
				<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
</div>

		</div>		
	</div>
	
	
</body>
</html>