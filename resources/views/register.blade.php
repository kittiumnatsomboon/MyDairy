<!doctype html>
<html lang="en">
  <head>
  	<title>{{ $toppic_title}}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- font google Prompt -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

	<!-- bootstrap icon -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- css style -->
	<link rel="stylesheet" href="css/style.css">
	<!-- jquery-CSS-UI -->
	<link rel="stylesheet" href="https://code.jquery.com/ui/1.14.0/themes/base/jquery-ui.css">
	

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section"></h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="wrap">
						<div class="img" style="background-image: url(images/bg-1.jpg);"></div>
						<div class="login-wrap p-4 p-md-5">
			      	<div class="d-flex">
			      		<div class="w-100">
			      			<h5 class="mb-4">สมัครสมาชิกเพื่อเป็นสมาชิกกับระบบเขียน Dairy ของฉัน</h5>
			      		</div>
			      	</div>
					<form action="{{ URL::TO('/sign_up') }}" class="signin-form" method="post">
						@csrf
			      		<div class="form-group mt-3">
			      			<input type="text" name="fullname" class="form-control" required>
			      			<label class="form-control-placeholder" for="username">ชื่อ-นามสกุล</label>
			      		</div>
						<div class="form-group">
							<input id="dateofbirth" name="dateofbirth" type="text" class="form-control" required>
							<label class="form-control-placeholder" for="password">วันเดือนปีเกิด</label>
						</div>
						<div class="form-group">
							<input id="email" type="email" name="email" class="form-control" required>
							<label class="form-control-placeholder" for="password">ที่อยู่อีเมลล์</label>
						</div>
						<div class="form-group">
							<input id="password" type="password" name="password" class="form-control" required>
							<label class="form-control-placeholder" for="password">รหัสผ่าน</label>
						</div>
						<div class="form-group">
							<input id="confrim_password" type="password" name="confrim_password" class="form-control" required>
							<label class="form-control-placeholder" for="password">ยืนยันรหัสผ่าน</label>
						</div>
						<div class="form-group">
							<button type="submit" class="form-control btn btn-primary rounded submit px-3">สมัครสมาชิก</button>
						</div>
		          	</form>
		          <p class="text-center">เข้าสู่ระบบ<a href="{{route('/')}}">คลิ๊ก</a></p>
		        </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="{{ URL::TO('js/jquery.min.js')}}"></script>
	<script src="{{ URL::TO('js/popper.js')}}"></script>
	<script src="{{ URL::TO('js/bootstrap.min.js')}}"></script>
	<script src="{{ URL::TO('js/main.js')}}"></script>
	<script src="{{ URL::TO('js/datepicker.js')}}"></script>
	<!-- script jqueryUI -->
	<script src="{{URL::TO('js/jquery.min.js')}}"></script>
  	<script src="https://code.jquery.com/ui/1.14.0/jquery-ui.js"></script>
	</body>
</html>

