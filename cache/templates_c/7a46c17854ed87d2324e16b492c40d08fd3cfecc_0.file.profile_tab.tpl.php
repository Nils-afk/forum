<?php
/* Smarty version 4.3.1, created on 2023-05-13 09:08:00
  from '/home/vol1000_8/epizy.com/epiz_34193542/htdocs/custom/templates/Nexus/forum/profile_tab.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_645f3750bb79c2_81430136',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7a46c17854ed87d2324e16b492c40d08fd3cfecc' => 
    array (
      0 => '/home/vol1000_8/epizy.com/epiz_34193542/htdocs/custom/templates/Nexus/forum/profile_tab.tpl',
      1 => 1683960321,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_645f3750bb79c2_81430136 (Smarty_Internal_Template $_smarty_tpl) {
?><h3 class="ui header">
    <?php echo $_smarty_tpl->tpl_vars['PF_LATEST_POSTS_TITLE']->value;?>

</h3>

<?php if ((isset($_smarty_tpl->tpl_vars['NO_POSTS']->value))) {?>
    <div class="ui message icon announcement" style="border-top-style: solid; border-top-color: #0275d8;">
        <i class="info icon" style="color: #0275d8; margin-left: 0.5rem;"></i>
        <div class="content">
            <?php echo $_smarty_tpl->tpl_vars['NO_POSTS']->value;?>

        </div>
    </div>
<?php } else { ?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PF_LATEST_POSTS']->value, 'post');
$_smarty_tpl->tpl_vars['post']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->do_else = false;
?>
        <h4 class="ui dividing header">
            <div class="sub header right floated" data-toggle="tooltip" data-content="<?php echo $_smarty_tpl->tpl_vars['post']->value['date_full'];?>
"><?php echo $_smarty_tpl->tpl_vars['post']->value['date_friendly'];?>

            </div>
            <a href="<?php echo $_smarty_tpl->tpl_vars['post']->value['link'];?>
" data-toggle="popup"><?php echo $_smarty_tpl->tpl_vars['post']->value['title'];?>
</a>
            <div class="ui wide popup">
                <h4 class="ui header"><?php echo $_smarty_tpl->tpl_vars['post']->value['title'];?>
</h4>
                <?php echo $_smarty_tpl->tpl_vars['post']->value['date_full'];?>

            </div>
        </h4>
        <div class="forum_post"><?php echo $_smarty_tpl->tpl_vars['post']->value['content'];?>
</div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
}
