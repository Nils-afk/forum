<?php
/* Smarty version 4.3.1, created on 2023-05-13 09:07:11
  from '/home/vol1000_8/epizy.com/epiz_34193542/htdocs/custom/templates/Nexus/user/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_645f371fd08c36_62619277',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '035ef215c3af62c20567b9ae91c18b1e8e019e1e' => 
    array (
      0 => '/home/vol1000_8/epizy.com/epiz_34193542/htdocs/custom/templates/Nexus/user/index.tpl',
      1 => 1683960381,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:navbar.tpl' => 1,
    'file:user/navigation.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_645f371fd08c36_62619277 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h2 class="ui header">
    <?php echo $_smarty_tpl->tpl_vars['TITLE']->value;?>

</h2>

<div class="ui stackable grid" id="user">
    <div class="ui centered row">
        <div class="ui six wide tablet four wide computer column">
            <?php $_smarty_tpl->_subTemplateRender('file:user/navigation.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>
        <div class="ui ten wide tablet twelve wide computer column">
            <div class="ui segment">
                <h3 class="ui header"><?php echo $_smarty_tpl->tpl_vars['OVERVIEW']->value;?>
</h3>
                <div class="ui relaxed list">
                    
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['USER_DETAILS_VALUES']->value, 'value', false, 'name');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
                        <div class="item">
                            <i class="angle right icon"></i>
                            <div class="middle aligned content">
                                <span class="header"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</span>
                                <div class="description"><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</div>
                            </div>
                        </div>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    
                </div>
            </div>
            <?php if ((isset($_smarty_tpl->tpl_vars['FORUM_GRAPH']->value))) {?>
                <div class="ui segment">
                    <h3 class="ui header"><?php echo $_smarty_tpl->tpl_vars['FORUM_GRAPH']->value;?>
</h3>
                    <div id="chartWrapper">
                        <canvas id="dataChart" width="100%" height="40"></canvas>
                    </div>
                </div>
            <?php }?>
        </div>
    </div>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
