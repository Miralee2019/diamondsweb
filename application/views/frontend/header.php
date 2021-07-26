<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/head_foot/css/header.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;500;700&display=swap" rel="stylesheet">

</head>
    <body>
    <div class="row header_section">
        <div class="col-xl-2 col-md-2">
            <div class="logo">
                <a href="<?php echo base_url('index.php/Home'); ?>">
                    <img src="<?php echo base_url(); ?>assets/head_foot/images/MarutiGems_Logo_updated.svg">
                </a>
            </div>
        </div>
        <div class="col-xl-5 col-md-6 subnav_menu">
            <ul id="menu">
                <li class="parent">
                    <a href="<?php echo base_url('index.php/Home'); ?>">Home</a>
                    <div></div>
                </li>
                <li class="parent">
                    <a href="<?php echo base_url('index.php/Home/shop'); ?>">Shop</a>
                </li>
                <li class="parent"><a href="#">Category</a>
                    <ul class="child">
                    <?php foreach($subcategorie as $data=>$row){ ?>
                        <li class="parent"><a href="#"><?php echo $data; ?><span class="expand"></span></a>
                            <ul class="child">
                            <?php foreach($row as $k=>$r){ ?>
                                <li><a href="<?php echo base_url('index.php/Home/subcategories/'.$k); ?>"><?php echo $r;?></a></li>
                            <?php } ?>
                            </ul>
                        </li>
                    <?php } ?>
                    </ul>
                </li>
                <li class="parent">
                    <a href="<?php echo base_url('index.php/Home/aboutus'); ?>">About Us</a>
                </li>
                <li class="parent">
                    <a href="<?php echo base_url('index.php/Home/contactus'); ?>">Contact Us</a>
                </li>
                <div style="clear:both;"></div>
            </ul>
        </div>
         <div class="col-xl-3 col-md-1">
             <a href="#" id="myBtn" class="effect_search">
                 <i id="medium_screen" style="font-size:18px" class="fa">&#xf002;</i>
            </a>
            <div class="row nav_menu">
                <div class="col-xl-12">
                    <div class="input_area text-left">
                        <form method="post" action="<?php echo base_url('index.php/Home/searching'); ?>">
                            <input type="search" class="search" name="search" placeholder="Search">
                        </form>
                        <div class="input_icon text-right">
                            <a href="#" class="search">
                                <i id="desktop_show" style="font-size:18px" class="fa">&#xf002;</i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="myModal" class="modal">
            <div class="modal-content">
                <div class="modal-body">
                <span class="close" style="color:#000;">&times;</span>
                <form method="post" action="<?php echo base_url('index.php/Home/searching'); ?>">
                    <input type="search" class="search_modal" name="search" placeholder="Search">
                </form>
                </div>
            </div>
        </div>
        <div class="pro_cart col-xl-2 col-md-3 clearfix">
            <div class="row">
                <div class="col-lg-4 col-md-4 whishlist text-center" style="padding:0;">
                    <a href="<?php if($this->session->userdata('user_id')) {
                                                echo base_url('index.php/Whishlist/whishlist');
                                                 } else {
                                                    echo base_url('index.php/Home/login');
                                                } ?>">
                        <i class="fa fa-heart"></i>
                        <p>Wishlist</p>
                    </a>
                </div>
                <div class="col-lg-4 col-md-4 login_out text-center" style="padding:0;">
                <?php if($this->session->userdata('user_id') == null) { ?> 
                    <a href="<?php echo base_url('index.php/Home/login'); ?>" class="login">
                        <i class="fa">&#xf007;</i>
                        <p>Login</p>
                    </a>
                    <?php }else {?>
                    <a href="<?php echo base_url('index.php/Home/logout'); ?>" class="logout">
                        <!--<i class="fas fa-sign-out-alt"></i>-->
                        <img src="<?php echo base_url(); ?>assets/head_foot/images/logout.jpg" style="width: 26px;">
                        <p>Logout</p>
                    </a>
                    <?php } ?>
                </div>
                <div class="col-lg-4 col-md-4 basket text-center" style="padding:0;">
                    <a href="<?php if($this->session->userdata('user_id')) {
                                                echo base_url('index.php/Product/cart');
                                                 } else {
                                                    echo base_url('index.php/Home/login');
                                                } ?>">
                        <!--<i class='fas'>&#xf290;</i>-->
                         <img src="<?php echo base_url(); ?>assets/head_foot/images/bag.png" style="width: 27px;">
                        <span class="cart_count"><?php print_r($cart_data); ?></span>
                        <p>Basket</p>
                    </a>
                </div>
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
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
    </script>
<body>
</html>

