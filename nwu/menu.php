<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NWU</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">

    <!-- Font awesome -->
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/owl.carousel.min.css" rel="stylesheet">   
    <link href="assets/css/owl.theme.default.min.css" rel="stylesheet">  
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css">
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="assets/css/jquery.fancybox.css" type="text/css" media="screen" />
    <!-- Theme color -->
    <link id="switcher" href="assets/css/theme-color/default-theme.css" rel="stylesheet">

    <!-- Main style sheet -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="style-2.css" rel="stylesheet">


    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,300,300italic,500,700' rel='stylesheet' type='text/css'>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!--START SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#">
        <i class="fa fa-angle-up"></i>
    </a>
    <!-- END SCROLL TOP BUTTON -->

    <!-- Start header  -->
    <header id="mu-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="mu-header-area">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                  <div class="mu-header-top-left">
                                  <div class="mu-top-email">
                                    <i class="fa fa-envelope"></i>
                                    <span><a href="https://mail.google.com/" target="_blank">info@nwu.io</a></span>
                                  </div>
                                  <div class="mu-top-phone">
                                    <i class="fa fa-phone"></i>
                                    <span><a href="">(568) 986 652</a></span>
                                  </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="mu-header-top-right">
                                    <nav>
                                        <ul class="mu-top-social-nav">
                                           <li><a href="https://www.facebook.com/nwu.edu.bd.official/" target="_blank"><span class="fa fa-facebook"></span></a></li>
                                          <li><a href="https://www.twitter.com/nwu.edu.bd.official/" target="_blank"><span class="fa fa-twitter"></span></a></li>
                                          <li><a href="https://www.facebook.com/nwu.edu.bd.official/" target="_blank"><span class="fa fa-google-plus"></span></a></li>
                                          <li><a href="https://www.facebook.com/nwu.edu.bd.official/" target="_blank"><span class="fa fa-linkedin"></span></a></li>
                                          <li><a href="https://www.facebook.com/nwu.edu.bd.official/" target="_blank"><span class="fa fa-youtube"></span></a></li>
                                                <!-- logged in user information -->
                                                <?php  if (isset($_SESSION['username'])) : ?>
                                                <p class="log-out"><strong>|| User Name :
                                                        <?php echo $_SESSION['username']; ?> || </strong> <a href="index.php?logout='1'" style="color: red;border: 1px solid #333">Log Out</a> </p>
                                                <?php endif ?>
                                            
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <marquee onmouseover="javascript:this.stop();" onmouseout="javascript:this.start();" scrolldelay="12" direction="left" scrollamount="3" behavior="scroll" style="width: 100%; height: 30px; color: red; font-size: 20px; margin-top: -5px;">
                            
                            <a href="notice.php" style="color:Navy">Admission Open for Spring Semester 2019.</a>
                            <a href="https://www.wileyindia.com/Wiley_Online_Resources/UGC%20Bangladesh/UGC%20Bangladesh.html" target="_blank" style="font-size:14pt;cursor:pointer;color:Navy">Online Access Link of UGC Digital Library.</a>
                        </marquee>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- End header  -->
    <!-- Start menu -->
    <section id="mu-menu">
        <nav class="navbar navbar-default" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- LOGO -->
                    <!-- TEXT BASED LOGO -->
                    <a class="navbar-brand" href="index.php"><i class="fa fa-university"></i><span>NWU</span></a>
                    <!-- IMG BASED LOGO  -->
                    <!-- <a class="navbar-brand" href="index.php"><img src="assets/img/logo.png" alt="logo"></a> -->
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
                        <li><a href="index.php">Home</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">About <span class="fa fa-angle-down"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="about.php" target="_blank">About NWU</a></li>
                                <li><a href="vision.php" target="_blank">Vision</a></li>
                                <li><a href="mission.php" target="_blank">Mision</a></li>
                                <li><a href="objective.php" target="_blank">Objectives</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Admission <span class="fa fa-angle-down"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="undergraduate.php" target="_blank">Undergraduate</a></li>
                                <li><a href="graduate.php" target="_blank">Graduate</a></li>
                                <li><a href="admission%20notice.php" target="_blank">Admission Notice</a></li>
                                <li><a href="waiver.php" target="_blank">Waiver Policy</a></li>
                                <li><a href="admission_requirement.php" target="_blank">Admission Requirements</a></li>
                                <li><a href="registration.php" target="_blank">Registration Policy</a></li>
                                <li><a href="holiday.php" target="_blank">List of Holidays</a></li>
                                <li><a href="marks.php" target="_blank">Marks Distribution</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Academics<span class="fa fa-angle-down"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="faculty.php" target="_blank">Faculty of Science & Technology</a></li>
                                <li><a href="bba.php" target="_blank">Faculty of Business Studies</a></li>
                                
                            </ul>
                        </li>
                        <li><a href="gallery.php">Gallery</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Course <span class="fa fa-angle-down"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="view-course.php" target="_blank">View Course</a></li>
                                <?php  if (isset($_SESSION['username'])) : ?>
                                <li><a href="add-course.php">Add Course</a></li>
                                <?php  endif; ?>
                            </ul>
                        </li>
                        <!-- <li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog <span class="fa fa-angle-down"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="blog-archive.html">Blog Archive</a></li>
							<li><a href="blog-single.html">Blog Single</a></li>
						</ul>
												</li> -->
                        <!--<li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Student<span class="fa fa-angle-down"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <?php  if (isset($_SESSION['username'])) : ?>
                                <li><a href="add-student.php">Add Student</a></li>
                                <?php  endif; ?>
                                <li><a href="view-student.php">View Student</a></li>
                            </ul>
                        </li>-->
                        <li><a href="notice.php" target="_blank">Notice</a></li>
                        <li><a href="form.php" target="_blank">Forms</a></li>
                        <li><a href="contact.php" target="_blank">Contact</a></li>
                        <li><a href="login.php" target="_blank">Log In</a></li>


                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
        </nav>
    </section>
    <!-- End menu -->