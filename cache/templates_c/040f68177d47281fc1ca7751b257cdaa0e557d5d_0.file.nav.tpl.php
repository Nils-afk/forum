<?php
/* Smarty version 4.3.1, created on 2023-05-13 08:49:40
  from '/home/vol1000_8/epizy.com/epiz_34193542/htdocs/custom/templates/Nexus/craftingstore/parts/nav.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_645f3304b96273_41527864',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '040f68177d47281fc1ca7751b257cdaa0e557d5d' => 
    array (
      0 => '/home/vol1000_8/epizy.com/epiz_34193542/htdocs/custom/templates/Nexus/craftingstore/parts/nav.tpl',
      1 => 1683960296,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_645f3304b96273_41527864 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="ui top attached menu">
    <a class="active item" href="<?php echo $_smarty_tpl->tpl_vars['HOME_URL']->value;?>
">
        <?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>

    </a>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CATEGORIES']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
        <?php if ($_smarty_tpl->tpl_vars['category']->value['subCategories'] != null && count($_smarty_tpl->tpl_vars['category']->value['subCategories'])) {?>
            <div class="ui pointing dropdown link item">
                <span class="text"><?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
</span>
                <i class="dropdown icon"></i>
                <div class="menu">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['category']->value['subCategories'], 'subcategory');
$_smarty_tpl->tpl_vars['subcategory']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['subcategory']->value) {
$_smarty_tpl->tpl_vars['subcategory']->do_else = false;
?>
                        <a class="item" href="<?php echo $_smarty_tpl->tpl_vars['subcategory']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['subcategory']->value['name'];?>
</a>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
            </div>
        <?php } else { ?>
            <a class="item" href="<?php echo $_smarty_tpl->tpl_vars['category']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
</a>
        <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
<?php }
}
