<?php if(!empty($payment)){ ?>
    <h1 class="success">Your Payment has been Successful!</h1>
    <h4>Payment Information</h4>
    <p><b>Reference Number:</b> #<?php echo $payment['id']; ?></p>
    <p><b>Transaction ID:</b> <?php echo $payment['txn_id']; ?></p>
    <p><b>Paid Amount:</b> <?php echo $payment['payment_gross'].' '.$payment['currency_code']; ?></p>
    <p><b>Payment Status:</b> <?php echo $payment['status']; ?></p>

    <?php $status = true; if($status == true){ okalert() } ?>
	
    <h4>Payer Information</h4>
    <p><b>Name:</b> <?php echo $payment['payer_name']; ?></p>
    <p><b>Email:</b> <?php echo $payment['payer_email']; ?></p>
	
    <h4>Product Information</h4>
    <p><b>Name:</b> <?php echo $product['name']; ?></p>
    <p><b>Price:</b> <?php echo $product['price'].' '.$product['currency']; ?></p>
<?php }else{ ?>
    <h1 class="error">Transaction has been failed!</h1>
<?php } ?>
<html>
    <input type="submit" value="View bill" name="submit">
</html>

<script type="text/javascript">
        function okalert(){

        var orderData = JSON.parse(localStorage.getItem("order_data"));
        $.ajax({
            url:"<?php echo site_url('Billing/orderdata_insert'); ?>",
            method:"POST",
            data: orderData,
            success:function(data)
            {
                localStorage.removeItem('order_data');
            }
        })

        var billData = JSON.parse(localStorage.getItem("bill_data"));
        $.ajax({
            url:"<?php echo site_url('Billing/checkout/'); ?>"+billData.user_id,
            method:"POST",
            data: billData,
            success:function(data)
            {
                localStorage.removeItem('bill_data');
            }
        })

        $.ajax({
            url:"<?php echo site_url('Home/insertOrder_Product/'); ?>"+billData.order_id,
            method:"POST",
            data: '',
            success:function(data){
            }
        })
    }
</script>