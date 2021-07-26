<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/head_foot/css/header.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/home/js/script.js"></script>
    <style>
        @media (max-width: 319px) {
            .cartmobile_count{
                position: absolute;
                top: 75%;
                left: 50%;
                transform: translate(-50% , -50%);
                text-align: center;
                display: flex;
                color: #fff;
                align-items: center;
                justify-content: center; 
            }
            .whishlist {
                width: 33%;
            }
            /* .whishlist i{
                font-size: 24px !important;
            } */
            .login_out {
                width: 33%;
            }
            /* .login_out i{
                font-size: 26px !important;
            } */
            .basket {
                width: 33%;
                
            }
            /* .basket i{
                font-size: 26px !important;
            } */
            .basket a{
                position: relative;
            }
            .content_fix{
                display:none;
            }
            .logo_image{
                width: 96px !important;
            }
            /* .parent a{
                margin: 0;
            }
            .child li{
                height: unset;
            } */
            /* .w3-sidebar{
                width: 100% !important;
            }
            ul ul ul{
                left: 0;
            } */
        }
        @media (min-width: 320px) and (max-width: 410px) {
            .cartmobile_count{
                position: absolute;
                top: 75%;
                left: 50%;
                transform: translate(-50% , -50%);
                text-align: center;
                display: flex;
                color: #fff;
                align-items: center;
                justify-content: center; 
            }
            .whishlist {
                width: 33%;
            }
            .whishlist i{
                font-size: 26px !important;
            }
            .login_out {
                width: 33%;
            }
            .login_out i{
                font-size: 26px !important;
            }
            .basket {
                width: 33%;
                
            }
            .basket i{
                font-size: 26px !important;
            }
            .basket a{
                position: relative;
            }
            .content_fix{
                display:none;
            }
        }
        @media (min-width: 411px) and (max-width: 576px) {
            .cartmobile_count{
                position: absolute;
                top: 75%;
                left: 50%;
                transform: translate(-50% , -50%);
                text-align: center;
                color: #fff;
                display: flex;
                align-items: center;
                justify-content: center; 
            }
            .whishlist {
                width: 33%;
            }
            .whishlist i{
                font-size: 28px !important;
            }
            .login_out {
                width: 33%;
            }
            .login_out i{
                font-size: 28px !important;
            }
            .basket {
                width: 33%;
                
            }
            .basket i{
                font-size: 28px !important;
            }
            .basket a{
                position: relative;
            }
            .content_fix{
                display:none;
            }
        }
        @media (min-width: 577px) and (max-width: 767.98px) {
            .cartmobile_count{
                position: absolute;
                top: 75%;
                left: 50%;
                transform: translate(-50% , -50%);
                text-align: center;
                display: flex;
                color: #fff;
                align-items: center;
                justify-content: center; 
            }
            .whishlist {
                width: 33%;
            }
            .whishlist i{
                font-size: 26px !important;
            }
            .login_out {
                width: 33%;
            }
            .login_out i{
                font-size: 26px !important;
            }
            .basket {
                width: 33%;
                
            }
            .basket i{
                font-size: 26px !important;
            }
            .basket a{
                position: relative;
            }
            .content_fix{
                display:none;
            }
            .humburger_menu {
                float: left !important;
                width: 13% !important;
            }
            .nav_bar {
                float: left !important;
                width: 40% !important;
            }
            .icon_content {
                width: 47% !important;
            }
        }
    </style>    
    </head>
     <body>
    <div class="navigation_items">
        <div class="w3-sidebar w3-bar-block w3-animate-left" style="display:none;z-index:10000" id="mySidebar">
        <button onclick="w3_close()" class="w3-bar-item w3-button w3-large">Close &times;</button>
        <ul class="navbar-nav">
        <li class="nav-item">
            <a class="w3-bar-item w3-button" href="<?php echo base_url('index.php/Home'); ?>">Home</a>
        </li>
        <li class="nav-item">
            <a class="w3-bar-item w3-button" href="<?php echo base_url('index.php/Home/shop');?>">Shop</a>
        </li>
        <li class="nav-item" style="position: relative;"><a class="nav-link w3-bar-item w3-button dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Category</a>
            <ul class="child">
            <?php foreach($subcategorie as $data=>$row){ ?>
                <li class="parent"><a href="#"><?php echo $data; ?><span class="expand">»</span></a>
                    <ul class="child">
                    <?php foreach($row as $k=>$r){ ?>
                        <li><a href="<?php echo base_url('index.php/Home/subcategories/'.$k); ?>"><?php echo $r;?></a></li>
                    <?php } ?>
                    </ul>
                </li>
            <?php } ?>
            </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link w3-bar-item w3-button" href="<?php echo base_url('index.php/Home/aboutus'); ?>">About Us</a>
        </li>
            <li class="nav-item">
            <a class="nav-link w3-bar-item w3-button" href="<?php echo base_url('index.php/Home/contactus'); ?>">Contact Us</a>
                </li>
                <?php if($this->session->userdata('user_id') == null) { ?>
                <li class="nav-item">
                    <a class="nav-link w3-bar-item w3-button" href="<?php echo base_url('index.php/Home/login'); ?>">Login</a>
                </li>
                <?php }else {?>
                    <li class="nav-item">
                    <a class="nav-link w3-bar-item w3-button" href="<?php echo base_url('index.php/Home/logout'); ?>">Logout</a>
                </li>
                <?php } ?>
        </ul>

    </div>
    <div class="w3-overlay w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" id="myOverlay"></div>
        <div class="row" style="display: flex; align-items: center;">
            <div class="humburger_menu col-sm-1 col-xs-1 text-left w3-white" style="padding: 0;">
                <button class="w3-button w3-large" onclick="w3_open()">☰</button>
            </div>
            <div class="nav_bar col-sm-8 col-xs-9 text-center" style="padding: 0;">
                <div class="logo_image text-center" style="width: 110px; margin: 0 auto;">
                    <a href="<?php echo base_url('index.php/Home'); ?>">
                        <img src="<?php echo base_url(); ?>assets/head_foot/images/MarutiGems_Logo_updated.svg">
                    </a>
                </div>
            </div>
            <div class="icon_content col-sm-3 col-xs-2">
                <!-- <div class="cart text-center">
                    <a href="<?php if($this->session->userdata('user_id')) {
                                                    echo base_url('index.php/Product/cart');
                                                    } else {
                                                        echo base_url('index.php/Home/login');
                                                    } ?>">

                        <i class="fa fa-shopping-cart" aria-hidden="true" style="font-size:34px;"></i>
                        </a>
                    <p class="cart_count"><a href=""><?php print_r($cart_data); ?></a></p>
                </div> 
                <div class="whishlist text-center">
                    <a href="<?php if($this->session->userdata('user_id')) {
                        echo base_url('index.php/Whishlist/whishlist');
                            } else {
                            echo base_url('index.php/Home/login');
                        } ?>"><img src="<?php echo base_url(); ?>assets/head_foot/images/like.svg" style="width: 28px;"></a>
                </div> -->
                <div class="row">
                    <div class="whishlist text-center" style="padding:0; margin:0;">
                        <a href="<?php if($this->session->userdata('user_id')) {
                                                    echo base_url('index.php/Whishlist/whishlist');
                                                    } else {
                                                        echo base_url('index.php/Home/login');
                                                    } ?>">
                            <i class="fa fa-heart" style="font-size: 24px; color: grey; margin: 0 9px;"></i>
                            <!-- <p>Wishlist</p> -->
                        </a>
                    </div>
                    <div class=" login_out text-center" style="padding:0;">
                    <?php if($this->session->userdata('user_id') == null) { ?> 
                        <a href="<?php echo base_url('index.php/Home/login'); ?>" class="login">
                            <i class="fa" style="font-size: 24px; color: grey; margin: 0 9px;">&#xf007;</i>
                            <!-- <p>Login</p> -->
                        </a>
                        <?php }else {?>
                        <a href="<?php echo base_url('index.php/Home/logout'); ?>" class="logout">
                            <!--<i class="fas fa-sign-out-alt" style="font-size: 24px; color: grey; margin: 0 9px;"></i>-->
                            <img src="<?php echo base_url(); ?>assets/head_foot/images/logout.jpg" style="width: 26px;">
                            <!-- <p>Logout</p> -->
                        </a>
                        <?php } ?>
                    </div>
                    <div class="basket text-center" style="padding:0;">
                        <a href="<?php if($this->session->userdata('user_id')) {
                                                    echo base_url('index.php/Product/cart');
                                                    } else {
                                                        echo base_url('index.php/Home/login');
                                                    } ?>">
                            <!--<i class='fas' style="font-size: 24px; color: grey; margin: 0 9px;position: relative;">&#xf290;</i>-->
                            <img src="<?php echo base_url(); ?>assets/head_foot/images/bag.png" style="width: 27px;">
                            <span class="cartmobile_count"><?php print_r($cart_data); ?></span>
                            <!-- <p>Basket</p> -->
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="components_pro clearfix">
            <div class="md_input_area text-left clearfix">
                <input type="search" name="search" placeholder="Search for anything">
                <a href="#" class="md_search text-right">
                    <i style="font-size:20px" class="fa">&#xf002;</i>
                </a>
            </div>
        </div>
    </div>

    <script>
  function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}    
$(".nav-link").click(function(){
    $(".child").toggle();
});
    </script>

        
<body>
</html>