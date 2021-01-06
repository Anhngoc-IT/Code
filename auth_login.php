<?php 
include "connect_db.php";
if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $result = mysqli_query($con, "select * from account where username='$username' AND password='$password' ");
    $check_login = mysqli_num_rows($result);
    $row_login = mysqli_fetch_array($result);
        if($check_login == 0){
            echo "<script>alert('Password or username is incorrect, please try again!')</script>";
             echo "<script>window.open('authen_form.php','_self')</script>";
        exit();
        }  
    if($check_login > 0){ 
    echo "<script>alert('You have logged in successfully !')</script>";
    echo "<script>window.open('index.php','_self')</script>";
    }
}
?>