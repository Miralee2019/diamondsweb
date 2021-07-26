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
    <title>Document</title>
</head>

<body>
    <div class="content_fix" style="padding-top: 81px;"></div>
    <div class="container">
        <div class="row page_shop">
            <?php foreach($searching as $product) { $img = explode(',',$product['image']);?>
            <div class="col-lg-3 col-md-2 col-sm-1 shop_img">
                <div class="shadow mb-5 bg-white rounded mdc-card mdc-card--outlined">
                    <a href="<?php if($this->session->userdata('user_id')) {
                                                echo base_url('index.php/Product/product/'.$product['p_id']);
                                                 } else {
                                                    echo base_url('index.php/Home/login');
                                                } ?>">
                        <img src="<?php echo base_url('assets/images/'.$img['1']); ?>" class="img-fluid" alt="">
                    </a>
                    <div class="shop_content text-left">
                        <div class="shop_grid">
                            <div class="shop_ca">
                                <p><?php //echo $product['categories_name']; ?></p>
                            </div>
                            <div class="shop_pro">
                                <a href="<?php if($this->session->userdata('user_id')) {
                                                echo base_url('index.php/Product/product/'.$product['p_id']);
                                                 } else {
                                                    echo base_url('index.php/Home/login');
                                                } ?>"><?php echo $product['pname']; ?></a>
                            </div>
                            <div class="shop_price">
                                <p>$<?php echo $product['price']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
            <!-- <div class="col-lg-3 shop_img">
                <div class="shadow mb-5 bg-white rounded mdc-card mdc-card--outlined">
                    <a href="">
                        <img src="assets/home/images/download2.jpg" class="img-fluid" alt="">
                    </a>
                    <div class="shop_content text-left">
                        <div class="shop_grid">
                            <div class="shop_pro">
                                <a href="product.html">1.28 CT Salt and Pepper Round Brilliant Cut Natural Polished
                                </a>
                            </div>
                            <div class="shop_price">
                                <p>$544.00</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 shop_img">
                <div class="shadow mb-5 bg-white rounded mdc-card mdc-card--outlined">
                    <a href="">
                        <img src="assets/home/images/download2.jpg" class="img-fluid" alt="">
                    </a>
                    <div class="shop_content text-left">
                        <div class="shop_grid">
                            <div class="shop_pro">
                                <a href="product.html">1.28 CT Salt and Pepper Round Brilliant Cut Natural Polished
                                </a>
                            </div>
                            <div class="shop_price">
                                <p>$544.00</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 shop_img">
                <div class="shadow mb-5 bg-white rounded mdc-card mdc-card--outlined">
                    <a href="">
                        <img src="assets/home/images/download2.jpg" class="img-fluid" alt="">
                    </a>
                    <div class="shop_content text-left">
                        <div class="shop_grid">
                            <div class="shop_pro">
                                <a href="product.html">1.28 CT Salt and Pepper Round Brilliant Cut Natural Polished
                                </a>
                            </div>
                            <div class="shop_price">
                                <p>$544.00</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </div>

    <?php include 'footer.php';?>
</body>

</html>