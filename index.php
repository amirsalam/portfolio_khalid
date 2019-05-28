<?php
include 'login.php';
include "config.php";
include 'Admin/db.php';


$select = $db->query("SELECT id, title,image,info,link FROM projects");
$items = $select->fetchAll();

if(isset($msg))
{
echo $msg;
}
?>
<!DOCTYPE html>
<html class='no-js' lang="en" >
	
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	
		
		<title>Portfolio Khalid Esserhir</title>
		
		<!--[if lt IE 9]>
		  <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		
		
		<link rel='stylesheet' type='text/css' href='css/ionicons.min.css' >
		<link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
		
		<link rel='stylesheet' type='text/css' href='css/owl.carousel.css' >
		<link rel='stylesheet' type='text/css' href='css/owl.theme.css' >
		<link rel='stylesheet' type='text/css' href='css/owl.transitions.css' >
		<link rel='stylesheet' type='text/css' href='css/magnific-popup.css' >
		
		<link rel='stylesheet' type='text/css' href='css/login.css'>
		
		
		<link rel='stylesheet' type='text/css' href='css/color-default.css' >
        <link rel='stylesheet' type='text/css' href='css/style.css' >
        <link rel='stylesheet' type='text/css' href='bootstrap/css/bootstrap.min.css' >
		<link href="css/creative.min.css" rel="stylesheet">
		
		
	</head>
	
	<body>
        <!--=============================================================================
			flag lang

===============================================================================-->


    <ul>
    <li><a href="index.php?lang=fr"><img width=5% height=5%  src="img/France-Flag.png"></a></li>
        <li><a href="index.php?lang=en"><img width=5% height=5% src="img/United-Kingdom-Flag.png"></a></li>
    </ul>
    
		<!--=============================================================================
			Preloader
		===============================================================================-->
		<div id='preloader' >
			<div class='loader' >
				<img src='img/load.gif' alt='symp' >
			</div>
		</div>
		
		
		
		<!--=============================================================================
			Main Wrapper
		===============================================================================-->
		<div id='wrappers' >
			
			<!--=============================================================================
				Front Section
			===============================================================================-->
			<section class='front-section' >
				
				<div class='container' >
					
					
					<div class='transition-mask' ></div>
					
					
					<div class='front-person-img' >
						
						<!--person's image-->
						<img src='img/KHALID.png' alt='Symp' >
						<!--/person's image-->
						
					</div>
					
					<!--person's titles-->
					<div class='front-person-titles' >
						
						<!--title1-->
						<span class='t1' >
							Web Designer
						</span>
						<!--/title1-->
						
						<!--title2-->
						<span class='t2' >
							Full Stack Dev
						</span>
						<!--/title2-->
						
						<!--title3-->
						<span class='t3' >
							Freelancer
						</span>
						<!--/title3-->
						
					</div>
					<!--/person's titles-->
					
					<nav class='front-person-links' >
						
						<!--
							navigation links, data-section attribute points towards the section with id to be opened. 
						-->
						
						<ul>
							
							<li>
								<a href='#' data-section='about' ><?php echo $lang['title1']; ?></a>
							</li>
							
							<li>
								<a href='#' data-section='resume' ><?php echo $lang['title2']; ?></a>
							</li>
							
							
							
							<li>
								<a href='#' data-section='portfolio' >Portfolio</a>
							</li>
							
							
							
							<li>
								<a href='#' data-section='contact' >Contact</a>
							</li>
							
							<li>
								<a href='#' data-section='login' ><?php echo $lang['title3'];?></a>
							</li>
							
						</ul>
						
					</nav>
					
					
					
					<div class='front-heading text-center' >
						
						<h2>
							Khalid Esserhir
						</h2>
						
					
						
					</div>
					
					
				</div>
				
			</section>
			<!--=============================================================================
				/Front Section
			===============================================================================-->
		
			<!--=============================================================================
				About Section
			===============================================================================-->
			<section id='about' class='about-section section' >
				
				<div class='basic-info section-block' >
					
					<div class='container' >
					
						<div class='section-header text-center' >
							
							<h2><?php echo $lang['header'];?></h2>
							
							<!--divider-->
							<div class='divider-draft center' ></div>
							<!--/divider-->
							
							
						</div>
						
						<div class='row' >
							
							<div class='col-md-4' >
								<div class='about-person-img' >
									
									<img src='img/KHALID.png' alt='symp'>
									
								</div>
							
							</div>
							
							
							<div class='col-md-8 about-info' >
								
								
								
								
								<p>
									<?php echo $lang['description']; ?>
								</p>
								
								<div class='clearfix' ></div>
								
								
								<ul class='info-list' >
									
									<li>
										<div class='inner' >
											<h4><?php echo $lang['nom']; ?></h4>
											<p>Khalid Esserhir</p>
										</div>
									</li>
									<li>
										<div class='inner' >
											<h4>Age</h4>
											<p><?php echo $lang['votreAge']; ?></p>
										</div>
									</li>
									<li>
										<div class='inner' >
											<h4><?php echo $lang['site']; ?>
	
</h4>
											<p><a href ='https://marocdeveloper.blogspot.com/'>marocdeveloper.blogspot.com</a></p>
										</div>
									</li>
									
									
									
									
								</ul>
								
								<a href='https://github.com/amirsalam' class='symp-btn' >Github</a>
								
								<a href='https://gitlab.com/amirsalam?nav_source=navbar' class='symp-btn link-btn' >Gitlab</a>
								
							</div>
						
							
						
						</div>
						
						
						
						
					</div>
					
					
				</div>
				
				<div class='about-icons section-block' >
					
					<div class='container' >
						
						<div class='row' >
							
							<div class='col-md-3' >
								<div class='service' >
									
									<div class='icon' >
										<i class='ion-ios-lightbulb' ></i>
									</div>
									
									<div class='content' >
										
										<h4><?php echo $lang['creative']; ?></h4>
										
										<p>
											<?php echo $lang['votreCreative']; ?>
										</p>
										
									</div>
									
								</div>
							</div>
							
							<div class='col-md-3' >
								<div class='service' >
									
									<div class='icon' >
										<i class='ion-trophy' ></i>
									</div>
									
									<div class='content' >
										
										<h4><?php echo $lang['gagnant']; ?></h4>
										
										<p>
								<?php echo $lang['votreGagnant']; ?>
										</p>
										
									</div>
									
								</div>
							</div>
							
							<div class='col-md-3' >
								<div class='service' >
									
									<div class='icon' >
										<i class='ion-ios-glasses' ></i>
									</div>
									
									<div class='content' >
										
										<h4><?php echo $lang['intelligent']; ?></h4>
										
										<p>
										<?php echo $lang['votreIntelligent']; ?></h4>	

										</p>
										
									</div>
									
								</div>
							</div>
                            <div class='col-md-3' >
								<div class='service' >
									
									<div class='icon' >
										<i class='ion-help-buoy' ></i>
									</div>
									
									<div class='content' >
										
										<h4>Assistant</h4>
										
										<p>
											<?php echo $lang['votreAssistant']; ?>
										</p>
										
									</div>
									
								</div>
							</div>
						</div>
						
						
					</div>
				</div>
				
				
				
				
				
				<div class='footer bg-lightgray section-block' >
					
					<div class='container' >
						
						<div class='row' >
							
							<div class='col-xs-6 text-left' >
								<h4>Khalid Esserhir</h4>
							</div>
							
							<div class='col-xs-6 text-right' >
								<ul class='footer-social' >
									<li>
										<a href='https://www.facebook.com/khalid.esserhir' >
											<i class='ion-social-facebook' ></i>
										</a>
									</li>
									<li>
										<a href='https://twitter.com/amirsalam2014' >
											<i class='ion-social-twitter' ></i>
										</a>
									</li>
									<li>
										<a href='https://www.linkedin.com/in/khalid-esserhir-1b929ba6/' >
											<i class='ion-social-linkedin' ></i>
										</a>
									</li>
									<li>
										<a href='https://plus.google.com/u/0/105022039194622933110' >
											<i class='ion-social-googleplus' ></i>
										</a>
									</li>
								</ul>
							</div>
							
						</div>
						
						
					</div>
					
				</div>
				
				
			</section>
			<!--=============================================================================
				/About Section
			===============================================================================-->
			
			<!--=============================================================================
				Resume Section
			===============================================================================-->
			<section id='resume' class='resume-section section' >
				
				<div class='container' >
					<div class='row' >
						<div class='col-md-6 col-md-offset-3' >
							<div class='section-header text-center' >
								
								<h2 class='animate text-over-block' ><?php echo $lang['sousTitle']; ?></h2>
								
								<!--divider-->
								<div class='divider-draft center' ></div>
								<!--/divider-->
								
								
							</div>
						</div>
					</div>
				</div>
				
				<div class='timeline-block section-block' >
					<div class='container' >
						<ul class='timeline' >
							
							<li class='timeline-header' >
								<h4>Education</h4>
							</li>
							
							<li>
								
								<div class='timeline-desc' >
									
									<h4>2004-2006</h4>
									
								</div>
								
								<div class='timeline-content' >
									
									<h4><?php echo $lang['profil']; ?></h4>
									<span><?php echo $lang['institut']; ?></span>
									
									<p>
								<?php echo $lang['description1']; ?>
									</p>
									
								</div>
								
							</li>
							
							<li class='inverse' >
								
								<div class='timeline-desc' >
									
									<h4>2012</h4>
									
								</div>
								
								<div class='timeline-content' >
									
									<h4><?php echo $lang['bac']; ?></h4>
									<span><?php echo $lang['typeBac']; ?></span>
									
									<p>
										<?php echo $lang['description2']; ?>
									</p>
									
								</div>
								
							</li>
							
							<li>
								
								<div class='timeline-desc' >
									
									<h4>2014-2016</h4>
									
								</div>
								
								<div class='timeline-content' >
									
									<h4><?php echo $lang['profil1']; ?></h4>
									<span>ITA Youssoufia</span>
									
									<p>
									<?php echo $lang['description3']; ?>	

									</p>
									
								</div>
								
							</li>
							
							
							<li class='timeline-header' >
								<h4><?php echo $lang['experience']; ?>	</h4>
							</li>
							
							
							<li>
								
								<div class='timeline-desc' >
									
									<h4><?php echo $lang['date']; ?></h4>
									
								</div>
								
								<div class='timeline-content' >
									
									<h4>Front-End Dev</h4>
									<span>Udacity</span>
									
									<p>
				<?php echo $lang['description4']; ?>
									</p>
									
								</div>
								
							</li>
							
							<li class='inverse' >
								
								<div class='timeline-desc' >
									
									<h4><?php echo $lang['date1']; ?></h4>
									
								</div>
								
								<div class='timeline-content' >
									
									<h4>Full Stack Dev</h4>
									<span>Udacity</span>
									
									<p>
								<?php echo $lang['description5']; ?>
									</p>
									
								</div>
								
							</li>
							
							<li>
								
								<div class='timeline-desc' >
									
									<h4><?php echo $lang['date2']; ?></h4>
									
								</div>
								
								<div class='timeline-content' >
									
									<h4>Data Analyst Track</h4>
									<span>Udacity</span>
									
									<p>
									<?php echo $lang['description6']; ?>	
									</p>
									
								</div>
								
							</li>
							
							
						</ul>
					</div>
				</div>
				
				<div class='hobbies-block bg-lightgray section-block' >
					<div class='container' >
						
						<div class='section-header text-center' >
							<h2 class='animate text-over-block' ><?php echo $lang['loisirs']; ?>	</h2>
							<!--divider-->
							<div class='divider-draft center' ></div>
							<!--/divider-->
						</div>
						
						<div class='row' >
							
							<div class='col-md-2 col-sm-4 col-xs-6' >
								
								<div class='hobby' >
									
									<div class='icon' >
										<i class='ion-ios-game-controller-b' ></i>
									</div>
									
									<h4><?php echo $lang['jeu']; ?>	</h4>
									
								</div>
								
							</div>
							
							<div class='col-md-2 col-sm-4 col-xs-6' >
								
								<div class='hobby' >
									
									<div class='icon' >
										<i class='ion-ios-book' ></i>
									</div>
									
									<h4><?php echo $lang['lecture']; ?></h4>
									
								</div>
								
							</div>
							
							<div class='col-md-2 col-sm-4 col-xs-6' >
								
								<div class='hobby' >
									
									<div class='icon' >
										<i class='ion-ios-chatboxes' ></i>
									</div>
									
									<h4><?php echo $lang['conversation']; ?></h4>
									
								</div>
								
							</div>
							
							<div class='col-md-2 col-sm-4 col-xs-6' >
								
								<div class='hobby' >
									
									<div class='icon' >
										<i class='ion-ios-musical-notes' ></i>
									</div>
									
									<h4><?php echo $lang['musique']; ?></h4>
									
								</div>
								
							</div>
							
							<div class='col-md-2 col-sm-4 col-xs-6' >
								
								<div class='hobby' >
									
									<div class='icon' >
										<i class="ion-earth"></i>
									</div>
									
									<h4><?php echo $lang['internet']; ?></h4>
									
								</div>
								
							</div>
							
							<div class='col-md-2 col-sm-4 col-xs-6' >
								
								<div class='hobby' >
									
									<div class='icon' >
										<i class='ion-ios-football' ></i>
									</div>
									
									<h4><?php echo $lang['football']; ?></h4>
									
								</div>
								
							</div>
							
							
							
						</div>
						
						
						
					</div>
				</div>
				
				<div class='skills-block section-block' >
					
					<div class='container' >
					
						<div class='section-header text-center' >
							<h2 class='animate text-over-block' ><?php echo $lang['competences']; ?></h2>
							
							<!--divider-->
							<div class='divider-draft center' ></div>
							<!--/divider-->
							
						</div>
						
						
						<div class='row' >
							
							<div class='col-md-6' >
								
								<div class='skill' >
									
									<h4>HTML/CSS</h4>
									
									<div class='skill-bar' data-percent='90' >
										<div class='bar' >
											<div class='percent' >90%</div>
										</div>
									</div>
									
								</div>
								
								<div class='skill' >
									
									<h4>Mysql</h4>
									
									<div class='skill-bar' data-percent='70' >
										<div class='bar' >
											<div class='percent' >70%</div>
										</div>
									</div>
									
								</div>
								
								<div class='skill' >
									
									<h4>JavaScript</h4>
									
									<div class='skill-bar' data-percent='70' >
										<div class='bar' >
											<div class='percent' >70%</div>
										</div>
									</div>
									
								</div>
								
								
								
							</div>
							
							<div class='col-md-6' >
								
								<div class='skill' >
									
									<h4>Python</h4>
									
									<div class='skill-bar' data-percent='50' >
										<div class='bar' >
											<div class='percent' >50%</div>
										</div>
									</div>
									
								</div>
								
								<div class='skill' >
									
									<h4>Bootstrap</h4>
									
									<div class='skill-bar' data-percent='80' >
										<div class='bar' >
											<div class='percent' >80%</div>
										</div>
									</div>
									
								</div>
								
								<div class='skill' >
									
									<h4>PHP</h4>
									
									<div class='skill-bar' data-percent='50' >
										<div class='bar' >
											<div class='percent' >50%</div>
										</div>
									</div>
									
								</div>
								
								
								
							</div>
							
							
							
						</div>
						
					</div>
					
				</div>
				
				<div class='footer bg-lightgray section-block' >
					
					<div class='container' >
						
						<div class='row' >
							
							<div class='col-xs-6 text-left' >
								<h4>Khalid Esserhir</h4>
							</div>
							
							<div class='col-xs-6 text-right' >
								<ul class='footer-social' >
									<li>
										<a href='https://www.facebook.com/khalid.esserhir' >
											<i class='ion-social-facebook' ></i>
										</a>
									</li>
									<li>
										<a href='https://twitter.com/amirsalam2014' >
											<i class='ion-social-twitter' ></i>
										</a>
									</li>
									<li>
										<a href='https://www.linkedin.com/in/khalid-esserhir-1b929ba6/' >
											<i class='ion-social-linkedin' ></i>
										</a>
									</li>
									<li>
										<a href='https://plus.google.com/u/0/105022039194622933110' >
											<i class='ion-social-googleplus' ></i>
										</a>
									</li>
								</ul>
							</div>
							
						</div>
						
						
					</div>
					
				</div>
				
				
			</section>
			<!--=============================================================================
				/Resume Section
			===============================================================================-->
			
			
			<!--==========================================================================================================================================================
				Portfolio Section
			===============================================================================-->
			<section id='portfolio' class='portfolio-section section' >
				
				<div class='portfolio-block section-block' >
					
					<div class='container-fluid p-0' >
					
						<div class='row no-gutters' >
							<div class='col-md-6 col-md-offset-3' >
								
								<div class='section-header text-center' >
								
									<h2 class='animate text-over-block' >Portfolio</h2>
									
									<!--divider-->
									<div class='divider-draft center' ></div>
									<!--/divider-->
									
									<p>
										<?php echo $lang['description7']; ?>

									</p>
								
								</div>
								
							</div>
						</div>
						<?php foreach($items as $item):?>
						
						<div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="<?=$item['link']; ?>">
            <img class="img-fluid" src="img/<?=$item['image']; ?>" alt="">
            <div class="portfolio-box-caption">
              <div class="project-category text-white-50">
			  <?=$item['title']; ?>
              </div>
              <div class="project-name">
			  <?=$item['info']; ?>
              </div>
            </div>
          </a>
        </div>
		<?php endforeach; ?>
						
					</div>
					
				</div>
				
				<div class='footer bg-lightgray section-block' >
					
					<div class='container' >
						
						<div class='row' >
							
							<div class='col-xs-6 text-left' >
								<h4>Khalid Esserhir</h4>
							</div>
							
							<div class='col-xs-6 text-right' >
								<ul class='footer-social' >
									<li>
										<a href='https://www.facebook.com/khalid.esserhir' >
											<i class='ion-social-facebook' ></i>
										</a>
									</li>
									<li>
										<a href='https://twitter.com/amirsalam2014' >
											<i class='ion-social-twitter' ></i>
										</a>
									</li>
									<li>
										<a href='https://www.linkedin.com/in/khalid-esserhir-1b929ba6/' >
											<i class='ion-social-linkedin' ></i>
										</a>
									</li>
									<li>
										<a href='https://plus.google.com/u/0/105022039194622933110' >
											<i class='ion-social-googleplus' ></i>
										</a>
									</li>
								</ul>
							</div>
							
						</div>
						
						
					</div>
					
				</div>
			</section>
			<!--=============================================================================
				/Portfolio Section
			===============================================================================-->
			<section id='contact' class='contact-section section' >
				
				<div class='contact-block section-block' >
					<div class='container' >
						<div class='row' >
							<div class='col-md-6 col-md-offset-3' >
							
								<div class='section-header text-center' >
									<h2 class='animate text-over-block' ><?php echo $lang['contact']; ?></h2>
									<!--divider-->
									<div class='divider-draft center' ></div>
									<!--/divider-->
									<p>
									<?php echo $lang['description8']; ?>	
									</p>
								</div>
							
							</div>
						</div>
						
						<div class='row' >
							<div class='col-md-8 col-md-offset-2' >
								
								<form id='contact-form' class='contact-form' action='email.php' method='post' data-toggle='validator' >
									
									<div id='contact-form-result' ></div>
									
									<div class='row' >
										
										<div class='col-md-6' >
											
											<div class='form-group' >
												<input type='text' name="nom" class='form-control' placeholder='Nom' required>
												
												<div class='help-block with-errors' ></div>
											</div>
										
										</div>
										
										<div class='col-md-6' >
											<div class='form-group' >
												<input type='email' class='form-control' name="mail" placeholder='Email' required>
												
												<div class='help-block with-errors' ></div>
							
											</div>
										</div>
										
									</div>
									
									<div class='row' >
										
										<div class='col-md-6' >
											<div class='form-group' >
												<input type='text' class='form-control' name="phone" placeholder='Phone' required>
												<div class='help-block with-errors' ></div>
												
											</div>
										</div>
										
										<div class='col-md-6' >
											<div class='form-group' >
												<input type='text' class='form-control' name="site" placeholder='le site Web
	
' required>
												<div class='help-block with-errors' ></div>
												
											</div>
										</div>
										
									</div>
									
									<div class='form-group' >
										<textarea rows='5' class='form-control' name="message" placeholder='Message' required></textarea>
										<div class='help-block with-errors' ></div>
									</div>
									
									<div class='form-group text-center' >
										<button type='submit' class='symp-btn' name="submit" ><?php echo $lang['message']; ?></button>
									</div>
									
									
								</form>

							</div>
						</div>

						
					</div>
				</div>
			
				
				<div class='footer bg-lightgray section-block' >
					
					<div class='container' >
						
						<div class='row' >
							
							<div class='col-xs-6 text-left' >
								<h4>Khalid Esserhir</h4>
							</div>
							
							<div class='col-xs-6 text-right' >
								<ul class='footer-social' >
									<li>
										<a href='https://www.facebook.com/khalid.esserhir' >
											<i class='ion-social-facebook' ></i>
										</a>
									</li>
									<li>
										<a href='https://twitter.com/amirsalam2014' >
											<i class='ion-social-twitter' ></i>
										</a>
									</li>
									<li>
										<a href='https://www.linkedin.com/in/khalid-esserhir-1b929ba6/' >
											<i class='ion-social-linkedin' ></i>
										</a>
									</li>
									<li>
										<a href='https://plus.google.com/u/0/105022039194622933110' >
											<i class='ion-social-googleplus' ></i>
										</a>
									</li>
								</ul>
							</div>
							
						</div>
						
						
					</div>
					
				</div>
				
				
			</section>
			<!--=============================================================================
				/Contact Section
			===============================================================================-->
    <!--=============================================================================
				Login Section
			===============================================================================-->
			<section id='login' class='about-section section' >
				
				<div class='basic-info section-block' >
					
					<div class='container' >
					
						
						
						<div class="wrapper fadeInDown">
        <div id="formContent">
            <!-- Login Form -->
            <form action="#" METHOD="POST">
                <input type="text" id="username" class="fadeIn second" name="username" placeholder="login">
                <!-- <div class="form-group">
                    <input type="password" class="form-control fadeIn third" name="password" placeholder="Your Password *" value="" />
                </div> -->
                <input type="password" id="password" class="fadeIn third" name="password" placeholder="password">
                <input type="submit" class="fadeIn fourth" value="Log In">
                <input type="button" class="fadeIn fourth"value="Sign UP" onclick="push()">
            </form>

            <!-- Remind Passowrd -->
            <div id="formFooter">
                <a class="underlineHover" href="#">Forgot Password?</a>
            </div>

        </div>
    </div>
    <!--code footer-->
    <div class='footer bg-lightgray section-block' >
					
					<div class='container' >
						
						<div class='row' >
							
							<div class='col-xs-6 text-left' >
								<h4>Khalid Esserhir</h4>
							</div>
							
							<div class='col-xs-6 text-right' >
								<ul class='footer-social' >
									<li>
										<a href='https://www.facebook.com/khalid.esserhir' >
											<i class='ion-social-facebook' ></i>
										</a>
									</li>
									<li>
										<a href='https://twitter.com/amirsalam2014' >
											<i class='ion-social-twitter' ></i>
										</a>
									</li>
									<li>
										<a href='https://www.linkedin.com/in/khalid-esserhir-1b929ba6/' >
											<i class='ion-social-linkedin' ></i>
										</a>
									</li>
									<li>
										<a href='https://plus.google.com/u/0/105022039194622933110' >
											<i class='ion-social-googleplus' ></i>
										</a>
									</li>
								</ul>
							</div>
							
						</div>
						
						
					</div>
					
				</div>
    
    <!--end code footer-->
    

    

    </div>
						
						
						
						
					</div>
					
					
				
				
				
			</section>
			<!--=============================================================================
				/Login Section
			===============================================================================-->
			
			
			<!--close button-->
			<div class='close-btn' >
				<span></span>
				<span></span>
			</div>
			<!--/close button-->
			
			
		</div>
		<!--=============================================================================
			/Main Wrapper
		===============================================================================-->
		
		
		<!--=============================================================================
			JavaScript Files
		===============================================================================-->
		<script src='js/jquery.min.js' ></script>
		<script src='js/jquery.stellar.min.js' ></script>
		<script src='js/modernizr.js' ></script>
		<script src='js/owl.carousel.min.js' ></script>
		<script src='js/jquery.shuffle.min.js' ></script>
		<script src='js/jquery.magnific-popup.min.js' ></script>
		<script src='js/creative.min.js' ></script>
        <!--<script src='js/validator.min.js' ></script>-->
		<script src='js/smoothscroll.js' ></script>
		<script src='js/script.js' ></script>
		
		
		
	</body>
	
</html>