<!DOCTYPE html>
<html lang="en">
<head>
<title>Maruti Admin</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/uniform.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/select2.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/matrix-style.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/matrix-media.css" />
<link href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
<!-- <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css"> -->
<!-- <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.min.css"> -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.5.1/moment.min.js"></script>        
<script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.4.0/lang/en-gb.js"></script>                
<script src="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/3.0.0/js/bootstrap-datetimepicker.min.js"></script>` -->

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

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Form elements</a> <a href="#" class="current">Validation</a> </div>
    <h1>Sale Product</h1>
  </div>
  <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>Sale Product</h5>
          </div>
          <div class="widget-content nopadding">
            <form class="form-horizontal" method="post" action="" name="basic_validate" id="basic_validate" novalidate="novalidate">
                <!-- <div class="control-group">
                    <label class="control-label" style="float:left; text-align: right;">Select categoeries</label>
                    <div class="controls" style="max-width:300px;"> 
                        <select name="categoeries[]" multiple data-live-search="true">
                            <?php foreach($categories as $rows){ ?>
                                <option value="<?php echo $rows['id'];?>"><?php echo $rows['categories_name']?></option>
                            <?php } ?>
                        </select>
                        <label style="color: red"><?php echo form_error('categoeries[]'); ?></label>
                    </div>
                </div>    -->
                <div class="control-group">
                    <label class="control-label" style="float:left; text-align: right;">Select Product</label>
                    <div class="controls" style="max-width:300px;"> 
                        <select name="product[]" multiple data-live-search="true">
                            <?php foreach($product as $row){ ?>
                                <option value="<?php echo $row['p_id'];?>"><?php echo $row['pname']?></option>
                            <?php } ?>
                        </select>
                        <label style="color: red"><?php echo form_error('product[]'); ?></label>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" style="float:left; text-align: right;">Sale</label>
                    <div class="controls" style="max-width:300px;">
                      <input type="text" name="sale" id="required" class="form-conrotl">
                      <label style="color: red"><?php echo form_error('sale'); ?></label>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" style="float:left; text-align: right;">Starting Time</label>
                    <div class='input-group date' id='startDate' style="max-width:300px;">
                    <input type='datetime-local' class="form-control" name="startDate" />
                    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                    <label style="color: red"><?php echo form_error('startDate'); ?></label>
                    </span>
				          </div>
                </div>
                <div class="control-group">
                    <label class="control-label" style="float:left; text-align: right;">Ending Time</label>
                    <div class='input-group date' id='endDate' style="max-width:300px;">
                    <input type='datetime-local' class="form-control" name="endDate" />
                    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                    <label style="color: red"><?php echo form_error('endDate'); ?></label>
                    </span>
                  </div>
                </div>
                <div class="form-actions">
                    <input type="submit" name="submit" value="Submit" class="btn btn-success">
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- start -->
<!-- <div class="container">
	<div class="col-sm-6" style="height:75px;">
	   <div class='col-md-5'>
			<div class="form-group">
				<div>Start</div>
				
				<div class='input-group date' id='startDate'>
					<input type='text' class="form-control" name="startDate" />
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
					</span>
				</div>
			</div>
		</div>
		<div class='col-md-5'>
			<div class="form-group">
				<div>End</div>
				
				<div class='input-group date' id='endDate'>
					<input type='text' class="form-control" name="org_endDate" />
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
					</span>
				</div>
			</div>
		</div>
	</div>
</div> -->
<!-- end -->
<!--Footer-part-->
<div class="row-fluid">
  <div id="footer" class="span12"> 2013 &copy; Matrix Admin. Brought to you by <a href="http://themedesigner.in">Themedesigner.in</a> </div>
</div>
<!--end-Footer-part-->
 <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
 <script src="<?php echo base_url(); ?>assets/js/jquery.ui.custom.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/jquery.uniform.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/select2.min.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/jquery.validate.js"></script> 
<script src="<?php echo base_url(); ?>assets//matrix.js"></script>  
<script src="<?php echo base_url(); ?>assets/js/matrix.form_validation.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/bootstrap-material-datetimepicker-custom.js"></script>
</body>
</html>

<script type="text/javascript">
                jQuery(function () {
	jQuery('#startDate').datetimepicker({format:'DD/MM/YYYY HH:mm:ss'});
	jQuery('#endDate').datetimepicker({format:'DD/MM/YYYY HH:mm:ss'});
	jQuery("#startDate").on("dp.change",function (e) {
        jQuery('#endDate').data("DateTimePicker").setMinDate(e.date);
	});
	jQuery("#endDate").on("dp.change",function (e) {
        jQuery('#startDate').data("DateTimePicker").setMaxDate(e.date);
	});
});
            </script>