<?php
/* Smarty version 4.3.1, created on 2023-05-13 08:49:59
  from '/home/vol1000_8/epizy.com/epiz_34193542/htdocs/custom/templates/Nexus/template_settings/tpl/preloader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_645f331790e9e4_70242388',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dc7a0f395d9c3f7bdfd61fcf42b6488f1527e359' => 
    array (
      0 => '/home/vol1000_8/epizy.com/epiz_34193542/htdocs/custom/templates/Nexus/template_settings/tpl/preloader.tpl',
      1 => 1683960377,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_645f331790e9e4_70242388 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Preloader Content -->
<div class="card mb-3">
    <h3 class="card-header mb-3 text-center"><?php echo $_smarty_tpl->tpl_vars['PRELOADER_PAGE']->value;?>
</h3>
    <div class="card-body">
        <form action="" method="POST">
            <input type="hidden" name="sel_btn_session" value="preloader" />
            <div class="form-group">
                <label for="preloaderView"><?php echo $_smarty_tpl->tpl_vars['PRELOADERVIEW_LABEL']->value;?>
 <span class="badge badge-info">
                        <i class="fas fa-question-circle" data-container="body" data-toggle="popover"
                            data-placement="top" data-content="<?php echo $_smarty_tpl->tpl_vars['PRELOADERVIEW_INFO_LABEL']->value;?>
"
                            data-original-title="<?php echo $_smarty_tpl->tpl_vars['INFO']->value;?>
"></i>
                    </span></label>
                <select id="inputPreloaderView" class="form-control mr-sm-2" name="preloaderView">
                    <option value="0" <?php if ($_smarty_tpl->tpl_vars['PRELOADERVIEW']->value == '0') {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['DISABLED']->value;?>
</option>
                    <option value="1" <?php if ($_smarty_tpl->tpl_vars['PRELOADERVIEW']->value == '1') {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['ENABLED']->value;?>
</option>
                </select>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['PRELOADERVIEW']->value == '1') {?>
                <div class="form-group">
                    <label for="preloaderText"><?php echo $_smarty_tpl->tpl_vars['PRELOADERTEXT_LABEL']->value;?>
</label>
                    <input type="text" class="form-control" id="inputPreloaderText" name="preloaderText"
                        placeholder="<?php echo $_smarty_tpl->tpl_vars['PRELOADERLOADING_LABEL']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['PRELOADERTEXT']->value;?>
">
                </div>
                <div class="form-group">
                    <label for="preloaderColor"><?php echo $_smarty_tpl->tpl_vars['PRELOADERCOLOR_LABEL']->value;?>
</label>
                    <select id="inputPreloaderColor" class="form-control mr-sm-2" name="preloaderColor">
                        <option value="red" <?php if ($_smarty_tpl->tpl_vars['PRELOADERCOLOR']->value == 'red') {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['PRELOADER_RED']->value;?>
</option>
                        <option value="orange" <?php if ($_smarty_tpl->tpl_vars['PRELOADERCOLOR']->value == 'orange') {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['PRELOADER_ORANGE']->value;?>
</option>
                        <option value="yellow" <?php if ($_smarty_tpl->tpl_vars['PRELOADERCOLOR']->value == 'yellow') {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['PRELOADER_YELLOW']->value;?>
</option>
                        <option value="olive" <?php if ($_smarty_tpl->tpl_vars['PRELOADERCOLOR']->value == 'olive') {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['PRELOADER_OLIVE']->value;?>
</option>
                        <option value="green" <?php if ($_smarty_tpl->tpl_vars['PRELOADERCOLOR']->value == 'green') {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['PRELOADER_GREEN']->value;?>
</option>
                        <option value="teal" <?php if ($_smarty_tpl->tpl_vars['PRELOADERCOLOR']->value == 'teal') {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['PRELOADER_TEAL']->value;?>
</option>
                        <option value="blue" <?php if ($_smarty_tpl->tpl_vars['PRELOADERCOLOR']->value == 'blue') {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['PRELOADER_BLUE']->value;?>
</option>
                        <option value="violet" <?php if ($_smarty_tpl->tpl_vars['PRELOADERCOLOR']->value == 'violet') {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['PRELOADER_VIOLET']->value;?>
</option>
                        <option value="purple" <?php if ($_smarty_tpl->tpl_vars['PRELOADERCOLOR']->value == 'purple') {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['PRELOADER_PURPLE']->value;?>
</option>
                        <option value="pink" <?php if ($_smarty_tpl->tpl_vars['PRELOADERCOLOR']->value == 'pink') {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['PRELOADER_PINK']->value;?>
</option>
                        <option value="brown" <?php if ($_smarty_tpl->tpl_vars['PRELOADERCOLOR']->value == 'brown') {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['PRELOADER_BROWN']->value;?>
</option>
                        <option value="grey" <?php if ($_smarty_tpl->tpl_vars['PRELOADERCOLOR']->value == 'grey') {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['PRELOADER_GRAY']->value;?>
</option>
                        <option value="black" <?php if ($_smarty_tpl->tpl_vars['PRELOADERCOLOR']->value == 'black') {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['PRELOADER_BLACK']->value;?>
</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="preloaderSpeed"><?php echo $_smarty_tpl->tpl_vars['PRELOADERSPEED_LABEL']->value;?>
</label>
                    <select id="inputPreloaderSpeed" class="form-control mr-sm-2" name="preloaderSpeed">
                        <option value="slow" <?php if ($_smarty_tpl->tpl_vars['PRELOADERSPEED']->value == 'slow') {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['PRELOADER_SLOW']->value;?>
</option>
                        <option value="normal" <?php if ($_smarty_tpl->tpl_vars['PRELOADERSPEED']->value == 'normal') {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['PRELOADER_NORMAL']->value;?>
</option>
                        <option value="fast" <?php if ($_smarty_tpl->tpl_vars['PRELOADERSPEED']->value == 'fast') {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['PRELOADER_FAST']->value;?>
</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="preloaderStyle"><?php echo $_smarty_tpl->tpl_vars['PRELOADERSTYLE_LABEL']->value;?>
</label>
                    <select id="inputPreloaderStyle" class="form-control mr-sm-2" name="preloaderStyle">
                        <option value="normal" <?php if ($_smarty_tpl->tpl_vars['PRELOADERSTYLE']->value == 'normal') {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['PRELOADER_NORMAL']->value;?>
</option>
                        <option value="double" <?php if ($_smarty_tpl->tpl_vars['PRELOADERSTYLE']->value == 'double') {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['PRELOADER_DOUBLE']->value;?>
</option>
                        <option value="elastic" <?php if ($_smarty_tpl->tpl_vars['PRELOADERSTYLE']->value == 'elastic') {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['PRELOADER_ELASTIC']->value;?>

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
