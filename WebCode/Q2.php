<?php
 
$con= mysqli_connect("localhost", "root", "", "Quote");
if (mysqli_connect_errno()) {
 printf("Connect failed: %s\n", mysqli_connect_error());
 exit();
}

 

//set validation error flag as false
$error = false;

//check if form is submitted
if (isset($_POST['signup'])) {
	$name = mysqli_real_escape_string($con, $_POST['name']);
	$email = mysqli_real_escape_string($con, $_POST['email']);
	$start_date = mysqli_real_escape_string($con, $_POST['date1']);
	$end_date = mysqli_real_escape_string($con, $_POST['date2']);
	$event_time = mysqli_real_escape_string($con, $_POST['time']);
	$number_of_guests = mysqli_real_escape_string($con, $_POST['number_of_guests']);
	$additional_details = mysqli_real_escape_string($con, $_POST['additional_details']);
	$physical_address = mysqli_real_escape_string($con, $_POST['physical_address']);
	$city = mysqli_real_escape_string($con, $_POST['city']);
	$region = mysqli_real_escape_string($con, $_POST['region']);

	//name can contain only alpha characters and space
	 
	 
	 
	if (!$error) {
		 
		$sql = "INSERT INTO quoteRequest (name,email,date1,date2,event_time,number_of_guests,additional_details,physical_address,locality,region) VALUES
		 ('".$name."', '".$email."', '".$start_date."', '".$end_date."','".$event_time."', '".$number_of_guests."' ,'".$additional_details."','".$physical_address."','".$city."','".$region."')";
                
             if($sql)
                {
                    Echo "Thank you for requesting a quotation. Your quotation will be forwarded to your email.";
                }
                else{
Echo "There is some problem in inserting record";
}
	    
	}
}
?>