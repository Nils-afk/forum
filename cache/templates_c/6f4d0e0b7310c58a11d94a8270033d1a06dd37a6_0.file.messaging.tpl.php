<?php
/* Smarty version 4.3.1, created on 2023-05-13 20:11:08
  from '/home/vol1000_8/epizy.com/epiz_34193542/htdocs/custom/templates/Nexus/user/messaging.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_645fd2bc9a2570_86365853',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6f4d0e0b7310c58a11d94a8270033d1a06dd37a6' => 
    array (
      0 => '/home/vol1000_8/epizy.com/epiz_34193542/htdocs/custom/templates/Nexus/user/messaging.tpl',
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
function content_645fd2bc9a2570_86365853 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h2 class="ui header">
    <?php echo $_smarty_tpl->tpl_vars['TITLE']->value;?>

</h2>

<div class="ui stackable grid" id="messages">
    <div class="ui centered row">
        <div class="ui six wide tablet four wide computer column">
            <?php $_smarty_tpl->_subTemplateRender('file:user/navigation.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>
        <div class="ui ten wide tablet twelve wide computer column">
            <div class="ui segment">
                <h3 class="ui header"><?php echo $_smarty_tpl->tpl_vars['MESSAGING']->value;?>

                    <?php if ((isset($_smarty_tpl->tpl_vars['NEW_MESSAGE']->value))) {?>
                        <div class="res right floated">
                            <a class="ui mini primary button" href="<?php echo $_smarty_tpl->tpl_vars['NEW_MESSAGE_LINK']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['NEW_MESSAGE']->value;?>
</a>
                        </div>
                    <?php }?>
                </h3>
                
                <?php if (count($_smarty_tpl->tpl_vars['MESSAGES']->value)) {?>
                    <table class="ui fixed single line selectable unstackable small padded res table">
                        <thead>
                            <tr>
                                <th class="nine wide">
                                    <h5><?php echo $_smarty_tpl->tpl_vars['MESSAGE_TITLE']->value;?>
</h5>
                                </th>
                                <th class="seven wide">
                                    <h5><?php echo $_smarty_tpl->tpl_vars['LAST_MESSAGE']->value;?>
</h5>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MESSAGES']->value, 'message');
$_smarty_tpl->tpl_vars['message']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['message']->value) {
$_smarty_tpl->tpl_vars['message']->do_else = false;
?>
                                <tr>
                                    <td>
                                        <h5 class="ui header">
                                            <div class="content">
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['message']->value['link'];?>
" data-toggle="popup"><?php echo $_smarty_tpl->tpl_vars['message']->value['title'];?>
</a>
                                                <div class="ui wide popup">
                                                    <h4 class="ui header"><?php echo $_smarty_tpl->tpl_vars['message']->value['title'];?>
</h4>
                                                    <?php echo $_smarty_tpl->tpl_vars['message']->value['participants'];?>

                                                </div>
                                                <div class="sub header"><?php echo $_smarty_tpl->tpl_vars['message']->value['participants'];?>
</div>
                                            </div>
                                        </h5>
                                    </td>
                                    <td>
                                        <h5 class="ui image header">
                                            <img src="<?php echo $_smarty_tpl->tpl_vars['message']->value['last_message_user_avatar'];?>
" class="ui mini circular image">
                                            <div class="content">
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['message']->value['last_message_user_profile'];?>
"
                                                    style="<?php echo $_smarty_tpl->tpl_vars['message']->value['last_message_user_style'];?>
"
                                                    data-poload="<?php echo $_smarty_tpl->tpl_vars['USER_INFO_URL']->value;
echo $_smarty_tpl->tpl_vars['message']->value['last_message_user_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['message']->value['last_message_user'];?>
</a>
                                                <div class="sub header" data-toggle="tooltip"
                                                    data-content="<?php echo $_smarty_tpl->tpl_vars['message']->value['last_message_date_full'];?>
">
                                                    <?php echo $_smarty_tpl->tpl_vars['message']->value['last_message_date'];?>
</div>
                                            </div>
                                        </h5>
                                    </td>
                                </tr>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </tbody>
                    </table>
                    <?php echo $_smarty_tpl->tpl_vars['PAGINATION']->value;?>

                <?php } else { ?>
                    <div class="ui message icon announcement" style="border-top-style: solid; border-top-color: #0275d8;">
                        <i class="info icon" style="color: #0275d8; margin-left: 0.5rem;"></i>
                        <div class="content">
                            <?php echo $_smarty_tpl->tpl_vars['NO_MESSAGES']->value;?>

                        </div>
                    </div>
                <?php }?>
                
            </div>
        </div>
    </div>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
