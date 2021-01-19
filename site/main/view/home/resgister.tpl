<!-- dựng register -->
<div class="login-container d-flex align-items-center justify-content-center">
	<form class="login-form text-center" method="post" name="login-form">
		<h1 class=" mb-5 font-weight-light text-uppercase">Resgister</h1>
		<div class="form-group">
			<input type="text" class="form-control rounded-pill form-control-lg" placeholder="Username" name="taikhoan">
		</div>
		<div class="form-group">
			<input type="email" class="form-control rounded-pill form-control-lg" placeholder="Email" name="email">
		</div>
		<div class="form-group">
      <input type="password" class="form-control rounded-pill form-control-lg" placeholder="password" name="password">
		</div>

		<input class="btn px-5 mt-3 text-uppercase btn-block rounded-pill" id="btndangnhap" type="submit" name="login" value="Resgister">
		<p class="mt-3 font-weight-normal">You have an accout <a href="?mod=home&site=login"><strong>Login Now</strong></a></p>
	</form>
</div>
