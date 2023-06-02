<?php
/* Smarty version 4.3.1, created on 2023-05-12 23:42:46
  from '/home/vol1000_8/epizy.com/epiz_34193542/htdocs/custom/templates/DefaultRevamp/suggestions/categories.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_645eb2d6baec35_31029725',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8f1e3fffcd29dee43ef02885fa0f894ca64e622b' => 
    array (
      0 => '/home/vol1000_8/epizy.com/epiz_34193542/htdocs/custom/templates/DefaultRevamp/suggestions/categories.tpl',
      1 => 1683927734,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_645eb2d6baec35_31029725 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="ui segment">
  <h4><?php echo $_smarty_tpl->tpl_vars['CATEGORIES']->value;?>
</h4>
  <hr>
  <div class="ui grid">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CATEGORIES_LIST']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
	  <div class="eight wide column">
	    <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a>
	  </div>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </div>
</div><?php }
}
