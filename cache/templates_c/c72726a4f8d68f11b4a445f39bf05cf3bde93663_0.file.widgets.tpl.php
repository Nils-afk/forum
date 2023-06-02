<?php
/* Smarty version 4.3.1, created on 2023-05-13 08:49:59
  from '/home/vol1000_8/epizy.com/epiz_34193542/htdocs/custom/templates/Nexus/template_settings/tpl/widgets.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_645f3317929765_28790416',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c72726a4f8d68f11b4a445f39bf05cf3bde93663' => 
    array (
      0 => '/home/vol1000_8/epizy.com/epiz_34193542/htdocs/custom/templates/Nexus/template_settings/tpl/widgets.tpl',
      1 => 1683960378,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_645f3317929765_28790416 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Widgets Content -->
<div class="card mb-3">
    <h3 class="card-header mb-3 text-center"><?php echo $_smarty_tpl->tpl_vars['WIDGETS_PAGE']->value;?>
</h3>
    <div class="card-body">
        <div class="alert bg-primary text-white">
            <h5><i class="icon fas fa-sticky-note"></i> <?php echo $_smarty_tpl->tpl_vars['NOTE']->value;?>
</h5>
            <?php echo $_smarty_tpl->tpl_vars['NOTE_WIDGETS']->value;?>

        </div>
    </div>
</div><?php }
}
