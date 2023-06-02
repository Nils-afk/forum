<?php
/* Smarty version 4.3.1, created on 2023-05-12 17:03:17
  from '/home/vol1000_8/epizy.com/epiz_34193542/htdocs/custom/panel_templates/Default/core/social_media.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_645e553509d361_15372046',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e9d10b0c0cbfdb48d21476afc4ba569f3c6f83c6' => 
    array (
      0 => '/home/vol1000_8/epizy.com/epiz_34193542/htdocs/custom/panel_templates/Default/core/social_media.tpl',
      1 => 1683900900,
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
function content_645e553509d361_15372046 (Smarty_Internal_Template $_smarty_tpl) {
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
                        <h1 class="h3 mb-0 text-gray-800"><?php echo $_smarty_tpl->tpl_vars['SOCIAL_MEDIA']->value;?>
</h1>
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?php echo $_smarty_tpl->tpl_vars['PANEL_INDEX']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['DASHBOARD']->value;?>
</a></li>
                            <li class="breadcrumb-item active"><?php echo $_smarty_tpl->tpl_vars['CONFIGURATION']->value;?>
</li>
                            <li class="breadcrumb-item active"><?php echo $_smarty_tpl->tpl_vars['SOCIAL_MEDIA']->value;?>
</li>
                        </ol>
                    </div>

                    <!-- Update Notification -->
                    <?php $_smarty_tpl->_subTemplateRender('file:includes/update.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                    <div class="card shadow mb-4">
                        <div class="card-body">

                            <!-- Success and Error Alerts -->
                            <?php $_smarty_tpl->_subTemplateRender('file:includes/alerts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="InputYoutube"><?php echo $_smarty_tpl->tpl_vars['YOUTUBE_URL']->value;?>
</label>
                                    <input type="text" name="youtubeurl" class="form-control" id="InputYoutube"
                                        placeholder="<?php echo $_smarty_tpl->tpl_vars['YOUTUBE_URL']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['YOUTUBE_URL_VALUE']->value;?>
">
                                </div>
                                <div class="form-group">
                                    <label for="InputTwitter"><?php echo $_smarty_tpl->tpl_vars['TWITTER_URL']->value;?>
</label>
                                    <input type="text" name="twitterurl" class="form-control" id="InputTwitter"
                                        placeholder="<?php echo $_smarty_tpl->tpl_vars['TWITTER_URL']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['TWITTER_URL_VALUE']->value;?>
">
                                </div>
                                <div class="form-group custom-control custom-switch">
                                    <input id="InputTwitterStyle" type="checkbox" name="twitter_dark_theme"
                                        class="custom-control-input" value="1" <?php if ($_smarty_tpl->tpl_vars['TWITTER_STYLE_VALUE']->value == 'dark') {?>
                                        checked<?php }?>>
                                    <label for="InputTwitterStyle" class="custom-control-label">
                                        <?php echo $_smarty_tpl->tpl_vars['TWITTER_STYLE']->value;?>

                                    </label>
                                </div>
                                <div class="form-group">
                                    <label for="InputFacebook"><?php echo $_smarty_tpl->tpl_vars['FACEBOOK_URL']->value;?>
</label>
                                    <input type="text" name="fburl" class="form-control" id="InputFacebook"
                                        placeholder="<?php echo $_smarty_tpl->tpl_vars['FACEBOOK_URL']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['FACEBOOK_URL_VALUE']->value;?>
">
                                </div>
                                <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
                                <input type="submit" class="btn btn-primary" value="<?php echo $_smarty_tpl->tpl_vars['SUBMIT']->value;?>
">
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

        <!-- End Wrapper -->
    </div>

    <?php $_smarty_tpl->_subTemplateRender('file:scripts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>

</html><?php }
}
