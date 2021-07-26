<html>

<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/home/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/home/css/horizontalvertical.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/home/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="<?php echo base_url(); ?>assets/home/css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/home/css/style.scss">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/home/css/swiper.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/home/css/slick.theme.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link href="<?php echo base_url(); ?>assets/home/css/material-components-web.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/home/css/w3.css">
   
<style>
 .onsale_img img{
    min-height:unset;
}
  section{
    cursor: grab;
    width: 100%;
    height: 18vw;
    transition: opacity 0.6s ease 0s;
}
.swiper-container-3d{
    margin-top: 44px;
}
.swiper-wrapper img{
  display: none;
}
.swiper-container-horizontal>.swiper-pagination-bullets, .swiper-pagination-custom, .swiper-pagination-fraction{
    display:none;
}
.categories_wrapper{
    
    background-image: url(<?php echo base_url(); ?>assets/home/images/background4.png);
    background-repeat: no-repeat;
    height: 480px;
    background-position: center;
    background-size: cover;
}
.pro_slick{
    position: relative;
}

</style>
</head>
    <body>
    <div class="content_fix" style="padding-top: 81px;"></div>
    <div class="banner">
        <div class="row fullwidth">
            <div class="col-md-12" style="padding-left:0;padding-right:0;">
                <ul class="bannerSlider" style="height:600px;">
                    <?php foreach($slider as $row){ ?>
                    <li class="slide">
                        <a href="#">
                            <div class="slide__text">
                                <h2><?php echo $row['slider_text']; ?></h2>
                            </div>
                            <div class="slide__image">
                                <img src="<?php echo base_url('assets/images/'.$row['image']); ?>" alt="" style="height:100%;"/>
                            </div>
                        </a>
                    </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
       
    <div class="categories_wrapper">
        <div class="product_underborder">
            <h2 class="border_contant" style="text-align: center;">PRODUCT<span class="icon_content"> CATEGORIES</span></h2>
        </div>   
        <section class="swiper-container loading">
            <div class="swiper-wrapper">
            <?php foreach($categories as $data){ ?>
            <a href="<?php echo base_url('index.php/Home/categories/'.$data['id']); ?>" class="swiper-slide" style="background-image:url(<?php echo base_url('assets/images/'.$data['images']); ?>)">
                <img src="<?php echo base_url('assets/images/'.$data['images']); ?>" class="entity-img" />
            </a>
            <?php } ?>
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>
            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev swiper-button-white"></div>
            <div class="swiper-button-next swiper-button-white"></div>
        </section>
    </div>

    <div class="essentials">
        <div class="text_border">
            <h2 class="before_border">Product <span>Essentials</span></h2>
        </div>
        <div class="row product_essential_content">
            <?php foreach($product as $data){  //print_r($data['image']);
                        $img = explode(',',$data['image']); ?>
            <div class="col-xl-6 col-md-12 col-sm-12 col-xs-12 product_essential_section">
                <div class="row pro_essential_text">
                    <div class="col-lg-6 pro_img_content" style="padding-right:0; padding-left:0;">
                        <a class="pro_image" href="<?php echo base_url('index.php/Product/product/'.$data['p_id']); ?>">
                            <?php $i = explode('.',$img['1']);
                            if($img['1']){
                                                                $imgtwo = 'assets/images/'.$img['1'];
                                                            } else {
                                                                $imgtwo = 'assets/images/review.png';
                                                            }
                             //print_r($i[1]); 
                            if($i[1] != "mp3" && $i[1] !="avi" && $i[1] !="mp4" && $i[1] !="WEBM"){?>
                            <img src="<?php echo base_url('assets/images/'.$img['1']); ?>">
                            <?php }else{ ?>
                                <iframe src="<?php echo base_url('assets/images/'.$img['1']); ?>" autoplay style="width:100%; height:300px;"></iframe>
                            <?php } ?>
                        </a>
                    </div>
                    <div class="col-lg-6 product_essential">
                        <div href="<?php echo base_url('index.php/Product/product'); ?>">
                            <p class="pro_one_desc">Product Essentials</p>
                            <p class="pro_two_desc"><?php echo $data['pname']; ?></p>
                            <p class="pro_three_desc">A natural quality</p>
                            <a href="<?php echo base_url('index.php/Product/product/'.$data['p_id']); ?>"><button class="btn">BUY NOW</button></a>
                        </div>
                    </div>
                </div>
            </div>  
            <?php } ?>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-10 col-md-12 col-sm-12 product_sale">
                <div class="slider" id="slider">
                    <div class="text_underborder">
                        <h2 class="border_contant" style="text-align: center;">ON<span class="icon_content"> SALE</span></h2>
                    </div>
                    <div class="slide clearfix row" id="slide">
                         
                        <?php
                        if($saleproduct != null){
                        function searchForId($search_value, $array, $id_path) {

                            foreach ($array as $key1 => $val1) {

                                $temp_path = $id_path;
                                    array_push($temp_path, $key1);
                                    if(is_array($val1) and count($val1)) {
                                        foreach ($val1 as $key2 => $val2) {
                                            if($val2 == $search_value) {
                                                array_push($temp_path, $key2);
                                                return true;
                                            }
                                        }
                                    }
            
                                    elseif($val1 == $search_value) {
                                        return join(" -->false ", $temp_path);
                                    }
                                }
            
                                return null;
                            }
                            foreach($saleproduct['product'] as $data){ 
                                foreach($data as $rows){
                                    $img = explode(',',$rows['image']); 
                                        //echo "<pre>"; print_r($img);
                                $sales;
                                foreach($saleproduct['sale_product'] as $sale){ 
                                 if(searchForId($rows['p_id'],explode(',',$sale['product_id']), array('$'))){
                                   $sales = $sale['sale_percentage'];
                               }
                           } 
                           ?>
                        <div class=" item thumb-wrapper col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="onsale_img shadow mb-5 bg-white rounded mdc-card mdc-card--outlined">
                                <a href="<?php //if($this->session->userdata('user_id')) {
                                                            echo base_url('index.php/Product/product/'.$rows['p_id']);
                                                            //} else {
                                                                //echo base_url('index.php/Home/login');
                                                            //} ?>">
                                    
                                                            <?php if($img['1']){
                                                                $imgtwo = 'assets/images/'.$img['1'];
                                                            } else {
                                                                $imgtwo = 'assets/images/review.png';
                                                            } ?>
                                    <img class="onsale_top" src="<?php echo base_url('assets/images/'.$img['0']); ?>" class="img-fluid" alt="">
                                    <img class="w3-animate-zoom  onsale_content_overlay" src="<?php echo base_url($imgtwo); ?>">
                                    <div class="pro_icon_content">
                                        <div class="onsale_content_overlay">
                                            <a href="<?php if($this->session->userdata('user_id')) {
                                                            echo base_url('index.php/Whishlist/add_whishlist/'.$rows['p_id']);
                                                        } else {
                                                            echo base_url('index.php/Home/login');
                                                        } ?>" class="whishlist">
                                                <i class="fa fa-heart-o" style="font-size:24px;"></i>
                                            </a>
                                        </div>
                                    </div>
                                </a>
                                <div class="product_content text-left">
                                    <div class="pro_grid">
                                        <div class="pro_info">
                                            <a href="<?php //if($this->session->userdata('user_id')) {
                                                            echo base_url('index.php/Product/product/'.$rows['p_id']);
                                                            //} else {
                                                                //echo base_url('index.php/Home/login');
                                                           // } ?>"><?php echo $rows['pname']; ?>
                                            </a>
                                        </div>
                                        <div class="price_cart clearfix">
                                            <div class="price_box clearfix">
                                                <?php $sale_price = $rows['price'] * $sales / 100;
                                                    $sale_count = $rows['price']-$sale_price;
                                                ?>
                                                <p>$<?php echo $sale_count; ?></p>
                                                <p><del>$<?php echo $rows['price']; ?></del></p>
                                            </div>
                                            <!-- <div class="btn_info">
                                                <a href=""><i style="font-size:32px" class="fa">&#xf07a;</i></a>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } } }//}?>
                    </div>
                </div>
            </div>
            <div class="col-lg-1"></div>
        </div>
    </div> 

    <div class="partners_slider">
        <div class="container slider_section">
            <div class="slider_items">
                <div class="items w3-animate-zoom">
                    <div><img src="<?php echo base_url(); ?>assets/home/images/Visa.png"></div>
                    <div><img src="<?php echo base_url(); ?>assets/home/images/Brinks-Logo.png"></div>
                    <div><img src="<?php echo base_url(); ?>assets/home/images/DHL.png"></div>
                    <div><img src="<?php echo base_url(); ?>assets/home/images/fedex.png"></div>
                    <div><img src="<?php echo base_url(); ?>assets/home/images/india-post.png"></div>
                    <div><img src="<?php echo base_url(); ?>assets/home/images/Mastercard.png"></div>
                    <div><img src="<?php echo base_url(); ?>assets/home/images/paypal.png"></div>
                    <div><img src="<?php echo base_url(); ?>assets/home/images/ups.png"></div>
                </div>
            </div>
        </div>
    </div>

    <?php include 'footer.php';?>

    <?php include 'whatsapp.php';?>

    <script src="<?php echo base_url(); ?>assets/home/js/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/home/js/swiper.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/home/js/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/home/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/home/js/horizontalvertical.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/home/js/slick.min.js"></script>
    <script src="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.js"></script>

<script>



    
// Params
var sliderSelector = '.swiper-container',
    options = {
      init: false,
      loop: true,
      speed:800,
      slidesPerView: 4, // or 'auto'
      // spaceBetween: 10,
      centeredSlides : true,
      effect: 'coverflow', // 'cube', 'fade', 'coverflow',
      coverflowEffect: {
        rotate: 50, // Slide rotate in degrees
        stretch: 0, // Stretch space between slides (in px)
        depth: 100, // Depth offset in px (slides translate in Z axis)
        modifier: 1, // Effect multipler
        slideShadows : true, // Enables slides shadows
      },
      grabCursor: true,
      parallax: true,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      breakpoints: {
        1180: {
          slidesPerView: 2
        },
        1023: {
          slidesPerView: 1,
          spaceBetween: 0
        }
      },
      // Events
      on: {
        imagesReady: function(){
          this.el.classList.remove('loading');
        }
      }
    };
var mySwiper = new Swiper(sliderSelector, options);

// Initialize slider
mySwiper.init();

    	$(".bannerSlider").slick({
	    dots: false
	    , autoplay: true
	    , infinite: true
        , fade: true
        , speed: 1200
	    , dots: false
	    , slidesToShow: 1
	    , slideswToScroll: 1
	    , arrows: false
	});
    "use strict";

productScroll();

function productScroll() {
  let slider = document.getElementById("slider");
  let next = document.getElementsByClassName("pro-next");
  let prev = document.getElementsByClassName("pro-prev");
  let slide = document.getElementById("slide");
  let item = document.getElementById("slide");

  for (let i = 0; i < next.length; i++) {
    //refer elements by class name

    let position = 0; //slider postion

    prev[i].addEventListener("click", function() {
      //click previos button
      if (position > 0) {
        //avoid slide left beyond the first item
        position -= 1;
        translateX(position); //translate items
      }
    });

    next[i].addEventListener("click", function() {
      if (position >= 0 && position < hiddenItems()) {
        //avoid slide right beyond the last item
        position += 1;
        translateX(position); //translate items
      }
    });
  }

  function hiddenItems() {
    //get hidden items
    let items = getCount(item, false);
    let visibleItems = slider.offsetWidth / 210;
    return items - Math.ceil(visibleItems);
  }
}

function translateX(position) {
  //translate items
  slide.style.left = position * -210 + "px";
}

function getCount(parent, getChildrensChildren) {
  //count no of items
  let relevantChildren = 0;
  let children = parent.childNodes.length;
  for (let i = 0; i < children; i++) {
    if (parent.childNodes[i].nodeType != 3) {
      if (getChildrensChildren)
        relevantChildren += getCount(parent.childNodes[i], true);
      relevantChildren++;
    }
  }
  return relevantChildren;
}
</script>
</body>
<!-- <script type="text/javascript" src="<?php echo base_url(); ?>assets/home/js/script.js"></script> -->
</html>
<script type="text/javascript">
    $(".search_icon").click(function(e){
            e.preventDefault();
            var p_id = $(this).data('p_id');
            var html = "";
            //alert(p_id);
            $.ajax({ 
                        type:'POST',
                        url: "<?php echo base_url(); ?>" + "index.php/Product/popup_product/" + p_id,
                        data:{p_id:p_id},
                        success:function(data)
                        {
                            //alert('hii');
                            //alert(data);
                            html+= '<div class="modal-body">'+
                                        '<div class="modal-content">'+
                                            '<div class="icon_close">'+
                                                '<i style="font-size:24px" class="fa">&#xf00d;</i>'+
                                            '</div>'+
                                            '<div class="row slider_popup">'+
                                                '<div class="slider_content col-xl-12" style="margin: 0 auto; padding: 0; width: unset;">'+
                                                    '<section>'+
                                                        '<div class="rt-container">'+
                                                            '<div class="col-rt-12 slider_horizon clearfix" style="margin: 0 28px;">'+
                                                                '<div class="horVerSlider" data-desktop="800" data-tabportrait="600" data-tablandscape="600" data-mobilelarge="375" data-mobilelandscape="500" data-mobileportrait="375">'+
                                                                    '<div class="close"></div>'+
                                                                    '<div class="vertical-wrapper">'+
                                                                        '<div id="vertical-slider">'+
                                                                            '<ul>'+
                                                                                '<li data-image="assets/product/images/1.jpg" class="ui-draggable ui-draggable-handle ui-draggable-disabled">'+
                                                                                    '<img src="<?php echo base_url(); ?>assets/product/images/1.jpg">'+
                                                                                '</li>'+
                                                                            '</ul>'+
                                                                        '</div>'+
                                                                    '</div>'+
                                                                    '<div class="horizon-wrapper ">'+
                                                                        '<div class="horizone-nav">'+
                                                                            '<div class="prev" style="display: none;">'+
                                                                                '<img src="<?php echo base_url(); ?>assets/product/images/leftarrow.svg" />'+
                                                                            '</div>'+
                                                                            '<div class="next" style="display: block;">'+
                                                                                '<img src="<?php echo base_url(); ?>assets/product/images/rightarrow.svg" />'+
                                                                            '</div>'+
                                                                        '</div>'+
                                                                        '<div id="horizon-slider" class="zoomin zoomenable zoomed">'+
                                                                            '<ul style="left: 0px; top: 0px;">'+
                                                                                '<li data-image="assets/product/images/1.jpg" class="ui-draggable ui-draggable-handle ui-draggable-disabled">'+
                                                                                    '<img src="<?php echo base_url(); ?>assets/product/images/1.jpg" class="zoom" data-magnify-src="assets/product/images/1.jpg">'+
                                                                                '</li>'+
                                                                            '</ul>'+
                                                                        '</div>'+
                                                                        '<div class="dots">'+
                                                                            '<div class="dotwrap"></div>'+
                                                                        '</div>'+
                                                                    '</div>'+
                                                                '</div>'+
                                                            '</div>'+
                                                        '</div>'+
                                                    '</section>'+
                                                '</div>'+
                                                '<div class="col-xl-12 col-md-12 col-sm-12 popup_desc">'+
                                                    '<div class="popup_pro_desc">'+
                                                        '<div class="title">'+
                                                            '<h5>1.08 CT Salt and Pepper Kite Shape Natural Loose Diamond For Engagement Ring</h5>'+
                                                        '</div>'+
                                                        '<div class="price">'+
                                                            '<p>$485.00 $373.00</p>'+
                                                        '</div>'+
                                                        '<div class="all_feature">'+
                                                            '<a href="">See all features</a>'+
                                                        '</div>'+
                                                        '<div class="stock_count">'+
                                                            '<p><span>8</span>in stock</p>'+
                                                        '</div>'+
                                                        '<div class="product_cart_btn">'+
                                                            '<button class="btn btn_cart"><a href="<?php echo base_url('index.php/Home/cart'); ?>">+ Add To Cart</a></button>'+
                                                        '</div>'+
                                                    '</div>'+
                                                '</div>'+
                                            '</div>'+
                                        '</div>'+
                                    '</div>';
                        }
                        $(".modal-wrap").html(html); 
                    });	
        $(".modal-popup").addClass("modal-visible");
        });


</script>