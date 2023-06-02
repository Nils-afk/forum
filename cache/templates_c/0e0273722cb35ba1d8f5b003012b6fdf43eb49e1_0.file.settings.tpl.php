<?php
/* Smarty version 4.3.1, created on 2023-05-13 08:59:11
  from '/home/vol1000_8/epizy.com/epiz_34193542/htdocs/custom/panel_templates/Default/suggestions/settings.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_645f353f95b1b9_16837628',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0e0273722cb35ba1d8f5b003012b6fdf43eb49e1' => 
    array (
      0 => '/home/vol1000_8/epizy.com/epiz_34193542/htdocs/custom/panel_templates/Default/suggestions/settings.tpl',
      1 => 1683927709,
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
function content_645f353f95b1b9_16837628 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <h1 class="h3 mb-0 text-gray-800"><?php echo $_smarty_tpl->tpl_vars['SUGGESTIONS']->value;?>
</h1>
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo $_smarty_tpl->tpl_vars['PANEL_INDEX']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['DASHBOARD']->value;?>
</a></li>
                        <li class="breadcrumb-item"><?php echo $_smarty_tpl->tpl_vars['SUGGESTIONS']->value;?>
</li>
							<li class="breadcrumb-item active"><?php echo $_smarty_tpl->tpl_vars['SETTINGS']->value;?>
</li>
                    </ol>
                </div>

                <!-- Update Notification -->
                <?php $_smarty_tpl->_subTemplateRender('file:includes/update.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                <div class="card shadow mb-4">
                    <div class="card-body">
						<h3 style="display:inline;"><?php echo $_smarty_tpl->tpl_vars['SETTINGS']->value;?>
</h3>
						<hr>
						
                        <!-- Success and Error Alerts -->
                        <?php $_smarty_tpl->_subTemplateRender('file:includes/alerts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                        <div class="card shadow border-left-primary">
                            <div class="card-body">
                                <h5><i class="icon fa fa-info-circle"></i> Info</h5>
                                Did you know you can invite the <a href="https://namelessmc.com/resources/resource/191-namelesssuggestions-bot/" target="_blank">Nameless Suggestions</a> bot to your Discord server and use the <a href="https://www.spigotmc.org/resources/nameless-plugin-for-v2.59032/" target="_blank">Nameless Plugin</a> on your Minecraft server to integrate suggestions?
                            </div>
                        </div>

                        </br>

						<form action="" method="post">
                            <div class="form-group">
                                <label for="link_location"><?php echo $_smarty_tpl->tpl_vars['LINK_LOCATION']->value;?>
</label>
                                <select class="form-control" id="link_location" name="link_location">
                                    <option value="1"<?php if ($_smarty_tpl->tpl_vars['LINK_LOCATION_VALUE']->value == 1) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['LINK_NAVBAR']->value;?>
</option>
                                    <option value="2"<?php if ($_smarty_tpl->tpl_vars['LINK_LOCATION_VALUE']->value == 2) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['LINK_MORE']->value;?>
</option>
                                    <option value="3"<?php if ($_smarty_tpl->tpl_vars['LINK_LOCATION_VALUE']->value == 3) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['LINK_FOOTER']->value;?>
</option>
                                    <option value="4"<?php if ($_smarty_tpl->tpl_vars['LINK_LOCATION_VALUE']->value == 4) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['LINK_NONE']->value;?>
</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="inputIcon"><?php echo $_smarty_tpl->tpl_vars['ICON']->value;?>
</label>
                                <input type="text" class="form-control" name="icon" id="inputIcon" placeholder="<?php echo $_smarty_tpl->tpl_vars['ICON_EXAMPLE']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['ICON_VALUE']->value;?>
">
                            </div>
                            <div class="form-group">
                                <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
                                <input type="submit" class="btn btn-primary" value="<?php echo $_smarty_tpl->tpl_vars['SUBMIT']->value;?>
">
                            </div>
						</form>
                        
                        <?php if (!$_smarty_tpl->tpl_vars['PREMIUM']->value) {?>
                            <center><p>Suggestion Module by <a href="https://partydragen.com/" target="_blank">Partydragen</a></p></center>
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

    <!-- End Wrapper -->
</div>

<?php $_smarty_tpl->_subTemplateRender('file:scripts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>
</html><?php }
}
