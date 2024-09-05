<?php
//DATABASE CONNECTION 
$con=mysqli_connect('localhost','root','','eco solutions');

if(!$con)
{
    echo "DATABASE NOT CONNECTED";
}
if(!empty($_POST))
{
	// SET DATA IN VARIABLE 
	$name 		= $_POST['name'];
	$email 		= $_POST['email'];
	$cleaning 	= $_POST['cleaning'];
	$sqft 	    = $_POST['sqft'];
	$price      = $_POST['price'];
	// QUERY TO SAVE DATA 
	$query 		= "INSERT INTO feedback (name, email, cleaning, sqft, price)
			VALUES ('$name', '$email', '$cleaning', '$sqft', '$price')";

	if(mysqli_query($con,$query))
	{
		$result['status'] = 1;
		$result['msg'] = 'Your order has been confirmed & send successfully.';
	}
	else
	{
		$result['status'] = 0;
		$result['msg'] = 'Your request could not send.';
	}

	echo json_encode($result);

}

 

?>