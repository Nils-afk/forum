<?php
/* Smarty version 4.3.1, created on 2023-05-12 17:00:54
  from '/home/vol1000_8/epizy.com/epiz_34193542/htdocs/custom/templates/DefaultRevamp/login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_645e54a6561e59_62995131',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e75c4ebb611721e1a185aa723bb34938336b5db4' => 
    array (
      0 => '/home/vol1000_8/epizy.com/epiz_34193542/htdocs/custom/templates/DefaultRevamp/login.tpl',
      1 => 1683900933,
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
function content_645e54a6561e59_62995131 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h2 class="ui header">
    <?php echo $_smarty_tpl->tpl_vars['SIGN_IN']->value;?>

</h2>

<?php if (count($_smarty_tpl->tpl_vars['ERROR']->value)) {?>
<div class="ui error icon message">
    <i class="x icon"></i>
    <div class="content">
        <div class="header"><?php echo $_smarty_tpl->tpl_vars['ERROR_TITLE']->value;?>
</div>
        <ul class="list">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ERROR']->value, 'error');
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
</div>
<?php }?>

<div class="ui padded segment" id="login">
    <div class="ui stackable grid">
        <div class="ui centered row">
            <div class="ui sixteen wide tablet ten wide computer column">
                <form class="ui form" action="" method="post" id="form-login">
                    <?php if ((isset($_smarty_tpl->tpl_vars['EMAIL']->value))) {?>
                    <div class="field">
                        <label><?php echo $_smarty_tpl->tpl_vars['EMAIL']->value;?>
</label>
                        <input type="email" name="email" id="email" value="<?php echo $_smarty_tpl->tpl_vars['USERNAME_INPUT']->value;?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['EMAIL']->value;?>
"
                            tabindex="1">
                    </div>
                    <?php } else { ?>
                    <div class="field">
                        <label><?php echo $_smarty_tpl->tpl_vars['USERNAME']->value;?>
</label>
                        <input type="text" name="username" id="username" value="<?php echo $_smarty_tpl->tpl_vars['USERNAME_INPUT']->value;?>
"
                            placeholder="<?php echo $_smarty_tpl->tpl_vars['USERNAME']->value;?>
" tabindex="1">
                    </div>
                    <?php }?>
                    <div class="field">
                        <label><?php echo $_smarty_tpl->tpl_vars['PASSWORD']->value;?>
</label>
                        <input type="password" name="password" id="password" placeholder="<?php echo $_smarty_tpl->tpl_vars['PASSWORD']->value;?>
" tabindex="2">
                    </div>
                    <div class="inline field">
                        <div class="ui checkbox">
                            <input type="checkbox" name="remember" id="remember" value="1" tabindex="3">
                            <label for="remember"><?php echo $_smarty_tpl->tpl_vars['REMEMBER_ME']->value;?>
</label>
                        </div>
                    </div>
                    <?php if ($_smarty_tpl->tpl_vars['CAPTCHA']->value) {?>
                    <div class="field">
                        <?php echo $_smarty_tpl->tpl_vars['CAPTCHA']->value;?>

                    </div>
                    <?php }?>
                    <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['FORM_TOKEN']->value;?>
">
                    <input type="submit" class="ui primary button" value="<?php echo $_smarty_tpl->tpl_vars['SIGN_IN']->value;?>
" tabindex="5">
                    <a class="ui negative button right floated" href="<?php echo $_smarty_tpl->tpl_vars['FORGOT_PASSWORD_URL']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['FORGOT_PASSWORD']->value;?>
</a>
                </form>
                <?php if ($_smarty_tpl->tpl_vars['OAUTH_AVAILABLE']->value) {?>
                <div class="ui horizontal divider"><?php echo $_smarty_tpl->tpl_vars['OR']->value;?>
</div>
                <div class="ui equal width two column grid middle aligned">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['OAUTH_PROVIDERS']->value, 'meta', false, 'name');
$_smarty_tpl->tpl_vars['meta']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['meta']->value) {
$_smarty_tpl->tpl_vars['meta']->do_else = false;
?>
                    <div class="column">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['meta']->value['url'];?>
" class="ui fluid button left floated" <?php if ($_smarty_tpl->tpl_vars['meta']->value['button_css']) {?>style="<?php echo $_smarty_tpl->tpl_vars['meta']->value['button_css'];?>
"<?php }?>>
                            <?php if ($_smarty_tpl->tpl_vars['meta']->value['logo_url']) {?>
                                <img src="<?php echo $_smarty_tpl->tpl_vars['meta']->value['logo_url'];?>
" <?php if ($_smarty_tpl->tpl_vars['meta']->value['logo_css']) {?>style="<?php echo $_smarty_tpl->tpl_vars['meta']->value['logo_css'];?>
"<?php }?> alt="<?php echo ucfirst($_smarty_tpl->tpl_vars['name']->value);?>
">
                            <?php } elseif ($_smarty_tpl->tpl_vars['meta']->value['icon']) {?>
                                <i class="<?php echo $_smarty_tpl->tpl_vars['meta']->value['icon'];?>
 fa-lg"></i>
                            <?php }?>
                            <span <?php if ($_smarty_tpl->tpl_vars['meta']->value['text_css']) {?>style="<?php echo $_smarty_tpl->tpl_vars['meta']->value['text_css'];?>
"<?php }?>><?php echo $_smarty_tpl->tpl_vars['meta']->value['log_in_with'];?>
</span>
                        </a>
                    </div>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
                <?php }?>
                <div class="ui horizontal divider"><?php echo $_smarty_tpl->tpl_vars['NOT_REGISTERED_YET']->value;?>
</div>
                <div class="ui center aligned">
                    <a class="ui large positive button" href="<?php echo $_smarty_tpl->tpl_vars['REGISTER_URL']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['REGISTER']->value;?>
</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
