<?php
/* Smarty version 4.3.1, created on 2023-05-13 08:49:59
  from '/home/vol1000_8/epizy.com/epiz_34193542/htdocs/custom/templates/Nexus/template_settings/tpl/connections.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_645f33178f7a64_57928431',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '61a98fbbca23e065e13b8ed205bff36c6ec3c120' => 
    array (
      0 => '/home/vol1000_8/epizy.com/epiz_34193542/htdocs/custom/templates/Nexus/template_settings/tpl/connections.tpl',
      1 => 1683960375,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_645f33178f7a64_57928431 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Connections Content -->
<div class="card mb-3">
    <h3 class="card-header mb-3 text-center"><?php echo $_smarty_tpl->tpl_vars['CONNECTIONS_PAGE']->value;?>
</h3>
    <div class="card-body">
        <h3 class="text-center"><?php echo $_smarty_tpl->tpl_vars['DISCORD_LABEL']->value;?>
</h3>
        <form action="" method="POST">
            <input type="hidden" name="sel_btn_session" value="connections" />
            <div class="form-group">
                <label for="discordView"><?php echo $_smarty_tpl->tpl_vars['DISCORDVIEW_LABEL']->value;?>
 <span class="badge badge-info">
                        <i class="fas fa-question-circle" data-container="body" data-toggle="popover"
                            data-placement="top" data-content="<?php echo $_smarty_tpl->tpl_vars['DISCORDVIEW_INFO_LABEL']->value;?>
"
                            data-original-title="<?php echo $_smarty_tpl->tpl_vars['INFO']->value;?>
"></i>
                    </span></label>
                <select id="inputDiscordView" class="form-control mr-sm-2" name="discordView">
                    <option value="0" <?php if ($_smarty_tpl->tpl_vars['DISCORDVIEW']->value == '0') {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['DISABLED']->value;?>
</option>
                    <option value="1" <?php if ($_smarty_tpl->tpl_vars['DISCORDVIEW']->value == '1') {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['ENABLED']->value;?>
</option>
                </select>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['DISCORDVIEW']->value == '1') {?>
                <div class="form-group">
                    <label for="discordID"><?php echo $_smarty_tpl->tpl_vars['DISCORDID_LABEL']->value;?>
 <span class="badge badge-info">
                            <i class="fas fa-question-circle" data-container="body" data-toggle="popover"
                                data-placement="top" data-content="<?php echo $_smarty_tpl->tpl_vars['DISCORDID_INFO_LABEL']->value;?>
"
                                data-original-title="<?php echo $_smarty_tpl->tpl_vars['INFO']->value;?>
"></i>
                        </span></label>
                    <input type="text" class="form-control" id="inputDiscordID" name="discordID"
                        placeholder="760945720470667294" value="<?php echo $_smarty_tpl->tpl_vars['DISCORDID']->value;?>
">
                </div>
            <?php }?>
            <div class="form-group">
                <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
                <button type="submit" class="btn btn-primary w-100"><i class="fas fa-save"></i>
                    <?php echo $_smarty_tpl->tpl_vars['SUBMIT']->value;?>
</button>
            </div>
        </form>
        <hr />
        <h3 class="text-center"><?php echo $_smarty_tpl->tpl_vars['MINECRAFT_LABEL']->value;?>
</h3>
        <form action="" method="POST">
            <input type="hidden" name="sel_btn_session" value="connections" />
            <div class="form-group">
                <label for="minecraftView"><?php echo $_smarty_tpl->tpl_vars['MINECRAFTVIEW_LABEL']->value;?>
</label>
                <select id="inputMinecraftView" class="form-control mr-sm-2" name="minecraftView">
                    <option value="0" <?php if ($_smarty_tpl->tpl_vars['MINECRAFTVIEW']->value == '0') {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['DISABLED']->value;?>
</option>
                    <option value="1" <?php if ($_smarty_tpl->tpl_vars['MINECRAFTVIEW']->value == '1') {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['ENABLED']->value;?>
</option>
                </select>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['MINECRAFTVIEW']->value == '1') {?>
                <div class="form-group">
                    <label for="minecraftDomain"><?php echo $_smarty_tpl->tpl_vars['MINECRAFTDOMAIN_LABEL']->value;?>
</label>
                    <input type="text" class="form-control" id="inputMinecraftDomain" name="minecraftDomain"
                        placeholder="mc.hypixel.net" value="<?php echo $_smarty_tpl->tpl_vars['MINECRAFTDOMAIN']->value;?>
">
                </div>
                <div class="form-group">
                    <label for="minecraftIP"><?php echo $_smarty_tpl->tpl_vars['MINECRAFTIP_LABEL']->value;?>
</label>
                    <input type="text" class="form-control" id="inputMinecraftIP" name="minecraftIP"
                        placeholder="mc.hypixel.net" value="<?php echo $_smarty_tpl->tpl_vars['MINECRAFTIP']->value;?>
">
                </div>
                <div class="form-group">
                    <label for="minecraftPort"><?php echo $_smarty_tpl->tpl_vars['MINECRAFTPORT_LABEL']->value;?>
</label>
                    <input type="text" class="form-control" id="inputMinecraftPort" name="minecraftPort" placeholder="25565"
                        value="<?php echo $_smarty_tpl->tpl_vars['MINECRAFTPORT']->value;?>
">
                </div>
                <div class="form-group">
                    <label for="minecraftStyle"><?php echo $_smarty_tpl->tpl_vars['MINECRAFTSTYLE_LABEL']->value;?>
 <span class="badge badge-info">
                            <i class="fas fa-question-circle" data-container="body" data-toggle="popover"
                                data-placement="top" data-content="<?php echo $_smarty_tpl->tpl_vars['MINECRAFTSTYLE_INFO_LABEL']->value;?>
"
                                data-original-title="<?php echo $_smarty_tpl->tpl_vars['INFO']->value;?>
"></i>
                        </span></label>
                    <select id="inputMinecraftStyle" class="form-control mr-sm-2" name="minecraftStyle">
                        <option value="0" <?php if ($_smarty_tpl->tpl_vars['MINECRAFTSTYLE']->value == '0') {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['SIMPLE_LABEL']->value;?>
</option>
                        <option value="1" <?php if ($_smarty_tpl->tpl_vars['MINECRAFTSTYLE']->value == '1') {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['ADVANCED_LABEL']->value;?>
</option>
                    </select>
                </div>
            <?php }?>
            <div class="form-group">
                <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
                <button type="submit" class="btn btn-primary w-100"><i class="fas fa-save"></i>
                    <?php echo $_smarty_tpl->tpl_vars['SUBMIT']->value;?>
</button>
            </div>
        </form>
    </div>
</div><?php }
}
