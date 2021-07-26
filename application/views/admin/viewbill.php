<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css');?>">
        <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>

	<title>Maruri computer care</title>
</head>
<body>

    <?php 

    // echo '<pre>';
    // print_r($bill);
    // echo '</pre>';

    ?>

<div style="padding-top: 80px;" class="container">
    <center>
        <table border='1' id="table" style = "width:100%">
            <tr>
                <td colspan="6"><center><h2>MARUTI GEMS</h2></center></td>
            </tr>
            <tr>
                <td colspan="3"><b>Name : </b><?php echo $bill[0]['f_name']; ?> <?php echo  $bill[0]['l_name']; ?></td>
                <td colspan="3"><b>Date :</b><?php $dates = date_create($bill[0]['date']); echo date_format($dates,"Y/m/d ") ?></td>
            </tr>
            <tr>
                <td><b>S.No</b></td>
                <td colspan="1"><b>Product</b></td>
                <td><b>Color</b></td>
                <td><b>Rate</b></td>
                <td><b>Qut.</b></td>
                <td><b>Total</b></td>
            </tr>
            <?php $total_sum=0; foreach($bill as $key=>$row) {

                if($row['diamond_value'] != ''){
                    $single_product_price = $row['diamond_value'];
                    $total_price = $row['quentity'] * $row['diamond_value'];
                } else {
                    $single_product_price = $row['price'];
                    $total_price = $row['quentity'] * $row['price'];
                }
                ?>
                
            <tr>
                
                <td><?php echo $key+1; ?></td>
                
                <td><?php echo $row['pname']; ?></td>
                <td><?php echo $row['color']; ?></td>
                <td><?php echo $single_product_price; ?></td>
                <td><?php echo $row['quentity']; ?></td>
                <td><?php echo $total_price; ?></td> 
            </tr>
            
            <?php } ?>

            <tr>
                <td colspan="5">
                   <b>Delevery : <?php echo  $bill[0]['shipping_name']; ?></b>  
                </td>
                <td colspan="1">
                    <?php echo  $bill[0]['shipping_rate']; ?>
                </td>
            </tr>
            <tr>
                <td colspan="6"><b>Address : </b><?php echo $bill[0]['address']; ?>, <?php echo  $bill[0]['city']; ?> <?php echo  $bill[0]['zip']; ?>, <?php echo  $bill[0]['state']; ?>, <?php echo  $bill[0]['country']; ?></td>
            </tr>
            <tr>
                <td colspan="5"></td>
                <td><center><h3><?php echo $bill[0]['total'];?></h3></center></td>
            </tr>
        </table>
        <br>
        <button class="button" id="sess"><a href="<?php echo base_url('index.php/admin/Admin/pdffile'); ?>/<?php echo $bill[0]['order_id']?>">Generate PDF</a></button>
    </center>
</div>
</body>
</html>

