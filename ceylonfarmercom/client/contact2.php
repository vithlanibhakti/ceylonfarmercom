<?php 
session_start();
include('config.php');
if(isset($_GET['submit'])) 
 {
     echo "hh";
        $firstName = $_GET['firstName'];
        $lastName = mysqli_real_escape_string($con,$_GET['lastName']);
        $address = $_POST['address'];
        $mobileNumber = mysqli_real_escape_string($con,$_POST['mobileNumber']);
		echo $firstName,$lastName,$mobileNumber,$address;
// 	$fetch="SELECT * FROM users WHERE email='$UserName' AND Password='$Password' ";
// 	 $result = mysqli_query($con,$fetch);
// 	$count=mysqli_num_rows($result);
//       echo $count;
// 	 if ($count != "")
// 	 {
// 	 $_SESSION['UserName']=$UserName;
//    header("Location: home.php");
// 	 }
// 	 else{
// 	 header("Location: login.php");}
    	}
    ?>