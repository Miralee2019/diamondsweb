<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/home/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/home/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/checkout/css/checkout.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/home/css/w3.css">
    
</head>

<body>

    <div class="content_fix" style="padding-top: 81px;"></div>
    <div class="heading">
        <h4>Checkout</h4>
    </div>
    <div class="container">
        <div class="accordion" id="accordionExample">
            <div class="card z-depth-0 bordered">
                <div class="card-header" id="headingTwo">
                    <p>Have a coupon?</p>
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                        data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Click here to enter your code
                    </button>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body clearfix">
                        <div style="height: 30px;">
                            <p>If you have a coupon code, please apply it below.</p>
                        </div>
                        <div class="coupon_code">
                            <input type="text" class="form-control" aria-describedby="couponHelp"
                                placeholder="Coupon Code">
                        </div>
                        <button class="btn btn_code">
                            APPLY COUPON
                        </button>
                    </div>
                </div>
            </div>
            <div class="card z-depth-0 bordered">
                <div class="card-header" id="headingThree">
                    <p>Shipment will be traceable, In Free Shipping you will receive delivery in 13-15 days,while in
                        Fast Delivery Product will be delivered in 4-6 days</p>
                </div>
            </div>
        </div>
        <div class="row checkout_form">
            <div class="col-xl-6 billing_details clearfix">
                <h4 class="h5">Billing Details</h4>
                <form action="" method="post">
                    <div class="sign-up-form">
                        <?php $order_id = uniqid('order_'); ?>
                        <input type="hidden" name="order_id" id="order_id" value="<?php echo $order_id; ?>">
                        <div class="group fname">
                            <label for="fname" class="label">First Name</label> 
                            <input id="fname" name="fname" type="text" class="input" placeholder="Create your Firstname" required>
                            <label style="color: red"><?php echo form_error('fname'); ?></label>
                        </div>

                        <div class="group lname">
                            <label for="lname" class="label">Last Name</label> 
                            <input id="lname" name="lname" type="text" class="input" placeholder="Create your Lastname" required>
                            <label style="color: red"><?php echo form_error('lname'); ?></label>
                        </div>

                        <div class="group email">
                            <label for="email" class="label">Email Address</label> 
                            <input id="email" name="email_id" type="text" class="input" placeholder="Enter your email address" required>
                            <label style="color: red"><?php echo form_error('email_id'); ?></label>
                        </div>

                        <!-- <div class="group">
                                <label for="pass" class="label">Password</label> <input id="pass" type="password" class="input" data-type="password" placeholder="Create your password">
                            </div> -->
                        <div class="group phone">
                            <label for="phone" class="label">Phone No.</label> 
                            <input id="phone" name="phone_no" type="text" class="input" placeholder="Enter your phone number" maxlength="10" minlength="10" required>
                            <label style="color: red"><?php echo form_error('phone_no'); ?></label>
                        </div>
                        <!-- <div class="group country">
                            <label for="country" class="label">Country</label>
                            <select id="country" name="country" class="input" placeholder="Choose Country">
                                            <option>Select country</option>
                                            <?php foreach($Countries as $row){ ?>
                                                <option value="<?php echo $row['id'];?>"><?php echo $row['name'];?></option>
                                            <?php } ?>
                                        </select>
                                        <label style="color: red"><?php echo form_error('country'); ?></label>
                        </div> -->
                        <div class="group country">
                            <label for="country" class="label">Country</label> 
                            <input id="country" name="country" type="text" class="input" placeholder="Enter your Country name" required>
                            <label style="color: red"><?php echo form_error('country'); ?></label>
                        </div>     

                        <div class="group state">
                            <label for="State" class="label">State</label> 
                            <input id="state-name" name="state" type="text" class="input" placeholder="Enter your State name" required>
                            <label style="color: red"><?php echo form_error('state'); ?></label>
                        </div>             
                        <!-- <div class="group state">
                            <label for="State" class="label">State</label>
                            <select id="state-name" name="state" class="input" placeholder="Choose State">
                            </select>
                            <label style="color: red"><?php echo form_error('state'); ?></label>
                        </div>

                        <div class="group city">
                            <label for="City" class="label">City</label>
                            <select id="city-name" name="city" class="input" placeholder="Choose City">
                            </select>
                            <label style="color: red"><?php echo form_error('city'); ?></label>
                        </div> -->

                        <div class="group city">
                            <label for="City" class="label">City</label> 
                            <input id="city-name" name="city" type="text" class="input" placeholder="Enter your City name" required>
                            <label style="color: red"><?php echo form_error('city'); ?></label>
                        </div>    

                        <div class="group address">
                            <label for="address" class="label">Address</label> 
                            <textarea id="address" name="address" type="text" rows="1" class="input" placeholder="Enter your Address" required></textarea>
                            <label style="color: red"><?php echo form_error('address'); ?></label>
                        </div>

                        <div class="group company">
                            <label for="company" class="label">Comapny Name</label> 
                            <input id="company" name="company" type="text" class="input" placeholder="Enter your Company name" required>
                            <label style="color: red"><?php echo form_error('company'); ?></label>
                        </div>
                        <div class="group zip">
                            <label for="zip" class="label">Zip Code</label> 
                            <input id="zip" name="zip" type="text" class="input" placeholder="Enter your Zip code" required>
                            <label style="color: red"><?php echo form_error('zip'); ?></label>
                        </div>
                        <!-- <div class="group">
                                <label for="pass" class="label">Repeat Password</label> <input id="pass" type="password" class="input" data-type="password" placeholder="Repeat your password">
                            </div> -->
                        <div class="group button">
                            <a href=""><input type="submit" name="submit" id="paypal" class="button" value="Payment with PayPal"></a>
                        </div>
                        <div class="hr"></div>
                        <div class="foot"> <label for="tab-1">Already Member?</label> </div>
                    </div>
                </form>
            </div>
            <div class="col-xl-6 your_order">
                <h4 class="h5">Your order</h4>
                <table class="table table-bordered">
                    <th>Product</th>
                    <th>Subtotal</th>
                    <?php //print_r($productvariation); 
                     $total_sum = 0; 
                     foreach($productvariation as $product){ //print_r($product); ?>
                        <tr>
                            <input type="hidden" id="user_id" value="<?php echo $product['user_id']; ?>">
                            <td><?php echo $product['pname']; ?></td>
                            <td>$<?php echo $product['total_price']; ?></td>
                        </tr>
                    <?php $total_sum += $product['total_price'];} ?>
                    <tr>
                        <th>Subtotal</th>
                        <input type="hidden" id="sub_total" value="<?php echo $total_sum; ?>">
                        <td>$<?php echo $total_sum; ?></td>
                    </tr>
                    <!-- <tr>
                        <th>SHIPPING</th>
                        <td>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" id="radio1" name="optradio" value="option1"
                                    checked><p>Fast Shipping (Estimate 6 - 10 days):$40.00</p>
                            </div>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" id="radio2" name="optradio"
                                    value="option2"><p>Standard Shipping ( Estimate 13 - 15 Days:$20.00</p>
                            </div>
                        </td>
                    </tr> -->
                    <tr>
                            <th>Shipping</th>
                            <td>
                            <?php foreach($shipping as $key=>$row){ //print_r($row);?>
                                <div class="form-check">
                                    <input type="hidden" id="shipping_id" value="<?php echo $row['shipping_id']; ?>">
                                    <input type="radio" data-sum="<?php echo $total_sum; ?>" data-rate="<?php echo $row['shipping_rate']; ?>" class="form-check-input" id="shipping" name="optradio[]" value="<?php echo $row['shipping_id']; ?>" checked><?php echo $row['shipping_name']; ?>:<p> $<?php echo $row['shipping_rate']; ?></p>
                                </div>
                                <?php } ?>
                                <p>Shipping to <strong>Gujarat.</strong></p>
                                <a href="">Change address</a>
                            </td>
                        </tr>
                    <tr>
                        <?php $total_sum += $row['shipping_rate']; ?>
                        <th>Total</th>
                        <form method="get">
                        <input type="hidden" name="hidden" id="total_price" value="<?php echo $total_sum; ?>">
                        <input type="hidden" name="order_id" id="order_id" value="<?php echo $order_id; ?>">
                        </form>
                        <td id="subtotal"><?php echo '$'.$total_sum; ?><?php //echo '$'.$total_sum+40; ?></td>
                    </tr>
                </table>
                <div class="payment">
                    <h6 class="h6">PayPal</h6>
                    <div class="pay_img">
                        <img src="<?php echo base_url(); ?>assets/checkout/images/payment.webp">
                    </div>
                    <p class="paypal_info">
                        <a href="https://www.paypal.com/in/webapps/mpp/home">what is PayPal?</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <?php include 'footer.php';?>
    <!-- <div id="footer"></div> -->
   <?php include 'whatsapp.php';?>

    <script src="<?php echo base_url(); ?>assets/home/js/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>js/jQuery/jquery.monte.js"></script>
    <script src="<?php echo base_url(); ?>assets/home/js/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/home/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/checkout/js/checkout.js"></script>
    <script src="<?php echo base_url(); ?>assets/home/js/script.js"></script>
</body>

</html>
<script type="text/javascript">

if(localStorage){
    $( "form" ).submit(function( event ) {
            var order_id = $( this ).serializeArray()[0].value
            var fname = $( this ).serializeArray()[1].value
            var lname = $( this ).serializeArray()[2].value
            var email_id = $( this ).serializeArray()[3].value
            var phone_no = $( this ).serializeArray()[4].value
            var country = $( this ).serializeArray()[5].value
            var state = $( this ).serializeArray()[6].value
            var city = $( this ).serializeArray()[7].value
            var address = $( this ).serializeArray()[8].value
            var company = $( this ).serializeArray()[9].value
            var zip = $( this ).serializeArray()[10].value
            var bill_item = {
                user_id: user_id, 
                order_id: order_id, 
                fname: fname, 
                lname: lname, 
                email_id: email_id,
                phone_no: phone_no, 
                country: country, 
                state: state, 
                city: city, 
                address: address, 
                company: company, 
                zip: zip,
                submit: 'submit'
            }
            localStorage.setItem("bill_data", JSON.stringify(bill_item))

            var checkboxes = document.getElementsByName('optradio[]');
            var vals = "";
            for (var i=0, n=checkboxes.length;i<n;i++) 
            {
                if (checkboxes[i].checked) 
                {
                    vals += checkboxes[i].value;
                }
            }

            var user_id = $("#user_id").val()
            var shipping_id = vals  
            var sub_total = $("#sub_total").val()
            var total = $("#total_price").val()
            var order_item = {
                user_id: user_id, 
                shipping_id: shipping_id, 
                sub_total: sub_total, 
                order_id: order_id,
                total: total
            }

            localStorage.setItem("order_data", JSON.stringify(order_item))

        event.preventDefault();
    })
} else {
    alert('your browser not supported this payment order. please try other browser')
}


//     $(document).ready(function(){
    
    $(".form-check input").click(function(){
       var rate = $(this).attr("data-rate");
       var sum = $(this).attr("data-sum");
       var subtotal = parseInt(rate) + parseInt(sum);
       //alert(total);
       // $.ajax({  
       //          url:"<?php echo site_url('Billing/order'); ?>",  
       //          method:"POST",  
       //          data:{subtotal:subtotal},  
       //          success:function(data){
       //          }  
       //     });  
       document.getElementById("subtotal").innerHTML = '$'+subtotal;
       document.getElementById('total_price').value = subtotal;
    });

//     $("#paypal").click(function(){
//         var user_id = $("#user_id").val();
//         var shipping_id = $("#shipping_id").val();
//         var sub_total = $("#sub_total").val();
//         var order_id = $('#order_id').val()

//         var dataa: {
//                     'user_id':user_id,
//                     'shipping_id':shipping_id,
//                     'sub_total':sub_total, 
//                     'order_id': order_id
//                 }


// localStorage.setItem('name', 'das');
//             alert(localStorage.getItem('name'))
//          // localStorage.removeItem('name');/

//         // alert(order_id);
//         $.ajax({  
//                 url:"<?php echo site_url('Billing/orderdata_insert'); ?>",  
//                 method:"POST",  
//                 data: {
//                     user_id:user_id,
//                     shipping_id:shipping_id,
//                     sub_total:sub_total, 
//                     order_id: order_id
//                 },  
//                 success:function(data){  
//                      alert('supported')
            
            
//                 }  
//            }); 
//     });
// });
</script>

<!-- <script type="text/javascript">
// 		$(document).ready(function(e)
// 		{
// 			$('#country').on('change',function()
// 			{ 
// 				var countryID=$(this).val();		
// 				if(countryID)
// 				{
// 					$.ajax({type:'POST',
//                                         url:'<?php  echo site_url('Home/getstates')?>',
//                                         data:'id='+countryID,
//                                         success:function(html)
//                                         {
//                                                 $('#state-name').html(html);
//                                         }
// 					});	
// 				}
//             });
            
//             $('#state-name').on('change',function()
// 			{ 
// 				var stateID=$(this).val();		
// 				if(stateID)
// 				{
// 					$.ajax({type:'POST',
//                                         url:'<?php  echo site_url('Home/getcities')?>',
//                                         data:'id='+stateID,
//                                         success:function(html)
//                                         {
//                                                 $('#city-name').html(html);
//                                         }
// 					});	
// 				}
// 			});
// 		});
// 	</script> -->