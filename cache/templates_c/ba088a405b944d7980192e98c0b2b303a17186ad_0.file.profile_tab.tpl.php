<?php
/* Smarty version 4.3.1, created on 2023-05-13 09:08:00
  from '/home/vol1000_8/epizy.com/epiz_34193542/htdocs/custom/templates/Nexus/friends/profile_tab.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_645f3750bcce00_48473020',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ba088a405b944d7980192e98c0b2b303a17186ad' => 
    array (
      0 => '/home/vol1000_8/epizy.com/epiz_34193542/htdocs/custom/templates/Nexus/friends/profile_tab.tpl',
      1 => 1683960324,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_645f3750bcce00_48473020 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['FRIENDS']->value))) {?>

	<?php if ((isset($_smarty_tpl->tpl_vars['FRIENDS']->value['button']))) {?>
		<?php if (($_smarty_tpl->tpl_vars['FRIENDS']->value['button']['action'] == 'add_friend')) {?>
			<?php $_smarty_tpl->_assignInScope('FRIENDS_BUTTON_CLASS', 'ui tiny green labeled icon button');?>
			<?php $_smarty_tpl->_assignInScope('FRIENDS_BUTTON_ICON', '<i class="plus icon"></i>');?>
		<?php } elseif (($_smarty_tpl->tpl_vars['FRIENDS']->value['button']['action'] == 'remove_friend')) {?>
			<?php $_smarty_tpl->_assignInScope('FRIENDS_BUTTON_CLASS', 'ui tiny red labeled icon button');?>
			<?php $_smarty_tpl->_assignInScope('FRIENDS_BUTTON_ICON', '<i class="times icon"></i>');?>
		<?php } elseif (($_smarty_tpl->tpl_vars['FRIENDS']->value['button']['action'] == 'accept_request')) {?>
			<?php $_smarty_tpl->_assignInScope('FRIENDS_BUTTON_CLASS', 'ui tiny olive labeled icon button');?>
			<?php $_smarty_tpl->_assignInScope('FRIENDS_BUTTON_ICON', '<i class="check icon"></i>');?>
		<?php } elseif (($_smarty_tpl->tpl_vars['FRIENDS']->value['button']['action'] == 'cancel_request')) {?>
			<?php $_smarty_tpl->_assignInScope('FRIENDS_BUTTON_CLASS', 'ui tiny orange labeled icon button');?>
			<?php $_smarty_tpl->_assignInScope('FRIENDS_BUTTON_ICON', '<i class="minus icon"></i>');?>
		<?php }?>
	<?php }?>

	<h3 class="ui header" style="display: flex; align-items: center; justify-content: space-between;">
		<?php echo $_smarty_tpl->tpl_vars['FRIENDS']->value['title'];?>

		<?php if ((isset($_smarty_tpl->tpl_vars['FRIENDS']->value['button']))) {?>
			<form action="" method="post" id="form-friend" style="float: right;">
				<input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
				<input type="hidden" name="action" value="<?php echo $_smarty_tpl->tpl_vars['FRIENDS']->value['button']['action'];?>
">
				<button type="submit" class="<?php echo $_smarty_tpl->tpl_vars['FRIENDS_BUTTON_CLASS']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['FRIENDS_BUTTON_ICON']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['FRIENDS']->value['button']['text'];?>
</button>
			</form>
		<?php }?>
	</h3>

	<?php if (!empty($_smarty_tpl->tpl_vars['FRIENDS']->value['list'])) {?>
		<div class="ui stackable grid">
			<div class="ui row" style="margin-top: 1rem;">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FRIENDS']->value['list'], 'friend');
$_smarty_tpl->tpl_vars['friend']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['friend']->value) {
$_smarty_tpl->tpl_vars['friend']->do_else = false;
?>
					<div class="four wide column center aligned">
						<img class="ui tiny image avatar" src="<?php echo $_smarty_tpl->tpl_vars['friend']->value['avatar'];?>
">
						<h3 style="margin-top: 0.5rem; margin-bottom: 2rem;">
							<a style="<?php echo $_smarty_tpl->tpl_vars['friend']->value['style'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['friend']->value['profile'];?>
"><?php echo $_smarty_tpl->tpl_vars['friend']->value['nickname'];?>
</a>
						</h3>
					</div>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</div>
		</div>
	<?php } else { ?>
		<p><?php echo $_smarty_tpl->tpl_vars['FRIENDS']->value['no_friends'];?>
</p>
	<?php }?>

<?php }
}
}
