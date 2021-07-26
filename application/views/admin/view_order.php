<!DOCTYPE html>
<html lang="en">
<head>
<style>
.pagination {
    display: inline-block;
}

.pagination a {
    color: black;
    float: left;
    padding: 8px 16px;
    text-decoration: none;
}

.pagination a.active {
    background-color: #4CAF50;
    color: white;
}

.pagination a:hover:not(.active) {background-color: #ddd;}
</style>
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
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Tables</a> </div>
    <h1>Tables</h1>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
            <h5>View Review</h5>
            <!-- <span style="float:right;" class="icon"><a href="<?php echo base_url('index.php/admin/Admin/add_shipping'); ?>"><i class="icon-plus" title="Add Shipping"></i></a></span> -->
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                    <th>Order Id</th>
                    <th>User Id</th>
                    <th>User Name</th>
                    <th>Mobile Number</th>
                    <th>total_price</th>
                    <th>View Bill</th>
                    <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach($order as $row){ //print_r($row);?>
                <tr class="odd gradeX">
                    <td><?php echo $row['order_id']; ?></td>
                    <td><?php echo $row['user_id']; ?></td>
                    <td><?php echo $row['f_name']; ?>&nbsp;<?php echo $row['l_name']; ?></td>
                    <td><?php echo $row['phone_no']; ?></td>
                    <td><?php echo $row['total']; ?></td>
                    <td><?php echo $row['date']; ?></td>
                    <td><a href="<?php echo site_url('admin/Admin/view_invoice/') ?><?php echo $row['order_id']; ?>"> <button class="btn btn-outline-secondary" type="button" name="button" >invoice</button></td>
                </tr>
                <?php } ?>
                </tbody>
            </table>
          </div>
        </div>



      


      </div>
    </div>
  </div>
</div>

  <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Modal header</h3>
    </div>
    <div class="modal-body">
        <p>One fine body…</p>
    </div>
    <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
        <button class="btn btn-primary">Save changes</button>
    </div>
</div>
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

<script type="text/javascript">
  function viewBill(order_id) {
$("#myModal").modal();
    $.ajax({
      type:'get',
      url:'<?php echo site_url('admin/Admin/view_invoice/')?>'+order_id,
      success:function(html)
      {
        // alert(html)
        $("#myModal").modal();
        // $('#subcategories').html(html);
      }
    });

  }
</script>
</body>
</html>
