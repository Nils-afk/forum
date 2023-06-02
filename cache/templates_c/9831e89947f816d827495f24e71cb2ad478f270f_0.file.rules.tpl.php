<?php
/* Smarty version 4.3.1, created on 2023-05-13 08:59:18
  from '/home/vol1000_8/epizy.com/epiz_34193542/htdocs/custom/panel_templates/Default/rules/rules.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_645f3546334048_06597495',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9831e89947f816d827495f24e71cb2ad478f270f' => 
    array (
      0 => '/home/vol1000_8/epizy.com/epiz_34193542/htdocs/custom/panel_templates/Default/rules/rules.tpl',
      1 => 1683927030,
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
function content_645f3546334048_06597495 (Smarty_Internal_Template $_smarty_tpl) {
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
                        <h1 class="h3 mb-0 text-gray-800"><?php echo $_smarty_tpl->tpl_vars['RULES']->value;?>
</h1>
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?php echo $_smarty_tpl->tpl_vars['PANEL_INDEX']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['DASHBOARD']->value;?>
</a></li>
                            <li class="breadcrumb-item active"><?php echo $_smarty_tpl->tpl_vars['RULES']->value;?>
</li>
                        </ol>
                    </div>

                    <!-- Update Notification -->
                    <?php $_smarty_tpl->_subTemplateRender('file:includes/update.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['NEW_CATAGORY_LINK']->value;?>
" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['NEW_CATAGORY']->value;?>
</a>
                            <hr />
                            <!-- Success and Error Alerts -->
                            <?php $_smarty_tpl->_subTemplateRender('file:includes/alerts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                            <?php if (count($_smarty_tpl->tpl_vars['CATAGORY_LIST']->value)) {?>
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <tbody>
                                            <tr>
                                                <td><strong><?php echo $_smarty_tpl->tpl_vars['RULES_CATAGORY_NAME']->value;?>
</strong></td>
                                                <td><strong>
                                                        <div class="float-md-right"><?php echo $_smarty_tpl->tpl_vars['RULES_ACTION']->value;?>
</div>
                                                    </strong></td>
                                            </tr>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CATAGORY_LIST']->value, 'catagory');
$_smarty_tpl->tpl_vars['catagory']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['catagory']->value) {
$_smarty_tpl->tpl_vars['catagory']->do_else = false;
?>
                                                <tr>
                                                    <td>
                                                        <strong><?php echo $_smarty_tpl->tpl_vars['catagory']->value['name'];?>
</strong>
                                                    </td>
                                                    <td>
                                                        <div class="float-md-right">
                                                            <a class="btn btn-warning btn-sm" href="<?php echo $_smarty_tpl->tpl_vars['catagory']->value['edit_link'];?>
"><i
                                                                    class="fas fa-edit fa-fw"></i></a>
                                                            <button class="btn btn-danger btn-sm" type="button"
                                                                onclick="showDeleteModal('<?php echo $_smarty_tpl->tpl_vars['catagory']->value['delete_link'];?>
')"><i
                                                                    class="fas fa-trash fa-fw"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </tbody>
                                    </table>
                                </div>
                            <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['NO_RULES_CATAGORIES']->value;?>
 
                            <?php }?>
                            <hr>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['NEW_BUTTON_LINK']->value;?>
" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['NEW_BUTTON']->value;?>
</a>
                            <hr />
                            <?php if (count($_smarty_tpl->tpl_vars['BUTTON_LIST']->value)) {?>
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <tbody>
                                            <tr>
                                                <td><strong><?php echo $_smarty_tpl->tpl_vars['RULES_BUTTON_NAME']->value;?>
</strong></td>
                                                <td><strong>
                                                        <div class="float-md-right"><?php echo $_smarty_tpl->tpl_vars['RULES_ACTION']->value;?>
</div>
                                                    </strong></td>
                                            </tr>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['BUTTON_LIST']->value, 'button');
$_smarty_tpl->tpl_vars['button']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['button']->value) {
$_smarty_tpl->tpl_vars['button']->do_else = false;
?>
                                                <tr>
                                                    <td>
                                                        <strong><?php echo $_smarty_tpl->tpl_vars['button']->value['name'];?>
</strong>
                                                    </td>
                                                    <td>
                                                        <div class="float-md-right">
                                                            <a class="btn btn-warning btn-sm" href="<?php echo $_smarty_tpl->tpl_vars['button']->value['edit_link'];?>
"><i
                                                                    class="fas fa-edit fa-fw"></i></a>
                                                            <button class="btn btn-danger btn-sm" type="button"
                                                                onclick="showDeleteButtonModal('<?php echo $_smarty_tpl->tpl_vars['button']->value['delete_link'];?>
')"><i
                                                                    class="fas fa-trash fa-fw"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </tbody>
                                    </table>
                                </div>
                            <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['NO_RULES_BUTTONS']->value;?>
 
                            <?php }?>
                            <hr>
                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="link_location"><?php echo $_smarty_tpl->tpl_vars['LINK_LOCATION']->value;?>
</label>
                                    <select class="form-control" id="link_location" name="link_location">
                                        <option value="1" <?php if ($_smarty_tpl->tpl_vars['LINK_LOCATION_VALUE']->value == 1) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['LINK_NAVBAR']->value;?>

                                        </option>
                                        <option value="2" <?php if ($_smarty_tpl->tpl_vars['LINK_LOCATION_VALUE']->value == 2) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['LINK_MORE']->value;?>

                                        </option>
                                        <option value="3" <?php if ($_smarty_tpl->tpl_vars['LINK_LOCATION_VALUE']->value == 3) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['LINK_FOOTER']->value;?>

                                        </option>
                                        <option value="4" <?php if ($_smarty_tpl->tpl_vars['LINK_LOCATION_VALUE']->value == 4) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['LINK_NONE']->value;?>

                                        </option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="inputIcon"><?php echo $_smarty_tpl->tpl_vars['ICON']->value;?>
</label>
                                    <input type="text" class="form-control" name="icon" id="inputIcon"
                                        placeholder="<?php echo $_smarty_tpl->tpl_vars['ICON_EXAMPLE']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['ICON_VALUE']->value;?>
">
                                </div>
                                <div class="form-group">
                                    <label for="InputMessage"><?php echo $_smarty_tpl->tpl_vars['MESSAGE']->value;?>
</label><br />
                                    <textarea name="message" rows="3" id="InputMessage"
                                        class="form-control"><?php echo $_smarty_tpl->tpl_vars['MESSAGE_VALUE']->value;?>
</textarea>
                                </div>
                                <div class="form-group">
                                    <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
                                    <input type="submit" class="btn btn-primary" value="<?php echo $_smarty_tpl->tpl_vars['SUBMIT']->value;?>
">
                                </div>
                            </form>
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
                        <?php echo $_smarty_tpl->tpl_vars['CONFIRM_DELETE_CATAGORY']->value;?>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['NO']->value;?>
</button>
                        <a href="#" id="deleteLink" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['YES']->value;?>
</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="deleteButtonModal" tabindex="-1" role="dialog">
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
                        <?php echo $_smarty_tpl->tpl_vars['CONFIRM_DELETE_BUTTON']->value;?>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['NO']->value;?>
</button>
                        <a href="#" id="deleteButtonLink" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['YES']->value;?>
</a>
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
        function showDeleteModal(id) {
            $('#deleteLink').attr('href', id);
            $('#deleteModal').modal().show();
        }

        function showDeleteButtonModal(id) {
            $('#deleteButtonLink').attr('href', id);
            $('#deleteButtonModal').modal().show();
        }
    <?php echo '</script'; ?>
>

</body>

</html><?php }
}
