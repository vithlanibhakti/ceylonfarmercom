<?php 
session_start();
include('config.php');
if(isset($_POST['submit'])) 
 {
        $UserName =mysqli_real_escape_string($con, $_POST['UserName']);
        $Password = mysqli_real_escape_string($con,$_POST['Password']);
	//	ECHO $phn,$Password;
	$fetch="SELECT * FROM users WHERE email='$UserName' AND Password='$Password' ";
	 $result = mysqli_query($con,$fetch);
	$count=mysqli_num_rows($result);
      echo $count;
	 if ($count != "")
	 {
	 $_SESSION['UserName']=$UserName;
   header("Location: home.php");
	 }
	 else{
	 header("Location: login.php");}
    	}
    ?>