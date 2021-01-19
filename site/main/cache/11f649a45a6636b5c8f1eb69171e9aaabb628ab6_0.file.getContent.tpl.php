<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-19 10:11:41
  from 'C:\xampp\htdocs\ds_training\site\main\view\home\getContent.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60064ded4b6ce5_28561144',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '11f649a45a6636b5c8f1eb69171e9aaabb628ab6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ds_training\\site\\main\\view\\home\\getContent.tpl',
      1 => 1611024834,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60064ded4b6ce5_28561144 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- hiển thị chi tết tin và giao diện -->
<div class="container-fluid container-content">
	<div class="row row-content">
		<div class="col-8 content content-heading">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['getContent']->value, 't');
$_smarty_tpl->tpl_vars['t']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->do_else = false;
?>
			<h3 class="title-heading"><?php echo $_smarty_tpl->tpl_vars['t']->value['title'];?>
</h3>
			<div class="content-title">
				<p><?php echo $_smarty_tpl->tpl_vars['t']->value['content'];?>
</p>
			</div>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</div>
		<div class="col-4 content-menu">
			<div class="banner-menu">
				<h2 class="banner-title text-center mt-2">Tin tức liên quan</h2>
				<div class="accordion-menu">
					<ul class="accordion">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['get']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
						<li>
							<a class="toggle" href="?mod=home&site=getContent&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</a>
						</li>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</ul>
				</div>


			</div>
		</div>
	</div>
</div>
<?php }
}
