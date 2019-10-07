<?php 
	session_start(); 

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}

?>

<?php include ('menu.php') ?>

<!-- Start Slider -->

<section id="mu-slider">


    <!-- Start single slider item -->
    <div class="mu-slider-single">
        <div class="mu-slider-img">
            <figure>
                <img src="assets/img/5.jpg" alt="img">
            </figure>
        </div>
        <!--<div class="mu-slider-content">
        <h4>Welcome To NWU</h4>
        <span></span>
        <h2>Well Decorated Lab</h2>
        <p>North Western University (NWU) has established a strong reputation for nurturing innovation and academic excellence across many disciplines.</p>
        <a href="#" class="mu-read-more-btn">Read More</a>
      </div>-->

    </div>
    <!-- Start single slider item -->
    <!-- Start single slider item -->
    <div class="mu-slider-single">
        <div class="mu-slider-img">
            <figure>
                <img src="assets/img/slider/2.jpg" alt="img">
            </figure>
        </div>


    </div>
    <!-- Start single slider item -->
    <!-- Start single slider item -->
    <div class="mu-slider-single">
        <div class="mu-slider-img">
            <figure>
                <img src="assets/img/slider/3.jpg" alt="img">
            </figure>
        </div>

    </div>

    <!-- Start single slider item -->
</section>
<!-- End Slider -->

<!-- Start service  -->
<section id="mu-service">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="mu-service-area">
                    <!-- Start single service -->
                    <div class="mu-service-single">
                        <span class="fa fa-book"></span>
                        <h3><a href="library.php">Library</a></h3>
                        <div class="ser-area text-justify">
                            NWU delivers distinctive education by supporting all faculty using educational technology .We have an library containing thousands of necesssary books.
                        </div>
                        <div class="ser-btn">
                            <button class="btn btn-default"><a href="library.php">Visit Now</a></button>
                        </div>
                    </div>
                    <!-- Start single service -->
                    <!-- Start single service -->
                    <div class="mu-service-single">
                        <span class="fa fa-bullseye"></span>
                        <h3><a href="#tution">Our Mission</a></h3>
                        <div class="ser-area text-justify">
                            To establish a digital university in Bangladesh that will produce high quality graduates to propel our country towards a digitally enriched nation in the world.
                        </div>
                        <div class="ser-btn">
                            <button class="btn btn-default"><a href="mission.php">Read More</a></button>
                        </div>
                    </div>
                    <!-- Start single service -->
                    <!-- Start single service -->
                    <div class="mu-service-single">
                        <span class="fa fa-music"></span>
                        <h3><a href="cultural.php">Cultural Club</a></h3>

                        <div class="ser-area text-justify">
                            NWU has lots of active cultural clubs of fun, excitement and learning. It has The Music Club, NWU Photographic Society and lots more.
                        </div>
                        <div class="ser-btn">
                            <button class="btn btn-default"><a href="cultural.php">Visit Now</a></button>
                        </div>
                    </div>
                    <!-- Start single service -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End service  -->
<div class="latest-news">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="notice-box">
                    <marquee behavior="scroll" direction="up" onmouseover="this.stop();" onmouseout="this.start();" height="auto">
                        <h2>Latest News</h2>
                        <ul>
                            <li><a href="assets/img/Closed%20on%202018-03-16.jpg" download class="doc" data-aos="fade-left" data-aos-delay="100" target="_blank"><i class="fa fa-download"><span>Independence and National Day celebrated in North Western University</span></i></a></li>
                            
                            <li><a href="assets/img/Varsity%20Day%202018.jpg" download class="doc" data-aos="fade-left" data-aos-delay="100" target="_blank"><i class="fa fa-download"><span>The 5th founding anniversary of the university was celebrated through great enthusiasm at North Western University.</span></i></a></li>
                            
                            <li><a href="assets/img/Office%20Order.jpg" download class="doc" data-aos="fade-left" data-aos-delay="100" target="_blank"><i class="fa fa-download"><span>Unprecedented success of the Students of North Western University at Kanpur Techkriti.</span></i></a></li>
                            
                            <li><a href="assets/img/Campus%20to%20Corporate%20Program.jpg" download class="doc" data-aos="fade-left" data-aos-delay="100" target="_blank"><i class="fa fa-download"><span>Computer Programming Competition</span></i></a></li>
                            
                            <li><a href="assets/img/Muharram%20(Ashura).jpg" download class="doc" data-aos="fade-left" data-aos-delay="100" target="_blank"><i class="fa fa-download"><span>Muharram (Ashura)</span></i></a></li>
                            
                            <li><a href="assets/img/DURGAPUJA.jpg" download class="doc" data-aos="fade-left" data-aos-delay="100" target="_blank"><i class="fa fa-download"><span>DURGAPUJA</span></i></a></li>
                        </ul>
                    </marquee>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="notice-box">
                    <h2>Notice Board</h2>
                    <ul>
                        <li><a href="assets/img/Victory%20Day%202018.jpg" download class="doc" data-aos="fade-left" data-aos-delay="100" target="_blank"><i class="fa fa-download"><span>Notice regarding the 16th December Victory Day 2018</span></i></a></li>
                        <li><a href="assets/img/Admit%20Card%20of%20Semester%20Final%20Examination,%20Fall-2018.jpg" download class="doc" data-aos="fade-left" data-aos-delay="100" target="_blank"><i class="fa fa-download"><span>"Notice for collecting Admit Card of Semester Final Examination, Fall-2018"</span></i></a></li>
                        <li><a href="assets/img/Varsity%20Day%202018.jpg" download class="doc" data-aos="fade-left" data-aos-delay="100" target="_blank"><i class="fa fa-download"><span>6th Founding Anniversary Notice</span></i></a></li>
                        <li><a href="assets/img/Varsity%20Day%202018.jpg" download class="doc" data-aos="fade-left" data-aos-delay="100" target="_blank"><i class="fa fa-download"><span>Varsity Day 2018</span></i></a></li>
                        <li><a href="assets/img/Campus%20to%20Corporate%20Program.jpg" download class="doc" data-aos="fade-left" data-aos-delay="100" target="_blank"><i class="fa fa-download"><span>Workshop on 'Campus to Corporate Program</span></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Start about us counter -->
<section id="mu-abtus-counter">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mu-abtus-counter-area">
                    <div class="row">
                        <!-- Start counter item -->
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                            <div class="mu-abtus-counter-single">
                                <span class="fa fa-book"></span>
                                <h4 class="counter">82</h4>
                                <p><a href="faculty.php">Subjects</a></p>
                            </div>
                        </div>
                        <!-- End counter item -->
                        <!-- Start counter item -->
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                            <div class="mu-abtus-counter-single">
                                <span class="fa fa-users"></span>
                                <h4 class="counter">850</h4>
                                <p>Students</p>
                            </div>
                        </div>
                        <!-- End counter item -->
                        <!-- Start counter item -->
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                            <div class="mu-abtus-counter-single">
                                <span class="fa fa-flask"></span>
                                <h4 class="counter">4</h4>
                                <p>Lab</p>
                            </div>
                        </div>
                        <!-- End counter item -->
                        <!-- Start counter item -->
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                            <div class="mu-abtus-counter-single no-border">
                                <span class="fa fa-user-secret"></span>
                                <h4 class="counter">41</h4>
                                <p><a href="faculty.php">Teachers</a></p>
                            </div>
                        </div>
                        <!-- End counter item -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End about us counter -->



<!-- Start features section -->
<section id="mu-features">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12" id="tution">
                <div class="mu-features-area">
                    <!-- Start Title -->
                    <div class="mu-title">
                        <h2>CONFERENCE, SEMINAR, WORKSHOP, TRAINING & FIESTA</h2>

                    </div>

                    <!-- Start features content -->
                    <div class="mu-features-content">
                        <div class="row">
                            <div class="col-lg-3 col-md-3  col-sm-6">
                                <div class="mu-single-feature">
                                    <div class="workshop-img">
                                        <a href="assets/img/cse-fest.jpg"><img src="assets/img/cse-fest.jpg"></a>
                                        <div class="date">
                                            <small>02-12-2017</small>
                                        </div>
                                    </div>
                                    <div class="fe-txt">
                                        <h4>CSE Fest 2018</h4>
                                        <div class="comment more">
                                            CSE Fest 2018 is the biggest technological based carnival organized by the department of CSE,NWU.
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6">
                                <div class="mu-single-feature">
                                    <div class="workshop-img">
                                        <a href="assets/img/workshop-1.jpg"><img src="assets/img/workshop-1.jpg"></a>
                                        <div class="date">
                                            <small>19-01-2018</small>
                                        </div>

                                    </div>
                                    <div class="fe-txt">
                                        <h4>Programming Training</h4>
                                        <div class="comment more">
                                            Organized by Bangladesh Open Source Network(BDOSN).The event is only for girls.The original flag of campaign was sharing your own valuable experience.
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6">
                                <div class="mu-single-feature">
                                    <div class="workshop-img">
                                        <a href="assets/img/workshop-2.jpg"><img src="assets/img/workshop-2.jpg"></a>
                                        <div class="date">
                                            <small>17-08-2018</small>
                                        </div>
                                    </div>
                                    <div class="fe-txt">
                                        <h4>Comptron-2018</h4>
                                        <div class="comment more">
                                            Comptron is the first computer club of NWU.The main goal of this club is skill development.
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6">
                                <div class="mu-single-feature">
                                    <div class="workshop-img">
                                        <a href="assets/img/workshop-3.jpg"><img src="assets/img/workshop-3.jpg"></a>
                                        <div class="date">
                                            <small>20-01-2018</small>
                                        </div>
                                    </div>
                                    <div class="fe-txt">
                                        <h4>Hello World</h4>
                                        <div class="comment more">
                                            Organized by Bangladesh Open Source Network(BDOSN).The event is for all students who are interest in programming.
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- End features content -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End features section -->



<!-- Start testimonial -->
<section id="mu-testimonial">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mu-testimonial-area">
                    <div id="mu-testimonial-slide" class="mu-testimonial-content">
                        <!-- start testimonial single item -->
                        <div class="mu-testimonial-item">
                            <div class="mu-testimonial-quote">
                                <blockquote>
                                    <p>"According to the provision of the Private University Act-2010, Mr. Talukder Abdul Khaleque is the present but first Chairman of the Board of Trustees, North Western University and North Western University Trust. The Board of Trustees (BOT), the apex body which provides..."</p>
                                </blockquote>
                            </div>
                            <div class="mu-testimonial-img">
                                <img src="assets/img/Talukder%20Abdul%20Khaleque.jpg" alt="img">
                            </div>
                            <div class="mu-testimonial-info">
                                <h4>Talukdar Abdul Khaleque</h4>
                                <span>Chairman</span>
                            </div>
                        </div>
                        <!-- end testimonial single item -->
                        <!-- start testimonial single item -->
                        <div class="mu-testimonial-item">
                            <div class="mu-testimonial-quote">
                                <blockquote>
                                    <p>" A University needs to be a centre of excellence for pursuit of knowledge and the highest seat of learning, research and intellectual development for any nation. To keep pace with the fast advancing world and to face the challenges of a new millennium, especially in this age of globalization..."</p>
                                </blockquote>
                            </div>
                            <div class="mu-testimonial-img">
                                <img src="assets/img/Prof.%20Dr.%20Tarapada%20Bhowmick%20.png" alt="img">
                            </div>
                            <div class="mu-testimonial-info">
                                <h4>Prof Dr.Tarapada Bhowmick</h4>
                                <span>Vice Chancellor</span>
                            </div>
                        </div>
                        <!-- end testimonial single item -->
                        <!-- start testimonial single item -->
                        <div class="mu-testimonial-item">
                            <div class="mu-testimonial-quote">
                                <blockquote>
                                    <p> "North Western University has been established & provide the young students education with the most affordable university systems in the country. We are about student success in education and in life. We offer Undergraduate and Masters programs..."</p>
                                </blockquote>
                            </div>
                            <div class="mu-testimonial-img">
                                <img src="assets/img/Prof.%20Dr.%20Md.%20Nawsher%20Ali%20Moral.jpg" alt="img">
                            </div>
                            <div class="mu-testimonial-info">
                                <h4>Prof. Dr. Md. Nawsher Ali Moral</h4>
                                <span>Dean Of CSE</span>
                            </div>

                        </div>
                        <!-- end testimonial single item -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End testimonial -->


<?php include ('footer.php'); ?>