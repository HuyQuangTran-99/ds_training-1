<!-- dựng footer -->
<footer id="footer">
	<div class="back-top text-center" id="totop">Back to top</div>
	<div class="container-fluid">
	</div>
	<div class="footer-choose  d-none d-sm-block">
		<div class="container-fluid">
			<div class="footer-choose-wrap d-flex justify-content-center">
				<div class="logo-footer">
					<img src="{$arg.url_img}logo-white.png" height="30">
				</div>
				<div class="footer-choose-option-wrap">
					<div class="fake-select select-lang">
						<span class="icon-lang"></span> <span class="text-lang">Tiếng Việt - VI</span> <span class="up-down-arr"></span>

					</div>
					<div class="fake-select">
						<span class="icon-money"></span> <span class="text-lang">đ
							- Việt Nam đồng</span> <span class="up-down-arr"></span>
					</div>
					<div class="fake-select">
						<span class="icon-co"></span> <span class="text-lang">Việt Nam</span> <span class="up-down-arr"></span>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer-link d-none d-sm-block">
		<div class="container-fluid">
			<div class="cate-banner-wrap">
				<div class="wrap-footer-col">

					<!--end card-columns-->
					<div class="pt-2 text-center">
						<ul class="list-inline">
							<li class="list-inline-item"><a href="#"> Điều khoản sử dụng </a></li>
							<li class="list-inline-item"><a href="#"> Quyền riêng tư </a></li>
							<li class="list-inline-item"><a href="#"> Trợ giúp </a></li>
							<li class="list-inline-item li_last">© 2009-2020, Daisan., JSC. or its affiliates</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="bottomNavbar bg-white d-block d-sm-none">
		<div class="row row-sm">
			<div class="col text-center">
				<a href="./" class="active"><span class="icon"><i class="fa fa-home" aria-hidden="true"></i></span>
					<p>Home</p>
				</a>
			</div>
			<div class="col text-center">
				<a href="#"><span class="icon"><i class="fa fa-rss" aria-hidden="true"></i></span>
					<p>Tin mới</p>
				</a>
			</div>
			<div class="col text-center">
				<a href="javascript:void(0)" data-toggle="modal" data-target="#exampleModal">
					<span class="icon"><i class="fa fa-commenting" aria-hidden="true"></i></span>
					<p>Liên hệ</p>
				</a>
			</div>
			<div class="col text-center">
				<a href="?mod=product&site=cart"><span class="icon"><i class="fa fa-shopping-cart" aria-hidden="true"></i></span>
					<p>Giỏ hàng</p>
				</a>
			</div>
			<div class="col text-center">
				<a href="?mod=account&site=index"><span class="icon"><i class="fa fa-user" aria-hidden="true"></i></span>
					<p>Tài khoản</p>
				</a>
			</div>
		</div>
	</div>
</footer>





<script type="text/javascript">
$("#totop").click(function () {
	$("html, body").animate({ scrollTop: 0 }, 500);
	return false
});
</script>
