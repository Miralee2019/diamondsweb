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
    <h1>Variation</h1>
  </div>
  <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box" id="hidePanel1">
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>Description</h5>
          </div>
          <div class="widget-content nopadding"><?php //print_r($productvariation); ?>
            <form method="post" id="insert_form">
              <div class="table-repsonsive">
              <span id="error"></span>
              <table class="table table-bordered" id="item_table">
                <tr>
                  <th>Select variation</th>
                  <th>Enter value</th>
                  <th><button type="button" name="add" class="btn btn-success btn-sm add_desciption"><span class="icon-plus icon-white"></span></button></th>
                </tr>
              </table>
              <div align="center">
                <input type="submit" name="submit" class="btn btn-info" value="Insert" />
              </div>
              </div>
            </form>
          </div>
        </div>


        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>Diamond Variation</h5>
          </div>
          <div class="widget-content nopadding"><?php //print_r($productvariation); ?>
            <form method="post" id="diamond_size">
              <div class="table-repsonsive">
              <span id="error2"></span>
              <table class="table table-bordered" id="item_table2">
                <tr>
                  <th>Select variation</th>
                  <th>Enter value</th>
                  <th><button type="button" name="add" class="btn btn-success btn-sm add_diamond"><span class="icon-plus icon-white"></span></button></th>
                </tr>
              </table>
              <div align="center">
                <input type="submit" name="submit" class="btn btn-info" value="Insert" />
              </div>
              </div>
            </form>
          </div>
        </div>

      </div>
    </div>
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
</body>
</html>

<script type="text/javascript">
  $(document).ready(function(){
    $(document).on('click', '.add_desciption', function(){
      var html = '';
      html += '<tr>';
      html += '<td><select style="width: 100%;" name="variation[]" id="variation"><option value="">Choose a variation</option><option value="Shape">Shape</option><option value="Cut">Cut</option><option value="Treatment">Treatment</option><option value="DiamondType">Diamond Type</option><option value="DiamondSize">Diamond Size</option><option value="RingSize">Ring Size</option><option value="Luster">Luster</option><option value="Clarity">Clarity</option><option value="Color">Color</option><option value="Bandwidth">Band Width</option><option value="Ringweigth">Ring Weigth</option><option value="Certification">Certification</option><option value="Gender">Gender</option><option value="Weight">Weight</option><option value="Metal">Metal</option><option value="NO Of Diamond">NO. Of Diamond</option></select></td>';
      html += '<td><input style="padding: 0;" type="text" name="variation_val[]" id="variation_val" class="form-control"></td>';
      html += '<td><center><button type="button" name="remove" class="btn btn-danger btn-sm remove"><span class="icon-minus"></span></button></center></td></tr>';
      $('#item_table').append(html);
    });

    $(document).on('click', '.remove', function(){
      $(this).closest('tr').remove();
    });

    $('#insert_form').on('submit', function(event){
      event.preventDefault();
      var error = '';
      $('#variation').each(function(){
        var count = 1;
        if($(this).val() == '')
        {
          error += "<p>Enter Variation Name at "+count+" Row</p>";
          return false;
        }
        count = count + 1;
      });

      $('#variation_val').each(function(){
        var count = 1;
        if($(this).val() == '')
        {
          error += "<p>Enter Variation value at "+count+" Row</p>";
          return false;
        }
        count = count + 1;
      });

      var form_data = $(this).serialize();
      if(error == '')
      {
        $.ajax({
          url:"<?php echo base_url('index.php/admin/Admin/addvariation_value/'.$p_id) ?>",
          type: 'POST',
          data:form_data,
          success:function(data)
          { 
            if(data == 'true')
            {
              $('#item_table').find("tr:gt(0)").remove();
              $('#error').html('<div class="alert alert-success">Item Details Saved  <div id="countdown"></div>');
            }

            var timeleft = 3;

            setTimeout( 
              function(){ 
                var x = document.getElementById("hidePanel1");
                if (x.style.display === "none") {
                  x.style.display = "block";
                } else {
                  x.style.display = "none";
                }
              }, timeleft * 1000);

            
            var downloadTimer = setInterval(function(){
              if(timeleft <= 0){
                clearInterval(downloadTimer);
                document.getElementById("countdown").innerHTML = "Finished";
              } else {
                document.getElementById("countdown").innerHTML = "remove in " +timeleft;
              }
              timeleft -= 1;
            }, 1000);


            // window.location = "<?php echo base_url('index.php/admin/Admin/view_product')?>";
          }
        });
      }
      else
      {
        $('#error').html('<div class="alert alert-danger">'+error+'</div>');
      }
    });
  });


  $(document).ready(function(){
    $(document).on('click', '.add_diamond', function(){
      var html = '';
      html += '<tr>';
      html += '<td><input style="padding: 0;" type="text" name="diamond_size[]" value="" id="diamond_sizes" class="form-control"></td>';
      html += '<td><input style="padding: 0;" type="number" value="" name="diamond_value[]" id="diamond_value" class="form-control"></td>';
      html += '<td><center><button type="button" name="remove" class="btn btn-danger btn-sm remove"><span class="icon-minus"></span></button></center></td></tr>';
      $('#item_table2').append(html);
    });

    $(document).on('click', '.remove', function(){
      $(this).closest('tr').remove();
    });

    $('#diamond_size').on('submit', function(event){
      event.preventDefault();
      var error = '';
      $('#diamond_sizes').each(function(){
        var count = 1;
        if($(this).val() == '')
        {
          error += "<p>Enter Variation Name at "+count+" Row</p>";
          return false;
        }
        count = count + 1;
      });
      
      $('#diamond_value').each(function(){
        var count = 1;
        if($(this).val() == '')
        {
          error += "<p>Enter Variation value at "+count+" Row</p>";
          return false;
        }
        count = count + 1;
      });
      
      var form_data = $(this).serialize();
      if(error == '')
      {
        $.ajax({
          url:"<?php echo base_url('index.php/admin/Admin/adddiamond_size/'.$p_id) ?>",
          type: 'POST',
          data:form_data,
          success:function(data)
          { 
            if(data == 'true')
            {
              $('#item_table').find("tr:gt(0)").remove();
              $('#error2').html('<div class="alert alert-success">Item Details Saved</div>');
            }

            setTimeout( 
              function(){ 
                window.location = "<?php echo base_url('index.php/admin/Admin/view_product')?>";
              }, 
              2000);
            
          }
        });
      }
      else
      {
        $('#error2').html('<div class="alert alert-danger">'+error+'</div>');
      }
    });
  });
</script>

