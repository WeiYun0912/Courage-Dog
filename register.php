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
			<form class="cm_form_register" name="cm_form" style="animation-duration: 2s;">
				<div class="row">
					<div class="col-md-3"></div>
					<div class="col-md-6">
						<div class="form-group">
							<h2 class="BigTitle text-center">加入膽小狗</h2>
							<label>姓名</label>
							<input type="text" class="form-control" name="cm_name" id="cm_name" placeholder="請輸入姓名">
						</div>
						<div class="form-group">
							<label>帳號</label>
							<input type="text" class="form-control" name="cm_account" placeholder="請輸入帳號">
						</div>
						<div class="form-group">
							<label>密碼</label>
							<input type="password" class="form-control" name="cm_password" placeholder="請輸入密碼" >
						</div>
						<div class="form-group">
							<label>確認密碼</label>
							<input type="password" class="form-control" name="cm_password2" placeholder="請再度確認密碼">
						</div>
						<div class="form-group">
							<label>電子郵件</label>
							<input type="text" class="form-control" name="cm_mail" placeholder="請輸入電子郵件">
						</div>

						<button type="button" class="btn btn-success btn-block" id="add">提交</button>
						<a href="login.php" class="btn btn-success btn-block">我要登入</a>
						
					</div>

				</div>
			</form>

		</div>
	</div>
	<script type="text/javascript" src="js/jquery-1.12.3.js"></script>
	<script type="text/javascript" src="js/sweetalert.min.js"></script>
	
	<script type="text/javascript">

		$(document).on('click','#add',function(){
			var cm_name = document.cm_form.cm_name.value;
			var cm_account = document.cm_form.cm_account.value;
			var cm_password = document.cm_form.cm_password.value;
			var cm_password2 = document.cm_form.cm_password2.value;
			var cm_mail = document.cm_form.cm_mail.value;
			// var cm_name = $('cm_name').val();
			
			
			
			if(cm_name=='' || cm_account=='' || cm_password=='' || cm_mail==''){
				swal("警告！","有欄位尚未填寫","error");
			}

			else if(cm_password != cm_password2){
				swal("警告！","請確認密碼是否輸入一致","warning")
			}

			else if(swal({
				title:"警告！",
				text:"您是否要新增這筆資料?",
				icon:"warning",
				buttons:{
					confirm:true,
					cancel:true,
				},
				dangerMode:true,
			})
				.then((willDelete)=>{
					if(willDelete){
						$.ajax({
							url:"add_member.php",
							type:"post",
							data:{
								cm_name : cm_name,
								cm_account : cm_account,
								cm_password : cm_password,
								cm_mail : cm_mail,
							},
							dataType:"html",
							success:function(daf){

								window.location.href="login.php";
							}

						});
					}	else{
						return false;
					}
				})	
				);

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