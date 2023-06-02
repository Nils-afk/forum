<?php
/* Smarty version 4.3.1, created on 2023-05-13 08:49:59
  from '/home/vol1000_8/epizy.com/epiz_34193542/htdocs/custom/templates/Nexus/template_settings/tpl/addons.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_645f3317922935_30316930',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9420fb77fb65cf02cf698fcac3d4e99164f26725' => 
    array (
      0 => '/home/vol1000_8/epizy.com/epiz_34193542/htdocs/custom/templates/Nexus/template_settings/tpl/addons.tpl',
      1 => 1683960375,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_645f3317922935_30316930 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Connections Content -->
<div class="card mb-3">
    <h3 class="card-header mb-3 text-center"><?php echo $_smarty_tpl->tpl_vars['ADDONS_PAGE']->value;?>
</h3>
    <div class="card-body">
        <h3 class="text-center"><?php echo $_smarty_tpl->tpl_vars['WIDGETBOT_LABEL']->value;?>
</h3>
        <form action="" method="POST">
            <input type="hidden" name="sel_btn_session" value="addons" />
            <div class="form-group">
                <label for="widgetBotView"><?php echo $_smarty_tpl->tpl_vars['WIDGETBOT_LABEL']->value;?>
 <span class="badge badge-info">
                        <i class="fas fa-question-circle" data-container="body" data-toggle="popover"
                            data-placement="top" data-content="<?php echo $_smarty_tpl->tpl_vars['WIDGETBOTVIEW_INFO_LABEL']->value;?>
"
                            data-original-title="<?php echo $_smarty_tpl->tpl_vars['INFO']->value;?>
"></i>
                    </span></label>
                <select id="inputWidgetBotView" class="form-control mr-sm-2" name="widgetBotView">
                    <option value="0" <?php if ($_smarty_tpl->tpl_vars['WIDGETBOTVIEW']->value == '0') {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['DISABLED']->value;?>
</option>
                    <option value="1" <?php if ($_smarty_tpl->tpl_vars['WIDGETBOTVIEW']->value == '1') {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['ENABLED']->value;?>
</option>
                </select>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['WIDGETBOTVIEW']->value == '1') {?>
                <div class="form-group">
                    <label for="widgetBotServerID"><?php echo $_smarty_tpl->tpl_vars['WIDGETBOTSERVERID_LABEL']->value;?>
 <span class="badge badge-info">
                            <i class="fas fa-question-circle" data-container="body" data-toggle="popover"
                                data-placement="top" data-content="<?php echo $_smarty_tpl->tpl_vars['WIDGETBOTSERVERID_INFO_LABEL']->value;?>
"
                                data-original-title="<?php echo $_smarty_tpl->tpl_vars['INFO']->value;?>
"></i>
                        </span></label>
                    <input type="text" class="form-control" id="inputWidgetBotServerID" name="widgetBotServerID"
                        placeholder="760945720470667294" value="<?php echo $_smarty_tpl->tpl_vars['WIDGETBOTSERVERID']->value;?>
">
                </div>
                <div class="form-group">
                    <label for="widgetBotChannelID"><?php echo $_smarty_tpl->tpl_vars['WIDGETBOTCHANNELID_LABEL']->value;?>
 <span class="badge badge-info">
                            <i class="fas fa-question-circle" data-container="body" data-toggle="popover"
                                data-placement="top" data-content="<?php echo $_smarty_tpl->tpl_vars['WIDGETBOTCHANNELID_INFO_LABEL']->value;?>
"
                                data-original-title="<?php echo $_smarty_tpl->tpl_vars['INFO']->value;?>
"></i>
                        </span></label>
                    <input type="text" class="form-control" id="inputWidgetBotChannelID" name="widgetBotChannelID"
                        placeholder="760945722559299668" value="<?php echo $_smarty_tpl->tpl_vars['WIDGETBOTCHANNELID']->value;?>
">
                </div>
                <div class="form-group">
                    <label for="widgetBotVerticalLocation"><?php echo $_smarty_tpl->tpl_vars['WIDGETBOTVERTICALLOCATION_LABEL']->value;?>
</label>
                    <select id="inputWidgetBotVerticalLocation" class="form-control mr-sm-2"
                        name="widgetBotVerticalLocation">
                        <option value="bottom" <?php if ($_smarty_tpl->tpl_vars['WIDGETBOTVERTICALLOCATION']->value == 'bottom') {?> selected<?php }?>>
                            <?php echo $_smarty_tpl->tpl_vars['WIDGETBOTLOCATION_BOTTOM_LABEL']->value;?>
</option>
                        <option value="top" <?php if ($_smarty_tpl->tpl_vars['WIDGETBOTVERTICALLOCATION']->value == 'top') {?> selected<?php }?>>
                            <?php echo $_smarty_tpl->tpl_vars['WIDGETBOTLOCATION_TOP_LABEL']->value;?>
</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="widgetBotHorizontalLocation"><?php echo $_smarty_tpl->tpl_vars['WIDGETBOTHORIZONTALLOCATION_LABEL']->value;?>
</label>
                    <select id="inputWidgetBotHorizontalLocation" class="form-control mr-sm-2"
                        name="widgetBotHorizontalLocation">
                        <option value="right" <?php if ($_smarty_tpl->tpl_vars['WIDGETBOTHORIZONTALLOCATION']->value == 'right') {?> selected<?php }?>>
                            <?php echo $_smarty_tpl->tpl_vars['WIDGETBOTLOCATION_RIGHT_LABEL']->value;?>
</option>
                        <option value="left" <?php if ($_smarty_tpl->tpl_vars['WIDGETBOTHORIZONTALLOCATION']->value == 'left') {?> selected<?php }?>>
                            <?php echo $_smarty_tpl->tpl_vars['WIDGETBOTLOCATION_LEFT_LABEL']->value;?>
</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="widgetBotColor"><?php echo $_smarty_tpl->tpl_vars['WIDGETBOTCOLOR_LABEL']->value;?>
</label>
                    <select id="inputWidgetBotColor" class="form-control mr-sm-2" name="widgetBotColor">
                        <option value="0" <?php if ($_smarty_tpl->tpl_vars['WIDGETBOTCOLOR']->value == '0') {?> selected<?php }?>>
                            <?php echo $_smarty_tpl->tpl_vars['WIDGETBOTCOLOR_ORIGINAL_LABEL']->value;?>
</option>
                        <option value="1" <?php if ($_smarty_tpl->tpl_vars['WIDGETBOTCOLOR']->value == '1') {?> selected<?php }?>>
                            <?php echo $_smarty_tpl->tpl_vars['WIDGETBOTCOLOR_NORMAL_LABEL']->value;?>
</option>
                        <option value="2" <?php if ($_smarty_tpl->tpl_vars['WIDGETBOTCOLOR']->value == '2') {?> selected<?php }?>>
                            <?php echo $_smarty_tpl->tpl_vars['WIDGETBOTCOLOR_CUSTOM_LABEL']->value;?>
</option>
                    </select>
                </div>
                <?php if ($_smarty_tpl->tpl_vars['WIDGETBOTCOLOR']->value == '2') {?>
                    <div class="form-group">
                        <label for="widgetBotCustomColor"><?php echo $_smarty_tpl->tpl_vars['WIDGETBOTCOLOR_CUSTOM_LABEL']->value;?>
</label>
                        <input type="color" class="form-control" id="inputWidgetBotCustomColor" name="widgetBotCustomColor"
                            value="<?php echo $_smarty_tpl->tpl_vars['WIDGETBOTCUSTOMCOLOR']->value;?>
">
                    </div>
                <?php }?>
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
        <h3 class="text-center"><?php echo $_smarty_tpl->tpl_vars['ARC_LABEL']->value;?>
</h3>
        <form action="" method="POST">
            <input type="hidden" name="sel_btn_session" value="addons" />
            <div class="form-group">
                <label for="arcView"><?php echo $_smarty_tpl->tpl_vars['ARC_LABEL']->value;?>
 <span class="badge badge-info">
                        <i class="fas fa-question-circle" data-container="body" data-toggle="popover"
                            data-placement="top" data-content="<?php echo $_smarty_tpl->tpl_vars['ARCVIEW_INFO_LABEL']->value;?>
" data-original-title="<?php echo $_smarty_tpl->tpl_vars['INFO']->value;?>
"></i>
                    </span></label>
                <select id="inputArcView" class="form-control mr-sm-2" name="arcView">
                    <option value="0" <?php if ($_smarty_tpl->tpl_vars['ARCVIEW']->value == '0') {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['DISABLED']->value;?>
</option>
                    <option value="1" <?php if ($_smarty_tpl->tpl_vars['ARCVIEW']->value == '1') {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['ENABLED']->value;?>
</option>
                </select>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['ARCVIEW']->value == '1') {?>
                <div class="form-group">
                    <label for="arcURL"><?php echo $_smarty_tpl->tpl_vars['ARCURL_LABEL']->value;?>
</label>
                    <input type="text" class="form-control" id="inputArcURL" name="arcURL"
                        placeholder="https://arc.io/widget.min.js#9YB4rHQn" value="<?php echo $_smarty_tpl->tpl_vars['ARCURL']->value;?>
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
    </div>
</div><?php }
}
