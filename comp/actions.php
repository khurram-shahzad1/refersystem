<?php
 require 'db.php';

if (isset($_POST['signUp'])) {
    $name=$_POST['name'];
    $user_name=$_POST['user_name'];
    $email=$_POST['email'];
    $mobile_no=$_POST['mobile_no'];
    $password=$_POST['password'];
    $refer_code=$_POST['refer_code'];
    

    if ($name==""|| $user_name==""|| $email==""|| $mobile_no==""|| $password=="") {
        echo 0;
    }

    else {
        $sql="INSERT into `user` (name,user_name,email,mobile_no,password,refer_code) VALUES ('$name','$user_name' , '$email', '$mobile_no' , '$password','$refer_code')";

        $query=mysqli_query($GLOBALS['conn'], $sql);

        if ($query) {
            echo 1;
        }

        else {
            echo 0;
        }
    }
}

if (isset($_POST['signIn'])) {
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];
    if ($user_name == "" || $password == "") {
        echo "0";
    } else {
            $sql = "SELECT * FROM `user` WHERE `user_name` = '$user_name' AND `password` = '$password'";

            $query = mysqli_query($GLOBALS['conn'], $sql);

            if (mysqli_num_rows($query) > 0) {

                $data = mysqli_fetch_array($query);

                setcookie("user_id", $data['id'], time() + (86400 * 3), '/');

                echo $data['id'];

            } else {
                echo "0";
            }
       
        }
    }

    if (isset($_GET['signout'])) {
    
        setcookie("user_id", "", time() - 3600, '/');
    
        header("Location: ../login.php");
    }

    if (isset($_POST['UpdateForm'])) {
        $name=$_POST['name'];
        $user_name=$_POST['user_name'];
        $email=$_POST['email'];
        $mobile_no=$_POST['mobile_no'];
        $password=$_POST['password'];
        $userid= $_POST['UpdateForm'];
        if ($name==""|| $user_name==""|| $email==""|| $mobile_no==""|| $password==""  ){
            echo "0";
        }
        else {
            $sql = "UPDATE user SET  name = '$name', user_name = '$user_name', email = '$email', mobile_no ='$mobile_no', password = '$password' WHERE id = '$userid'";
    
            if (mysqli_query($GLOBALS['conn'], $sql)) { 
                echo "1";
            }
            else {
                echo "0";
            }
        }
    }

    if (isset($_POST['withdraw'])) {
        $withdraw_amount=$_POST['withdraw_amount'];
        $user_id=$_POST['userid'];
        $payment_method=$_POST['payment_method'];

        
    
        if ($withdraw_amount==""|| $user_id==""|| $payment_method=="") {
            echo 0;
        }
    
        else {
            $sql="INSERT into `withdraw` (user_id,withdraw_amount,payment_method) VALUES ('$user_id','$withdraw_amount' , '$payment_method')";
    
            $query=mysqli_query($GLOBALS['conn'], $sql);
    
            if ($query) {
                echo 1;
            }
    
            else {
                echo 0;
            }
        }
    }
 
?>