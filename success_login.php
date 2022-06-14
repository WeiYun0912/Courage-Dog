<?php session_start();?>				
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<link rel="stylesheet" type="text/css" href="css/animate.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width,initial-scale=1">	
	<link rel="shortcut icon" href="img/Favicon.ico">
	<title>Courage the Cowardly Dog</title>

</head>
<body>

	<div class="bgImg">
		<?php if($_SESSION['code'] == 1){ ?>
		<div class="container">
			<div class="white-text text-center">
				<div class="login_information">				
					<h1>登入成功！</h1>
					<p>你的帳號是:<?php echo $_SESSION['account'] ;  ?></p>
					<p>你的密碼是<?php echo $_SESSION['password'] ;  ?></p>
					<p>你的名字是<?php echo $_SESSION['name'] ;  ?></p>
					<p>你的郵件是<?php echo $_SESSION['email'] ;  ?></p>			
					<a href="logout.php" class="btn btn-success logout">我要登出</a>
				</div>
			</div>
		</div>
		<?php } else{ header("location:login.php"); }?>

</div>

</body>
</html>