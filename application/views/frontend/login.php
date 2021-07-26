<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/home/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/home/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/login/css/login.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/home/css/w3.css">
    
</head>

<body>
    
    <div class="content_fix" style="padding-top: 81px;"></div>
    <div class="row">
        <div class="col-md-6 mx-auto p-0">
            <div class="card">
                <div class="login-box">
                    <div class="login-snip"> <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label
                            for="tab-1" class="tab">Login</label> <input id="tab-2" type="radio" name="tab"
                            class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
                        <div class="login-space">
                            <form action="<?php echo base_url('index.php/User_login'); ?>" method="post"> 
                                <div class="login login_area">
                                    <div class="group">
                                        <label for="user" class="label">Email id</label> 
                                        <input id="email_id" type="email" name="email_id" class="input" placeholder="Enter your username">
                                        <label style="color: red"><?php echo form_error('email_id'); ?></label>
                                    </div>
                                    <div class="group">
                                        <label for="pass" class="label">Password</label> 
                                        <input id="pass" type="password" name="password" class="input" data-type="password" placeholder="Enter your password">
                                        <label style="color: red"><?php echo form_error('password'); ?></label>
                                    </div>
                                    <!-- <div class="group">
                                        <input id="check" type="checkbox" class="check" checked> 
                                        <label for="check"><span class="icon"></span> Keep me Signed in</label>
                                    </div> -->
                                    <div class="group">
                                        <a href="cart.html"><input name="submit" type="submit" class="button" value="Sign In"></a>
                                    </div>
                                    <div class="hr"></div>
                                    <div class="foot"> <a href="<?php echo base_url('index.php/User_login/forgotpassword'); ?>">Forgot Password?</a> </div>
                                </div>
                            </form>
                            
                            <form action="<?php echo base_url('index.php/User_login/user_registration'); ?>" method="post">
                                <div class="sign-up-form">
                                    <div class="group fname clearfix">
                                        <label for="fname" class="label">First Name</label> 
                                        <input id="fname" name="f_name" type="text" class="input" placeholder="Create your Firstname">
                                        <label style="color: red"><?php echo form_error('fname'); ?></label>
                                    </div>
                                    <div class="group lname clearfix">
                                        <label for="lname" class="label">Last Name</label> 
                                        <input id="lname" name="l_name" type="text" class="input" placeholder="Create your Lastname">
                                        <label style="color: red"><?php echo form_error('l_name'); ?></label>
                                    </div>
                                    <div class="group email clearfix">
                                        <label for="email" class="label">Email Address</label> 
                                        <input id="email" name="email_id" type="text" class="input" placeholder="Enter your email address">
                                        <label style="color: red"><?php echo form_error('email_id'); ?></label>
                                    </div>
                                    <div class="group pass clearfix">
                                        <label for="pass" class="label">Password</label> 
                                        <input id="pass" name="password" type="password" class="input" data-type="password" placeholder="Create your password">
                                        <label style="color: red"><?php echo form_error('password'); ?></label>
                                    </div>
                                    <div class="group phone clearfix">
                                        <label for="phone" class="label">Phone No.</label> 
                                        <input id="phone" name="phone_no" type="text" class="input" placeholder="Enter your phone number">
                                        <label style="color: red"><?php echo form_error('phone_no'); ?></label>
                                    </div>
                                    <div class="group country clearfix">
                                        <!-- <label for="country" class="label">Country</label>
                                        <select id="country" name="country" class="input" placeholder="Choose Country">
                                            <option>Select country</option>
                                            <?php foreach($Countries as $row){ ?>
                                                <option value="<?php echo $row['id'];?>"><?php echo $row['name'];?></option>
                                            <?php } ?>
                                        </select> -->
                                        <label for="country" class="label">Country</label> 
                                        <input id="country" name="country" type="text" class="input" placeholder="Enter country">
                                        <label style="color: red"><?php echo form_error('country'); ?></label>
                                    </div>
                                    <div class="group state clearfix">
                                        <!-- <label for="State" class="label">State</label>
                                        <select id="state-name" name="state" class="input" placeholder="Choose State">
                                        </select>  -->
                                        <label for="State" class="label">State</label> 
                                        <input id="state-name" name="state" type="text" class="input" placeholder="Enter state">
                                        <label style="color: red"><?php echo form_error('state'); ?></label>
                                    </div>
                                    <div class="group city clearfix">
                                        <!-- <label for="City" class="label">City</label>
                                        <select id="city-name" name="city" class="input" placeholder="Choose City">
                                        </select>  -->
                                        <label for="City" class="label">City</label> 
                                        <input id="city-name" name="city" type="text" class="input" placeholder="Enter city">
                                        <label style="color: red"><?php echo form_error('city'); ?></label>
                                    </div>
                                    <div class="group address">
                                        <label for="phone" class="label">Address</label> 
                                        <textarea id="phone" name="address" type="text" rows="2" class="input" placeholder="Enter your Address"></textarea>
                                        <label style="color: red"><?php echo form_error('address'); ?></label>
                                    </div>
                                    <div class="group company clearfix">
                                        <label for="company" class="label">Comapny Name</label> 
                                        <input id="company" name="company_name" type="text" class="input" placeholder="Enter your Company name">
                                        <label style="color: red"><?php echo form_error('company_name'); ?></label>
                                    </div>
                                    <div class="group zip clearfix">
                                        <label for="zip" class="label">Zip Code</label> 
                                        <input id="zip" name="zip" type="text" class="input" placeholder="Enter your Zip code">
                                        <label style="color: red"><?php echo form_error('zip'); ?></label>
                                    </div>
                                    <!-- <div class="group">
                                        <label for="pass" class="label">Repeat Password</label> <input id="pass" type="password" class="input" data-type="password" placeholder="Repeat your password">
                                    </div> -->
                                    <div class="group">
                                        <a href=""><input name="submit" type="submit" class="button" value="Sign Up"></a>
                                    </div>
                                    <div class="hr"></div>
                                    <div class="foot"> <label for="tab-1">Already Member?</label> </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mobile_view">
        <div class="col-sm-12 col-md-12 mobile_login">
            <div class="loginview_mobile">
                <form method="post" action="<?php echo base_url('index.php/User_login'); ?>">
                    <div class="mobile_login_form">
                        <div class="group username">
                            <label for="user" class="label">Email id</label> 
                            <input id="user" name="email_id" type="text" class="input" placeholder="Enter your username">
                            <label style="color: red"><?php echo form_error('email_id'); ?></label>
                        </div>
                        <div class="group password">
                            <label for="pass" class="label">Password</label> 
                            <input id="pass" name="password" type="password" class="input" data-type="password" placeholder="Enter your password">
                            <label style="color: red"><?php echo form_error('password'); ?></label>
                        </div>
                        <!-- <div class="check">
                            <input id="check" type="checkbox" class="check" checked> 
                            <label for="check"><span class="icon"></span> Keep me Signed in</label>
                        </div> -->
                        <div class="group">
                            <a href="cart.html"><input type="submit" name="submit" class="button" value="Sign In"></a>
                        </div>
                        <div class="foot clearfix"> 
                            <!-- <a class="forgot" href="#">Forgot Password?</a>  -->
                            <a class="registered" href="#">Register Here</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-sm-12 col-md-12 mobile_signup">
            <div class="signupview_mobile">
                <form method="post" action="<?php echo base_url('index.php/User_login/user_registration'); ?>">
                    <div class="mobile_signup_form">
                        <div class="group fname">
                            <label for="fname" class="label">First Name</label> 
                            <input id="fname" name="f_name" type="text" class="input" placeholder="Create your Firstname">
                            <label style="color: red"><?php echo form_error('fname'); ?></label>
                        </div>
                        <div class="group lname">
                            <label for="lname" class="label">Last Name</label> 
                            <input id="lname" name="l_name" type="text" class="input" placeholder="Create your Lastname">
                            <label style="color: red"><?php echo form_error('l_name'); ?></label>
                        </div>
                        <div class="group email">
                            <label for="email" class="label">Email Address</label> 
                            <input id="email" name="email_id" type="text" class="input" placeholder="Enter your email address">
                            <label style="color: red"><?php echo form_error('email_id'); ?></label>
                        </div>
                        <div class="group pass">
                            <label for="pass" class="label">Password</label> 
                            <input id="pass" name="password" type="password" class="input" data-type="password" placeholder="Create your password">
                            <label style="color: red"><?php echo form_error('password'); ?></label>
                        </div>
                        <div class="group phone">
                            <label for="phone" class="label">Phone No.</label> 
                            <input id="phone" name="phone_no" type="text" class="input" placeholder="Enter your phone number">
                            <label style="color: red"><?php echo form_error('phone_no'); ?></label>
                        </div>
                        <div class="group country">
                            <label for="country" class="label">Country</label>
                            <input id="country" name="country" type="text" class="input" placeholder="Enter country" style="width: 100%;">
                            <label style="color: red"><?php echo form_error('country'); ?></label>
                        </div>
                        <div class="group state">
                            <label for="State" class="label">State</label>
                            <input id="state-name" name="state" type="text" class="input" placeholder="Enter state" style="width: 100%;">
                            <label style="color: red"><?php echo form_error('state'); ?></label>
                        </div>
                        <div class="group city">
                            <label for="City" class="label">City</label>
                            <input id="city-name" name="city" type="text" class="input" placeholder="Enter city" style="width: 100%;">
                            <label style="color: red"><?php echo form_error('city'); ?></label>
                        </div>
                        <div class="group address">
                            <label for="phone" class="label">Address</label> 
                            <textarea id="phone" name="address" type="text" rows="2" class="input" placeholder="Enter your Address"></textarea>
                            <label style="color: red"><?php echo form_error('address'); ?></label>
                        </div>
                        <div class="group company">
                            <label for="company" class="label">Comapny Name</label> 
                            <input id="company" name="company_name" type="text" class="input" placeholder="Enter your Company name">
                            <label style="color: red"><?php echo form_error('company_name'); ?></label>
                        </div>
                        <div class="group zip">
                            <label for="zip" class="label">Zip Code</label> 
                            <input id="zip" name="zip" type="text" class="input" placeholder="Enter your Zip code">
                            <label style="color: red"><?php echo form_error('zip'); ?></label>
                        </div>
                        <div class="group">
                            <a href=""><input type="submit" name="submit" class="button" value="Sign Up"></a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
   
        <?php include 'footer.php';?>
        <!-- <div id="footer"></div> -->

    <script src="<?php echo base_url(); ?>assets/home/js/jquery.min.js"></script>
    <script src="js/jQuery/jquery.monte.js"></script>
    <script src="<?php echo base_url(); ?>assets/home/js/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/home/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/product/js/product.js"></script>
    <script src="<?php echo base_url(); ?>assets/login/js/login.js"></script>
    <script src="<?php echo base_url(); ?>assets/home/js/script.js"></script>
</body>

</html>
