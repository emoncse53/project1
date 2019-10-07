<!-- Start footer -->
<footer id="mu-footer">
    <!-- start footer top -->
    <div class="mu-footer-top">
        <div class="container">
            <div class="mu-footer-top-area">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3">
                        <div class="mu-footer-widget">
                            <h4>Information</h4>
                            <ul>
                                <li><a href="about.php">About Us</a></li>
                                <li><a href="about.php">Features</a></li>
                                <li><a href="cse.php">Course</a></li>
                                <li><a href="notice.php">Event</a></li>
                                <li><a href="contact.php">Sitemap</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3">
                        <div class="mu-footer-widget">
                            <h4>Student Help</h4>
                            <ul>
                                <li><a href="index.php">Get Started</a></li>
                                <li><a href="notice.php">Download Files</a></li>
                                <li><a href="cse.php">Latest Course</a></li>
                                <li><a href="notice.php">Academic News</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3">
                        <div class="mu-footer-widget">
                            <h4>Connect Us</h4>
                            <ul class="footer-social">
                                <li><a href="https://www.facebook.com/nwu.edu.bd.official/"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://www.facebook.com/nwu.edu.bd.official/"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="https://www.facebook.com/nwu.edu.bd.official/"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="https://www.facebook.com/nwu.edu.bd.official/"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="https://www.facebook.com/nwu.edu.bd.official/"><i class="fa fa-pinterest"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3">
                        <div class="mu-footer-widget">
                            <h4>Get In Touch</h4>
                            <address>
                                <p><i class="fa fa-map-marker"></i>Sonadanga, Khulna</p>
                                <p><i class="fa fa-phone"></i>Phone: (415) 453-1568</p>
                                <p><i class="fa fa-envelope"></i>Website: www.nwu.edu.bd</p>
                                <p><i class="fa fa-pencil-square-o"></i>Send email via <a href="contact.php">contact form</a></p>
                            </address>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end footer top -->
    <!-- start footer bottom -->
    <div class="mu-footer-bottom">
        <div class="container">
            <div class="mu-footer-bottom-area">
                <p>&copy; All Right Reserved. Designed by <a href="#" rel="nofollow">Third_Eye</a></p>
            </div>
        </div>
    </div>
    <!-- end footer bottom -->
</footer>
<!-- End footer -->

<!-- jQuery library -->
<script src="assets/js/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->

<script src="assets/js/more-text.js"></script>

<script src="assets/js/bootstrap.js"></script>
<!-- Slick slider -->
<script type="text/javascript" src="assets/js/slick.js"></script>
<!-- Counter -->
<script type="text/javascript" src="assets/js/waypoints.js"></script>
<script type="text/javascript" src="assets/js/jquery.counterup.js"></script>
<!-- Mixit slider -->
<script type="text/javascript" src="assets/js/jquery.mixitup.js"></script>
<script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
<!-- Add fancyBox -->
<script type="text/javascript" src="assets/js/jquery.fancybox.pack.js"></script>
<script type="text/javascript" src="form.js"></script>
<script type="text/javascript" src="assets/js/particles.js"></script>
<script type="text/javascript" src="assets/js/app.js"></script>


<!-- Custom js -->
<script src="assets/js/custom.js"></script>
<script>
    $(document).ready(function() {

        $(".comment").shorten();

    });
</script>
<script>
    var owl = $('.owl-carousel');
    owl.owlCarousel({
        items: 5,
        loop: true,
        margin: 10,
        autoplay: true,
        slideTransition: 'linear',
        autoplayTimeout: 1000,
        autoplayHoverPause: true
    });
    $('.play').on('click', function() {
        owl.trigger('play.owl.autoplay', [1000])
    })
    $('.stop').on('click', function() {
        owl.trigger('stop.owl.autoplay')
    })
</script>
<script>
    /* Demo purposes only */
    $(".hover").mouseleave(
        function() {
            $(this).removeClass("hover");
        }
    );
</script>
<script>
    function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }

    document.getElementById("defaultOpen").click();
</script>





</body>

</html>