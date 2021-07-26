<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <link rel="stylesheet" href="<?php echo base_url('assets/product/css/productstyle.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/home/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/product/css/horizontalvertical.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/home/css/font-awesome.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;500;700&display=swap" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/home/css/material-components-web.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="assets/home/css/w3.css">
 
</head>

<body>
<style>
.horizon-slider img{
    width: 420px;
    /* z-index: 0; */
    display: block;
    margin: auto;
  }
  .magnify{
    border-radius: 50%;
    border: 2px solid black;
    position: absolute;
    z-index: 1020;
    background-repeat: no-repeat;
    background-color: white;
    box-shadow: inset 0 0 20px rgba(0,0,0,.5);
    display: none;
    cursor: none;
  }
  .star-rating .list-inline input{
  display: none;
}
input:not(:checked) ~ label:hover,
input:not(:checked) ~ label:hover ~ label{
  color: #fd4;
}
input:checked ~ label{
  color: #fd4;
}

@charset "UTF-8";
:root {
  --star-size: 25px;
  --star-color: #212529;
  --star-background: #fc0;
}
.Stars {
  --percent: calc(var(--rating) / 5 * 100%);
  display: inline-block;
  font-size: var(--star-size);
  font-family: Times;
  line-height: 1;
}

.Stars::before {
  content: "★★★★★";
  letter-spacing: 3px;
  background: linear-gradient(90deg, var(--star-background) var(--percent), var(--star-color) var(--percent));
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
</style>
    <div class="content_fix" style="padding-top: 91px;"></div>  
    
    <?php foreach($product as $product)
              { ?>
    <div class="container">
      <div class="product_section">
        <div class="row" style="margin: 0;">
              
          <div class="slider col-xl-7 col-md-12 col-sm-12" style="padding: 0;">
            <div class="horVerSlider">
              <div class="wishlist">
                <span class="heart"></span>
              </div> <?php //print_r($productvariation); ?>
              <div class="close"></div>
              
              <div class="vertical-wrapper">
                <div id="vertical-slider">
                  <ul>
                    <?php $img = explode(',',$product['image']); //print_r($img);
                    foreach($img as $key=>$value){ 
                    ?>  
                      <li class="ui-draggable ui-draggable-handle ui-draggable-disabled">
                          <?php $i = explode('.',$value); //print_r($i[1]); 
                            if($i[1] != "mp3" && $i[1] !="avi" && $i[1] !="mp4" && $i[1] !="WEBM"){?>
                            <img src="<?php echo base_url('assets/images/'.$value); ?>">
                            <?php }else{ ?>
                                <iframe src="<?php echo base_url('assets/images/'.$value); ?>" autoplay style="height:100%;"></iframe>
                          <?php } ?>
                        <!-- <img src="<?php //echo base_url('assets/images/'.$value); ?>"> -->
                      </li>
                    <?php } ?>
                  </ul>
                </div>
              </div>
              <div class="horizon-wrapper ">
                <div class="horizone-nav">
                  <div class="prev" style="display: none;">
                    <img src="<?php echo base_url(); ?>assets/product/images/leftarrow.svg" />
                  </div>
                  <div class="next" style="display: block;">
                    <img src="<?php echo base_url(); ?>assets/product/images/rightarrow.svg" />
                  </div>
                </div>
                <div id="horizon-slider">
                  <ul style="width: 600px; height: 600px; left: 0px; top: 0px;">
                    <?php $imgs = explode(',',$product['image']); 
                    foreach($imgs as $k=>$v){ 
                    ?> 
                      <li class="lens ui-draggable ui-draggable-handle ui-draggable-disabled">
                        <?php $i = explode('.',$v); //print_r($i[1]); 
                            if($i[1] != "mp3" && $i[1] !="avi" && $i[1] !="mp4" && $i[1] !="WEBM"){?>
                            <img src="<?php echo base_url('assets/images/'.$v); ?>">
                            <?php }else{ ?>
                                <iframe src="<?php echo base_url('assets/images/'.$v); ?>" autoplay style="width:100%; height:400px;"></iframe>
                        <?php } ?>
                      <!-- <img class="magnifiedImg" src="<?php //echo base_url('assets/images/'.$v); ?>"> -->
                      </li>
                    <?php } ?>
                  </ul>
                </div>
                <div class="dots">
                  <div class="dotwrap"></div>
                </div>
              </div> 
            </div>
          </div>
          <?php //print_r($product); ?>
          <div class="col-xl-5 col-md-12 col-sm-12 col-xs-12 product_detail">
            <form method="post" action="<?php echo base_url('index.php/Product/add_to_cart/'.$product['p_id']); ?>">
            <div class="pro_desc">
              <div class="product_title"><?php echo $product['pname'];?></div>
              <!-- <div class="pro_currency">
                <select name="currency" id="currency">
                  <option value="United States (US) dollar" selected>United States add_to_cart(US) dollar</option>
                  <option value="Euro">Euro</option>
                  <option value="Pound sterling">Pound sterling</option>
                </select>
                <label style="color: red"><?php echo form_error('currency'); ?></label>
              </div> -->
              <?php if($diamond_size != null) { ?>
              <div class="pro_size">
                <select name="size" id="size" onchange="updatePrice('<?php echo $product['sale_percentage'] ?>')">
                  <option selected disabled>Select Size</option>
                  <?php foreach($diamond_size as $keys=>$values) { ?>
                    <option value="<?php echo $values['id'] ?>, <?php echo $values['diamond_value'] ?>"><?php echo $values['diamond_size'] ?></option>
                  <?php } ?>
                </select>
                <label style="color: red"><?php echo form_error('size'); ?></label>
              </div>
              <?php } ?>

              <?php if($product['d_color'] != null) { ?>
              <div class="pro_color"> <?php $color = explode(',',$product['d_color']); //print_r($color);?>
                <select name="color" id="color" required>
                  <option disabled>Select color</option>
                  <?php foreach($color as $key=>$value) { ?>
                    <option value="<?php echo $value ?>"><?php echo $value ?></option>
                  <?php } ?>
                </select>
                <label style="color: red"><?php echo form_error('color'); ?></label>
              </div>
              <?php } ?>
              
              <input type="hidden" name="quantity" value="1">

              <!--<div class="pro_stock clearfix">-->
              <!--  <div class="input-group">-->
              <!--    <?php// if($product['stock'] == 0) {?>-->
              <!--    <input type="number" id="quantity" name="quantity" class="form-control input-number" value="0" min="0"-->
              <!--      title="Qty" size="4" placeholder="" inputmode="numeric" disabled>-->
              <!--     <?php //}else { ?>-->
              <!--      <input type="number" id="quantity" name="quantity" class="form-control input-number" value="1" min="1"-->
              <!--      title="Qty" max="<?php// echo $product['stock']; ?>" size="4" placeholder="" inputmode="numeric">-->
              <!--      <?php// } ?>-->
              <!--      <label style="color: red"><?php// echo form_error('quantity'); ?></label>-->
              <!--  </div>-->
                <!--<div class="stock_count">-->
                <!--    <?php //if($product['stock'] == 0) {?>-->
                <!--    <p><span>Out Of Stock</span></p>-->
                <!--    <?php //} else { ?>-->
                <!--      <p><span><?php //echo $product['stock']; ?></span>stock</p>-->
                <!--     <?php //} ?>-->
                <!--</div>-->
              <!--</div>-->
              <div class="price_product">
                <input type="hidden" id="hide_price" name="hide_price" value="<?php echo $product['sale_price'];?>">
                <p class="price" id='realtimeprice'>$<?php echo $product['sale_price'];?></p>
                <!--<p><del>$<?php echo $product['price']; ?></del></p>-->
              </div>
            </div>
            <div class="product_cart_btn">
              <?php if($product['stock'] == 0) { ?>
              <a href="<?php //echo base_url('index.php/Product/add_to_cart/'.$product['p_id'].'/'.$user_id); ?>">
              <button class="btn btn_cart" style="background-color: #1a2a6f; color:#fff;" disabled>+ Add To Cart</button></a>
              <?php }else { ?>
                <a href="<?php //echo base_url('index.php/Product/add_to_cart/'.$product['p_id'].'/'.$user_id); ?>">
              <button class="btn btn_cart">+ Add To Cart</button></a>
              <?php } ?>
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="product_description">
      <div class="container">
        <div class="pro_desc_review">
          <ul class="product_desc_head clearfix">
            <li class="h4 desclink">Description</li>
            <li class="h4 reviewlink">Reviews (<?php echo count($review) ?>)</li>
          </ul>
          <div class="productdesc_section">
            <div class="pro_title"><?php echo $product['pname'];?></div>
            <div class="pro_information">
              <table class="table table-responsive">
                <tr>
                  <?php if($product['id'] !== '') {?>
                  <th>Diamond Id</th>
                  <td><?php echo $product['id'];?></td>
                  <?php } ?>
                  <?php if($product['d_type'] !== '') {?>
                  <th>Diamond Type</th>
                  <td><?php echo $product['d_type'];?></td>
                  <?php } ?>
                </tr>
                <tr>
                <?php if($product['shape'] !== '') {?>
                  <th>Diamond Shape</th>
                  <td><?php echo $product['shape'];?></td>
                  <?php } ?>
                  <?php if($product['d_size'] !== '') {?>
                  <th>Diamond Size</th>
                  <td><?php echo $product['d_size'];?></td>
                  <?php } ?>
                </tr>
                <tr>
                  <?php if($product['no_of_diamond'] !== '') {?>
                  <th>Number of Diamonds</th>
                  <td><?php echo $product['no_of_diamond'];?></td>
                  <?php } ?>
                  <?php if($product['luster'] !== '') {?>
                  <th>Luster</th>
                  <td><?php echo $product['luster'];?></td>
                  <?php } ?>
                </tr>
                <tr>
                <?php if($product['weight'] !== '') {?>
                  <th>Weight</th>
                  <td><?php echo $product['weight'];?></td>
                  <?php } ?>
                  <?php if($product['clarity'] !== '') {?>
                  <th>Clarity</th>
                  <td><?php echo $product['clarity'];?></td>
                  <?php } ?>
                </tr>
                <tr>
                <?php if($product['cut'] !== '') {?>
                  <th>Cut</th>
                  <td><?php echo $product['cut'];?></td>
                  <?php } ?>
                  <?php if($product['d_color'] !== '') {?>
                  <th>Color</th>
                  <td><?php echo $product['d_color'];?></td>
                  <?php } ?>
                </tr>
                <tr>
                  <?php if($product['treatment'] !== '') {?>
                  <th>Treatment</th>
                  <td><?php echo $product['treatment'];?></td>
                  <?php } ?>
                  <?php if($product['certification'] !== '') {?>
                  <th>Certification</th>
                  <td><?php echo $product['certification'];?></td>
                  <?php } ?>
                </tr>
              </table>
            </div>
          </div>
          <div class="reviewdesc_section">
              
              <div class="row py-5">

              <div class="col-md-4">
              
            <form method="post" action="<?php echo base_url('index.php/Product/reviews');?>">
              <div class="review_customer">
                <div class="star-rating">
                    <label for="rating" class="label">Rating</label> 
                <ul class="list-inline">
                  <input type="radio" name="rating" id="rate-5" value="5">
                  <label for="rate-5" class="fa fa-star"></label>
                  <input type="radio" name="rating" id="rate-4" value="4">
                  <label for="rate-4" class="fa fa-star"></label>
                  <input type="radio" name="rating" id="rate-3" value="3">
                  <label for="rate-3" class="fa fa-star"></label>
                  <input type="radio" name="rating" id="rate-2" value="2">
                  <label for="rate-2" class="fa fa-star"></label>
                  <input type="radio" name="rating" id="rate-1" value="1" required>
                  <label for="rate-1" class="fa fa-star"></label>
                </ul>
                </div>
                <input type="hidden" name="product_id" value="<?php echo $this->uri->segment('3');?>">
                <div class="email">
                  <label for="email" class="label">Email Address</label> 
                  <input id="email" name="email" type="text" class="input" placeholder="Enter your email address">
                </div>
                <div class="message">
                  <label for="message" class="label">Your Review</label> 
                  <textarea id="message" name="message" type="text" rows="2" class="input" placeholder="Type Your Review"></textarea>
                </div>
                <div class="review_button">
                  <a href=""><input type="submit" name="submit" class="review" value="Submit"></a>
                </div>
              </div>
            </form>
            
            </div>
              

            <div class="container-fluid px-0 mx-auto col-md-8">
              <div class="row justify-content-center mx-0 mx-md-auto">
                <div class="col-lg-10 col-md-11 px-1 px-sm-2">
                  <div class="border-0">

                    <?php if(!count($review)){ ?>
                      <p>
                        <center class="pro_title">review not found</center>
                      </p> 
                    <?php } ?>
                    <?php foreach($review as $row) { ?>

                      <div class="review">
                        <div class="row d-flex">
                          <div class="profile-pic">
                            <img src="https://suryahospitals.com/jaipur/wp-content/uploads/sites/3/2020/07/user-dummy-200x200-1.png" style="width: 60px; height:  60px; border-radius: 50%">
                          </div>
                          <div class="d-flex flex-column pl-3">
                            <h4><?php echo $row['f_name'].'&nbsp;'.$row['l_name']?></h4> 
                            <div class="row pb-3 riv">
                              <div class="Stars" style="--rating: <?php echo $row['rating'];?>"></div>
                            </div>
                          </div>
                        </div>

                        <div class="row p-2">
                          <p><?php echo $row['message']; ?></p>
                        </div>
                      </div>
                      <hr>

                    <?php } ?>

                  </div>
                </div>
              </div>
            </div>

            </div>
            
          </div>
        </div>
      </div>
    </div>
  <?php } ?>
  <?php include 'footer.php';?>
  <!-- <div id="footer"></div> -->
 <?php include 'whatsapp.php';?>


  <!-- <script src="C:\Diamondweb\assets\product\js\horizontalvertical.js"></script> -->
  <script src="<?php echo base_url(); ?>assets/home/js/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/home/js/horizontalvertical.js"></script>
  <script src="<?php echo base_url(); ?>assets/home/js/popper.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/home/js/bootstrap.min.js"></script>
  <!-- <script src="assets/home/js/jquery-ui.min.js"></script> -->
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/product/js/product.js"></script>
  <script src="<?php echo base_url(); ?>assets/home/js/script.js"></script>
</body>

</html>

<script type="text/javascript">
$(document).ready(function(e){  
  $(".product_description .reviewlink").click(function(){
      $(".reviewdesc_section").addClass("active");
      if($(".reviewdesc_section").hasClass("active")){
          $(".reviewlink").css("color", "#a3a3a3");
      }else{
        $(".desclink").css("color", "#a3a3a3");
      }
      $(".product_description .productdesc_section").css("display", "none");
  });
  $(".product_description .desclink").click(function(){
    $(".reviewdesc_section").removeClass("active");
    $(".product_description .productdesc_section").css("display", "block");
    //$(".product_description .desclink").css({"border-bottom": "1px solid #001a6f", "color": "#8c8c8c"});
});

});

function updatePrice(sale){
  // alert(sale)
  var id = document.getElementById("size");
  data = id.value.split(",");
  realprice = data[1] - (data[1] * sale / 100);
  // realprice = data[1] - realprice;
  $("#hide_price").val(realprice)
  document.getElementById("realtimeprice").innerHTML = realprice;
}
</script>