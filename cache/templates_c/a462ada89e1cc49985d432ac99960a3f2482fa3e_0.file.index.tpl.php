<?php
/* Smarty version 4.3.1, created on 2023-05-12 23:39:26
  from '/home/vol1000_8/epizy.com/epiz_34193542/htdocs/custom/templates/DefaultRevamp/craftingstore/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_645eb20e1c0227_29760980',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a462ada89e1cc49985d432ac99960a3f2482fa3e' => 
    array (
      0 => '/home/vol1000_8/epizy.com/epiz_34193542/htdocs/custom/templates/DefaultRevamp/craftingstore/index.tpl',
      1 => 1683927157,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:navbar.tpl' => 1,
    'file:craftingstore/parts/nav.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_645eb20e1c0227_29760980 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h2 class="ui header">
    <?php echo $_smarty_tpl->tpl_vars['STORE']->value;?>

</h2>

<div class="ui stackable grid">
    <div class="ui centered row">
        <div class="ui sixteen wide column">
            <div class="ui padded segment">

                <?php $_smarty_tpl->_subTemplateRender('file:craftingstore/parts/nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                <div class="ui bottom attached segment">
                    <?php echo $_smarty_tpl->tpl_vars['CONTENT']->value;?>

                </div>
            </div>
        </div>
    </div>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
