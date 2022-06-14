<?php 

$link = mysqli_connect('localhost','root','','courage');


if($link){
	echo "yes";
	mysqli_query($link,'set names utf8');
}
else{
	echo "error";
}

?>