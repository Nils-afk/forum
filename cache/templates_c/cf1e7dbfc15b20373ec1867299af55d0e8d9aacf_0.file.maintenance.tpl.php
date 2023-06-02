<?php
/* Smarty version 4.3.1, created on 2023-05-13 18:30:08
  from '/home/vol1000_8/epizy.com/epiz_34193542/htdocs/custom/templates/Nexus/maintenance.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_645fbb105674a2_75520731',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cf1e7dbfc15b20373ec1867299af55d0e8d9aacf' => 
    array (
      0 => '/home/vol1000_8/epizy.com/epiz_34193542/htdocs/custom/templates/Nexus/maintenance.tpl',
      1 => 1683960335,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_645fbb105674a2_75520731 (Smarty_Internal_Template $_smarty_tpl) {
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
