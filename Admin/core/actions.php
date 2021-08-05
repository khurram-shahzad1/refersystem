<?php
include "../../comp/db.php";



if(isset($_POST['signInForm'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    if($email == "" || $password == ""){
        echo "0";
    }
    else {
    $sql = "SELECT * FROM `admin` WHERE email = '$email' AND `password` = '$password' ";
    $query = mysqli_query($GLOBALS['conn'], $sql);
    
    if(mysqli_num_rows($query) > 0){
        $data = mysqli_fetch_array($query);
        echo 1;
        setcookie('admin', '1', time() + (86400 * 1), '/');
    }
    else{
        echo "0";
    }
    }
}

if(isset($_POST['activate'])){
    $uid = $_POST['activate'];
    $status = $_POST['status'];
    $sql1 = "SELECT * FROM payment Where id='$uid'";
    $query1 = mysqli_query($GLOBALS['conn'], $sql1);
    while ($data1 = mysqli_fetch_array($query1)) {
        $user_id=$data1['user_id'];
    }
    $sql ="UPDATE user SET  `status` = '$status' WHERE id = '$user_id'";
    $sql1 ="UPDATE payment SET  `status` = '$status' WHERE id = '$uid'";
    $query1 = mysqli_query($GLOBALS['conn'], $sql1);
    $query = mysqli_query($GLOBALS['conn'], $sql);
    

    if ($query || $query1) {
        echo 1;
    }else{
        echo 0;
    }

}

if(isset($_POST['approve'])){
    $uid = $_POST['approve'];
    $status = $_POST['status'];

    $sql ="UPDATE withdraw SET  `status` = '$status' WHERE id = '$uid'";
    $query = mysqli_query($GLOBALS['conn'], $sql);
    

    if ($query) {
        echo 1;
    }else{
        echo 0;
    }

}
if (isset($_GET['signout'])) {
    
    setcookie("admin", "", time() - 3600, '/');

    header("Location: ../index.php");
}

