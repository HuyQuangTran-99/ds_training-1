<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-11 10:26:08
  from 'C:\xampp\htdocs\ds_training\site\main\view\home\resgister.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ffbc550e572d4_53117302',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '303f61bcabff782395bf540d9d1a310c1817b158' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ds_training\\site\\main\\view\\home\\resgister.tpl',
      1 => 1610335566,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ffbc550e572d4_53117302 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="login-container d-flex align-items-center justify-content-center">
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
<?php }
}
