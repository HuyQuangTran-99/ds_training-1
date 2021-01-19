<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-31 10:34:50
  from 'C:\xampp\htdocs\ds_training\site\main\view\home\test.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fed46da863bb4_48389355',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd63a56606ed737bd23bb8f4c26c5970ad255eea0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ds_training\\site\\main\\view\\home\\test.tpl',
      1 => 1609385660,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fed46da863bb4_48389355 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div id="demoTest">
   <h1>Test demo</h1>
   <tbody>
     <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['posts']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
      <tr>
         <td><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</td>
         <td><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</td>
      </tr>
     <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
   </tbody>

</div>
<?php }
}
