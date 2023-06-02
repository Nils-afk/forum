<?php
/* Smarty version 4.3.1, created on 2023-05-13 08:48:13
  from '/home/vol1000_8/epizy.com/epiz_34193542/htdocs/custom/templates/DefaultRevamp/template_settings/settings.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_645f32adc30e28_17237295',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b2154c2611f3b83de1c1c6b359126012bdda7b05' => 
    array (
      0 => '/home/vol1000_8/epizy.com/epiz_34193542/htdocs/custom/templates/DefaultRevamp/template_settings/settings.tpl',
      1 => 1683900936,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_645f32adc30e28_17237295 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="" method="post">
    <div class="form-group">
        <label for="inputDarkMode"><?php echo $_smarty_tpl->tpl_vars['DARK_MODE']->value;?>
</label>
        <select name="darkMode" class="form-control" id="inputDarkMode">
            <option value="0" <?php if ($_smarty_tpl->tpl_vars['DARK_MODE_VALUE']->value == '0') {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['DISABLED']->value;?>
</option>
            <option value="1" <?php if ($_smarty_tpl->tpl_vars['DARK_MODE_VALUE']->value == '1') {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['ENABLED']->value;?>
</option>
        </select>
    </div>
    <div class="form-group">
        <label for="inputNavbarColour"><?php echo $_smarty_tpl->tpl_vars['NAVBAR_COLOUR']->value;?>
</label>
        <select name="navbarColour" class="form-control" id="inputNavbarColour">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['NAVBAR_COLOURS']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['item']->value['value'];?>
" <?php if ($_smarty_tpl->tpl_vars['item']->value['selected']) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
    </div>
    <div class="form-group">
        <label for="inputHomeCustomContent"><?php echo $_smarty_tpl->tpl_vars['HOME_CUSTOM_CONTENT']->value;?>
</label>
        <textarea name="home_custom_content" id="inputHomeCustomContent"></textarea>
    </div>
    <div class="form-group">
        <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
        <input type="submit" class="btn btn-primary" value="<?php echo $_smarty_tpl->tpl_vars['SUBMIT']->value;?>
">
    </div>
</form><?php }
}
