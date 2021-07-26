<!DOCTYPE html>
<html lang="en">
<head>
<title>Maruti Admin</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/fullcalendar.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/matrix-style.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/matrix-media.css" />
<link href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery.gritter.css" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

<!--Header-part-->
<div id="header">
  <!-- <h1><a>Maruti Admin</a></h1> -->
  <p style="width: 100%; max-width: 140px; float: left; margin: 28px 0 0 32px; font-size: 19px; color: white;">MarutiGems</p>
</div>
<!--close-Header-part--> 

<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">
    <li class=""><a title="" href="<?php echo base_url('index.php/Login/logout'); ?>"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li>
  </ul>
</div>
<!--sidebar-menu-->
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <ul>
    <li class="active"><a href="<?php echo base_url('index.php/admin/Admin'); ?>"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
    <li><a href="<?php echo base_url('index.php/Login/registration'); ?>"><i class="icon icon-list"></i> <span>Add Admin</span></a> </li>
    <li> <a href="<?php echo base_url('index.php/admin/Admin/addproduct'); ?>"><i class="icon icon-signal"></i> <span>Add Product</span></a> </li>
    <!-- <li class="submenu"> <a href="#"><i class="icon icon-map-marker"></i> <span>Location</span> <span class="label label-important">3</span></a>
      <ul> -->
        <!-- <li><a href="<?php echo base_url('index.php/admin/Admin/addcountry'); ?>"><i class="icon icon-signal"></i> <span>Add Country</span></a> </li>
        <li><a href="<?php echo base_url('index.php/admin/Admin/addstate'); ?>"><i class="icon icon-signal"></i> <span>Add State</span></a> </li>
        <li><a href="<?php echo base_url('index.php/admin/Admin/addcity'); ?>"><i class="icon icon-signal"></i> <span>Add City</span></a> </li> -->
      <!-- </ul>
    </li>
    <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Categories</span> <span class="label label-important">2</span></a>
      <ul> -->
        <li><a href="<?php echo base_url('index.php/admin/Admin/addcategories'); ?>"><i class="icon icon-signal"></i>Add Categories</a></li>
        <li><a href="<?php echo base_url('index.php/admin/Admin/addsubcategories'); ?>"><i class="icon icon-signal"></i>Add SubCategories</a></li>
      <!-- </ul>
    </li> -->
    <li><a href="<?php echo base_url('index.php/admin/Admin/addsale_product'); ?>"><i class="icon icon-list"></i> <span>Add Sale product</span></a> </li>
    <li><a href="<?php echo base_url('index.php/admin/Admin/add_slider'); ?>"><i class="icon icon-list"></i> <span>Add slider</span></a> </li>
    <li><a href="<?php echo base_url('index.php/admin/Admin/add_shipping'); ?>"><i class="icon icon-list"></i> <span>Add Shipping</span></a> </li>
    <li><a href="<?php echo base_url('index.php/admin/Admin/view_product'); ?>"><i class="icon icon-list"></i> <span>View Product</span></a> </li>
    <li><a href="<?php echo base_url('index.php/admin/Admin/view_shipping'); ?>"><i class="icon icon-list"></i> <span>View Shipping</span></a> </li>
    <li><a href="<?php echo base_url('index.php/admin/Admin/view_categories'); ?>"><i class="icon icon-list"></i> <span>View Categories</span></a> </li>
    <li><a href="<?php echo base_url('index.php/admin/Admin/view_subcategories'); ?>"><i class="icon icon-list"></i> <span>View SubCategories</span></a> </li>
    <li><a href="<?php echo base_url('index.php/admin/Admin/showallsale_product'); ?>"><i class="icon icon-list"></i> <span>View sale product</span></a> </li>
    <li><a href="<?php echo base_url('index.php/admin/Admin/view_slider'); ?>"><i class="icon icon-list"></i> <span>View Slider</span></a> </li>
    <li><a href="<?php echo base_url('index.php/admin/Admin/view_admin'); ?>"><i class="icon icon-list"></i> <span>View Admin</span></a> </li>
    <li><a href="<?php echo base_url('index.php/admin/Admin/view_review'); ?>"><i class="icon icon-list"></i> <span>View Review</span></a> </li>
    <li><a href="<?php echo base_url('index.php/admin/Admin/view_contactus'); ?>"><i class="icon icon-list"></i> <span>View Contactus</span></a> </li>
    <li><a href="<?php echo base_url('index.php/admin/Admin/view_order'); ?>"><i class="icon icon-list"></i> <span>View Order</span></a> </li>
  </ul>
</div>
<!--sidebar-menu-->


<!--main-container-part-->
<div id="content">
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> <a href="<?php echo base_url('index.php/admin/Admin'); ?>" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
  </div>
<!--End-breadcrumbs-->

<!--Action boxes-->
  <div class="container-fluid">
    <div class="quick-actions_homepage">
      <ul class="quick-actions">
        <li class="bg_lb"> <a href="<?php echo base_url('index.php/admin/Admin'); ?>"> <i class="icon-dashboard"></i> My Dashboard </a> </li>
        <li class="bg_lg span3"> <a href="<?php echo base_url('index.php/admin/Admin/view_admin'); ?>"> <i class="icon-signal"></i> View Admin</a> </li>
        <li class="bg_lo"> <a href="<?php echo base_url('index.php/admin/Admin/view_product'); ?>"> <i class="icon-th"></i> View Product</a> </li>
      </ul>
    </div>
  </div>
<!--End-Action boxes-->    

<!--Chart-box-->    
    <!-- <div class="row-fluid">
      <div class="widget-box">
        <div class="widget-title bg_lg"><span class="icon"><i class="icon-signal"></i></span>
          <h5>Site Analytics</h5>
        </div>
        <div class="widget-content" >
          <div class="row-fluid">
            <div class="span9">
              <div class="chart"></div>
            </div>
            <div class="span3">
              <ul class="site-stats">
                <li class="bg_lh"><i class="icon-user"></i> <strong>2540</strong> <small>Total Users</small></li>
                <li class="bg_lh"><i class="icon-plus"></i> <strong>120</strong> <small>New Users </small></li>
                <li class="bg_lh"><i class="icon-shopping-cart"></i> <strong>656</strong> <small>Total Shop</small></li>
                <li class="bg_lh"><i class="icon-tag"></i> <strong>9540</strong> <small>Total Orders</small></li>
                <li class="bg_lh"><i class="icon-repeat"></i> <strong>10</strong> <small>Pending Orders</small></li>
                <li class="bg_lh"><i class="icon-globe"></i> <strong>8540</strong> <small>Online Orders</small></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div> -->
<!--End-Chart-box--> 
    
    