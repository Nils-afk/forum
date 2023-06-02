<?php
/* Smarty version 4.3.1, created on 2023-05-13 08:49:59
  from '/home/vol1000_8/epizy.com/epiz_34193542/htdocs/custom/templates/Nexus/template_settings/tpl/nexus.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_645f33178b3ef8_85457397',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1916e229e3d38b43d95394300ff3b5ce27763ef7' => 
    array (
      0 => '/home/vol1000_8/epizy.com/epiz_34193542/htdocs/custom/templates/Nexus/template_settings/tpl/nexus.tpl',
      1 => 1683960377,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_645f33178b3ef8_85457397 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Page Content -->
<div class="row">
    <div class="col-sm-3">
        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['TPL_PATH']->value)."navigation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    </div>

    <div class="col-sm-9">
        <div class="tab-content" id="v-pills-tabContent">
            <div class="tab-pane fade <?php if (empty($_smarty_tpl->tpl_vars['TPL_NAME_SESSION']->value) || $_smarty_tpl->tpl_vars['TPL_NAME_SESSION']->value == 'options') {?>show active<?php }?>"
                id="v-pills-options" role="tabpanel" aria-labelledby="v-pills-options-tab">
                <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['TPL_PATH']->value)."options.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
            </div>
            <div class="tab-pane fade <?php if ($_smarty_tpl->tpl_vars['TPL_NAME_SESSION']->value == 'colors') {?>show active<?php }?>" id="v-pills-colors"
                role="tabpanel" aria-labelledby="v-pills-colors-tab">
                <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['TPL_PATH']->value)."colors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
            </div>
            <div class="tab-pane fade <?php if ($_smarty_tpl->tpl_vars['TPL_NAME_SESSION']->value == 'navbar') {?>show active<?php }?>" id="v-pills-navbar"
                role="tabpanel" aria-labelledby="v-pills-navbar-tab">
                <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['TPL_PATH']->value)."navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
            </div>
            <div class="tab-pane fade <?php if ($_smarty_tpl->tpl_vars['TPL_NAME_SESSION']->value == 'connections') {?>show active<?php }?>" id="v-pills-connections"
                role="tabpanel" aria-labelledby="v-pills-connections-tab">
                <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['TPL_PATH']->value)."connections.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
            </div>
            <div class="tab-pane fade <?php if ($_smarty_tpl->tpl_vars['TPL_NAME_SESSION']->value == 'preloader') {?>show active<?php }?>" id="v-pills-preloader"
                role="tabpanel" aria-labelledby="v-pills-preloader-tab">
                <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['TPL_PATH']->value)."preloader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
            </div>
            <div class="tab-pane fade <?php if ($_smarty_tpl->tpl_vars['TPL_NAME_SESSION']->value == 'addons') {?>show active<?php }?>" id="v-pills-addons"
                role="tabpanel" aria-labelledby="v-pills-addons-tab">
                <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['TPL_PATH']->value)."addons.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
            </div>
            <div class="tab-pane fade <?php if ($_smarty_tpl->tpl_vars['TPL_NAME_SESSION']->value == 'widgets') {?>show active<?php }?>" id="v-pills-widgets"
                role="tabpanel" aria-labelledby="v-pills-widgets-tab">
                <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['TPL_PATH']->value)."widgets.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
            </div>
            <div class="tab-pane fade <?php if ($_smarty_tpl->tpl_vars['TPL_NAME_SESSION']->value == 'embed') {?>show active<?php }?>" id="v-pills-embed"
                role="tabpanel" aria-labelledby="v-pills-embed-tab">
                <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['TPL_PATH']->value)."embed.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
            </div>
            <div class="tab-pane fade <?php if ($_smarty_tpl->tpl_vars['TPL_NAME_SESSION']->value == 'updates') {?>show active<?php }?>" id="v-pills-updates"
                role="tabpanel" aria-labelledby="v-pills-updates-tab">
                <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['TPL_PATH']->value)."updates.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="confirmModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><?php echo $_smarty_tpl->tpl_vars['WARNING']->value;?>
</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php echo $_smarty_tpl->tpl_vars['INSTALL_CONFIRM']->value;?>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['CANCEL']->value;?>
</button>
                <a href="<?php echo $_smarty_tpl->tpl_vars['UPGRADE_LINK']->value;?>
" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['UPDATE']->value;?>
</a>
            </div>
        </div>
    </div>
</div>

<?php echo '<script'; ?>
 type="text/javascript">
    function showConfirmModal() {
        $('#confirmModal').modal().show();
    }
<?php echo '</script'; ?>
><?php }
}
