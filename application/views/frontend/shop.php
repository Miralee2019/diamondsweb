<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/shop/css/shop.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>

<body>
    <div class="content_fix" style="padding-top: 81px;"></div>
    <div class="container">
        <div class="row page_shop">
            <?php foreach($all_product as $product) { $img = explode(',',$product['image']);?>
            <div class="col-lg-3 col-md-4 col-sm-6 shop_img">
                <div class="shadow mb-5 bg-white rounded mdc-card mdc-card--outlined">
                    <a href="<?php //if($this->session->userdata('user_id')) {
                                                echo base_url('index.php/Product/product/'.$product['p_id']);
                                                 //} else {
                                                    //echo base_url('index.php/Home/login');
                                               // } ?>">
                        <img src="<?php echo base_url('assets/images/'.$img['0']); ?>" class="img-fluid" alt="">
                    </a>
                    <div class="shop_content text-left">
                        <div class="shop_grid">
                            <div class="shop_ca">
                                <p class="title"><?php echo $product['categories_name']; ?></p>
                            </div>
                            <div class="shop_pro">
                                <a href="<?php //if($this->session->userdata('user_id')) {
                                                echo base_url('index.php/Product/product/'.$product['p_id']);
                                                // } else {
                                                   // echo base_url('index.php/Home/login');
                                               // } ?>"><?php echo $product['pname']; ?></a>
                            </div>
                            <div class="shop_price">
                                <p class="price">$<?php echo $product['price']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>

    <!-- <center>
    <div class="container container-lg container-md container-sm container-xl" style="padding: 40px 0; margin: 0 auto;">
        <div>
            <h3>Reviews</h3>
        </div><?php //echo '<pre>'; print_r($show_reviewdata); ?>
        <div class="review">
            <div class="profile_details clearfix">
                <div class="profile" style="float: left; ">
                    <img src="<?php echo base_url();?>assets/images/review.png" alt="" style="width: 40px; border: 1px solid; border-radius: 50%;">
                </div>
                <div class="profile_name" style="float: left; margin-left: 10px;"><p>Sarah Hurd</p></div>
            </div>
            <div class="rate" style="margin-left: 46px;">
                <div class="ratings">
                    <i class="fa fa-star-o" style="font-size:24px"></i>
                    <i class="fa fa-star-o" style="font-size:24px"></i>
                    <i class="fa fa-star-o" style="font-size:24px"></i>
                    <i class="fa fa-star-o" style="font-size:24px"></i>
                    <i class="fa fa-star-o" style="font-size:24px"></i> 
                </div>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The 
                </p>
            </div>
            <div class="rated_product clearfix" style="margin-left: 36px;">
                <div class="image_pro" style="float:left">
                    <img src="<?php echo base_url();?>assets/home/images/download2.jpg" style="width: 44px;margin: 0 10px;">
                </div>
                <div class="desc_pro">
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>                           
                </div>
            </div>
        </div>
    </div>
    </center>   -->
    
    <?php include 'footer.php';?>

    <?php include 'whatsapp.php';?>
    
</body>

</html>