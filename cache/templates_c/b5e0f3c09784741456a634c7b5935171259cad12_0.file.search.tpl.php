<?php
/* Smarty version 4.3.1, created on 2023-05-12 23:42:46
  from '/home/vol1000_8/epizy.com/epiz_34193542/htdocs/custom/templates/DefaultRevamp/suggestions/search.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_645eb2d6ba5822_36045694',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b5e0f3c09784741456a634c7b5935171259cad12' => 
    array (
      0 => '/home/vol1000_8/epizy.com/epiz_34193542/htdocs/custom/templates/DefaultRevamp/suggestions/search.tpl',
      1 => 1683927736,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_645eb2d6ba5822_36045694 (Smarty_Internal_Template $_smarty_tpl) {
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
