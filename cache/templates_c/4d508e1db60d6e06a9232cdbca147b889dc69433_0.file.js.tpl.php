<?php
/* Smarty version 4.3.1, created on 2023-05-13 08:49:13
  from '/home/vol1000_8/epizy.com/epiz_34193542/htdocs/custom/templates/Nexus/Nexus/js.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_645f32e9d6fb03_07220088',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4d508e1db60d6e06a9232cdbca147b889dc69433' => 
    array (
      0 => '/home/vol1000_8/epizy.com/epiz_34193542/htdocs/custom/templates/Nexus/Nexus/js.tpl',
      1 => 1683960341,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_645f32e9d6fb03_07220088 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['MINECRAFTVIEW']->value == '1') {?>
    <?php echo '<script'; ?>
 type="text/javascript">
        var url = "https://api.minetools.eu/ping/<?php echo $_smarty_tpl->tpl_vars['MINECRAFTIP']->value;
if ($_smarty_tpl->tpl_vars['MINECRAFTPORT']->value != '25565') {?>/<?php echo $_smarty_tpl->tpl_vars['MINECRAFTPORT']->value;
}?>";

        $.getJSON(url, function(r) {
            if (r.error) {
                $('#minecraftplayers').html(serverOffline);
                return false;
            }
            $('#minecraftplayers').html((/§(.+?)/gi, '') + playersOnline + ': ' + r.players.online);
            <?php if ($_smarty_tpl->tpl_vars['MINECRAFTSTYLE']->value == '1') {?>
                $('#minecraftdesc').html(r.description.replace(/§(.+?)/gi, ''));
            <?php }?>
        });
    <?php echo '</script'; ?>
>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['WIDGETBOTVIEW']->value == '1') {?>
    <?php echo '<script'; ?>
 type="text/javascript" src="https://cdn.jsdelivr.net/npm/@widgetbot/crate@3" async defer>
        new Crate({
            server: '<?php echo $_smarty_tpl->tpl_vars['WIDGETBOTSERVERID']->value;?>
',
            channel: '<?php echo $_smarty_tpl->tpl_vars['WIDGETBOTCHANNELID']->value;?>
',
            location: ['<?php echo $_smarty_tpl->tpl_vars['WIDGETBOTVERTICALLOCATION']->value;?>
', '<?php echo $_smarty_tpl->tpl_vars['WIDGETBOTHORIZONTALLOCATION']->value;?>
'],
            <?php if ($_smarty_tpl->tpl_vars['WIDGETBOTCOLOR']->value == '0') {?>
            <?php } elseif ($_smarty_tpl->tpl_vars['WIDGETBOTCOLOR']->value == '1') {?>
                <?php if ($_smarty_tpl->tpl_vars['NEXUS_DARK_MODE']->value == '1') {?>
                    color: '#303030',
                <?php } else { ?>
                    color: '#e0e1e2',
                <?php }?>
            <?php } elseif ($_smarty_tpl->tpl_vars['WIDGETBOTCOLOR']->value == '2') {?>
                color: '<?php echo $_smarty_tpl->tpl_vars['WIDGETBOTCUSTOMCOLOR']->value;?>
',
            <?php }?>
        });
    <?php echo '</script'; ?>
>
<?php }
}
}
