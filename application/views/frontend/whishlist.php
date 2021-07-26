<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/home/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/home/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/whishlist/css/whishlist.css">
 
</head>

<body>
    <div class="content_fix" style="padding-top: 81px;"></div>  

    <div class="whishlist_breadcrumb">
        <h1>Whishlist</h1>
    </div>
    <?php if($this->session->userdata('user_id')) { ?>
    <?php if($whishlist != null) { ?>
    <div class="container container-lg container-md container-sm container-xl" style="padding: 0; margin: 0 auto;">
        <div class="whishlist_details">
            <table class="table table-bordered">
                <tr>
                    <th></th>
                    <th></th>
                    <th>Product Name</th>
                    <th>Unit Price</th>
                    <th>Stock Status</th>
                    <th>Total</th>
                </tr>
                <?php foreach($whishlist as $whish){ $img = explode(',',$whish['image']); ?>
                <tr>
                    <td><a href="<?php echo base_url('index.php/Whishlist/delete_whishlist/'.$whish['whishlist_id']); ?>"><i style="font-size:24px" class="fa">&#xf00d;</i></a></td>
                    <td class="pro_img"><img src="<?php echo base_url('assets/images/'.$img['0']); ?>"></td>
                    <td class="pro_title">
                        <p><?php echo $whish['pname']; ?></p>
                    </td>
                    <td class="pro_total">
                        <p>$<?php echo $whish['sale_price']; ?></p>
                    </td>
                    <td class="in_stock">
                        <p>In Stock</p>
                    </td>
                    <td class="pro_subtotal">
                        <a href="<?php echo base_url('index.php/Product/product/'.$whish['p_id']); ?>">
                        <button class="btn btn_cart">ADD TO CART</button></a>
                    </td>
                </tr>
                <?php } ?>
            </table>
        </div>
    </div>
    <?php } else { ?>
                <h2 style="padding : 100px 0px;"><center>Your Whishlist is Empty...</center></h2>
    <?php } ?>
    <?php } else { ?>
                <h2 style="padding : 100px 0px;"><center>Your Whishlist is Empty...</center></h2>
    <?php } ?>

    <?php include 'footer.php';?>
    <!-- <div id="footer"></div> -->
    <?php include 'whatsapp.php';?>
  

    <!-- <script src="assets/home/js/script.js"></script> -->
    <script src="<?php echo base_url(); ?>assets/home/js/jquery.min.js"></script>
    <script src="js/jQuery/jquery.monte.js"></script>
    <script src="<?php echo base_url(); ?>assets/home/js/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/home/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/whishlist/js/whishlist.js"></script>
    <script src="<?php echo base_url(); ?>assets/home/js/script.js"></script>
</body>

</html>