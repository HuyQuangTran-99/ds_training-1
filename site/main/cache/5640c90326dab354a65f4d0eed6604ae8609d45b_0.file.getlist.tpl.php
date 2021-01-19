<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-31 23:16:07
  from 'C:\xampp\htdocs\ds_training\site\main\view\home\getlist.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fedf947ee4185_61534853',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5640c90326dab354a65f4d0eed6604ae8609d45b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ds_training\\site\\main\\view\\home\\getlist.tpl',
      1 => 1609389568,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fedf947ee4185_61534853 (Smarty_Internal_Template $_smarty_tpl) {
?><body class="body">
   <h1 class="heading_title">Danh sách tin</h1>
    <label>Phan Loai Theo Danh Muc: <span></span> </label>
       <select id="taxonomy_id" class="taxonomy" onchange="changeLink(this.value)" >
	       <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sr']->value, 'i');
$_smarty_tpl->tpl_vars['i']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->do_else = false;
?>
         <option value="<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value['name'];?>
</option>
	       <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </select>
      <?php echo '<script'; ?>
>
        function changeLink(id) {

					// location.href = '?mod=home&site=getlist&taxonomy_id=' + id;
           location.href = '?mod=home&site=getlist&taxonomy_id=' + id;
				}

      <?php echo '</script'; ?>
>

     <br><br>
		 <label>Chi tiet tin</label>
		 <div class="table">
		 	 <table class="table_List" id="table">
		 	   <thead>
		 	     <tr>
		 	       <th width="3%">ID</th>
						 <th width="27%">Title</th>
						 <th width="5%">Category</th>
						 <th width="5%">Type</th>
						 <th width="60%">Content</th>
		 	     </tr>
		 	   </thead>
		 	   <tbody>
					 <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['get']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
		 	     <tr>
		 	       <td><?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
</td>
						 <td><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</td>
						 <td><?php echo $_smarty_tpl->tpl_vars['item']->value['taxonomy_id'];?>
</td>
						 <td><?php echo $_smarty_tpl->tpl_vars['item']->value['type'];?>
</td>
						 <td><?php echo $_smarty_tpl->tpl_vars['item']->value['content'];?>
</td>
		 	     </tr>
					 <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		 	   </tbody>
		 	 </table>
		 </div>


</body>
<?php }
}
