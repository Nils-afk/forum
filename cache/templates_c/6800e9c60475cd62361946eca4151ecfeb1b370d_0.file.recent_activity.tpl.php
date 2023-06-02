<?php
/* Smarty version 4.3.1, created on 2023-05-12 23:42:46
  from '/home/vol1000_8/epizy.com/epiz_34193542/htdocs/custom/templates/DefaultRevamp/suggestions/recent_activity.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_645eb2d6bca066_19777145',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6800e9c60475cd62361946eca4151ecfeb1b370d' => 
    array (
      0 => '/home/vol1000_8/epizy.com/epiz_34193542/htdocs/custom/templates/DefaultRevamp/suggestions/recent_activity.tpl',
      1 => 1683927736,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_645eb2d6bca066_19777145 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="ui segment">
  <h4><?php echo $_smarty_tpl->tpl_vars['RECENT_ACTIVITY']->value;?>
</h4>
  <hr>
  <small>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RECENT_ACTIVITY_LIST']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
    <div class="ui middle aligned centered two column stackable grid">
      <div class="row">
        <div class="four wide column">
          <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['updated_by_link'];?>
"><img class="ui circular image" style="max-height:40px;max-width:40px;" src="<?php echo $_smarty_tpl->tpl_vars['item']->value['updated_by_avatar'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['updated_by_username'];?>
"/></a>
        </div>
        <div class="twelve wide column">
          <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a><br />
          <span data-toggle="tooltip" data-trigger="hover" data-content="<?php echo $_smarty_tpl->tpl_vars['item']->value['updated'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['updated_rough'];?>
</span><br /><?php echo $_smarty_tpl->tpl_vars['BY']->value;?>
 <a class="<?php echo $_smarty_tpl->tpl_vars['item']->value['updated_by_tag'];?>
"  href="<?php echo $_smarty_tpl->tpl_vars['item']->value['updated_by_link'];?>
" style="<?php echo $_smarty_tpl->tpl_vars['item']->value['updated_by_style'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['updated_by_username'];?>
</a>
        </div>
      </div>
    </div>
  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </small>
</div><?php }
}
