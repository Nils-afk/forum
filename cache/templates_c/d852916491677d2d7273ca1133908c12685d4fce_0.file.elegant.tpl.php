<?php
/* Smarty version 4.3.1, created on 2023-05-13 08:49:13
  from '/home/vol1000_8/epizy.com/epiz_34193542/htdocs/custom/templates/Nexus/Nexus/navbar/elegant.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_645f32e9d17452_76283753',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd852916491677d2d7273ca1133908c12685d4fce' => 
    array (
      0 => '/home/vol1000_8/epizy.com/epiz_34193542/htdocs/custom/templates/Nexus/Nexus/navbar/elegant.tpl',
      1 => 1683960342,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Nexus/navbar/navbar_normal.tpl' => 1,
  ),
),false)) {
function content_645f32e9d17452_76283753 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:Nexus/navbar/navbar_normal.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="ui stackable three column grid"
    style="background-image:url('<?php echo $_smarty_tpl->tpl_vars['BANNER_IMAGE']->value;?>
'); padding: 45px; margin-top:0px!important; border-bottom-left-radius: 85% 20%; border-bottom-right-radius: 85% 20%;">
    <div class="column" style="text-align: center; margin-top: 2.8rem; display: none;" id="mobnavbar">
        <div class="ui steps">
            <div class="step" style="background: transparent; color: white; flex-direction: row;">
                <?php if ($_smarty_tpl->tpl_vars['DISCORDVIEW']->value == '1') {?>
                    <i class="discord icon" onclick="dsInvite('<?php echo $_smarty_tpl->tpl_vars['DISCORD_SERVER']->value['link'];?>
')"></i>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['DISCORDVIEW']->value == '1') {?>
                    <?php if ($_smarty_tpl->tpl_vars['MINECRAFTVIEW']->value == '1') {?>
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    <?php }?>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['MINECRAFTVIEW']->value == '1') {?>
                    <i class="signal icon" onclick="copy('#ip')"></i>
                <?php }?>
            </div>
        </div>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['DISCORDVIEW']->value == '1') {?>
        <div onclick="dsInvite('<?php echo $_smarty_tpl->tpl_vars['DISCORD_SERVER']->value['link'];?>
')" id="pcnavbar" class="column"
            style="text-align: center; margin-top: 2.8rem;">
            <div class="ui steps">
                <div class="step" style="background: transparent;color: white;">
                    <i class="discord icon"></i>
                    <div class="content">
                        <div class="title"><?php echo $_smarty_tpl->tpl_vars['DISCORD_SERVER']->value['name'];?>
</div>
                        <div class="ui vertical white animated button">
                            <div class="hidden content">
                                <div class="description" style="color: white;"><strong><?php echo $_smarty_tpl->tpl_vars['CLICK_TO_JOIN']->value;?>
</strong></div>
                            </div>
                            <div class="visible content">
                                <div class="description" style="color: white;"><strong><?php echo $_smarty_tpl->tpl_vars['MEMBERS_ONLINE']->value;?>
:
                                        <?php echo $_smarty_tpl->tpl_vars['DISCORD_SERVER']->value['members'];?>
</strong></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php } else { ?>
        <div class="column" id="pcnavbar"></div>
    <?php }?>
    <div class="column" style="text-align: center;">
        <div class="ui medium image" href="/" target="_blank">
            <img onclick="window.location.href='/'" src="<?php echo $_smarty_tpl->tpl_vars['NAVBARLOGO']->value;?>
"
                style="cursor:pointer; display: unset; max-width: 100%; height: auto;">
        </div>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['MINECRAFTVIEW']->value == '1') {?>
        <div class="column" style="text-align: center; margin-top: 2rem;" id="pcnavbar">
            <div class="ui steps">
                <div class="step" style="background: transparent; color: white;">
                    <i class="signal icon"></i>
                    <div class="content" class="ui text shape">
                        <div class="title"><?php echo $_smarty_tpl->tpl_vars['MINECRAFTDOMAIN']->value;?>
</div>
                        <?php if ($_smarty_tpl->tpl_vars['MINECRAFTSTYLE']->value == '1') {?>
                            <div id="minecraftdesc" style="color: white;"></div>
                        <?php }?>
                        <div class="ui vertical white animated button" onclick="copy('#ip')">
                            <div class="hidden content">
                                <div class="description" style="color: white;"><strong><?php echo $_smarty_tpl->tpl_vars['CLICK_TO_COPY']->value;?>
</strong></div>
                            </div>
                            <div class="visible content">
                                <div class="description" style="color: white;"><strong>
                                        <div id="minecraftplayers">Loading...</div>
                                    </strong></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php }?>
</div><?php }
}
