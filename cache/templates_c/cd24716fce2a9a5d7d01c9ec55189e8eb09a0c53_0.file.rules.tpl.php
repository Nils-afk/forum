<?php
/* Smarty version 4.3.1, created on 2023-05-12 23:34:24
  from '/home/vol1000_8/epizy.com/epiz_34193542/htdocs/custom/templates/DefaultRevamp/rules.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_645eb0e04c9752_81628096',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cd24716fce2a9a5d7d01c9ec55189e8eb09a0c53' => 
    array (
      0 => '/home/vol1000_8/epizy.com/epiz_34193542/htdocs/custom/templates/DefaultRevamp/rules.tpl',
      1 => 1683927044,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:navbar.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_645eb0e04c9752_81628096 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php $_smarty_tpl->_subTemplateRender('file:navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h2 class="ui header"><?php echo $_smarty_tpl->tpl_vars['RULES']->value;?>
</h2>
<div class="ui stackable grid">
    <div class="ui row">

    	<?php if (count($_smarty_tpl->tpl_vars['WIDGETS_LEFT']->value)) {?>
          <div class="ui six wide tablet four wide computer column">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['WIDGETS_LEFT']->value, 'widget');
$_smarty_tpl->tpl_vars['widget']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['widget']->value) {
$_smarty_tpl->tpl_vars['widget']->do_else = false;
?>
                <?php echo $_smarty_tpl->tpl_vars['widget']->value;?>

            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </div>
        <?php }?>

        <div class="ui <?php if (count($_smarty_tpl->tpl_vars['WIDGETS_LEFT']->value) && count($_smarty_tpl->tpl_vars['WIDGETS_RIGHT']->value)) {?>four wide tablet eight wide computer<?php } elseif (count($_smarty_tpl->tpl_vars['WIDGETS_LEFT']->value) || count($_smarty_tpl->tpl_vars['WIDGETS_RIGHT']->value)) {?>ten wide tablet twelve wide computer<?php } else { ?>sixteen wide<?php }?> column">
	    <div class="ui top attached tabular menu">
                <a class="item active" data-tab="home"><i class="fas fa-gavel"></i> <?php echo $_smarty_tpl->tpl_vars['RULES']->value;?>
</a>
          	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CATAGORIES']->value, 'catagory');
$_smarty_tpl->tpl_vars['catagory']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['catagory']->value) {
$_smarty_tpl->tpl_vars['catagory']->do_else = false;
?>
                    <a class="item" data-tab="id-<?php echo $_smarty_tpl->tpl_vars['catagory']->value['id'];?>
"><?php if ((isset($_smarty_tpl->tpl_vars['catagory']->value['icon'])) && preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['catagory']->value['icon'], $tmp) > 0) {
echo $_smarty_tpl->tpl_vars['catagory']->value['icon'];?>
 <?php }
echo $_smarty_tpl->tpl_vars['catagory']->value['name'];?>
</a>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
            <div class="ui bottom attached tab segment active" data-tab="home" id="home">
	        <?php echo $_smarty_tpl->tpl_vars['MESSAGE']->value;?>

		<?php if (!empty($_smarty_tpl->tpl_vars['BUTTONS']->value)) {?><br /><div style="text-align:center">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['BUTTONS']->value, 'button');
$_smarty_tpl->tpl_vars['button']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['button']->value) {
$_smarty_tpl->tpl_vars['button']->do_else = false;
?>
			<a class="ui primary button" href="<?php echo $_smarty_tpl->tpl_vars['button']->value['link'];?>
" style="margin-left: 5px; margin-right: 5px"><?php echo $_smarty_tpl->tpl_vars['button']->value['name'];?>
</a>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</div><?php }?>
	    </div>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CATAGORIES']->value, 'catagory');
$_smarty_tpl->tpl_vars['catagory']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['catagory']->value) {
$_smarty_tpl->tpl_vars['catagory']->do_else = false;
?>
                <div class="ui bottom attached tab segment" id="id-<?php echo $_smarty_tpl->tpl_vars['catagory']->value['id'];?>
" data-tab="id-<?php echo $_smarty_tpl->tpl_vars['catagory']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['catagory']->value['rules'];?>
</div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
	
	<?php if (count($_smarty_tpl->tpl_vars['WIDGETS_RIGHT']->value)) {?>
          <div class="ui six wide tablet four wide computer column">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['WIDGETS_RIGHT']->value, 'widget');
$_smarty_tpl->tpl_vars['widget']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['widget']->value) {
$_smarty_tpl->tpl_vars['widget']->do_else = false;
?>
              <?php echo $_smarty_tpl->tpl_vars['widget']->value;?>

            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </div>
        <?php }?>
	
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
