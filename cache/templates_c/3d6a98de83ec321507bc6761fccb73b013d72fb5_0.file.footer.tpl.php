<?php
/* Smarty version 4.3.1, created on 2023-05-13 08:49:13
  from '/home/vol1000_8/epizy.com/epiz_34193542/htdocs/custom/templates/Nexus/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_645f32e9d62648_98023210',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3d6a98de83ec321507bc6761fccb73b013d72fb5' => 
    array (
      0 => '/home/vol1000_8/epizy.com/epiz_34193542/htdocs/custom/templates/Nexus/footer.tpl',
      1 => 1683960317,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Nexus/js.tpl' => 1,
  ),
),false)) {
function content_645f32e9d62648_98023210 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/vol1000_8/epizy.com/epiz_34193542/htdocs/vendor/smarty/smarty/libs/plugins/modifier.count.php','function'=>'smarty_modifier_count',),));
if ($_smarty_tpl->tpl_vars['MINECRAFTVIEW']->value == '1') {?>
    <span style="visibility: hidden;" id="ip"><?php echo $_smarty_tpl->tpl_vars['MINECRAFTIP']->value;
if ($_smarty_tpl->tpl_vars['MINECRAFTPORT']->value != '25565') {?>:<?php echo $_smarty_tpl->tpl_vars['MINECRAFTPORT']->value;
}?></span>
<?php }?>
</div>
</div>

<div class="ui inverted vertical footer segment" id="footer">
    <div class="ui center aligned container">
        <div class="ui stackable inverted divided grid">
            <div class="five wide column">
                <h4><span class="item">&copy; <?php echo $_smarty_tpl->tpl_vars['SITE_NAME']->value;?>
 <?php echo date('Y');?>
</span></h4>
                <div class="ui inverted link list">
                    <span class="item"><?php echo $_smarty_tpl->tpl_vars['POWERED_BY']->value;?>
 <a href="https://namelessmc.com">NamelessMC</a></span>
                                        <span class="item"><?php echo $_smarty_tpl->tpl_vars['TEMPLATE_BY']->value;?>
 <a href="https://github.com/VertisanPRO" target="_blank"
                            rel="nofollow noopener">Vertisan</a></span>
                    <?php if ($_smarty_tpl->tpl_vars['PAGE_LOAD_TIME']->value) {?>
                        <span class="item" id="page_load"></span>
                    <?php }?>
                    <a class="item" href="javascript:" onclick="toggleDarkLightMode()"><?php echo $_smarty_tpl->tpl_vars['TOGGLE_DARK_MODE_TEXT']->value;?>
</a>
                    <?php if (!$_smarty_tpl->tpl_vars['LOGGED_IN_USER']->value) {?>
                        <a class="item" href="javascript:" onclick="toggleAutoLanguage()" id="auto-language"></a>
                    <?php }?>
                </div>
            </div>
            <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['SOCIAL_MEDIA_ICONS']->value) == '0') {?> <div class="six wide column">
                    <h4><?php echo $_smarty_tpl->tpl_vars['ABOUT']->value;?>
</h4>
                    <p>
                        <?php echo $_smarty_tpl->tpl_vars['FOOTERABOUT']->value;?>

                    </p>
                </div>
            <?php }?>
            <div class="<?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['SOCIAL_MEDIA_ICONS']->value) > 0) {?>three<?php } else { ?>five<?php }?> wide column">
                <h4><?php echo $_smarty_tpl->tpl_vars['FOOTER_LINKS_TITLE']->value;?>
</h4>
                <div class="ui inverted link list">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FOOTER_NAVIGATION']->value, 'item', false, 'name');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                        <?php if ((isset($_smarty_tpl->tpl_vars['item']->value['items']))) {?>
                            <div class="ui dropdown item" style="text-align: center;">
                                <span class="item"><?php echo $_smarty_tpl->tpl_vars['item']->value['icon'];?>
 <?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
 <i class="dropdown icon"></i></span>
                                <div class="menu" style="margin-left: 9.5rem; margin-bottom: 1rem;">
                                    <div class="header"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</div>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['items'], 'dropdown');
$_smarty_tpl->tpl_vars['dropdown']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['dropdown']->value) {
$_smarty_tpl->tpl_vars['dropdown']->do_else = false;
?>
                                        <a class="item" href="<?php echo $_smarty_tpl->tpl_vars['dropdown']->value['link'];?>
" target="<?php echo $_smarty_tpl->tpl_vars['dropdown']->value['target'];?>
"><?php echo $_smarty_tpl->tpl_vars['dropdown']->value['icon'];?>

                                            <?php echo $_smarty_tpl->tpl_vars['dropdown']->value['title'];?>
</a>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </div>
                            </div>
                        <?php } else { ?>
                            <a class="item" href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
" target="<?php echo $_smarty_tpl->tpl_vars['item']->value['target'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['icon'];?>
 <?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a>
                        <?php }?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <a class="item" href="<?php echo $_smarty_tpl->tpl_vars['TERMS_LINK']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['TERMS_TEXT']->value;?>
</a>
                    <a class="item" href="<?php echo $_smarty_tpl->tpl_vars['PRIVACY_LINK']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['PRIVACY_TEXT']->value;?>
</a>
                </div>
            </div>
            <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['SOCIAL_MEDIA_ICONS']->value) > 0) {?>
                <div class="three wide column">
                    <h4><?php echo $_smarty_tpl->tpl_vars['FOOTER_SOCIAL_TITLE']->value;?>
</h4>
                    <div class="ui inverted link list">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SOCIAL_MEDIA_ICONS']->value, 'icon');
$_smarty_tpl->tpl_vars['icon']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['icon']->value) {
$_smarty_tpl->tpl_vars['icon']->do_else = false;
?>
                            <a class="item" href="<?php echo $_smarty_tpl->tpl_vars['icon']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['icon']->value['text'];?>
</a>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>
                </div>
            <?php }?>
            <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['SOCIAL_MEDIA_ICONS']->value) > 0) {?>
                <div class="five wide column">
                    <h4><?php echo $_smarty_tpl->tpl_vars['ABOUT']->value;?>
</h4>
                    <p>
                        <?php echo $_smarty_tpl->tpl_vars['FOOTERABOUT']->value;?>

                    </p>
                </div>
            <?php }?>
        </div>
    </div>
</div>

<?php if ((isset($_smarty_tpl->tpl_vars['GLOBAL_WARNING_TITLE']->value))) {?>
    <div class="ui medium modal" id="modal-acknowledge">
        <div class="header">
            <?php echo $_smarty_tpl->tpl_vars['GLOBAL_WARNING_TITLE']->value;?>

        </div>
        <div class="content">
            <?php echo $_smarty_tpl->tpl_vars['GLOBAL_WARNING_REASON']->value;?>

        </div>
        <div class="actions">
            <a class="ui positive button" href="<?php echo $_smarty_tpl->tpl_vars['GLOBAL_WARNING_ACKNOWLEDGE_LINK']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['GLOBAL_WARNING_ACKNOWLEDGE']->value;?>
</a>
        </div>
    </div>
<?php }?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['TEMPLATE_JS']->value, 'script');
$_smarty_tpl->tpl_vars['script']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['script']->value) {
$_smarty_tpl->tpl_vars['script']->do_else = false;
?>
    <?php echo $_smarty_tpl->tpl_vars['script']->value;?>

<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php if ($_smarty_tpl->tpl_vars['MINECRAFTVIEW']->value == '1' || $_smarty_tpl->tpl_vars['WIDGETBOTVIEW']->value == '1') {?>
    <?php $_smarty_tpl->_subTemplateRender('file:Nexus/js.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>

<?php if ((isset($_smarty_tpl->tpl_vars['GLOBAL_WARNING_TITLE']->value))) {?>
    <?php echo '<script'; ?>
 type="text/javascript">
        $('#modal-acknowledge').modal({ closable: false }).modal('show');
    <?php echo '</script'; ?>
>
<?php }?>

<?php if ((isset($_smarty_tpl->tpl_vars['NEW_UPDATE']->value)) && ($_smarty_tpl->tpl_vars['NEW_UPDATE_URGENT']->value != true)) {?>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE']->value['path'];?>
/js/core/update.js"><?php echo '</script'; ?>
>
<?php }?>

<?php if (!(isset($_smarty_tpl->tpl_vars['EXCLUDE_END_BODY']->value))) {?>
    <?php if ((isset($_smarty_tpl->tpl_vars['DEBUGBAR_HTML']->value))) {?>
        <?php echo $_smarty_tpl->tpl_vars['DEBUGBAR_HTML']->value;?>

    <?php }?>

    <?php echo '<script'; ?>
 type="text/javascript">
        function toggleDarkLightMode() {
            $.post("<?php echo $_smarty_tpl->tpl_vars['DARK_LIGHT_MODE_ACTION']->value;?>
", { token: "<?php echo $_smarty_tpl->tpl_vars['DARK_LIGHT_MODE_TOKEN']->value;?>
" })
            .done(function() {
                window.location.reload();
            });
            return false;
        }

        <?php if (!$_smarty_tpl->tpl_vars['LOGGED_IN_USER']->value) {?>
            const autoLanguage = document.getElementById('auto-language');
            const autoLanguageValue = $.cookie('auto_language') ?? 'true';
            autoLanguage.innerText = '<?php echo $_smarty_tpl->tpl_vars['AUTO_LANGUAGE_TEXT']->value;?>
 (' + (autoLanguageValue === 'true' ? '<?php echo $_smarty_tpl->tpl_vars['ENABLED']->value;?>
' : '<?php echo $_smarty_tpl->tpl_vars['DISABLED']->value;?>
') + ')';
        <?php }?>

        function toggleAutoLanguage() {
            $.cookie(
                'auto_language',
                autoLanguageValue === 'true' ? 'false' : 'true', { path: '/' }
            );
            window.location.reload();
        }

        function dsInvite(link) {
            if (link !== '') {
                window.open(link);
            }
            return false;
        }

        <?php echo $_smarty_tpl->tpl_vars['CUSTOMJS']->value;?>

    <?php echo '</script'; ?>
>

    <?php if ($_smarty_tpl->tpl_vars['NEXUS_DARK_MODE']->value == '1') {?>
        <?php echo '<script'; ?>
 type="text/javascript">
            function copy(element) {
                const temp = $('<input>');
                $('body').append(temp);
                temp.val($(element).text()).select();
                document.execCommand('copy');
                temp.remove();
                $('body').toast({
                    showIcon: 'keyboard',
                    message: copied,
                    class: 'black',
                    progressUp: true,
                    displayTime: 2000,
                    classProgress: 'white',
                    showProgress: 'bottom',
                    pauseOnHover: false,
                });
            };
        <?php echo '</script'; ?>
>
    <?php } else { ?>
        <?php echo '<script'; ?>
 type="text/javascript">
            function copy(element) {
                var $temp = $('<input>');
                $('body').append($temp);
                $temp.val($(element).text()).select();
                document.execCommand('copy');
                $temp.remove();
                $('body').toast({
                    showIcon: 'keyboard',
                    message: copied,
                    class: 'white',
                    progressUp: true,
                    displayTime: 2000,
                    classProgress: 'black',
                    showProgress: 'bottom',
                    pauseOnHover: false,
                });
            };
        <?php echo '</script'; ?>
>
    <?php }?>

    </body>

    </html>
<?php }
}
}
