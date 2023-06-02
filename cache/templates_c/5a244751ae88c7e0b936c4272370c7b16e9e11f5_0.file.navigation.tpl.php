<?php
/* Smarty version 4.3.1, created on 2023-05-13 08:49:59
  from '/home/vol1000_8/epizy.com/epiz_34193542/htdocs/custom/templates/Nexus/template_settings/tpl/navigation.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_645f33178c51a7_54250895',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5a244751ae88c7e0b936c4272370c7b16e9e11f5' => 
    array (
      0 => '/home/vol1000_8/epizy.com/epiz_34193542/htdocs/custom/templates/Nexus/template_settings/tpl/navigation.tpl',
      1 => 1683960376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_645f33178c51a7_54250895 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="card mb-3">
    <h3 class="card-header mb-3 text-center"><?php echo $_smarty_tpl->tpl_vars['NAVIGATION']->value;?>
</h3>
    <div class="card-body">
        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <a class="nav-link <?php if (empty($_smarty_tpl->tpl_vars['TPL_NAME_SESSION']->value) || $_smarty_tpl->tpl_vars['TPL_NAME_SESSION']->value == 'options') {?>active<?php }?>"
                id="v-pills-options-tab" data-toggle="pill" href="#v-pills-options" role="tab"
                aria-controls="v-pills-options" aria-selected="true"><i class="fa-solid fa-cog"></i> <?php echo $_smarty_tpl->tpl_vars['OPTIONS_PAGE']->value;?>
</a>
            <a class="nav-link <?php if ($_smarty_tpl->tpl_vars['TPL_NAME_SESSION']->value == 'colors') {?>active<?php }?>" id="v-pills-colors-tab" data-toggle="pill"
                href="#v-pills-colors" role="tab" aria-controls="v-pills-colors" aria-selected="false"><i
                    class="fa-solid fa-paint-brush"></i> <?php echo $_smarty_tpl->tpl_vars['COLORS_PAGE']->value;?>
</a>
            <a class="nav-link <?php if ($_smarty_tpl->tpl_vars['TPL_NAME_SESSION']->value == 'navbar') {?>active<?php }?>" id="v-pills-navbar-tab" data-toggle="pill"
                href="#v-pills-navbar" role="tab" aria-controls="v-pills-navbar" aria-selected="false"><i
                    class="fa-solid fa-compass"></i> <?php echo $_smarty_tpl->tpl_vars['NAVBAR_PAGE']->value;?>
</a>
            <a class="nav-link <?php if ($_smarty_tpl->tpl_vars['TPL_NAME_SESSION']->value == 'connections') {?>active<?php }?>" id="v-pills-connections-tab"
                data-toggle="pill" href="#v-pills-connections" role="tab" aria-controls="v-pills-connections"
                aria-selected="false"><i class="fa-solid fa-signal"></i> <?php echo $_smarty_tpl->tpl_vars['CONNECTIONS_PAGE']->value;?>
</a>
            <a class="nav-link <?php if ($_smarty_tpl->tpl_vars['TPL_NAME_SESSION']->value == 'preloader') {?>active<?php }?>" id="v-pills-preloader-tab"
                data-toggle="pill" href="#v-pills-preloader" role="tab" aria-controls="v-pills-preloader"
                aria-selected="false"><i class="fa-solid fa-spinner"></i> <?php echo $_smarty_tpl->tpl_vars['PRELOADER_PAGE']->value;?>
</a>
            <a class="nav-link <?php if ($_smarty_tpl->tpl_vars['TPL_NAME_SESSION']->value == 'addons') {?>active<?php }?>" id="v-pills-addons-tab" data-toggle="pill"
                href="#v-pills-addons" role="tab" aria-controls="v-pills-addons" aria-selected="false"><i
                    class="fa-solid fa-puzzle-piece"></i> <?php echo $_smarty_tpl->tpl_vars['ADDONS_PAGE']->value;?>
</a>
            <a class="nav-link <?php if ($_smarty_tpl->tpl_vars['TPL_NAME_SESSION']->value == 'widgets') {?>active<?php }?>" id="v-pills-widgets-tab"
                data-toggle="pill" href="#v-pills-widgets" role="tab" aria-controls="v-pills-widgets"
                aria-selected="false"><i class="fa-solid fa-th-large"></i> <?php echo $_smarty_tpl->tpl_vars['WIDGETS_PAGE']->value;?>
</a>
            <a class="nav-link <?php if ($_smarty_tpl->tpl_vars['TPL_NAME_SESSION']->value == 'embed') {?>active<?php }?>" id="v-pills-embed-tab" data-toggle="pill"
                href="#v-pills-embed" role="tab" aria-controls="v-pills-embed" aria-selected="false"><i
                    class="fa-solid fa-link"></i>
                <?php echo $_smarty_tpl->tpl_vars['EMBED_PAGE']->value;?>
</a>
            <a class="nav-link <?php if ($_smarty_tpl->tpl_vars['TPL_NAME_SESSION']->value == 'updates') {?>active<?php }?>" id="v-pills-updates-tab"
                data-toggle="pill" href="#v-pills-updates" role="tab" aria-controls="v-pills-updates"
                aria-selected="false"><i class="fa-solid fa-cloud-download-alt"></i> <?php echo $_smarty_tpl->tpl_vars['UPDATES_PAGE']->value;?>

                <?php if ((isset($_smarty_tpl->tpl_vars['NEW_UPDATE_NEXUS']->value))) {?> <span class="pull-right"><i class="fa-solid fa-triangle-exclamation"
                        style="color: #f0ad4e;"></i></span><?php }?></a>
            <a class="nav-link" href="https://resourcemc.net/discord" target="_blank"><i
                    class="fa-solid fa-life-ring"></i>
                <?php echo $_smarty_tpl->tpl_vars['SUPPORT_PAGE']->value;?>
</a>
            <style>
                .nav-link {
                    color: #979797;
                }
            </style>
        </div>
    </div>
</div><?php }
}
