<?php
  $con = mysqli_connect("localhost","diamonds_web","diamonds_web","diamonds_web");

  $response = array();
  if($con){
  date_default_timezone_set("Asia/Kolkata");
  $datetimes = date('Y-m-d H:i:s');
  $query = "DELETE FROM sale_product WHERE endtime <= '$datetimes'";

  	$result = mysqli_query($con,$query);
  	if($result == 1)
	{
		$data = "Data Deleted";
	}else
	{
		$data = "Data not Deleted";
	}
	echo json_encode($data);	 
  }
  else{
  	echo "Database connection failed";
  }
 ?>