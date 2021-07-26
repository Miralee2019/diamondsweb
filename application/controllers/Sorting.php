<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Sorting extends CI_Controller {

    function __construct() {
        parent::__construct();

        $this->load->model('Sorting_model');
        $this->load->library('form_validation');
        $this->load->library('session');
    }

    public function lowtohigh()
    {   //echo 'hii'; exit;
        $connect = mysqli_connect("localhost", "diamonds_web", "diamonds_web", "diamonds_web");
        //$connect = mysqli_connect("localhost", "root", "", "diamonds_web");
        if(isset($_POST["sort"]))
        {
            $output = '';
            $query = "SELECT * FROM product WHERE c_id = ".$_POST['c_id']." ORDER BY price asc";
            //print_r($query); exit;
            $result = mysqli_query($connect, $query);
            if(mysqli_num_rows($result) > 0)  
            {  
                 while($row = mysqli_fetch_array($result))  
                 {  
                     //print_r($row);  exit;
                     $img = explode(',',$row['image']);
                     $output .='<div class="col-xl-3 col-md-6 col-sm-12 product_onsale">
                     <div class="onsale_img shadow mb-5 bg-white rounded mdc-card mdc-card--outlined">
                         <a href="../../Product/product/'.$row["p_id"].'">
                            <img src="../../../assets/images/'.$img["0"].'">
                             <img class="onsale_content_overlay" src="../../../assets/images/'.$img["1"].'">
                             <div class="pro_icon_content">
                                 <div class="onsale_content_overlay">
                                     <a>
                                         <i class="fa fa-heart-o" style="font-size:24px;"></i>
                                     </a>
                                 </div>
                             </div>
                             <div class="product_content text-left">
                                 <div class="pro_grid">
                                     <div class="pro_info">
                                         <a>'.$row["pname"].'</a>
                                     </div>
                                     <div class="price_cart clearfix">
                                         <div class="price_box">
                                             <p class="product-card" data-price="514.00">$'.$row["price"].'</p>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </a>
                     </div>
                 </div>';
                 }  
            }  
            else  
            {  
                 $output = "No Product Found";  
            }  
            echo $output;  
        }
    }
    
    public function hightolow()
    {
        // $c_id = $_POST["c_id"];
        $connect = mysqli_connect("localhost", "diamonds_web", "diamonds_web", "diamonds_web");
        //$connect = mysqli_connect("localhost", "root", "", "diamonds_web");
        if(isset($_POST["sort"]))
        { //echo 'hii';
            $output = ''; 
            $query = "SELECT * FROM product WHERE c_id = ".$_POST['c_id']." ORDER BY price desc";
            $result = mysqli_query($connect, $query);  
             if(mysqli_num_rows($result) > 0)  
             {  
                  while($row = mysqli_fetch_array($result))  
                  {  
                      //print_r($row);  
                      $img = explode(',',$row['image']);
                      $output .='<div class="col-xl-3 col-md-6 col-sm-12 product_onsale">
                      <div class="onsale_img shadow mb-5 bg-white rounded mdc-card mdc-card--outlined">
                      <a href="../../Product/product/'.$row["p_id"].'">
                      <img src="../../../assets/images/'.$img["0"].'">
                       <img class="onsale_content_overlay" src="../../../assets/images/'.$img["1"].'">
                              <div class="pro_icon_content">
                                  <div class="onsale_content_overlay">
                                      <a>
                                          <i class="fa fa-heart-o" style="font-size:24px;"></i>
                                      </a>
                                  </div>
                              </div>
                              <div class="product_content text-left">
                                  <div class="pro_grid">
                                      <div class="pro_info">
                                          <a>'.$row["pname"].'</a>
                                      </div>
                                      <div class="price_cart clearfix">
                                          <div class="price_box">
                                              <p class="product-card" data-price="514.00">$'.$row["price"].'</p>
                                          </div>
                                          
                                      </div>
                                  </div>
                              </div>
                          </a>
                      </div>
                  </div>';
                  }  
             }  
             else  
             {  
                  $output = "No Product Found";  
             }  
            echo $output;  
        }
    }

    public function lowtohigh_subcategory()
    {   //echo 'hii'; exit;
        $connect = mysqli_connect("localhost", "diamonds_web", "diamonds_web", "diamonds_web");
        //$connect = mysqli_connect("localhost", "root", "", "diamonds_web");
        if(isset($_POST["sort"]))
        {
            $output = '';
            $query = "SELECT * FROM product WHERE subc_id = ".$_POST['c_id']." ORDER BY price asc";
            $result = mysqli_query($connect, $query);
            if(mysqli_num_rows($result) > 0)  
            {  
                 while($row = mysqli_fetch_array($result))  
                 {  
                     //print_r($row);  
                     $img = explode(',',$row['image']);
                     $output .='<div class="col-xl-3 col-md-6 col-sm-12 product_onsale">
                     <div class="onsale_img shadow mb-5 bg-white rounded mdc-card mdc-card--outlined">
                         <a href="../../Product/product/'.$row["p_id"].'">
                            <img src="../../../assets/images/'.$img["0"].'">
                             <img class="onsale_content_overlay" src="../../../assets/images/'.$img["1"].'">
                             <div class="pro_icon_content">
                                 <div class="onsale_content_overlay">
                                     <a>
                                         <i class="fa fa-heart-o" style="font-size:24px;"></i>
                                     </a>
                                 </div>
                             </div>
                             <div class="product_content text-left">
                                 <div class="pro_grid">
                                     <div class="pro_info">
                                         <a>'.$row["pname"].'</a>
                                     </div>
                                     <div class="price_cart clearfix">
                                         <div class="price_box">
                                             <p class="product-card" data-price="514.00">$'.$row["price"].'</p>
                                         </div>
                                         
                                     </div>
                                 </div>
                             </div>
                         </a>
                     </div>
                 </div>';
                 }  
            }  
            else  
            {  
                 $output = "No Product Found";  
            }  
            echo $output;  
        }
    }
    
    public function hightolow_subcategory()
    {
        // $c_id = $_POST["c_id"];
        $connect = mysqli_connect("localhost", "diamonds_web", "diamonds_web", "diamonds_web");
        //$connect = mysqli_connect("localhost", "root", "", "diamonds_web");
        if(isset($_POST["sort"]))
        { //echo 'hii';
            $output = ''; 
            $query = "SELECT * FROM product WHERE subc_id = ".$_POST['c_id']." ORDER BY price desc";
            $result = mysqli_query($connect, $query);  
             if(mysqli_num_rows($result) > 0)  
             {  
                  while($row = mysqli_fetch_array($result))  
                  {  
                      //print_r($row);  
                      $img = explode(',',$row['image']);
                      $output .='<div class="col-xl-3 col-md-6 col-sm-12 product_onsale">
                      <div class="onsale_img shadow mb-5 bg-white rounded mdc-card mdc-card--outlined">
                      <a href="../../Product/product/'.$row["p_id"].'">
                      <img src="../../../assets/images/'.$img["0"].'">
                       <img class="onsale_content_overlay" src="../../../assets/images/'.$img["1"].'">
                              <div class="pro_icon_content">
                                  <div class="onsale_content_overlay">
                                      <a>
                                          <i class="fa fa-heart-o" style="font-size:24px;"></i>
                                      </a>
                                  </div>
                              </div>
                              <div class="product_content text-left">
                                  <div class="pro_grid">
                                      <div class="pro_info">
                                          <a>'.$row["pname"].'</a>
                                      </div>
                                      <div class="price_cart clearfix">
                                          <div class="price_box">
                                              <p class="product-card" data-price="514.00">$'.$row["price"].'</p>
                                          </div>
                                          
                                      </div>
                                  </div>
                              </div>
                          </a>
                      </div>
                  </div>';
                  }  
             }  
             else  
             {  
                  $output = "No Product Found";  
             }  
            echo $output;  
        }
    }

    public function scategories_filter()
    {
        $connect = mysqli_connect("localhost", "diamonds_web", "diamonds_web", "diamonds_web");  
        //$connect = mysqli_connect("localhost", "root", "", "diamonds_web");
        if(isset($_POST["price"]))  
        {  
            $output = '';  
            $query = "SELECT * FROM product WHERE subc_id = ".$_POST['subc_id']." AND price <= ".$_POST['price']." ORDER BY price desc";  
            //print_r($query);
             $result = mysqli_query($connect, $query); //print_r($result); //exit; 
             if(mysqli_num_rows($result) > 0)  
             {  
                  while($row = mysqli_fetch_array($result))  
                  {  //echo 'hi';
                    $img = explode(',',$row['image']);
                    //print_r($img);
                    $output .='<div class="col-xl-3 col-md-6 col-sm-12 product_onsale">
                    <div class="onsale_img shadow mb-5 bg-white rounded mdc-card mdc-card--outlined">
                    <a href="../../Product/product/'.$row["p_id"].'">
                    <img src="../../../assets/images/'.$img["0"].'">
                     <img class="onsale_content_overlay" src="../../../assets/images/'.$img["1"].'">
                            <div class="pro_icon_content">
                                <div class="onsale_content_overlay">
                                    <a>
                                        <i class="fa fa-heart-o" style="font-size:24px;"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="product_content text-left">
                                <div class="pro_grid">
                                    <div class="pro_info">
                                        <a>'.$row["pname"].'</a>
                                    </div>
                                    <div class="price_cart clearfix">
                                        <div class="price_box">
                                            <p class="product-card" data-price="514.00">$'.$row["price"].'</p>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>';
                  }  
             }  
             else  
             {  
                  $output = "No Product Found";  
             }  
            echo $output;  
        }  
    }

    public function categories_filter()
    {
        $connect = mysqli_connect("localhost", "diamonds_web", "diamonds_web", "diamonds_web");  
        //$connect = mysqli_connect("localhost", "root", "", "diamonds_web");
        if(isset($_POST["price"]))  
        {  
            $output = '';  
            $query = "SELECT * FROM product WHERE c_id = ".$_POST['c_id']." AND price <= ".$_POST['price']." ORDER BY price desc";  
            //print_r($query);
             $result = mysqli_query($connect, $query);  
             if(mysqli_num_rows($result) > 0)  
             {  
                  while($row = mysqli_fetch_array($result))  
                  {  //echo 'hi';
                    $img = explode(',',$row['image']);
                    //print_r($img);
                    $output .='<div class="col-xl-3 col-md-6 col-sm-12 product_onsale">
                    <div class="onsale_img shadow mb-5 bg-white rounded mdc-card mdc-card--outlined">
                    <a href="../../Product/product/'.$row["p_id"].'">
                    <img src="../../../assets/images/'.$img["0"].'">
                     <img class="onsale_content_overlay" src="../../../assets/images/'.$img["1"].'">
                            <div class="pro_icon_content">
                                <div class="onsale_content_overlay">
                                    <a>
                                        <i class="fa fa-heart-o" style="font-size:24px;"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="product_content text-left">
                                <div class="pro_grid">
                                    <div class="pro_info">
                                        <a>'.$row["pname"].'</a>
                                    </div>
                                    <div class="price_cart clearfix">
                                        <div class="price_box">
                                            <p class="product-card" data-price="514.00">$'.$row["price"].'</p>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>'; 
                  }  
             }  
             else  
             {  
                  $output = "No Product Found";  
             }  
            echo $output;  
        }  
    }

} 



