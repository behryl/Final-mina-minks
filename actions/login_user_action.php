<?php
// session_start();
// include('includes/dbconnection.php');

// if ($_SERVER['REQUEST_METHOD'] == "POST") {
//     $email = $_POST['emailcont'];  
//     $password = $_POST['password'];  

//     $query = "SELECT * FROM tbluser WHERE Email='$email' AND Password='$password'";
//     $result = mysqli_query($con, $query);

//     if ($result && mysqli_num_rows($result) > 0) {  
//         $row = mysqli_fetch_assoc($result);
//         $_SESSION['uid'] = $row['ID'];
//         $_SESSION['fname'] = $row['FirstName'];
//         header("Location: ../admin/sales-reports.php");  
//         exit();  
//     } else {
//         header("Location: ../login.php?msg=Invalid email/contact number or password"); // Removed unnecessary single quotes around the message
//         exit();  
//     }
// }

ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
//error_reporting(0);
include('../includes/dbconnection.php');
//error_reporting(0);

if(isset($_POST['login']))
  {
    $emailcon=$_POST['emailcont'];
    $password=md5($_POST['password']);
    $query=mysqli_query($con,"select ID from tbluser where  (Email='$emailcon' || MobileNumber='$emailcon') && Password='$password' ");
    $ret=mysqli_fetch_array($query);
    // if($ret>0){
        if($ret==0){

      $_SESSION['bpmsuid']=$ret['ID'];
     header('location:s/index.php');
    }
    else{
    echo "<script>alert('Invalid Details.');</script>";
    }
  }
?>
