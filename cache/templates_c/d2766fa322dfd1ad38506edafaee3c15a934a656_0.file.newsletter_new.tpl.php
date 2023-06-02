<?php
/* Smarty version 4.3.1, created on 2023-05-13 09:34:39
  from '/home/vol1000_8/epizy.com/epiz_34193542/htdocs/custom/panel_templates/Default/newsletter/newsletter_new.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_645f3d8f65aeb1_38881882',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd2766fa322dfd1ad38506edafaee3c15a934a656' => 
    array (
      0 => '/home/vol1000_8/epizy.com/epiz_34193542/htdocs/custom/panel_templates/Default/newsletter/newsletter_new.tpl',
      1 => 1683963017,
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
function content_645f3d8f65aeb1_38881882 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <h1 class="h3 mb-0 text-gray-800"><?php echo $_smarty_tpl->tpl_vars['NEWSLETTER']->value;?>
</h1>
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo $_smarty_tpl->tpl_vars['PANEL_INDEX']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['DASHBOARD']->value;?>
</a></li>
                        <li class="breadcrumb-item active"><?php echo $_smarty_tpl->tpl_vars['NEWSLETTER']->value;?>
</li>
                    </ol>
                </div>

                <!-- Update Notification -->
                <?php $_smarty_tpl->_subTemplateRender('file:includes/update.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                <div class="card shadow mb-4">
                    <div class="card-body">
                        <h5 style="display:inline"><?php echo $_smarty_tpl->tpl_vars['CREATING_NEWSLETTER']->value;?>
</h5>
                        <div class="float-md-right">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['BACK_LINK']->value;?>
" class="btn btn-warning"><?php echo $_smarty_tpl->tpl_vars['BACK']->value;?>
</a>
                        </div>
                        <hr>

                        <!-- Success and Error Alerts -->
                        <?php $_smarty_tpl->_subTemplateRender('file:includes/alerts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                        <form role="form" action="" method="post">
                            <div class="form-group">
                                <label for="inputTitle"><?php echo $_smarty_tpl->tpl_vars['NEWSLETTER_TITLE']->value;?>
</label>
                                <input type="text" name="title" class="form-control" id="inputTitle" placeholder="<?php echo $_smarty_tpl->tpl_vars['TITLE']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['TITLE_VALUE']->value;?>
">
                            </div>

                            <div class="form-group">
                                <label for="inputContent"><?php echo $_smarty_tpl->tpl_vars['NEWSLETTER_CONTENT']->value;?>
</label>
                                <textarea id="inputContent" name="content" class="form-control"><?php echo $_smarty_tpl->tpl_vars['CONTENT_VALUE']->value;?>
</textarea>
                            </div>

                            <div class="form-group custom-control custom-switch">
                              <input id="inputEmails" name="emails" type="checkbox" class="custom-control-input" />
                              <label class="custom-control-label" for="inputEmails">Send email to all subscribers</label>
                            </div>
  
                            <div class="form-group custom-control custom-switch">
                              <input id="inputAlerts" name="alerts" type="checkbox" class="custom-control-input" />
                              <label class="custom-control-label" for="inputAlerts">Send alert to all registered subscribers</label>
                            </div>

                            <hr>

                            <div class="form-group custom-control custom-switch">
                              <input id="inputEmailAllUsers" name="email_all_users" type="checkbox" class="custom-control-input" />
                              <label class="custom-control-label" for="inputEmailAllUsers">Send email to all registered users</label>
                            </div>

                            <div class="form-group custom-control custom-switch">
                              <input id="inputAlertAllUsers" name="alert_all_users" type="checkbox" class="custom-control-input" />
                              <label class="custom-control-label" for="inputAlertAllUsers">Send alert to all registered users</label>
                            </div>

                            <div class="form-group">
                                <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
                                <input type="submit" class="btn btn-primary" value="<?php echo $_smarty_tpl->tpl_vars['SUBMIT']->value;?>
">
                            </div>
                        </form>

                        <center><p>Newsletter Module by <a href="https://partydragen.com/" target="_blank">Partydragen</a></br>Support on <a href="https://discord.gg/TtH6tpp" target="_blank">Discord</a></p></center>
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

    <!-- End Wrapper -->
</div>

<?php $_smarty_tpl->_subTemplateRender('file:scripts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>
</html><?php }
}
