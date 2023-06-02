<?php
/* Smarty version 4.3.1, created on 2023-05-13 08:49:13
  from '/home/vol1000_8/epizy.com/epiz_34193542/htdocs/custom/templates/Nexus/navbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_645f32e9d09377_97518393',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1c9107891a99ba1643fcad9ed607fda903ac9d84' => 
    array (
      0 => '/home/vol1000_8/epizy.com/epiz_34193542/htdocs/custom/templates/Nexus/navbar.tpl',
      1 => 1683960340,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Nexus/navbar/elegant.tpl' => 1,
    'file:Nexus/navbar/dynamic.tpl' => 1,
    'file:Nexus/navbar/modern.tpl' => 1,
  ),
),false)) {
function content_645f32e9d09377_97518393 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/vol1000_8/epizy.com/epiz_34193542/htdocs/vendor/smarty/smarty/libs/plugins/modifier.explode.php','function'=>'smarty_modifier_explode',),));
$_smarty_tpl->_assignInScope('navbarexcludeexploded', smarty_modifier_explode("/",$_smarty_tpl->tpl_vars['NAVBAREXCLUDE']->value));
if ($_smarty_tpl->tpl_vars['PRELOADERVIEW']->value == '1') {?>
    <div class="preloader">
        <div
            class="ui active <?php if ($_smarty_tpl->tpl_vars['PRELOADERSPEED']->value == 'normal') {
} else {
echo $_smarty_tpl->tpl_vars['PRELOADERSPEED']->value;
}?> <?php if ($_smarty_tpl->tpl_vars['PRELOADERSTYLE']->value == 'normal') {
} else {
echo $_smarty_tpl->tpl_vars['PRELOADERSTYLE']->value;
}?> <?php echo $_smarty_tpl->tpl_vars['PRELOADERCOLOR']->value;?>
 large inverted loader">
        </div>
        <h3 style="margin-top: 100px;"><span class="ui inverted <?php echo $_smarty_tpl->tpl_vars['PRELOADERCOLOR']->value;?>
 text"><?php echo $_smarty_tpl->tpl_vars['PRELOADERTEXT']->value;?>
</span></h3>
    </div>
<?php }?>

<div class="ui vertical inverted sidebar menu left" id="toc">
    <div class="item">
        <h3><?php echo $_smarty_tpl->tpl_vars['SITE_NAME']->value;?>
</h3>
    </div>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['NAV_LINKS']->value, 'item', false, 'name');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
        <?php if ((isset($_smarty_tpl->tpl_vars['item']->value['items']))) {?>
            <div class="item" style="color:<?php echo $_smarty_tpl->tpl_vars['PRIMARYCOLOR']->value;?>
 !important"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
 <div style="float: right;"><?php echo $_smarty_tpl->tpl_vars['item']->value['icon'];?>

                </div>
            </div>
            <div class="sidebar menu left">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['items'], 'dropdown');
$_smarty_tpl->tpl_vars['dropdown']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['dropdown']->value) {
$_smarty_tpl->tpl_vars['dropdown']->do_else = false;
?>
                    <a class="item" href="<?php echo $_smarty_tpl->tpl_vars['dropdown']->value['link'];?>
" target="<?php echo $_smarty_tpl->tpl_vars['dropdown']->value['target'];?>
"><?php echo $_smarty_tpl->tpl_vars['dropdown']->value['title'];?>
 <div
                            style="float: right;"><?php echo $_smarty_tpl->tpl_vars['dropdown']->value['icon'];?>
</div></a>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        <?php } else { ?>
            <?php if (!in_array($_smarty_tpl->tpl_vars['item']->value['title'],$_smarty_tpl->tpl_vars['navbarexcludeexploded']->value)) {?>
                <a class="item<?php if ((isset($_smarty_tpl->tpl_vars['item']->value['active']))) {?> active<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
" target="<?php echo $_smarty_tpl->tpl_vars['item']->value['target'];?>
">
                    <?php echo $_smarty_tpl->tpl_vars['item']->value['icon'];
echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a>
            <?php }?>
        <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>

<?php if ($_smarty_tpl->tpl_vars['NAVBARSTYLE']->value == '0') {?>
    <?php $_smarty_tpl->_subTemplateRender('file:Nexus/navbar/elegant.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} elseif ($_smarty_tpl->tpl_vars['NAVBARSTYLE']->value == '1') {?>
    <?php $_smarty_tpl->_subTemplateRender('file:Nexus/navbar/dynamic.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} else { ?>
    <?php $_smarty_tpl->_subTemplateRender('file:Nexus/navbar/modern.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>

<div class="pusher">
    <div id="wrapper">
        <br />
        <div class="ui container" id="context">
            <div class="ui message icon announcement" style="border-top-style: solid; border-top-color: #d9534f;"
                id="ie-message">
                <i class="exclamation triangle icon" style="color: #d9534f;"></i>
                <div class="content">
                    <div class="header"><?php echo $_smarty_tpl->tpl_vars['INTERNET_EXPLORER_HEADER']->value;?>
</div>
                    <?php echo $_smarty_tpl->tpl_vars['INTERNET_EXPLORER_INFO']->value;?>

                </div>
            </div>

            <?php if ((isset($_smarty_tpl->tpl_vars['NEW_UPDATE']->value))) {?>
                <?php if ($_smarty_tpl->tpl_vars['NEW_UPDATE_URGENT']->value == true) {?>
                    <div class="ui message icon announcement" style="border-top-style: solid; border-top-color: #d9534f;"
                        id="update-message">
                    <?php } else { ?>
                        <div class="ui message icon announcement" style="border-top-style: solid; border-top-color: #0275d8;"
                            id="update-message">
                            <i class="close icon"></i>
                        <?php }?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['NAMELESS_UPDATE_LINK']->value;?>
">
                            <i class="download icon" style="color: <?php if ($_smarty_tpl->tpl_vars['NEW_UPDATE_URGENT']->value == true) {?>#d9534f
                            <?php } else { ?>#0275d8;<?php }?>"></i>
                        </a>
                        <div class="content">
                            <div class="header"><?php echo $_smarty_tpl->tpl_vars['NEW_UPDATE']->value;?>
</div>
                            <ul class="list">
                                <li><?php echo $_smarty_tpl->tpl_vars['CURRENT_VERSION']->value;?>
</li>
                                <li><?php echo $_smarty_tpl->tpl_vars['NEW_VERSION']->value;?>
</li>
                            </ul>
                        </div>
                    </div>
                <?php }?>

                <?php if ((isset($_smarty_tpl->tpl_vars['NEW_UPDATE_NEXUS']->value))) {?>
                    <?php if ($_smarty_tpl->tpl_vars['NEW_UPDATE_URGENT_NEXUS']->value == true) {?>
                        <div class="ui message icon announcement" style="border-top-style: solid; border-top-color: #d9534f;"
                            id="update-message">
                        <?php } else { ?>
                            <div class="ui message icon announcement"
                                style="border-top-style: solid; border-top-color: #0275d8;" id="update-message">
                                <i class="close icon"></i>
                            <?php }?>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['UPDATE_LINK_NEXUS']->value;?>
">
                                <i class="download icon" style="color: <?php if ($_smarty_tpl->tpl_vars['NEW_UPDATE_URGENT_NEXUS']->value == true) {?>#d9534f
                                <?php } else { ?>#0275d8;<?php }?>"></i>
                            </a>
                            <div class="content">
                                <div class="header"><?php echo $_smarty_tpl->tpl_vars['NEW_UPDATE_NEXUS']->value;?>
</div>
                                <ul class="list">
                                    <li><?php echo $_smarty_tpl->tpl_vars['CURRENT_VERSION_NEXUS']->value;?>
</li>
                                    <li><?php echo $_smarty_tpl->tpl_vars['NEW_VERSION_NEXUS']->value;?>
</li>
                                </ul>
                            </div>
                        </div>
                    <?php }?>

                    <?php if (!empty($_smarty_tpl->tpl_vars['ANNOUNCEMENTS']->value)) {?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ANNOUNCEMENTS']->value, 'ANNOUNCEMENT');
$_smarty_tpl->tpl_vars['ANNOUNCEMENT']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ANNOUNCEMENT']->value) {
$_smarty_tpl->tpl_vars['ANNOUNCEMENT']->do_else = false;
?>
                            <div class="ui <?php if ($_smarty_tpl->tpl_vars['ANNOUNCEMENT']->value->icon) {?> icon <?php }?> message announcement"
                                id="announcement-<?php echo $_smarty_tpl->tpl_vars['ANNOUNCEMENT']->value->id;?>
"
                                style="border-top-style: solid; border-top-color:<?php echo $_smarty_tpl->tpl_vars['ANNOUNCEMENT']->value->background_colour;?>
;">
                                <?php if ($_smarty_tpl->tpl_vars['ANNOUNCEMENT']->value->closable) {?>
                                    <i class="close icon"></i>
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['ANNOUNCEMENT']->value->icon) {?>
                                    <i class="<?php echo $_smarty_tpl->tpl_vars['ANNOUNCEMENT']->value->icon;?>
 icon" style="color: <?php echo $_smarty_tpl->tpl_vars['ANNOUNCEMENT']->value->background_colour;?>
;"></i>
                                <?php }?>
                                <div class="content">
                                    <div class="header"><?php echo $_smarty_tpl->tpl_vars['ANNOUNCEMENT']->value->header;?>
</div>
                                    <p><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['ANNOUNCEMENT']->value->message, ENT_QUOTES, 'UTF-8', true);?>
</p>
                                </div>
                            </div>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <?php }?>

                    <?php if ((isset($_smarty_tpl->tpl_vars['MUST_VALIDATE_ACCOUNT']->value))) {?>
                        <div class="ui message icon announcement"
                            style="border-top-style: solid; border-top-color: #0275d8;">
                            <i class="info icon" style="color: #0275d8; margin-left: 0.5rem;"></i>
                            <div class="content">
                                <?php echo $_smarty_tpl->tpl_vars['MUST_VALIDATE_ACCOUNT']->value;?>

                            </div>
                        </div>
                    <?php }?>

                    <?php if ((isset($_smarty_tpl->tpl_vars['MAINTENANCE_ENABLED']->value))) {?>
                        <div class="ui message icon announcement"
                            style="border-top-style: solid; border-top-color: #f0ad4e;">
                            <i class="exclamation icon" style="color: #f0ad4e;"></i>
                            <div class="content">
                                <?php echo $_smarty_tpl->tpl_vars['MAINTENANCE_ENABLED']->value;?>

                            </div>
                        </div>
<?php }
}
}
