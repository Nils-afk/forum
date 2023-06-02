<?php
/* Smarty version 4.3.1, created on 2023-05-13 20:11:05
  from '/home/vol1000_8/epizy.com/epiz_34193542/htdocs/custom/templates/Nexus/user/alerts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_645fd2b9670d21_57238218',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '06e85d20eda224fff926c26e53e2641bcc8ba420' => 
    array (
      0 => '/home/vol1000_8/epizy.com/epiz_34193542/htdocs/custom/templates/Nexus/user/alerts.tpl',
      1 => 1683960380,
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
function content_645fd2b9670d21_57238218 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h2 class="ui header">
    <?php echo $_smarty_tpl->tpl_vars['TITLE']->value;?>

</h2>

<div class="ui stackable grid" id="alerts">
    <div class="ui centered row">
        <div class="ui six wide tablet four wide computer column">
            <?php $_smarty_tpl->_subTemplateRender('file:user/navigation.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>
        <div class="ui ten wide tablet twelve wide computer column">
            <div class="ui segment">
                <h3 class="ui header">
                    <?php echo $_smarty_tpl->tpl_vars['ALERTS']->value;?>

                    <?php if (count($_smarty_tpl->tpl_vars['ALERTS_LIST']->value)) {?>
                        <div class="res right floated">
                            <form action="<?php echo $_smarty_tpl->tpl_vars['DELETE_ALL_LINK']->value;?>
" method="post" style="display:inline">
                                <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
                                <button type="submit" class="ui mini negative button"><?php echo $_smarty_tpl->tpl_vars['DELETE_ALL']->value;?>
</button>
                            </form>
                        </div>
                    <?php }?>
                </h3>
                <?php if ((isset($_smarty_tpl->tpl_vars['ERROR']->value))) {?>
                    <div class="ui message icon announcement" style="border-top-style: solid; border-top-color: #d9534f;">
                        <i class="x icon" style="color: #d9534f;"></i>
                        <div class="content">
                            <?php echo $_smarty_tpl->tpl_vars['ERROR']->value;?>

                        </div>
                    </div>
                <?php }?>
                <div class="ui middle aligned relaxed selection list">
                    
                    <?php if (count($_smarty_tpl->tpl_vars['ALERTS_LIST']->value)) {?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ALERTS_LIST']->value, 'alert', false, 'name');
$_smarty_tpl->tpl_vars['alert']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['alert']->value) {
$_smarty_tpl->tpl_vars['alert']->do_else = false;
?>
                            <a class="item" href="<?php echo $_smarty_tpl->tpl_vars['alert']->value->view_link;?>
" data-toggle="popup">
                                <i class="angle right icon"></i>
                                <div class="content">
                                    <div class="description">
                                        <?php if ($_smarty_tpl->tpl_vars['alert']->value->read == 0) {?>
                                            <strong><?php echo $_smarty_tpl->tpl_vars['alert']->value->content;?>
</strong>
                                        <?php } else { ?>
                                            <?php echo $_smarty_tpl->tpl_vars['alert']->value->content;?>

                                        <?php }?>
                                        <br /><?php echo $_smarty_tpl->tpl_vars['alert']->value->date_nice;?>

                                    </div>
                                </div>
                            </a>
                            <div class="ui wide popup">
                                <h4><?php echo $_smarty_tpl->tpl_vars['alert']->value->content;?>
</h4>
                                <?php echo $_smarty_tpl->tpl_vars['alert']->value->date;?>

                            </div>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <?php } else { ?>
                        <div class="ui message icon announcement"
                            style="border-top-style: solid; border-top-color: #0275d8;">
                            <i class="info icon" style="color: #0275d8; margin-left: 0.5rem;"></i>
                            <div class="content">
                                <?php echo $_smarty_tpl->tpl_vars['NO_ALERTS']->value;?>

                            </div>
                        </div>
                    <?php }?>
                    
                </div>
            </div>
        </div>
    </div>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
