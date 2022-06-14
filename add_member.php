
<?php
include('db_connect.php');
$cm_name = $_POST['cm_name'];
$cm_account = $_POST['cm_account'];
$cm_password = $_POST['cm_password'];
$cm_mail = $_POST['cm_mail'];

$sql = "INSERT INTO `courage_member`(`cm_name`,`cm_account`,`cm_password`,`cm_mail`) VALUES('$cm_name','$cm_account','$cm_password','$cm_mail')";

echo $sql;
$result = mysqli_query($link,$sql);

?>