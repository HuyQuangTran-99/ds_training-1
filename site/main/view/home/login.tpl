<!-- login -->
<div class="login-container d-flex align-items-center justify-content-center">
	<form class="login-form text-center" method="post" name="login-form">
		<h1 class=" mb-5 font-weight-light text-uppercase">Login</h1>
		<div class="form-group">
			<input type="text" class="form-control rounded-pill form-control-lg" placeholder="Username" name="taikhoan">
		</div>
		<div class="form-group">
			<input type="password" class="form-control rounded-pill form-control-lg" placeholder="Password" name="password">
		</div>
		<div class="forgot-link mt-3">
			<div class="form-check">
				<input type="checkbox" class="form-check-input" id="remember">
				<label for="remember">Remember Password</label>
			</div>
			<a href="#">Forgot Password?</a>
		</div>

		<!-- <a href="#" class="btn px-5 mt-3 text-uppercase btn-block rounded-pill" id="btndangnhap" type="submit" name="login" value="Login">Log in</a> -->
		<input class="btn px-5 mt-3 text-uppercase btn-block rounded-pill" id="btndangnhap" type="submit" name="login" value="Login">
		<p class="mt-3 font-weight-normal">Don't have an accout <a href="?mod=home&site=resgister"><strong>Register Now</strong></a></p>
	</form>
</div>
