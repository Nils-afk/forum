<?php
/* Smarty version 4.3.1, created on 2023-05-13 08:49:44
  from '/home/vol1000_8/epizy.com/epiz_34193542/htdocs/custom/templates/Nexus/suggestions/search.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_645f33084a47d9_00266671',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '62bf7560c15180aa344199cdd1d67dcd63bf2a1a' => 
    array (
      0 => '/home/vol1000_8/epizy.com/epiz_34193542/htdocs/custom/templates/Nexus/suggestions/search.tpl',
      1 => 1683960368,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_645f33084a47d9_00266671 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="ui segment">
    <h4><?php echo $_smarty_tpl->tpl_vars['SEARCH_KEYWORD']->value;?>
</h4>
    <hr>
    <div class="ui search">
        <div class="ui icon input"></br></br>
            <input class="prompt" type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['SEARCH_KEYWORD']->value;?>
">
            <i class="search icon"></i>
        </div>
        <div class="results"></div>
    </div>
</div><?php }
}
