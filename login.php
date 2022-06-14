<!DOCTYPE html>
<html>
<head>
	
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<link rel="stylesheet" type="text/css" href="css/animate.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width,initial-scale=1">	
	<link rel="shortcut icon" href="img/Favicon.ico">
	<title>Courage the Cowardly Dog</title>
</head>
<body>

	<div class="bgImg">
		<div class="container animated fadeIn">		
			<form class="cm_form" name="cm_form" id="cm_form" style="animation-duration: 2s;">
				<div class="row">
					<div class="col-md-3"></div>
					<div class="col-md-6">
						<div class="form-group">
							<h2 class="BigTitle text-center">登入膽小狗</h2>
							
						</div>
						<div class="form-group">
							<label>帳號</label>
							<input type="text" class="form-control" name="cm_account" placeholder="請輸入帳號">
						</div>
						<div class="form-group">
							<label>密碼</label>
							<input type="password" class="form-control" name="cm_password" placeholder="請輸入密碼" >
						</div>
						

						<button type="button" class="btn btn-success btn-block" id="login">登入</button>
						<a href="register.php" class="btn btn-success btn-block">註冊</a>
						<a href="index.php" class="btn btn-success btn-block">我不想登入了</a>
						
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<script type="text/javascript" src="js/jquery-1.12.3.js"></script>
<script type="text/javascript" src="js/sweetalert.min.js"></script>

<script type="text/javascript">
	$(document).on('click','#login',function(){
		
		var cm_account = document.cm_form.cm_account.value;
		var cm_password = document.cm_form.cm_password.value;	

		if(cm_account==''){
			swal("警告！","請輸入帳號","warning");
		}

		else if(cm_password ==''){
			swal("警告！","請輸入密碼","warning");
		}

		else{
			$.ajax({
				url:"check_login.php",
				type:"post",
				data:{
					cm_account:cm_account,
					cm_password:cm_password,
				},
				dataType:"html",
				success:function(data){
					if(data == 'yes0' ){
						swal("錯誤","請確認帳號密碼是否正確","error");
					}
					else{
						window.location.href = "success_login.php";
					}
				}
			});
		}

	})

		// $(document).on('click','#register',function(){
		// 	$('#loginform').removeClass('animated fadeIn');
		// 	$('#loginform').addClass('animated fadeOut');
		// 	$('#registerform').removeClass('disapper');
		// 	$('#registerform').addClass('animated fadeIn');
		// })

	</script>
</body>
</html>