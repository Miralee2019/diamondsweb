<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/home/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/home/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/contact/css/contact.css">
    </head>
    <body>
    
        <div class="content_fix" style="padding-top: 81px;"></div>
        <div class="contact_info">
            <div class="contactus">
                <div class="contact_head">
                    <h3>Get In Touch With Us</h3>
                </div>
                <form method="post" action="<?php echo base_url('index.php/Home/add_contactusdata'); ?>">
                    <div class="group fname">
                        <label for="fname" class="label">First Name</label> 
                        <input id="fname" name="fname" type="text" class="input" placeholder="Create your Firstname">
                    </div>
                    <div class="group lname">
                        <label for="lname" class="label">Last Name</label> 
                        <input id="lname" name="lname" type="text" class="input" placeholder="Create your Lastname">
                    </div>
                    <div class="group email">
                        <label for="email" class="label">Email Address</label> 
                        <input id="pass" name="email" type="text" class="input" placeholder="Enter your email address">
                    </div>
                    <div class="group phone">
                        <label for="phone" class="label">Phone No.</label> 
                        <input id="phone" name="phone" type="text" class="input" placeholder="Enter your phone number">
                    </div>
                    <div class="group message">
                        <label for="message" class="label">Message</label> 
                        <textarea id="message" name="message" type="text" rows="2" class="input" placeholder="Enter your Message"></textarea>
                    </div>
                    <div class="contact_btn">
                        <button class="btn btn-send">Send</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="add_cont">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="add">
                            <div class="icon">
                                <i style="font-size:34px" class="fa fa-map-marker" aria-hidden="true"></i>
                            </div>
                            <h5>Address</h5>
                            <p>124,Rajhans Height,Nr. Minibazar, Surat-395006 (Gujarat),INDIA</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="contact">
                            <div class="icon">
                                <i style="font-size:34px" class="fa fa-phone" aria-hidden="true"></i>
                            </div>
                            <h5>Contact Number</h5>
                            <p>(+91)863789428</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="email">
                            <div class="icon">
                                <i style="font-size:34px" class="fa">&#xf003;</i>
                            </div>
                            <h5>Email</h5>
                            <p>info@diamond.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include 'footer.php';?>

        <?php include 'whatsapp.php';?>

        <script src="<?php echo base_url(); ?>assets/home/js/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/home/js/popper.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/home/js/bootstrap.min.js"></script>
    </body>
</html>