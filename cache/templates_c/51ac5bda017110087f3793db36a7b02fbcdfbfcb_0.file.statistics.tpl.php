<?php
/* Smarty version 4.3.1, created on 2023-05-12 16:35:51
  from '/home/vol1000_8/epizy.com/epiz_34193542/htdocs/custom/templates/DefaultRevamp/widgets/statistics.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_645e4ec73cd258_14288618',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '51ac5bda017110087f3793db36a7b02fbcdfbfcb' => 
    array (
      0 => '/home/vol1000_8/epizy.com/epiz_34193542/htdocs/custom/templates/DefaultRevamp/widgets/statistics.tpl',
      1 => 1683900941,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_645e4ec73cd258_14288618 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="ui fluid card" id="widget-statistics">
    <div class="content">
        <h4 class="ui header"><?php echo $_smarty_tpl->tpl_vars['STATISTICS']->value;?>
</h4>
        <div class="description">
            <div class="ui list">
                <?php if ((isset($_smarty_tpl->tpl_vars['FORUM_STATISTICS']->value))) {?>
                <div class="item">
                    <span class="text"><?php echo $_smarty_tpl->tpl_vars['TOTAL_THREADS']->value;?>
</span>
                    <div class="description right floated"><b><?php echo $_smarty_tpl->tpl_vars['TOTAL_THREADS_VALUE']->value;?>
</b></div>
                </div>
                <div class="item">
                    <span class="text"><?php echo $_smarty_tpl->tpl_vars['TOTAL_POSTS']->value;?>
</span>
                    <div class="description right floated"><b><?php echo $_smarty_tpl->tpl_vars['TOTAL_POSTS_VALUE']->value;?>
</b></div>
                </div>
                <?php }?>
                <div class="item">
                    <span class="text"><?php echo $_smarty_tpl->tpl_vars['USERS_REGISTERED']->value;?>
</span>
                    <div class="description right floated"><b><?php echo $_smarty_tpl->tpl_vars['USERS_REGISTERED_VALUE']->value;?>
</b></div>
                </div>
                <div class="item" style="display: flex;">
                    <span class="text" style="width: 100%;"><?php echo $_smarty_tpl->tpl_vars['LATEST_MEMBER']->value;?>
</span>
                    <div class="description right floated">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['LATEST_MEMBER_VALUE']->value['profile'];?>
" data-poload="<?php echo $_smarty_tpl->tpl_vars['USER_INFO_URL']->value;
echo $_smarty_tpl->tpl_vars['LATEST_MEMBER_VALUE']->value['id'];?>
"
                            style="<?php echo $_smarty_tpl->tpl_vars['LATEST_MEMBER_VALUE']->value['style'];?>
"><b><?php echo $_smarty_tpl->tpl_vars['LATEST_MEMBER_VALUE']->value['nickname'];?>
</b></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php }
}
