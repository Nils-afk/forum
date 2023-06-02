<?php
/* Smarty version 4.3.1, created on 2023-05-13 08:49:13
  from '/home/vol1000_8/epizy.com/epiz_34193542/htdocs/custom/templates/Nexus/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_645f32e9c85697_18727471',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3480c8f1d24e291e6e63bd9e489ce094931436f2' => 
    array (
      0 => '/home/vol1000_8/epizy.com/epiz_34193542/htdocs/custom/templates/Nexus/index.tpl',
      1 => 1683960329,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:navbar.tpl' => 1,
    'file:ghost/index.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_645f32e9c85697_18727471 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/vol1000_8/epizy.com/epiz_34193542/htdocs/vendor/smarty/smarty/libs/plugins/modifier.capitalize.php','function'=>'smarty_modifier_capitalize',),));
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h2 class="ui header" style="visibility: hidden;">FOR SPACING</h2>

<?php if ((isset($_smarty_tpl->tpl_vars['HOME_SESSION_FLASH']->value))) {?>
    <div class="ui message icon announcement" style="border-top-style: solid; border-top-color: #5cb85c;">
        <i class="check icon" style="color: #5cb85c;"></i>
        <div class="content">
            <div class="header"><?php echo $_smarty_tpl->tpl_vars['SUCCESS_TITLE']->value;?>
</div>
            <?php echo $_smarty_tpl->tpl_vars['HOME_SESSION_FLASH']->value;?>

        </div>
    </div>
<?php }?>

<?php if ((isset($_smarty_tpl->tpl_vars['HOME_SESSION_ERROR_FLASH']->value))) {?>
    <div class="ui message icon announcement" style="border-top-style: solid; border-top-color: #d9534f;">
        <i class="x icon" style="color: #d9534f;"></i>
        <div class="content">
            <div class="header"><?php echo $_smarty_tpl->tpl_vars['ERROR_TITLE']->value;?>
</div>
            <?php echo $_smarty_tpl->tpl_vars['HOME_SESSION_ERROR_FLASH']->value;?>

        </div>
    </div>
<?php }?>

<div class="ui stackable grid">
    <?php if ((isset($_smarty_tpl->tpl_vars['GHOST']->value))) {?>
        <?php $_smarty_tpl->_subTemplateRender('file:ghost/index.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } else { ?>
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
            <div
                class="ui <?php if (count($_smarty_tpl->tpl_vars['WIDGETS_LEFT']->value) && count($_smarty_tpl->tpl_vars['WIDGETS_RIGHT']->value)) {?>four wide tablet eight wide computer<?php } elseif (count($_smarty_tpl->tpl_vars['WIDGETS_LEFT']->value) || count($_smarty_tpl->tpl_vars['WIDGETS_RIGHT']->value)) {?>ten wide tablet twelve wide computer<?php } else { ?>sixteen wide<?php }?> column">
                <?php if ($_smarty_tpl->tpl_vars['HOME_TYPE']->value === 'news') {?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['NEWS']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                        <div class="ui fluid card" id="news-post">
                            <div class="content">
                                <div class="header">
                                    <?php if ((isset($_smarty_tpl->tpl_vars['item']->value['label']))) {
echo $_smarty_tpl->tpl_vars['item']->value['label'];
}?>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
" data-toggle="popup"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a>
                                    <div class="ui popup wide transition hidden">
                                        <h4 class="ui header"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</h4>
                                        <?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['BY']->value);?>
 <a style="<?php echo $_smarty_tpl->tpl_vars['item']->value['author_style'];?>
"
                                            href="<?php echo $_smarty_tpl->tpl_vars['item']->value['author_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['author_name'];?>
</a> | <?php echo $_smarty_tpl->tpl_vars['item']->value['date'];?>

                                    </div>
                                </div>
                                <div class="meta" data-toggle="tooltip" data-content="<?php echo $_smarty_tpl->tpl_vars['item']->value['date'];?>
">
                                    <?php echo $_smarty_tpl->tpl_vars['item']->value['time_ago'];?>

                                </div>
                                <div class="description forum_post">
                                    <?php echo $_smarty_tpl->tpl_vars['item']->value['content'];?>

                                </div>
                            </div>
                            <div class="extra content">
                                <div class="right floated author">
                                    <img class="ui avatar image" src="<?php echo $_smarty_tpl->tpl_vars['item']->value['author_avatar'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['author_name'];?>
"> <a
                                        style="<?php echo $_smarty_tpl->tpl_vars['item']->value['author_style'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['item']->value['author_url'];?>
"
                                        data-poload="<?php echo $_smarty_tpl->tpl_vars['USER_INFO_URL']->value;
echo $_smarty_tpl->tpl_vars['item']->value['author_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['author_name'];?>
</a>
                                </div>
                                <a class="ui mini primary button" href="<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
">
                                    <?php echo $_smarty_tpl->tpl_vars['READ_FULL_POST']->value;?>

                                </a>
                            </div>
                        </div>
                    <?php
}
if ($_smarty_tpl->tpl_vars['item']->do_else) {
?>
                        <div class="ui segment red">
                            <?php echo $_smarty_tpl->tpl_vars['NO_NEWS']->value;?>

                        </div>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php } elseif ($_smarty_tpl->tpl_vars['HOME_TYPE']->value === 'custom') {?>
                    <?php echo $_smarty_tpl->tpl_vars['CUSTOM_HOME_CONTENT']->value;?>

                <?php }?>
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
    <?php }?>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
