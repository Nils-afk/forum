<?php
/* Smarty version 4.3.1, created on 2023-05-13 08:49:59
  from '/home/vol1000_8/epizy.com/epiz_34193542/htdocs/custom/templates/Nexus/template_settings/tpl/updates.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_645f3317944580_70068317',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f58c5946c45298f065ca709ce98c6709e6f1586f' => 
    array (
      0 => '/home/vol1000_8/epizy.com/epiz_34193542/htdocs/custom/templates/Nexus/template_settings/tpl/updates.tpl',
      1 => 1683960378,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_645f3317944580_70068317 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Updates Content -->
<div class="card">
    <h3 class="card-header mb-3 text-center"><?php echo $_smarty_tpl->tpl_vars['UPDATES_PAGE']->value;?>
</h3>
    <div class="card-body">
        <?php if ((isset($_smarty_tpl->tpl_vars['NEW_UPDATE_NEXUS']->value))) {?>
            <div class="alert <?php if ($_smarty_tpl->tpl_vars['NEW_UPDATE_URGENT_NEXUS']->value == true) {?>bg-danger<?php } else { ?>bg-primary<?php }?> text-white">
                <?php echo $_smarty_tpl->tpl_vars['NEW_UPDATE_NEXUS']->value;?>

                <hr />
                <?php echo $_smarty_tpl->tpl_vars['CURRENT_VERSION_NEXUS']->value;?>

                <br />
                <?php echo $_smarty_tpl->tpl_vars['NEW_VERSION_NEXUS']->value;?>

            </div>
            <h4><?php echo $_smarty_tpl->tpl_vars['INSTRUCTIONS']->value;?>
</h4>
            <p><?php echo $_smarty_tpl->tpl_vars['INSTRUCTIONS_VALUE']->value;?>
</p>
            <hr />
            <a href="<?php echo $_smarty_tpl->tpl_vars['DOWNLOAD_LINK']->value;?>
" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['DOWNLOAD']->value;?>
</a>
            <button class="btn btn-primary" type="button" onclick="showConfirmModal()"><?php echo $_smarty_tpl->tpl_vars['UPDATE']->value;?>
</button>
        <?php } elseif ((isset($_smarty_tpl->tpl_vars['UPDATE_CHECK_ERROR_NEXUS']->value))) {?>
            <div class="alert bg-danger text-white">
                <span><i class="icon fa fa-x"></i>&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['UPDATE_CHECK_ERROR_NEXUS']->value;?>
</span>
            </div>
            <a href="<?php echo $_smarty_tpl->tpl_vars['CHECK_AGAIN_LINK']->value;?>
" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['CHECK_AGAIN']->value;?>
</a>
        <?php } else { ?>
            <div class="alert bg-success text-white">
                <span><i class="icon fa fa-check"></i>&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['UP_TO_DATE']->value;?>
</span>
            </div>
            <a href="<?php echo $_smarty_tpl->tpl_vars['CHECK_AGAIN_LINK']->value;?>
" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['CHECK_AGAIN']->value;?>
</a>
        <?php }?>
    </div>
</div><?php }
}
