<?php
/* Smarty version 4.3.1, created on 2023-05-13 08:50:53
  from '/home/vol1000_8/epizy.com/epiz_34193542/htdocs/custom/templates/Nexus/404.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_645f334d373d68_69985549',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5c4d530b437a0ed038ffc07c4f862ddd3a6dc2b9' => 
    array (
      0 => '/home/vol1000_8/epizy.com/epiz_34193542/htdocs/custom/templates/Nexus/404.tpl',
      1 => 1683960290,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_645f334d373d68_69985549 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="ui container" id="error-404">
    <div class="ui segment">
        <h2 class="ui header"><?php echo $_smarty_tpl->tpl_vars['404_TITLE']->value;?>
</h2>
        <div class="ui divider"></div>
        <p><?php echo $_smarty_tpl->tpl_vars['CONTENT']->value;?>
</p>
        <div class="ui buttons">
            <button class="ui primary button" onclick="javascript:history.go(-1)"><?php echo $_smarty_tpl->tpl_vars['BACK']->value;?>
</button>
            <div class="or"></div>
            <a class="ui positive button" href="<?php echo $_smarty_tpl->tpl_vars['SITE_HOME']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
</a>
        </div>
        <div class="ui divider"></div>
        <p><?php echo $_smarty_tpl->tpl_vars['ERROR']->value;?>
</p>
    </div>
</div>
</body>

</html><?php }
}
