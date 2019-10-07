<?php include('server.php'); include 'menu.php' ?>
<!-- Page breadcrumb -->
<section id="mu-page-breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mu-page-breadcrumb-area">
                    <h2>Contact</h2>
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">Contact</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End breadcrumb -->

<!-- Start contact  -->
<section id="mu-contact">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mu-contact-area">
                    <!-- start title -->
                    <div class="mu-title">
                        <h2>Get in Touch</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores ut laboriosam corporis doloribus, officia, accusamus illo nam tempore totam alias!</p>
                    </div>
                    <!-- end title -->
                    <!-- start contact content -->
                    <div class="mu-contact-content">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="panel-body">
                                    <form id="reused_form">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" name="name" required class="form-control" placeholder="Enter Name">
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" name="email" required class="form-control" placeholder="Enter Email">
                                        </div>
                                        <div class="form-group">
                                            <label>Message</label>
                                            <textarea rows="3" name="message" class="form-control" placeholder="Type Your Message"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <button class="btn btn-raised btn-lg btn-warning" type="submit">Send</button>
                                        </div>
                                    </form>
                                    <div id="error_message" style="width:100%; height:100%; display:none; ">
                                        <h4>
                                            Error
                                        </h4>
                                        Sorry there was an error sending your form.
                                    </div>
                                    <div id="success_message" style="width:100%; height:100%; display:none; ">
                                        <h2>Success! Your Message was Sent Successfully.</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mu-contact-right">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3677.6479597240714!2d89.54108881406316!3d22.815504885058285!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ff9aac28b2453f%3A0x4ca90d328aa3b943!2sNorth+Western+University!5e0!3m2!1sen!2sbd!4v1474702600550" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end contact content -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End contact  -->


<?php include'footer.php' ?>