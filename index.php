
<?php
include"config.php";
$nom = $email = $sujet = $message  = "";
$nomError = $emailError = $sujetError = $messageError  = "";
$isSuccess = false;


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nom = verifyInput($_POST["nom"]);
  $email = verifyInput($_POST["email"]);
  $sujet = verifyInput($_POST["sujet"]);
  $message = verifyInput($_POST["message"]);
  $mailto = "ibtissam.belamria2014@gmail.com";
  $isSuccess = true;
  $emailtext="";
  
  if(empty($nom)){
    $nomError = "je veux connaitre ton nom?";
    $isSuccess = false;

  }
  elseif (!preg_match("/^[a-zA-Z ]*$/",$nom)) {
    $nomError = "Only letters and white space allowed"; 
    $isSuccess = false;
  }
  else
{
     $emailtext.=" Nom : $nom\n";
}

if(!isEmail($email)){
    $emailError="t'essaies de me rouler ? c'est pas un email ca !";
    $isSuccess = false;
    
    
      }
      else {
        $emailtext.=" Email : $email\n";
      } 

  if(empty($sujet)){
    $sujetError = "entrer un Sujet ?";
    $isSuccess = false;

  }
  else {
    $emailtext.=" Sujet : $sujet\n";
  }
  if(empty($message)){
    $messageError = "qu'est-ce que veux me dire ?";
    $isSuccess = false;
  }
  else {
    $emailtext.=" Message: $message\n";
  } 

if($isSuccess){
    $headers="From: $nom <$email>\r\nReply-To: $email";
   mail ($mailto,"un message de mon portfolio", $emailtext, $headers);
   $nom = $email = $sujet = $message  = "";

}
}
function isEmail($var){
    return filter_var($var,FILTER_VALIDATE_EMAIL);
}






function verifyInput($var) {
    $var = trim($var);
    $var = stripslashes($var);
    $var = htmlspecialchars($var);
    return $var;
  }

?>
<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ibtissam Belamria</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo $lang['sur moi']; ?>" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content="" />
    <meta property="og:image" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:description" content="" />
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="favicon.ico">

    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700" rel="stylesheet">

    <!-- Animate.css -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="css/icomoon.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- Flexslider  -->
    <link rel="stylesheet" href="css/flexslider.css">
    <!-- Flaticons  -->
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <!-- Theme style  -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Modernizr JS -->
    <script src="js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
<style>
    #cpr {
    visibility: hidden;
}

</style>
</head>

<body>
    <div id="colorlib-page">
        <div class="container-wrap">
            <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
            <aside id="colorlib-aside" role="complementary" class="border js-fullheight">
                <div class="text-center">
                    <div class="author-img" style="background-image: url(images/betylogo.png); background-size:80px"></div>
                    <h1 id="colorlib-logo"><a href="index.php">Ibtissam Belamria</a></h1>
                    <span class="position"><a href="#"><?php echo $lang['spane']; ?> </a><?php echo $lang['country']; ?></span>
                </div>
                <nav id="colorlib-main-menu" role="navigation" class="navbar">
                    <div id="navbar" class="collapse">
                        <ul>
                            <li class="active"><a href="#" data-nav-section="home"><?php echo $lang['Accueil']; ?></a></li>
                            <li><a href="#" data-nav-section="about"><?php echo $lang['À PROPOS DE']; ?></a></li>
                            <li><a href="#" data-nav-section="skills"><?php echo $lang['COMPÉTENCE']; ?></a></li>
                            <li><a href="#" data-nav-section="education"><?php echo $lang['EDUCATION']; ?></a></li>
                            <li><a href="#" data-nav-section="experience"><?php echo $lang['EXPERIENCE']; ?></a></li>
                            <li><a href="#" data-nav-section="work"><?php echo $lang['TRAVAIL']; ?></a></li>
                            <li><a href="#" data-nav-section="contact"><?php echo $lang['CONTACT']; ?></a></li>
                        </ul>
                    </div>
                </nav>

                <div class="colorlib-footer">
                    <p id="cpr"><small>&copy; <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --> </span> <span>Demo Images: <a href="https://unsplash.com/" target="_blank">Unsplash.com</a></span></small></p>
                    <ul>
                        <li><a href="#"><i class="icon-facebook2"></i></a></li>
                        <li><a href="#"><i class="icon-twitter2"></i></a></li>
                        <li><a href="#"><i class="icon-instagram"></i></a></li>
                        <li><a href="#"><i class="icon-linkedin2"></i></a></li>
                    </ul>
                </div>

            </aside>

            <div id="colorlib-main">
                <section id="colorlib-hero" class="js-fullheight" data-section="home">
                    <div class="flexslider js-fullheight">
                        <ul class="slides">
                            <li style="background-image: url(images/image1.jpg);">
                                <div class="overlay"></div>
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-6 col-md-offset-3 col-md-pull-3 col-sm-12 col-xs-12 js-fullheight slider-text">
                                            <div class="slider-text-inner js-fullheight">
                                                <div class="desc">
                                                    <h1><?php echo $lang['Bonjour']; ?><br>Ibtissam Belamria</h1>
                                                    <p><a href="https://drive.google.com/file/d/1AdrCeVuN1aZfKir67GG42SDE38ei8Gwf/view?usp=sharing" target="_blank" class="btn btn-primary btn-learn"><?php echo $lang['Download CV']; ?><i class="icon-download4"></i></a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li style="background-image: url(images/image2.jpg);">
                                <div class="overlay"></div>
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-6 col-md-offset-3 col-md-pull-3 col-sm-12 col-xs-12 js-fullheight slider-text">
                                            <div class="slider-text-inner">
                                                <div class="desc">
                                                    <h1> <?php echo $lang['je suis']; ?><br><?php echo $lang['Développeuse web']; ?></h1>

                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </section>

                <section class="colorlib-about" data-section="about">
                    <div class="colorlib-narrow-content">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row row-bottom-padded-sm animate-box" data-animate-effect="fadeInLeft">
                                    <div class="col-md-12">
                                        <div class="about-desc">
                                            <span class="heading-meta"><?php echo $lang['sur moi']; ?></span>
                                            <h2 class="colorlib-heading"><?php echo $lang['QUI SUIS JE?']; ?></h2>
                                            <p><strong><?php echo $lang['Bonjour, je suis ibtissam Belamria']; ?></strong> <?php echo $lang['p']; ?></p>

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3 animate-box" data-animate-effect="fadeInLeft">
                                        <div class="services color-1">
                                            <span class="icon2"><i class="icon-bulb"></i></span>
                                            <h3><?php echo $lang['designer graphique']; ?></h3>
                                        </div>
                                    </div>
                                    <div class="col-md-3 animate-box" data-animate-effect="fadeInRight">
                                        <div class="services color-2">
                                            <span class="icon2"><i class="icon-globe-outline"></i></span>
                                            <h3><?php echo $lang['Création de sites web']; ?></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </section>



                <section class="colorlib-skills" data-section="skills">
                    <div class="colorlib-narrow-content">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">

                                <h2 class="colorlib-heading animate-box"><?php echo $lang['Mes Competences']; ?></h2>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                                <div class="progress-wrap">
                                    <h3>HTML5</h3>
                                    <div class="progress">
                                        <div class="progress-bar color-1" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width:65%">
                                            <span>65%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 animate-box" data-animate-effect="fadeInRight">
                                <div class="progress-wrap">
                                    <h3>CSS3</h3>
                                    <div class="progress">
                                        <div class="progress-bar color-1" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" style="width:55%">
                                            <span>55%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           
                            <div class="col-md-6 animate-box" data-animate-effect="fadeInRight">
                                <div class="progress-wrap">
                                    <h3>Illustrator</h3>
                                    <div class="progress">
                                        <div class="progress-bar color-1" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:45%">
                                            <span>50%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                                <div class="progress-wrap">
                                    <h3>Adobe Xd</h3>
                                    <div class="progress">
                                        <div class="progress-bar color-1" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%">
                                            <span>50%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                                <div class="progress-wrap">
                                    <h3>Photoshop</h3>
                                    <div class="progress">
                                        <div class="progress-bar color-1" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width:45%">
                                            <span>45%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          
                            <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                                <div class="progress-wrap">
                                    <h3>Bootstrap</h3>
                                    <div class="progress">
                                        <div class="progress-bar color-1" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%">
                                            <span>50%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                                <div class="progress-wrap">
                                    <h3>JavaScript</h3>
                                    <div class="progress">
                                        <div class="progress-bar color-1" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100" style="width:35%">
                                            <span>35%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                                <div class="progress-wrap">
                                    <h3>PHP</h3>
                                    <div class="progress">
                                        <div class="progress-bar color-1" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width:45%">
                                            <span>45%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                                <div class="progress-wrap">
                                    <h3>SQL/Mysql</h3>
                                    <div class="progress">
                                        <div class="progress-bar color-1" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width:30%">
                                            <span>30%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>


                <section class="colorlib-education" data-section="education">
                    <div class="colorlib-narrow-content">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">

                                <h2 class="colorlib-heading animate-box">Education</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
                                <div class="fancy-collapse-panel">
                                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="headingOne">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne"><?php echo $lang['Formation Developpeuse Web']; ?> 
									            </a>
                                                </h4>
                                            </div>
                                            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                                <div class="panel-body">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <p><?php echo $lang['outstanding']; ?> </p>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <p><strong><?php echo $lang['Youcode youssoufia']; ?></strong></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="headingTwo">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"><?php echo $lang['Diplome Comptabilité des Entreprise']; ?>
									            </a>
                                                </h4>
                                            </div>
                                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                                <div class="panel-body">
                                                    <div class="col-md-6">
                                                        <p>2013_2015</p>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <p><strong> City De L'air, EL_jadida</strong> </p>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="headingThree">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree"><?php echo $lang['Niveau 2eme ']; ?>
									            </a>
                                                </h4>
                                            </div>
                                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                                <div class="panel-body">
                                                    <div class="col-md-6">
                                                        <p>2012_2014</p>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <p><strong><?php echo $lang['Faculté Chouaib Doukali, EL_jadida'];?> </strong> </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingFour">
                                                    <h4 class="panel-title">
                                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour"><?php echo $lang['Baccalauréat' ];?>
									            </a>
                                                    </h4>
                                                </div>
                                                <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                                    <div class="col-md-6">
                                                        <p>2011_2012</p>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <p><strong> Imame El Boukhari_Youssoufia</strong> </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </section>

                <section class="colorlib-experience" data-section="experience">
                    <div class="colorlib-narrow-content">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">

                                <h2 class="colorlib-heading animate-box"><?php echo $lang['EXPÉRIENCE PROFESSIONNELLE'];?> </h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="timeline-centered">
                                    <article class="timeline-entry animate-box" data-animate-effect="fadeInLeft">
                                        <div class="timeline-entry-inner">

                                            <div class="timeline-icon color-1">
                                                <i class="icon-pen2"></i>
                                            </div>

                                            <div class="timeline-label">
                                                <h2><a href="#"><?php echo $lang['19 Avril 2016_08 Fevrier 2017 '];?></a> </h2>
                                                <p><?php echo $lang['Travaille'];?><br><?php echo $lang['Traiter les règlements '];?><br>
                                                <?php echo $lang['Saisie des opérations'];?>
                                                  <br><?php echo $lang['Traitement les contrats'];?></p>
                                            </div>
                                        </div>
                                    </article>


                                    <article class="timeline-entry animate-box" data-animate-effect="fadeInRight">
                                        <div class="timeline-entry-inner">
                                            <div class="timeline-icon color-2">
                                                <i class="icon-pen2"></i>
                                            </div>
                                            <div class="timeline-label">
                                                <h2><a href="#"><?php echo $lang['Date'];?></a></h2>
                                                <p><?php echo $lang[' fiduciaire Sabah info '];?><br>
                                                <?php echo $lang['Les opérations'];?><br><?php echo $lang['Création des Entreprises'];?>
                                               </p>
                                            </div>
                                        </div>
                                    </article>

                                    <article class="timeline-entry animate-box" data-animate-effect="fadeInLeft">
                                        <div class="timeline-entry-inner">
                                            <div class="timeline-icon color-3">
                                                <i class="icon-pen2"></i>
                                            </div>
                                            <div class="timeline-label">
                                                <h2><a href="#"><?php echo $lang['1 Mars 2016_17 Avril 2016'];?></a></h2>
                                                <p><?php echo $lang['Stage à la province '];?><br><?php echo $lang['les dossiers RAMED'];?></p>
                                            </div>
                                        </div>
                                    </article>

                                    <article class="timeline-entry animate-box" data-animate-effect="fadeInTop">
                                        <div class="timeline-entry-inner">
                                            <div class="timeline-icon color-4">
                                                <i class="icon-pen2"></i>
                                            </div>
                                            <div class="timeline-label">
                                                <h2><a href="#"><?php echo $lang['1 Janvier '];?></a></h2>
                                                <p><?php echo $lang['Stage au centre '];?><br><?php echo $lang['• Service administrative.'];?> </p>
                                            </div>
                                        </div>
                                    </article>

                                    <article class="timeline-entry animate-box" data-animate-effect="fadeInLeft">
                                        <div class="timeline-entry-inner">
                                            <div class="timeline-icon color-5">
                                                <i class="icon-pen2"></i>
                                            </div>
                                            <div class="timeline-label">
                                                <h2><a href="#"><?php echo $lang['1 Avril 2015_31 Mai 2015'];?></a></h2>
                                                <p><?php echo $lang['Stage au sien du fiduciaire '];?><br> <?php echo $lang['Classement'];?><br> <?php echo $lang['Calcule '];?></p>
                                            </div>
                                        </div>
                                    </article>

                                    <article class="timeline-entry begin animate-box" data-animate-effect="fadeInBottom">
                                        <div class="timeline-entry-inner">
                                            <div class="timeline-icon color-none">
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>


                <div id="colorlib-counter" class="colorlib-counters" style="background-image: url(images/cafe.jpg); background-size:1170px" data-stellar-background-ratio="0.5">
                    <div class="overlay"></div>
                    <div class="colorlib-narrow-content">
                        <div class="row">
                        </div>
                        <div class="row">
                            <div class="col-md-6 text-center animate-box">
                                <span class="colorlib-counter js-counter" data-from="0" data-to="90" data-speed="5000" data-refresh-interval="50"></span>
                                <span class="colorlib-counter-label"><?php echo $lang['Cups of coffee'];?></span>
                            </div>
                            <div class="col-md-6 text-center animate-box">
                                <span class="colorlib-counter js-counter" data-from="0" data-to="34" data-speed="5000" data-refresh-interval="50"></span>
                                <span class="colorlib-counter-label"><?php echo $lang['Projects'];?></span>
                            </div>


                        </div>
                    </div>
                </div>


                <section class="colorlib-work" data-section="work">
                    <div class="colorlib-narrow-content">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                                <span class="heading-meta"> <?php echo $lang['My Work'];?></span>
                                <h2 class="colorlib-heading animate-box"> <?php echo $lang['Recent Work'];?></h2>
                            </div>
                        </div>
                        <div class="row row-bottom-padded-sm animate-box" data-animate-effect="fadeInLeft">
                            <div class="col-md-12">
                                <p class="work-menu"><span><a href="#" class="active"><?php echo $lang['Graphic Design'];?></a></span> <span><a href="#"><?php echo $lang['Web Design'];?></a> </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                                <div class="project" style="background-image: url(images/showline.jpg);background-size: 75% 90%;">
                                    <div class="desc">
                                        <div class="con">
                                            <h3><a href="work.html"><?php echo $lang['Work 01'];?></a></h3>
                                            <span><?php echo $lang['Logo Design'];?></span>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 animate-box" data-animate-effect="fadeInRight">
                                <div class="project" style="background-image: url(images/sonbola.bmp);background-size: 75% 90%;">
                                    <div class="desc">
                                        <div class="con">
                                            <h3><a href="work.html"><?php echo $lang['Work 02'];?></a></h3>
                                            <span><?php echo $lang['Logo Design 1'];?></span>
                                         
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 animate-box" data-animate-effect="fadeInTop">
                                <div class="project" style="background-image: url(images/thesource.jpg);background-size: 65% auto;">
                                    <div class="desc">
                                        <div class="con">
                                            <h3><a href="work.html"><?php echo $lang['Work 03'];?></a></h3>
                                            <span><?php echo $lang['Logo Design 2'];?></span>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 animate-box" data-animate-effect="fadeInBottom">
                                <div class="project" style="background-image: url(images/mylogo.png);background-size: 65% auto;">
                                    <div class="desc">
                                        <div class="con">
                                            <h3><a href="work.html"><?php echo $lang['Work 04'];?></a></h3>
                                            <span><?php echo $lang['Logo Design 2'];?></span>
                                          
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                                <div class="project" style="background-image: url(images/design01.png);background-size: 50% auto;">
                                    <div class="desc">
                                        <div class="con">
                                            <h3><a href="work.html"><?php echo $lang['Work 05'];?></a></h3>
                                            <span><?php echo $lang['Web Design 01'];?></span>
                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 animate-box" data-animate-effect="fadeInRight">
                                <div class="project" style="background-image: url(images/about.jpg);background-size:100% auto;">
                                    <div class="desc">
                                        <div class="con">
                                            <h3><a href="work.html"><?php echo $lang['Work 06'];?></a></h3>
                                            <span><?php echo $lang['Web Design 1'];?></span>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                      
                    </div>
                </section>

                <section class="colorlib-blog" data-section="blog">
                    <div class="colorlib-narrow-content">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                           
                                <h2 class="colorlib-heading"><?php echo $lang['Projects 01'];?></h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
                                <div class="blog-entry">
                                    <a class="blog-img"><img src="images/epocket1.png" class="img-responsive" ></a>
                                    <div class="desc">
                                       
                                        <h3>Epocket</h3>
                                        <p> <?php echo $lang['Epocket'];?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 animate-box" data-animate-effect="fadeInRight">
                                <div class="blog-entry">
                                    <a  class="blog-img"><img src="images/tim9it1.png" style="height:130px;" class="img-responsive" alt="HTML5 Bootstrap Template by colorlib.com"></a>
                                    <div class="desc">
                                       
                                        <h3><a >Tim9it</a></h3>
                                        <p><?php echo $lang['Tim9it'];?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
                                <div class="blog-entry">
                                    <a  class="blog-img"><img src="images/Capture.jpg" class="img-responsive"></a>
                                    <div class="desc">
                                        
                                        <h3><a >Site Web Youcode</a></h3>
                                        <p><?php echo $lang['Site Web Youcode'];?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </section>

                <section class="colorlib-contact" data-section="contact">
                    <div class="colorlib-narrow-content">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">

                                <h2 class="colorlib-heading">Contact</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5">
                                <div class="colorlib-feature colorlib-feature-sm animate-box" data-animate-effect="fadeInLeft">
                                    <div class="colorlib-icon">
                                        <i class="icon-globe-outline"></i>
                                    </div>
                                    <div class="colorlib-text">
                                        <p><a href="#">ibtissam.belamria2014@gmail.com</a></p>
                                    </div>
                                </div>

                                <div class="colorlib-feature colorlib-feature-sm animate-box" data-animate-effect="fadeInLeft">
                                    <div class="colorlib-icon">
                                        <i class="icon-map"></i>
                                    </div>
                                    <div class="colorlib-text">
                                        <p>Quartier Smara Rue 19 n° 01 youssoufia</p>
                                    </div>
                                </div>

                                <div class="colorlib-feature colorlib-feature-sm animate-box" data-animate-effect="fadeInLeft">
                                    <div class="colorlib-icon">
                                        <i class="icon-phone"></i>
                                    </div>
                                    <div class="colorlib-text">
                                        <p><a href="tel://">+212 674051264</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7 col-md-push-1">
                                <div class="row">
                                    <div class="col-md-10 col-md-offset-1 col-md-pull-1 animate-box" data-animate-effect="fadeInRight">
                                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 

                                            <div class="form-group">
                                                <input type="text"  class="form-control" name="nom" placeholder=" nom"  value="<?php echo $nom ?>">
                                                <p class="comment"style="color:red"><?php echo $nomError; ?></p>
                                            </div>
                                            <div class="form-group">
                                                <input type="text"  class="form-control" name="email" placeholder=" email"  value="<?php echo $email ?>">
                                                <p class="comment" style="color:red"><?php echo $emailError; ?></p>

                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="sujet" class="form-control" placeholder="Sujet"  value="<?php echo $sujet ?>">
                                                <p class="comment"style="color:red"><?php echo $sujetError; ?></p>

                                            </div>
                                            <div class="form-group">
                                                <textarea  id="message" name="message" cols="30" rows="7" class="form-control" placeholder="Message"  value="<?php echo $message ?>"></textarea>
                                                <p class="comment"style="color:red"><?php echo $messageError; ?></p>
                                            </div>
                                            <div class="form-group">
                                                <input type="submit" class="btn btn-primary btn-send-message" value="Envoyer">
                                            </div>
                                            <div>  
                                            <p class="thank you" style="display:<?php if($isSuccess) echo 'block'; else echo'none' ;?>">Votre message a bien été envoyé. merci de m'avoir contacté :)</p>
                                            </div>
                                        </form>
                                        <p ><a href="index.php?lang=en"><img src="languages/eng.png" width="18px" height="15px"></a>
                                        |<a href="index.php?lang=fr"><img src="languages/france.png" width="18px" height="15px"></a></p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                </div>
                <!-- end:colorlib-main -->
                </div>
                <!-- end:container-wrap -->
            </div>
            <!-- end:colorlib-page -->

            <!-- jQuery -->
            <script src="js/jquery.min.js"></script>
            <!-- jQuery Easing -->
            <script src="js/jquery.easing.1.3.js"></script>
            <!-- Bootstrap -->
            <script src="js/bootstrap.min.js"></script>
            <!-- Waypoints -->
            <script src="js/jquery.waypoints.min.js"></script>
            <!-- Flexslider -->
            <script src="js/jquery.flexslider-min.js"></script>
            <!-- Owl carousel -->
            <script src="js/owl.carousel.min.js"></script>
            <!-- Counters -->
            <script src="js/jquery.countTo.js"></script>


            <!-- MAIN JS -->
            <script src="js/main.js"></script>

</body>

</html>