<?php
/* Smarty version 4.3.1, created on 2023-05-13 08:49:59
  from '/home/vol1000_8/epizy.com/epiz_34193542/htdocs/custom/templates/Nexus/template_settings/tpl/colors.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_645f33178dc864_01181092',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e5c88db7154a402b33775a624fe20eed72b19c9c' => 
    array (
      0 => '/home/vol1000_8/epizy.com/epiz_34193542/htdocs/custom/templates/Nexus/template_settings/tpl/colors.tpl',
      1 => 1683960375,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_645f33178dc864_01181092 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Colors Content -->
<div class="card mb-3">
    <h3 class="card-header mb-3 text-center"><?php echo $_smarty_tpl->tpl_vars['COLORS_PAGE']->value;?>
</h3>
    <div class="card-body">
        <form action="" method="POST">
            <input type="hidden" name="sel_btn_session" value="colors" />
            <div class="form-group">
                <label for="darkMode"><?php echo $_smarty_tpl->tpl_vars['DARKMODE_LABEL']->value;?>
</label>
                <select id="inputDarkMode" class="form-control mr-sm-2" name="darkMode">
                    <option value="0" <?php if ($_smarty_tpl->tpl_vars['DARKMODE']->value == '0') {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['DISABLED']->value;?>
</option>
                    <option value="1" <?php if ($_smarty_tpl->tpl_vars['DARKMODE']->value == '1') {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['ENABLED']->value;?>
</option>
                </select>
            </div>
            <div class="form-group">
                <label for="colorsStyle"><?php echo $_smarty_tpl->tpl_vars['COLORSSTYLE_LABEL']->value;?>
</label>
                <select id="inputColorsStyle" class="form-control mr-sm-2" name="colorsStyle">
                    <option value="0" <?php if ($_smarty_tpl->tpl_vars['COLORSSTYLE']->value == '0') {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['COLORSSTYLE_NORMAL_LABEL']->value;?>
</option>
                    <option value="1" <?php if ($_smarty_tpl->tpl_vars['COLORSSTYLE']->value == '1') {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['COLORSSTYLE_COLORS_LABEL']->value;?>
</option>
                </select>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['COLORSSTYLE']->value == '1') {?>
                <div class="form-group">
                    <label for="primaryColor"><?php echo $_smarty_tpl->tpl_vars['PRIMARYCOLOR_LABEL']->value;?>
</label>
                    <input type="color" class="form-control" id="inputPrimaryColor" name="primaryColor"
                        value="<?php echo $_smarty_tpl->tpl_vars['PRIMARYCOLOR']->value;?>
">
                </div>
                <?php if ($_smarty_tpl->tpl_vars['NAVBARSTYLE']->value != '2') {?>
                    <div class="form-group">
                        <label for="navbarColor"><?php echo $_smarty_tpl->tpl_vars['NAVBARCOLOR_LABEL']->value;?>
 <span class="badge badge-info"><i
                                    class="fas fa-question-circle" data-container="body" data-toggle="popover"
                                    data-placement="top" data-content="<?php echo $_smarty_tpl->tpl_vars['COLORS_INFO_LABEL']->value;?>
"
                                    data-original-title="<?php echo $_smarty_tpl->tpl_vars['INFO']->value;?>
"></i></span></label>
                        <input type="color" class="form-control" id="inputNavbarColor" name="navbarColor"
                            value="<?php echo $_smarty_tpl->tpl_vars['NAVBARCOLOR']->value;?>
">
                    </div>
                <?php }?>
                <div class="form-group">
                    <label for="footerColor"><?php echo $_smarty_tpl->tpl_vars['FOOTERCOLOR_LABEL']->value;?>
 <span class="badge badge-info"><i
                                class="fas fa-question-circle" data-container="body" data-toggle="popover"
                                data-placement="top" data-content="<?php echo $_smarty_tpl->tpl_vars['COLORS_INFO_LABEL']->value;?>
"
                                data-original-title="<?php echo $_smarty_tpl->tpl_vars['INFO']->value;?>
"></i></span></label>
                    <input type="color" class="form-control" id="inputFooterColor" name="footerColor"
                        value="<?php echo $_smarty_tpl->tpl_vars['FOOTERCOLOR']->value;?>
">
                </div>
                <div class="form-group">
                    <label for="outlineColor"><?php echo $_smarty_tpl->tpl_vars['OUTLINECOLOR_LABEL']->value;?>
 <span class="badge badge-info"><i
                                class="fas fa-question-circle" data-container="body" data-toggle="popover"
                                data-placement="top" data-content="<?php echo $_smarty_tpl->tpl_vars['OUTLINECOLOR_INFO_LABEL']->value;?>
"
                                data-original-title="<?php echo $_smarty_tpl->tpl_vars['INFO']->value;?>
"></i></span></label>
                    <input type="color" class="form-control" id="inputOutlineColor" name="outlineColor"
                        value="<?php echo $_smarty_tpl->tpl_vars['OUTLINECOLOR']->value;?>
">
                </div>
                <?php if ($_smarty_tpl->tpl_vars['NAVBARSTYLE']->value != '2') {?>
                    <div class="form-group">
                        <label for="navbarTextColor"><?php echo $_smarty_tpl->tpl_vars['NAVBARTEXTCOLOR_LABEL']->value;?>
</label>
                        <select id="inputNavbarTextColor" class="form-control mr-sm-2" name="navbarTextColor">
                            <option value="0" <?php if ($_smarty_tpl->tpl_vars['NAVBARTEXTCOLOR']->value == '0') {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['NAVBARTEXT_NORMAL_LABEL']->value;?>
</option>
                            <option value="1" <?php if ($_smarty_tpl->tpl_vars['NAVBARTEXTCOLOR']->value == '1') {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['NAVBARTEXT_BLACK_LABEL']->value;?>
</option>
                            <option value="2" <?php if ($_smarty_tpl->tpl_vars['NAVBARTEXTCOLOR']->value == '2') {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['NAVBARTEXT_WHITE_LABEL']->value;?>
</option>
                        </select>
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
    </div>
</div><?php }
}
