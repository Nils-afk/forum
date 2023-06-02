<?php
/* Smarty version 4.3.1, created on 2023-05-13 08:49:13
  from '/home/vol1000_8/epizy.com/epiz_34193542/htdocs/custom/templates/Nexus/Nexus/navbar/navbar_normal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_645f32e9d3bd02_45049770',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '583ab7ed5319ccfbd17a073101ce6904f121de78' => 
    array (
      0 => '/home/vol1000_8/epizy.com/epiz_34193542/htdocs/custom/templates/Nexus/Nexus/navbar/navbar_normal.tpl',
      1 => 1683960343,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_645f32e9d3bd02_45049770 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/vol1000_8/epizy.com/epiz_34193542/htdocs/vendor/smarty/smarty/libs/plugins/modifier.explode.php','function'=>'smarty_modifier_explode',),));
$_smarty_tpl->_assignInScope('navbarexcludeexploded', smarty_modifier_explode("/",$_smarty_tpl->tpl_vars['NAVBAREXCLUDE']->value));?>
<div class="ui <?php if ($_smarty_tpl->tpl_vars['NAVBARSTICKY']->value == '1') {?>sticky<?php }?> secondary small menu" id="navbar">
    <div class="ui container">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['NAV_LINKS']->value, 'item', false, 'name');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
            <?php if ((isset($_smarty_tpl->tpl_vars['item']->value['items']))) {?>
                <div class="ui dropdown item">
                    <?php echo $_smarty_tpl->tpl_vars['item']->value['icon'];?>
 <?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>

                    <i class="dropdown icon"></i>
                    <div class="menu">
                        <div class="header"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</div>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['items'], 'dropdown');
$_smarty_tpl->tpl_vars['dropdown']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['dropdown']->value) {
$_smarty_tpl->tpl_vars['dropdown']->do_else = false;
?>
                            <?php if ((isset($_smarty_tpl->tpl_vars['dropdown']->value['separator']))) {?>
                                <div class="divider navbar-item"></div>
                            <?php } else { ?>
                                <a class="item navbar-item" href="<?php echo $_smarty_tpl->tpl_vars['dropdown']->value['link'];?>
" target="<?php echo $_smarty_tpl->tpl_vars['dropdown']->value['target'];?>
">
                                    <?php echo $_smarty_tpl->tpl_vars['dropdown']->value['icon'];
echo $_smarty_tpl->tpl_vars['dropdown']->value['title'];?>
</a>
                            <?php }?>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>
                </div>
            <?php } else { ?>
                <?php if (!in_array($_smarty_tpl->tpl_vars['item']->value['title'],$_smarty_tpl->tpl_vars['navbarexcludeexploded']->value)) {?>
                    <a class="item<?php if ((isset($_smarty_tpl->tpl_vars['item']->value['active']))) {?> active<?php }?> navbar-item" href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
"
                        target="<?php echo $_smarty_tpl->tpl_vars['item']->value['target'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['icon'];?>

                        <?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a>
                <?php }?>
            <?php }?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <a class="toc item">
            <i class="sidebar icon navbar-item"></i>
        </a>
        <div class="right menu">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['USER_SECTION']->value, 'item', false, 'name');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                <?php if ((isset($_smarty_tpl->tpl_vars['item']->value['items']))) {?>
                    <?php if (($_smarty_tpl->tpl_vars['name']->value == "account")) {?>
                        <a class="ui medium image label" data-toggle="popup" data-position="bottom right"
                            id="button-<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['icon'];?>
 <?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a>
                    <?php } else { ?>
                        <a class="ui small default icon button" data-toggle="popup" data-position="bottom right"
                            id="button-<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['icon'];?>
</a>
                    <?php }?>
                    <div class="ui wide basic popup">
                        <h4 class="ui header"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</h4>
                        <div class="ui relaxed link list" id="list-<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['items'], 'dropdown');
$_smarty_tpl->tpl_vars['dropdown']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['dropdown']->value) {
$_smarty_tpl->tpl_vars['dropdown']->do_else = false;
?>
                                <?php if ((isset($_smarty_tpl->tpl_vars['dropdown']->value['separator']))) {?>
                                    <div class="ui divider"></div>
                                <?php } else { ?>
                                    <?php if ((isset($_smarty_tpl->tpl_vars['dropdown']->value['action']))) {?>
                                        <a class="item" href="#" data-link="<?php echo $_smarty_tpl->tpl_vars['dropdown']->value['link'];?>
" data-action="<?php echo $_smarty_tpl->tpl_vars['dropdown']->value['action'];?>
">
                                            <?php echo $_smarty_tpl->tpl_vars['dropdown']->value['icon'];?>
 <?php echo $_smarty_tpl->tpl_vars['dropdown']->value['title'];?>

                                        </a>
                                    <?php } else { ?>
                                        <a class="item" href="<?php echo $_smarty_tpl->tpl_vars['dropdown']->value['link'];?>
" target="<?php echo $_smarty_tpl->tpl_vars['dropdown']->value['target'];?>
">
                                            <?php echo $_smarty_tpl->tpl_vars['dropdown']->value['icon'];?>
 <?php echo $_smarty_tpl->tpl_vars['dropdown']->value['title'];?>

                                        </a>
                                    <?php }?>
                                <?php }?>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </div>
                        <?php if (!empty($_smarty_tpl->tpl_vars['item']->value['meta'])) {?>
                            <div class="ui link list">
                                <div class="ui divider"></div>
                                <a class="item" href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['meta'];?>
</a>
                            </div>
                        <?php }?>
                    </div>
                <?php } else { ?>
                    <?php if (($_smarty_tpl->tpl_vars['name']->value == "panel")) {?>
                        <a class="ui small primary icon button" href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
" target="<?php echo $_smarty_tpl->tpl_vars['item']->value['target'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['icon'];?>
</a>
                    <?php } elseif (($_smarty_tpl->tpl_vars['name']->value == "register")) {?>
                        <a class="ui small primary button" href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
" target="<?php echo $_smarty_tpl->tpl_vars['item']->value['target'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a>
                    <?php } else { ?>
                        <a class="ui small default button" href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
" target="<?php echo $_smarty_tpl->tpl_vars['item']->value['target'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a>
                    <?php }?>
                <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </div>
</div><?php }
}
