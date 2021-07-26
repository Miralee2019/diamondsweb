<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/home/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/home/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/cart/css/cart.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/home/css/w3.css">
    
</head>

<body>
    <?php include 'header.php';?>
    <!-- <div id="header"></div> -->
    <?php include 'mobile_header.php';?>
    <!-- <div id="mobile_header"></div> -->

    <div class="content_fix" style="padding-top: 81px;"></div>
    <div class="cart_breadcrumb">
        <h1>Cart</h1>
    </div>
    <?php if($this->session->userdata('user_id')) { ?>
                <?php if($cart != null) { ?>
    <div class="container container-lg container-md container-sm container-xl" style="padding: 0; margin: 0 auto;">
        <div class="cart_details">
            <table class="table table-responsive">
                <tr>
                    <th></th>
                    <th></th>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                </tr>
                <?php foreach($cart as $data){  $img = explode(',',$data['image']); ?>
                <tr>
                    <td><a href="<?php echo base_url('index.php/Product/delete_cart/'.$data['cart_id']); ?>"><i style="font-size:24px" class="fa">&#xf00d;</i></a></td>
                    <td class="pro_img"><img src="<?php echo base_url('assets/images/'.$img['0']); ?>"></td>
                    <td class="pro_title">
                        <p><?php echo $data['pname']; ?></p>
                    </td>
                    <td class="pro_total">
                        <p>$<?php echo $data['single_product_sale_price']; ?></p>
                    </td>
                    <td>
                        <input type="hidden" id="hidden" value="<?php echo $data['product_id']; ?>">
                        <input type="hidden" id="price" value="<?php echo $data['single_product_sale_price']; ?>">
                        <?php if($data['stock'] == 0) {?>
                        <input class="quantity" type="number" name="quantity" value="0" onclick="callEvent(this, '<?php echo $data['product_id'] ?>')" id="quantity" name="quantity" min="0" max="0" disabled>
                        <?php }else { ?>
                        <input type="number" id="quantity" name="quantity" class="quantity" onclick="callEvent(this, '<?php echo $data['product_id'] ?>')" value="<?php echo $data['quantity']; ?>" min="1"
                            title="Qty" max="<?php echo $data['stock']; ?>" size="4" placeholder="" inputmode="numeric">
                        <?php } ?>
                    </td>
                    <td class="pro_subtotal">
                        <p id="total">$<?php echo $data['total_price'];?></p>
                    </td>
                </tr>
                <?php } ?>
                <tr>
                    <td colspan="6">
                        <div class="btn_content">
                            <!-- <input type="text" class="form-control" aria-describedby="couponHelp"
                                placeholder="Coupon Code">
                            <button class="btn btn-coupon">APPLY COUPON</button> -->
                            <!-- <button id="update" class="btn btn-update_cart">UPDATE CART</button> -->
                            <a href="<?php echo base_url('index.php/Billing/checkout/'.$data['user_id']); ?>">
                            <button id="update" class="btn btn-update_cart">PROCEED TO CHECKOUT</button></a>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
        <!-- <div class="row cart_subtotal">
            <div class="col-xl-6 col-sm-0 col-md-0" style="padding: 0;"></div>
                <div class="col-xl-6 col-md-12 col-sm-12 col-12 table_content" style="padding: 0;">
                    <div class="heading">
                        <h4>Cart totals</h4>
                    </div>
                    <table class="table table-responsive">
                        <tr>
                            <th>Subtotal</th><?php $total_sum = 0; foreach($cart as $data){ $total_sum += $data['price'];} ?>
                            <td>$<?php echo $total_sum; ?></td>
                        </tr>
                        <tr>
                            <th>Shipping</th>
                            <td>
                            <?php foreach($shipping as $row){ //print_r($row);?>
                                <div class="form-check">
                                    <input type="radio" data-sum="<?php echo $total_sum; ?>" data-rate="<?php echo $row['shipping_rate']; ?>" class="form-check-input" id="shipping" name="optradio" value="<?php echo $row['shipping_id']; ?>"
                                        checked><?php echo $row['shipping_name']; ?>:<p> $<?php echo $row['shipping_rate']; ?></p>
                                </div>
                                <?php } ?>
                                <p>Shipping to <strong>Gujarat.</strong></p>
                                <a href="">Change address</a>
                            </td>
                        </tr>
                        <tr>
                            <th>Subtotal</th>
                            <td>$<p id="subtotal"></p></td>
                        </tr>
                    </table>
                    <a href="<?php echo base_url('index.php/Billing/checkout/'.$data['user_id']); ?>"><button class="btn btn_checkout">PROCEED TO CHECKOUT</button></a>
                </div>
        </div> -->
    </div>
    <?php } else { ?>
                <h2 style="padding : 100px 0px;"><center>Your Cart is Empty...</center></h2>
                <?php } ?>
            <?php } else { ?>
            <h2 style="padding : 100px 0px;"><center>Your Cart is Empty...</center></h2>
            <?php } ?>
                               
    <?php include 'footer.php';?>
    <!-- <div id="footer"></div> -->
   <?php include 'whatsapp.php';?>
   
    <script src="<?php echo base_url(); ?>assets/home/js/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>js/jQuery/jquery.monte.js"></script>
    <script src="<?php echo base_url(); ?>assets/home/js/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/home/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/cart/js/cart.js"></script>
    <!-- <script src="<?php echo base_url(); ?>assets/home/js/script.js"></script> -->
</body>

</html>

<script type="text/javascript">
    function callEvent(quantity, id){
        // console.log(price, '=====', id, '======', quantity.value);
        $.ajax({
            url:"<?php echo site_url('Product/update_quantity'); ?>",  
            method:"POST",  
            data:{quantity:quantity.value,id:id},  
            success:function(data){ 
            location.reload(); 
                // document.getElementById("total").innerHTML = data;
                    console.log(data)
                }
            }); 
    }
</script>