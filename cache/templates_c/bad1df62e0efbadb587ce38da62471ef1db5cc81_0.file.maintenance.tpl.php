<?php
/* Smarty version 4.3.1, created on 2023-05-12 20:27:23
  from '/home/vol1000_8/epizy.com/epiz_34193542/htdocs/custom/templates/DefaultRevamp/maintenance.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_645e850bc0a2b7_28664311',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bad1df62e0efbadb587ce38da62471ef1db5cc81' => 
    array (
      0 => '/home/vol1000_8/epizy.com/epiz_34193542/htdocs/custom/templates/DefaultRevamp/maintenance.tpl',
      1 => 1683900933,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_645e850bc0a2b7_28664311 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="ui container" id="maintenance">
    <div class="ui segment">
        <h2 class="ui header"><?php echo $_smarty_tpl->tpl_vars['MAINTENANCE_TITLE']->value;?>
</h2>
        <div class="ui divider"></div>
        <p><?php echo $_smarty_tpl->tpl_vars['MAINTENANCE_MESSAGE']->value;?>
</p>
        <div class="ui buttons">
            <button class="ui positive button" onclick="window.location.reload()"><?php echo $_smarty_tpl->tpl_vars['RETRY']->value;?>
</button>
        </div>
        <?php if ((isset($_smarty_tpl->tpl_vars['LOGIN']->value))) {?>
        <div class="ui divider"></div>
        <a href="<?php echo $_smarty_tpl->tpl_vars['LOGIN_LINK']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['LOGIN']->value;?>
</a>
        <?php }?>
    </div>
</div>
</body>

</html><?php }
}
