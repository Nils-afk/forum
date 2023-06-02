<?php
/* Smarty version 4.3.1, created on 2023-05-13 11:25:49
  from '/home/vol1000_8/epizy.com/epiz_34193542/htdocs/custom/panel_templates/Default/core/users_punishments_user.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_645f579dd2bbb8_94628699',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '20cd736d60bac485ebc0873c0c30a041c5d7ce28' => 
    array (
      0 => '/home/vol1000_8/epizy.com/epiz_34193542/htdocs/custom/panel_templates/Default/core/users_punishments_user.tpl',
      1 => 1683900903,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:sidebar.tpl' => 1,
    'file:navbar.tpl' => 1,
    'file:includes/update.tpl' => 1,
    'file:includes/alerts.tpl' => 1,
    'file:footer.tpl' => 1,
    'file:scripts.tpl' => 1,
  ),
),false)) {
function content_645f579dd2bbb8_94628699 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/vol1000_8/epizy.com/epiz_34193542/htdocs/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body id="page-top">

    <!-- Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php $_smarty_tpl->_subTemplateRender('file:sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main content -->
            <div id="content">

                <!-- Topbar -->
                <?php $_smarty_tpl->_subTemplateRender('file:navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800"><?php echo $_smarty_tpl->tpl_vars['PUNISHMENTS']->value;?>
</h1>
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?php echo $_smarty_tpl->tpl_vars['PANEL_INDEX']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['DASHBOARD']->value;?>
</a></li>
                            <li class="breadcrumb-item active"><?php echo $_smarty_tpl->tpl_vars['USER_MANAGEMENT']->value;?>
</li>
                            <li class="breadcrumb-item active"><?php echo $_smarty_tpl->tpl_vars['PUNISHMENTS']->value;?>
</li>
                        </ol>
                    </div>

                    <!-- Update Notification -->
                    <?php $_smarty_tpl->_subTemplateRender('file:includes/update.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                    <!-- Success and Error Alerts -->
                    <?php $_smarty_tpl->_subTemplateRender('file:includes/alerts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                    <div class="card shadow mb-4">
                        <div class="card-body">

                            <div class="row">
                                <div class="col-md-9">
                                    <h5 style="margin-top: 7px; margin-bottom: 7px;"><?php echo $_smarty_tpl->tpl_vars['VIEWING_USER']->value;?>
</h5>
                                </div>
                                <div class="col-md-3">
                                    <span class="float-md-right"><a href="<?php echo $_smarty_tpl->tpl_vars['BACK_LINK']->value;?>
"
                                            class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['BACK']->value;?>
</a></span>
                                </div>
                            </div>
                            <hr />

                            <?php if ((isset($_smarty_tpl->tpl_vars['RESET_AVATAR']->value))) {?>
                            <button data-toggle="modal" data-target="#resetAvatarModal" class="btn btn-warning" <?php if (($_smarty_tpl->tpl_vars['HAS_AVATAR']->value != true)) {?> disabled <?php }?>><?php echo $_smarty_tpl->tpl_vars['RESET_AVATAR']->value;?>
</button>
                            <?php }?>
                            <?php if ((isset($_smarty_tpl->tpl_vars['WARN']->value))) {?>
                            <a href="#" data-toggle="modal" data-target="#warnModal" class="btn btn-warning"><?php echo $_smarty_tpl->tpl_vars['WARN']->value;?>
</a>
                            <?php }?>
                            <?php if ((isset($_smarty_tpl->tpl_vars['BAN']->value))) {?>
                            <a href="#" data-toggle="modal" data-target="#banModal" class="btn btn-danger"><?php echo $_smarty_tpl->tpl_vars['BAN']->value;?>
</a>
                            <?php }?>
                            <?php if ((isset($_smarty_tpl->tpl_vars['BAN_IP']->value))) {?>
                            <a href="#" data-toggle="modal" data-target="#banIPModal"
                                class="btn btn-danger"><?php echo $_smarty_tpl->tpl_vars['BAN_IP']->value;?>
</a>
                            <?php }?>

                        </div>
                    </div>

                    <div class="card shadow mb-4">
                        <div class="card-body">

                            <h5><?php echo $_smarty_tpl->tpl_vars['PREVIOUS_PUNISHMENTS']->value;?>
</h5>
                            <hr />
                            <?php if (count($_smarty_tpl->tpl_vars['PREVIOUS_PUNISHMENTS_LIST']->value)) {?>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PREVIOUS_PUNISHMENTS_LIST']->value, 'punishment', false, NULL, 'punishments', array (
));
$_smarty_tpl->tpl_vars['punishment']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['punishment']->value) {
$_smarty_tpl->tpl_vars['punishment']->do_else = false;
?>
                            <div class="card shadow">
                                <div class="card-header">
                                    <?php if ($_smarty_tpl->tpl_vars['punishment']->value['type_numeric'] == 1) {?>
                                    <span class="badge badge-danger"><?php echo $_smarty_tpl->tpl_vars['punishment']->value['type'];?>
</span>
                                    <?php } elseif ($_smarty_tpl->tpl_vars['punishment']->value['type_numeric'] == 2 || $_smarty_tpl->tpl_vars['punishment']->value['type_numeric'] == 4) {?>
                                    <span class="badge badge-warning"><?php echo $_smarty_tpl->tpl_vars['punishment']->value['type'];?>
</span>
                                    <?php } elseif ($_smarty_tpl->tpl_vars['punishment']->value['type_numeric'] == 3) {?>
                                    <span class="badge badge-danger"><?php echo $_smarty_tpl->tpl_vars['punishment']->value['type'];?>
</span>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['punishment']->value['revoked'] == 1) {?>
                                    <span class="badge badge-info"><?php echo $_smarty_tpl->tpl_vars['REVOKED']->value;?>
</span>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['punishment']->value['type_numeric'] == 2 && $_smarty_tpl->tpl_vars['punishment']->value['acknowledged'] == 1) {?>
                                    <span class="badge badge-success"><?php echo $_smarty_tpl->tpl_vars['ACKNOWLEDGED']->value;?>
</span>
                                    <?php }?>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['punishment']->value['issued_by_profile'];?>
"
                                        style="<?php echo $_smarty_tpl->tpl_vars['punishment']->value['issued_by_style'];?>
"><?php echo $_smarty_tpl->tpl_vars['punishment']->value['issued_by_nickname'];?>
</a>
                                    <span class="pull-right"><span data-toggle="tooltip"
                                            data-original-title="<?php echo $_smarty_tpl->tpl_vars['punishment']->value['date_full'];?>
"><?php echo $_smarty_tpl->tpl_vars['punishment']->value['date_friendly'];?>
</span></span>
                                </div>
                                <div class="card-body">
                                    <?php echo $_smarty_tpl->tpl_vars['punishment']->value['reason'];?>

                                    <?php if ($_smarty_tpl->tpl_vars['punishment']->value['revoked'] == 0 && $_smarty_tpl->tpl_vars['punishment']->value['revoke_link'] != 'none') {?>
                                    <hr />
                                    <button class="btn btn-warning"
                                        onclick="showRevokeModal('<?php echo $_smarty_tpl->tpl_vars['punishment']->value['revoke_link'];?>
', '<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['punishment']->value['confirm_revoke_punishment'],"'","\'");?>
')"><?php echo $_smarty_tpl->tpl_vars['REVOKE']->value;?>
</button>
                                    <?php }?>
                                </div>
                            </div>
                            <br />
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            <?php } else { ?>
                            <div class="alert bg-primary text-white">
                                <?php echo $_smarty_tpl->tpl_vars['NO_PREVIOUS_PUNISHMENTS']->value;?>

                            </div>
                            <?php }?>

                        </div>
                    </div>

                    <!-- Spacing -->
                    <div style="height:1rem;"></div>

                    <!-- End Page Content -->
                </div>

                <!-- End Main Content -->
            </div>

            <?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <!-- End Content Wrapper -->
        </div>

        <?php if ((isset($_smarty_tpl->tpl_vars['RESET_AVATAR']->value))) {?>
        <div class="modal fade" id="resetAvatarModal" tabindex="-1" role="dialog"
            aria-labelledby="resetAvatarModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="warnModalLabel"><?php echo $_smarty_tpl->tpl_vars['RESET_AVATAR']->value;?>
</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="" method="post">
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="InputReason"><?php echo $_smarty_tpl->tpl_vars['REASON']->value;?>
</label>
                                <textarea class="form-control" id="InputReason" name="reason"></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-warning" data-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['CANCEL']->value;?>
</button>
                            <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
                            <input type="hidden" name="type" value="reset_avatar">
                            <input type="submit" class="btn btn-danger" value="<?php echo $_smarty_tpl->tpl_vars['SUBMIT']->value;?>
">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <?php }?>
        <?php if ((isset($_smarty_tpl->tpl_vars['WARN']->value))) {?>
        <div class="modal fade" id="warnModal" tabindex="-1" role="dialog" aria-labelledby="warnModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="warnModalLabel"><?php echo $_smarty_tpl->tpl_vars['WARN_USER']->value;?>
</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="" method="post">
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="InputReason"><?php echo $_smarty_tpl->tpl_vars['REASON']->value;?>
</label>
                                <textarea class="form-control" id="InputReason" name="reason"></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-warning" data-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['CANCEL']->value;?>
</button>
                            <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
                            <input type="hidden" name="type" value="warn">
                            <input type="submit" class="btn btn-danger" value="<?php echo $_smarty_tpl->tpl_vars['SUBMIT']->value;?>
">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <?php }?>
        <?php if ((isset($_smarty_tpl->tpl_vars['BAN']->value))) {?>
        <div class="modal fade" id="banModal" tabindex="-1" role="dialog" aria-labelledby="banModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="banModalLabel"><?php echo $_smarty_tpl->tpl_vars['BAN_USER']->value;?>
</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="" method="post">
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="InputReason"><?php echo $_smarty_tpl->tpl_vars['REASON']->value;?>
</label>
                                <textarea class="form-control" id="InputReason" name="reason"></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-warning" data-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['CANCEL']->value;?>
</button>
                            <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
                            <input type="hidden" name="type" value="ban">
                            <input type="submit" class="btn btn-danger" value="<?php echo $_smarty_tpl->tpl_vars['SUBMIT']->value;?>
">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <?php }?>
        <?php if ((isset($_smarty_tpl->tpl_vars['BAN_IP']->value))) {?>
        <div class="modal fade" id="banIPModal" tabindex="-1" role="dialog" aria-labelledby="banIPModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="banIPModalLabel"><?php echo $_smarty_tpl->tpl_vars['BAN_IP']->value;?>
</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="" method="post">
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="InputReason"><?php echo $_smarty_tpl->tpl_vars['REASON']->value;?>
</label>
                                <textarea class="form-control" id="InputReason" name="reason"></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-warning" data-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['CANCEL']->value;?>
</button>
                            <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
                            <input type="hidden" name="type" value="ban_ip">
                            <input type="submit" class="btn btn-danger" value="<?php echo $_smarty_tpl->tpl_vars['SUBMIT']->value;?>
">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <?php }?>
        <?php if ((isset($_smarty_tpl->tpl_vars['REVOKE_PERMISSION']->value))) {?>
        <div class="modal fade" id="revokeModal" tabindex="-1" role="dialog" aria-labelledby="revokeModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="revokeModalLabel"><?php echo $_smarty_tpl->tpl_vars['ARE_YOU_SURE']->value;?>
</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" id="revokeModalContents"></div>
                    <div class="modal-footer">
                        <form action="" method="post" id="revokeForm">
                            <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
" />
                            <button type="button" class="btn btn-warning" data-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['NO']->value;?>
</button>
                            <input type="submit" class="btn btn-danger" value="<?php echo $_smarty_tpl->tpl_vars['YES']->value;?>
" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php }?>

        <!-- End Wrapper -->
    </div>

    <?php $_smarty_tpl->_subTemplateRender('file:scripts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php echo '<script'; ?>
 type="text/javascript">
        function showRevokeModal(link, text) {
            $('#revokeModalContents').html(text);
            $('#revokeForm').attr('action', link);
            $('#revokeModal').modal().show();
        }
    <?php echo '</script'; ?>
>

</body>

</html>
<?php }
}
