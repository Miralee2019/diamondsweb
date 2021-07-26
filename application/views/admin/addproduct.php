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
  <style type="text/css">
  input[type="file"] {
  display: block;
}
.imageThumb {
  max-height: 75px;
  border: 2px solid;
  padding: 1px;
  cursor: pointer;
}
.pip {
  display: inline-block;
  margin: 10px 10px 0 0;

}
.remove {
  display: block;
  background: #444;
  border: 1px solid black;
  color: white;
  text-align: center;
  cursor: pointer;
}
.remove:hover {
  background: white;
  color: black;
}
</style>
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
<!--end-aidebar-->
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Form elements</a> <a href="#" class="current">Validation</a> </div>
    <h1>Product</h1>
  </div>
  <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>Product</h5>
          </div>
          <?php //print_r($product); ?>
          <div class="widget-content nopadding">
            <form class="form-horizontal" method="post" enctype="multipart/form-data" action="" name="basic_validate" id="basic_validate" novalidate="novalidate">
              <div class="control-group">
                <label class="control-label" style="float:left; text-align: right;">Product Name</label>
                <div class="controls" style="max-width:300px;">
                  <input type="text" name="p_name" id="required" class="form-control" value="<?php echo @$product['pname'];?>">
                  <label style="color: red"><?php echo form_error('p_name'); ?></label>
                </div>
              </div>
              <div class="control-group">
                    <label class="control-label" style="float:left; text-align: right;">Select Categories</label>
                    <div class="controls" style="max-width:300px;"> 
                      <select name="categories" id="categories">
                          <option>--Select Categories--</option>
                            <?php foreach($categories as $row){ ?>
                                <option value="<?php echo $row['id'];?>" <?php if($row['categories_name']==@$product['categories_name']){ ?> selected <?php }?>><?php echo $row['categories_name']?></option>
                            <?php } ?>
                        </select>
                        <label style="color: red"><?php echo form_error('categories'); ?></label>
                    </div>
              </div>
              <div class="control-group">
                    <label class="control-label" style="float:left; text-align: right;">Sub Categories</label>
                    <div class="controls" style="max-width:300px;"> 
                        <select name="subcategories" id="subcategories">
                          <option value="">Select Sub Categories</option>
                        </select>
                        <label style="color: red"><?php echo form_error('subcategories'); ?></label>
                    </div>
              </div>
              <div class="control-group">
                <label class="control-label" style="float:left; text-align: right;">Price</label>
                <div class="controls" style="max-width:300px;">
                  <input type="text" name="price" id="price" class="form-control" value="<?php echo @$product['price']; ?>">
                  <label style="color: red"><?php echo form_error('price'); ?></label>
                </div>
              </div>
              <!--<div class="control-group">-->
              <!--  <label class="control-label" style="float:left; text-align: right;">Image</label>-->
              <!--  <div class="controls" style="max-width:300px;">-->
              <!--    <input type="file" name="files[]" id="image" class="form-control" multiple value="<?php echo @$product['image']; ?>">-->
              <!--    <label style="color: red"><?php echo form_error('files'); ?></label>-->
              <!--  </div>-->
              <!--</div>-->
              <div class="control-group">
                <label class="control-label" style="float:left; text-align: right;">Image</label>
                <div class="controls" style="max-width:300px;">
                  <input size="25" type="file" name="files[]" id="image" class="form-control" multiple value="<?php echo @$product['image']; ?>">

                  <label style="color: red"><?php echo form_error('files'); ?></label>
                </div>

                  <div id="selectedImage"></div>
              </div>
              <div class="control-group">
                <label class="control-label" style="float:left; text-align: right;">Weight</label>
                <div class="controls" style="max-width:300px;">
                  <input type="text" name="weight" id="weight" class="form-control" value="<?php echo @$product['weight']; ?>">
                  <label style="color: red"><?php echo form_error('weight'); ?></label>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label" style="float:left; text-align: right;">Stock</label>
                <div class="controls" style="max-width:300px;">
                  <input type="number" name="stock" id="stock" class="form-control" value="<?php echo @$product['stock']; ?>">
                  <label style="color: red"><?php echo form_error('stock'); ?></label>
                </div>
              </div>
              <!-- <div class="control-group">
                    <label class="control-label" style="float:left; text-align: right;">Shipping</label>
                    <div class="controls" style="max-width:300px;"> 
                        <select name="shipping[]" multiple data-live-search="true">
                            <?php foreach($shipping as $row){ ?>
                                <option value="<?php echo $row['shipping_id'];?>"><?php echo $row['shipping_name']?></option>
                            <?php } ?>
                        </select>
                        <label style="color: red"><?php echo form_error('shipping[]'); ?></label>
                    </div>
                </div> -->
              <div class="form-actions">
                <input type="submit" name="submit" value="Next" class="btn btn-success">
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
    $(document).ready(function() {
  if (window.File && window.FileList && window.FileReader) {
    $("#image").on("change", function(e) {
      var files = e.target.files,
        filesLength = files.length;
        console.log(e.target.files)
      for (var i = 0; i < filesLength; i++) {
        var f = files[i]
        var fileReader = new FileReader();
        fileReader.onload = (function(e) {
          var file = e.target;
          $("<span class=\"pip\">" +
            "<img class=\"imageThumb\" src=\"" + e.target.result + "\" title=\"" + file.name + "\"/>" +
            "<br/><span class=\"remove\">Remove image</span>" +
            "</span>").insertAfter("#selectedImage");
            $(".remove").click(function(){
              $(this).parent(".pip").remove()
              $("#image").val("")
          })
          
        })
        fileReader.readAsDataURL(f);
      }
    });
  } else {
    alert("Your browser doesn't support to File API")
  }
})
		$(document).ready(function(e)
		{
			$('#categories').on('change',function()
			{
				var categoriesID=$(this).val();		
				if(categoriesID)
				{
					$.ajax({type:'POST',
                                        url:'<?php  echo site_url('admin/Admin/get_categories')?>',
                                        data:'c_id='+categoriesID,
                                        success:function(html)
                                        {
                                                $('#subcategories').html(html);
                                        }
					});	
				}
			})
      $("#sidebar ul .submenu").click(function(){
        // $("#sidebar ul .submenu").show("#sidebar ul .submenu ul");
      });
		});
	</script>
