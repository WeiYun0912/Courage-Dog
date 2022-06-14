<?php
session_start();
include('db_connect.php');
mysqli_query($link,"set names 'utf8'");
$account=$_POST["cm_account"];										
$password=$_POST["cm_password"];

$sql="SELECT * FROM `courage_member` where `cm_account`='$account' AND `cm_password`='$password'" ; //把帳號密碼select出來才能做比對

$result=mysqli_query($link,$sql);
$row=mysqli_fetch_assoc($result);


if(isset($_POST['cm_account']) && isset($_POST['cm_password'])){

	if($account !=null && $password!=null && $row["cm_account"] ==$account && $row["cm_password"] == $password){ 
		$_SESSION['code'] = 1;
		$_SESSION['account'] = $account;
		$_SESSION['password'] = $password;
		$_SESSION['name'] = $row['cm_name'];
		$_SESSION['email'] = $row['cm_mail'];
	}
	else{
		echo 0;
	}

}

