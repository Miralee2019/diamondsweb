<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/home/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/categories/css/categoriesstyle.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/home/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/home/css/w3.css">
       <style>
           /* .range_slider h5{
               margin-bottom: 0;
           }
           .range_slider input{
            width: 100%;
            margin-bottom: 0; 
           }
           .range_slider span{
            color: grey;
            font-size: 14px;
           } */
           .filter{
            float: right;
           }
       </style>
    </head>
    <body>
        
   

    <!-- ===========start sidebar content=============== -->
        <!-- <div class="cont"> -->
            <div class="content_fix" style="padding-top: 81px;"></div>
            <?php if($category != null){ ?>
            <div class="container">
                <div class="category_section">
                    <?php foreach($category as $row){ //print_r($row); ?>
                        <input type="hidden" id="c_id" value="<?php echo $row['c_id'];?>">
                        <!-- <div class="category_title"> 
                                <h2><?php echo $row['subcategories_name']; ?></h2>
                        </div> -->
                    <?php } ?> 
                    <div class="row">
                        <div class="col-lg-1"></div>
                        <!-- <div class="col-xl-3 col-md-12 col-sm-12 sidebar">
                            <div class="range_slider">
                                <h5>Filter by price</h5>
                                <input type="range" min="500" max="55000" step="1000" value="500" id="min_price" name="min_price" />  
                                <span id="price_range"></span> 
                            </div>
                            <?php foreach($category as $data){ $img = explode(',',$data['image']); ?>
                            <div class="filter_data" id="product_loading">
                                <div class="toprated_products clearfix">
                                    <div class="pro_img">
                                        <img src="<?php echo base_url('assets/images/'.$img['1']); ?>">
                                    </div>
                                    <div class="pro_desc">
                                        <div class="pro_title">
                                            <a href="<?php //if($this->session->userdata('user_id')) {
                                                                echo base_url('index.php/Product/product/'.$data['p_id']);
                                                            // } else {
                                                                //echo base_url('index.php/Home/login');
                                                            // } ?>"><?php echo $data['pname']; ?></a>
                                        </div>
                                        <div class="pro_price">
                                            <p>$<?php echo $data['price']; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div> -->
                        <!-- =============end sidebar content============== -->
                        <div class="col-xl-10 col-md-12 col-sm-12" style="flex: 0 0 100%; ">
                            <div class="row top_content">
                                <form class="col-lg-7" method="post" action="<?php //echo base_url('index.php/Sorting/sorting'); ?>">
                                    <select class="form-control" name="price-sorting" id="price-sorting">
                                        <option value="l2h">Low - High Price</option>
                                        <option value="h2l">High - Low Price</option>
                                    </select>
                                </form>
                                <div class="col-lg-5 range_slider">
                                    <div class="visible_filter">
                                        <div class="filter">
                                            <img src="<?php echo base_url(); ?>assets/categories/images/filter1.png" style="width: 24px;">
                                        </div>
                                        <div class="show_filter">
                                            <h5>Filter by price</h5>
                                            <input type="range" min="100" max="55000" step="1000" value="500" id="min_price" name="min_price" />  
                                            <span id="price_range"></span> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="onsale_products text-center clearfix">
                                <div clas="row onsale_collection clearfix" id="sorting" style="position: relative;">
                                <?php //foreach($category as $row){ //print_r($row); ?>
                                <?php foreach($category as $data){ //print_r($data);
                                    $img = explode(',',$data['image']); ?>
                                    <!-- <?php //} ?> -->
                                    <!--<input type="hidden" id="c_id" value="<?php echo $data['c_id'];?>">-->
                                    <div class="col-xl-3 col-md-4 col-sm-12 product_onsale">
                                        <div class="onsale_img shadow mb-5 bg-white rounded mdc-card mdc-card--outlined">
                                            <a href="<?php //if($this->session->userdata('user_id')) {
                                                                echo base_url('index.php/Product/product/'.$data['p_id']);
                                                                //} else {
                                                                // echo base_url('index.php/Home/login');
                                                            //  } ?>">
                                                <img src="<?php echo base_url('assets/images/'.$img['1']); ?>">
                                                <img class="onsale_content_overlay" src="<?php echo base_url('assets/images/'.$img['0']); ?>">
                                                <div class="pro_icon_content">
                                                    <div class="onsale_content_overlay">
                                                        <!-- <i class="fa fa-search" style="font-size:24px"></i> -->
                                                        <a href="<?php echo base_url('index.php/Whishlist/add_whishlist/'.$data['p_id']); ?>" class="whishlist">
                                                            <i class="fa fa-heart-o" style="font-size:24px;"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product_content text-left">
                                                    <div class="pro_grid">
                                                        <div class="pro_info">
                                                            <a href="<?php //if($this->session->userdata('user_id')) {
                                                                echo base_url('index.php/Product/product/'.$data['p_id']);
                                                            // } else {
                                                                // echo base_url('index.php/Home/login');
                                                            // } ?>"><?php echo $data['pname']; ?></a>
                                                        </div>
                                                        <div class="price_cart clearfix">
                                                            <div class="price_box">
                                                                <p class="product-card" data-price="514.00">$<?php echo $data['price']; ?></p>
                                                            </div>
                                                            <!-- <div class="btn_info">
                                                                <a href="<?php //if($this->session->userdata('user_id')) {
                                                                    echo base_url('index.php/Product/product/'.$data['p_id']);
                                                                    //} else {
                                                                    // echo base_url('index.php/Home/login');
                                                                //  } ?>"><i style="font-size:36px" class="fa">&#xf07a;</i>
                                                                </a>
                                                            </div> -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                <?php }  ?>
                                </div>
                            </div>
                            <!--<div class="pagination">-->
                            <!--    <a href="#">&laquo;</a>-->
                            <!--    <a href="#">1</a>-->
                            <!--    <a href="#" class="active">2</a>-->
                            <!--    <a href="#">3</a>-->
                            <!--    <a href="#">4</a>-->
                            <!--    <a href="#">&raquo;</a>-->
                            <!--</div>       -->
                        </div>
                        <div class="col-lg-1"></div>
                    </div> 
                </div>
            </div>
            <?php } else{?>
                <h2 style="padding : 100px 0px;"><center>Category Empty...</center></h2>
            <?php } ?>            
        <!-- </div> -->
          
        <?php include 'footer.php';?>
    
        <?php include 'whatsapp.php';?>

        <script src="<?php echo base_url(); ?>assets/home/js/jquery.min.js"></script>
        <script src="js/jQuery/jquery.monte.js"></script>
        <script src="<?php echo base_url(); ?>assets/home/js/popper.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/home/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/home/js/jquery-ui.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/categories/js/categories.js"></script>
        <script src="<?php echo base_url(); ?>assets/home/js/script.js"></script>
    </body>
</html>

<script type="text/javascript">
$(document).ready(function(e){ 
    $(".filter").click(function(){
        // window.scroll(".show_filter").removeClass("active");
        $(".show_filter").toggleClass("active");
    });
    $(window).scroll(function(){
       $(".show_filter").removeClass("active");
    });
        $('#min_price').change(function(){  
            var price = $(this).val();  
            var c_id = $('#c_id').val();
            //alert(price);
            $("#price_range").text("Product under Price Rs. :" + price);  
            $.ajax({  
                    url:"<?php echo site_url('Sorting/categories_filter'); ?>",  
                    method:"POST",  
                    data:{price:price,c_id:c_id},  
                    success:function(data){  
                        //alert(data);
                        //document.getElementById("product_loading").innerHTML = data;
                        $("#sorting").fadeIn(500).html(data);  
                    }  
            });  
        });  

        $('#price-sorting').on('change',function()
        {
            var sort =$(this).val();
            var c_id = $('#c_id').val();
            //alert(c_id);
            if(sort == 'l2h')
            { //alert('yes');
                $.ajax({
                    url:"<?php echo site_url('Sorting/lowtohigh'); ?>",  
                    method:"POST",  
                    data:{c_id:c_id,sort:sort},  
                    success:function(data){  
                        //alert(data);
                        //document.getElementById("product_loading").innerHTML = data;
                        $("#sorting").fadeIn(500).html(data);  
                    }  
                });	
            }else{ //alert('no');
                $.ajax({
                    url:"<?php echo site_url('Sorting/hightolow'); ?>",  
                    method:"POST",  
                    data:{c_id:c_id,sort:sort},  
                    success:function(data){  
                        //alert(data);
                        //document.getElementById("product_loading").innerHTML = data;
                        $("#sorting").fadeIn(500).html(data);  
                    }  
                });	
            }
        });
});
</script>