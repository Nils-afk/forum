<?php
/* Smarty version 4.3.1, created on 2023-05-12 16:35:11
  from '/home/vol1000_8/epizy.com/epiz_34193542/htdocs/custom/panel_templates/Default/includes/alerts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_645e4e9f1111e4_92174051',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5d61a48331232bb998af2b6c9db817cd2543f6cc' => 
    array (
      0 => '/home/vol1000_8/epizy.com/epiz_34193542/htdocs/custom/panel_templates/Default/includes/alerts.tpl',
      1 => 1683900909,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_645e4e9f1111e4_92174051 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['SUCCESS']->value))) {?>
    <div class="alert bg-success text-white alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <h5><i class="icon fa fa-check"></i> <?php echo $_smarty_tpl->tpl_vars['SUCCESS_TITLE']->value;?>
</h5>
        <?php echo $_smarty_tpl->tpl_vars['SUCCESS']->value;?>

    </div>
<?php }
if ((isset($_smarty_tpl->tpl_vars['ERRORS']->value)) && count($_smarty_tpl->tpl_vars['ERRORS']->value)) {?>
    <div class="alert bg-danger text-white alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <h5><i class="icon fas fa-exclamation-triangle"></i> <?php echo $_smarty_tpl->tpl_vars['ERRORS_TITLE']->value;?>
</h5>
        <ul>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ERRORS']->value, 'error');
$_smarty_tpl->tpl_vars['error']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->do_else = false;
?>
                <li><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
    </div>
<?php }
}
}
