<?php
/* Smarty version 4.3.1, created on 2023-05-12 20:48:29
  from '/home/vol1000_8/epizy.com/epiz_34193542/htdocs/custom/panel_templates/Default/integrations/minecraft/integration_settings.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_645e89fd655306_07138000',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8dbd860675f5b6cceba2e2c0d6cf4338fee91aac' => 
    array (
      0 => '/home/vol1000_8/epizy.com/epiz_34193542/htdocs/custom/panel_templates/Default/integrations/minecraft/integration_settings.tpl',
      1 => 1683900911,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_645e89fd655306_07138000 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="" method="post">
    <div class="form-group custom-control custom-switch">
        <input id="inputPremiumAccounts" name="premium_account" type="checkbox" class="custom-control-input js-check-change" <?php if ($_smarty_tpl->tpl_vars['PREMIUM_ACCOUNTS_VALUE']->value) {?> checked<?php }?>/>
        <label for="inputPremiumAccounts" class="custom-control-label">
            <?php echo $_smarty_tpl->tpl_vars['PREMIUM_ACCOUNTS']->value;?>

        </label>
    </div>
    <div class="form-group custom-control custom-switch">
        <input id="inputUsernameRegistration" name="username_registration" type="checkbox" class="custom-control-input js-check-change" <?php if ($_smarty_tpl->tpl_vars['REQUIRE_USERNAME_REGISTRATION_VALUE']->value) {?> checked<?php }?>/>
        <label for="inputUsernameRegistration" class="custom-control-label">
            <?php echo $_smarty_tpl->tpl_vars['REQUIRE_USERNAME_REGISTRATION']->value;?>

        </label>
    </div>
    <div class="form-group">
        <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
        <input type="hidden" name="action" value="integration_settings">
        <input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['SUBMIT']->value;?>
" class="btn btn-primary">
    </div>
</form><?php }
}
