<?php
/* Smarty version 4.3.1, created on 2023-05-12 17:00:39
  from '/home/vol1000_8/epizy.com/epiz_34193542/htdocs/custom/templates/DefaultRevamp/cookies.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_645e5497643578_44396817',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'be5c5786ecb103a166394d1f9e9a386298d425be' => 
    array (
      0 => '/home/vol1000_8/epizy.com/epiz_34193542/htdocs/custom/templates/DefaultRevamp/cookies.tpl',
      1 => 1683900917,
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
function content_645e5497643578_44396817 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h2 class="ui header">
    <?php echo $_smarty_tpl->tpl_vars['COOKIE_NOTICE_HEADER']->value;?>

</h2>

<div class="ui padded segment" id="cookies">
    <?php echo $_smarty_tpl->tpl_vars['COOKIE_NOTICE']->value;?>


    <div class="ui divider"></div>
    <div class="ui blue button" onclick="configureCookies()"><?php echo $_smarty_tpl->tpl_vars['UPDATE_SETTINGS']->value;?>
</div>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
