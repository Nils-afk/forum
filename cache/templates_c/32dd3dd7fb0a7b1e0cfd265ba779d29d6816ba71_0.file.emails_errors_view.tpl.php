<?php
/* Smarty version 4.3.1, created on 2023-05-12 17:02:04
  from '/home/vol1000_8/epizy.com/epiz_34193542/htdocs/custom/panel_templates/Default/core/emails_errors_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_645e54ec3afcd6_89474992',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '32dd3dd7fb0a7b1e0cfd265ba779d29d6816ba71' => 
    array (
      0 => '/home/vol1000_8/epizy.com/epiz_34193542/htdocs/custom/panel_templates/Default/core/emails_errors_view.tpl',
      1 => 1683900893,
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
function content_645e54ec3afcd6_89474992 (Smarty_Internal_Template $_smarty_tpl) {
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
                        <h1 class="h3 mb-0 text-gray-800"><?php echo $_smarty_tpl->tpl_vars['EMAIL_ERRORS']->value;?>
</h1>
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?php echo $_smarty_tpl->tpl_vars['PANEL_INDEX']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['DASHBOARD']->value;?>
</a></li>
                            <li class="breadcrumb-item active"><?php echo $_smarty_tpl->tpl_vars['CONFIGURATION']->value;?>
</li>
                            <li class="breadcrumb-item"><a href="<?php echo $_smarty_tpl->tpl_vars['EMAILS_LINK']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['EMAILS']->value;?>
</a></li>
                            <li class="breadcrumb-item active"><?php echo $_smarty_tpl->tpl_vars['EMAIL_ERRORS']->value;?>
</li>
                        </ol>
                    </div>

                    <!-- Update Notification -->
                    <?php $_smarty_tpl->_subTemplateRender('file:includes/update.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <a class="btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['BACK_LINK']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['BACK']->value;?>
</a>
                            <hr />

                            <!-- Success and Error Alerts -->
                            <?php $_smarty_tpl->_subTemplateRender('file:includes/alerts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                            <h5><?php echo $_smarty_tpl->tpl_vars['VIEWING_ERROR']->value;?>
</h5>

                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <tr>
                                        <td><?php echo $_smarty_tpl->tpl_vars['TYPE']->value;?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['TYPE_VALUE']->value;?>
</td>
                                    </tr>
                                    <tr>
                                        <td><?php echo $_smarty_tpl->tpl_vars['DATE']->value;?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['DATE_VALUE']->value;?>
</td>
                                    </tr>
                                    <tr>
                                        <td><?php echo $_smarty_tpl->tpl_vars['USERNAME']->value;?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['USERNAME_VALUE']->value;?>
</td>
                                    </tr>
                                    <tr>
                                        <td><?php echo $_smarty_tpl->tpl_vars['CONTENT']->value;?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['CONTENT_VALUE']->value;?>
</td>
                                    </tr>
                                </table>
                            </div>

                            <h5><?php echo $_smarty_tpl->tpl_vars['ACTIONS']->value;?>
</h5>

                            <?php if ($_smarty_tpl->tpl_vars['TYPE_ID']->value == 1) {?>
                            <?php if ((isset($_smarty_tpl->tpl_vars['VALIDATE_USER_TEXT']->value))) {?>
                            <a class="btn btn-secondary" href="<?php echo $_smarty_tpl->tpl_vars['VALIDATE_USER_LINK']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['VALIDATE_USER_TEXT']->value;?>
</a>
                            <?php }?>
                            <?php } elseif ($_smarty_tpl->tpl_vars['TYPE_ID']->value == 4) {?>
                            <?php if ((isset($_smarty_tpl->tpl_vars['SHOW_REGISTRATION_LINK']->value))) {?>
                            <button class="btn btn-secondary" type="button"
                                onclick="showRegistrationModal()"><?php echo $_smarty_tpl->tpl_vars['SHOW_REGISTRATION_LINK']->value;?>
</button>
                            <?php }?>
                            <?php }?>

                            <a class="btn btn-danger" href="#" onclick="showDeleteModal()"><?php echo $_smarty_tpl->tpl_vars['DELETE_ERROR']->value;?>
</a>
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


        <!-- Show registration link modal -->
        <div class="modal fade" id="registrationModal" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title"><?php echo $_smarty_tpl->tpl_vars['REGISTRATION_LINK']->value;?>
</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <?php echo $_smarty_tpl->tpl_vars['REGISTRATION_LINK_VALUE']->value;?>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['CLOSE']->value;?>
</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Delete error modal -->
        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title"><?php echo $_smarty_tpl->tpl_vars['ARE_YOU_SURE']->value;?>
</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <?php echo $_smarty_tpl->tpl_vars['CONFIRM_DELETE_ERROR']->value;?>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['NO']->value;?>
</button>
                        <form action="<?php echo $_smarty_tpl->tpl_vars['DELETE_ERROR_LINK']->value;?>
" method="post" style="display: inline">
                            <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
" />
                            <input type="submit" class="btn btn-primary" value="<?php echo $_smarty_tpl->tpl_vars['YES']->value;?>
" />
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- End Wrapper -->
    </div>

    <?php $_smarty_tpl->_subTemplateRender('file:scripts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php echo '<script'; ?>
 type="text/javascript">
        function showDeleteModal() {
            $('#deleteModal').modal().show();
        }

        function showRegistrationModal() {
            $('#registrationModal').modal().show();
        }
    <?php echo '</script'; ?>
>

</body>

</html><?php }
}
