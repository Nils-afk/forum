<?php
/* Smarty version 4.3.1, created on 2023-05-13 08:49:46
  from '/home/vol1000_8/epizy.com/epiz_34193542/htdocs/custom/templates/Nexus/staff.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_645f330a193cd3_01724865',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ec778750c05d0b6e3e93e5818e95dabc2ce50212' => 
    array (
      0 => '/home/vol1000_8/epizy.com/epiz_34193542/htdocs/custom/templates/Nexus/staff.tpl',
      1 => 1683960361,
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
function content_645f330a193cd3_01724865 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="ui stackable grid">
    <div class="ui centered row">
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
        <?php if (count($_smarty_tpl->tpl_vars['STAFF_GROUPS']->value)) {?>
            <div
                class="ui <?php if (count($_smarty_tpl->tpl_vars['WIDGETS_LEFT']->value) && count($_smarty_tpl->tpl_vars['WIDGETS_RIGHT']->value)) {?>four wide tablet eight wide computer<?php } elseif (count($_smarty_tpl->tpl_vars['WIDGETS_LEFT']->value) || count($_smarty_tpl->tpl_vars['WIDGETS_RIGHT']->value)) {?>ten wide tablet twelve wide computer<?php } else { ?>sixteen wide<?php }?> column">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['STAFF_GROUPS']->value, 'group');
$_smarty_tpl->tpl_vars['group']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->do_else = false;
?>
                    <?php if (count($_smarty_tpl->tpl_vars['group']->value['members'])) {?>
                        <div class="ui fluid card" style="border-bottom: solid 1.5px <?php echo $_smarty_tpl->tpl_vars['group']->value['color'];?>
;">
                            <div class="content">
                                <div class="ui dividing header" style="color: <?php echo $_smarty_tpl->tpl_vars['group']->value['color'];?>
;">
                                    <?php echo $_smarty_tpl->tpl_vars['group']->value['name'];?>

                                </div>
                                <div class="description">
                                    <div class="ui stackable grid">
                                        <div class="ui row" style="padding-bottom: 0;">
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['group']->value['members'], 'member');
$_smarty_tpl->tpl_vars['member']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['member']->value) {
$_smarty_tpl->tpl_vars['member']->do_else = false;
?>
                                                <div class="ui four wide tablet three wide computer column">
                                                    <h4 class="ui center aligned icon header">
                                                        <img class="ui circular image" src="<?php echo $_smarty_tpl->tpl_vars['member']->value['avatar'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['member']->value['username'];?>
"
                                                            style="display: block; margin: 0 auto .5rem; width: 60px; height: 60px;">
                                                        <a href="<?php echo $_smarty_tpl->tpl_vars['member']->value['profile'];?>
" style="<?php echo $_smarty_tpl->tpl_vars['member']->value['style'];?>
"><?php echo $_smarty_tpl->tpl_vars['member']->value['username'];?>
</a>
                                                    </h4>
                                                </div>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        <?php }?>
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
