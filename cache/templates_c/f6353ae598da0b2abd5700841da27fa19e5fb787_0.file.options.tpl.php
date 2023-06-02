<?php
/* Smarty version 4.3.1, created on 2023-05-13 08:49:59
  from '/home/vol1000_8/epizy.com/epiz_34193542/htdocs/custom/templates/Nexus/template_settings/tpl/options.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_645f33178cd392_66464299',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f6353ae598da0b2abd5700841da27fa19e5fb787' => 
    array (
      0 => '/home/vol1000_8/epizy.com/epiz_34193542/htdocs/custom/templates/Nexus/template_settings/tpl/options.tpl',
      1 => 1683960377,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_645f33178cd392_66464299 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Options Content -->
<div class="card mb-3">
    <h3 class="card-header mb-3 text-center"><?php echo $_smarty_tpl->tpl_vars['OPTIONS_PAGE']->value;?>
</h3>
    <div class="card-body">
        <div class="alert bg-primary text-white">
            <h5><i class="icon fas fa-sticky-note"></i> <?php echo $_smarty_tpl->tpl_vars['NOTE']->value;?>
</h5>
            <?php echo $_smarty_tpl->tpl_vars['NOTE_REVIEW']->value;?>

        </div>
        <form action="" method="POST">
            <input type="hidden" name="sel_btn_session" value="options" />
            <div class="form-group">
                <label for="footerAbout"><?php echo $_smarty_tpl->tpl_vars['FOOTERABOUT_LABEL']->value;?>
</label>
                <input type="text" name="footerAbout" class="form-control" id="inputFooterAbout"
                    placeholder="<?php echo $_smarty_tpl->tpl_vars['FOOTERABOUT_PLACEHOLDER_LABEL']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['FOOTERABOUT']->value;?>
">
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-6">
                        <label for="customCSS"><?php echo $_smarty_tpl->tpl_vars['CUSTOMCSS_LABEL']->value;?>
 <span class="badge badge-info"><i
                                    class="fas fa-question-circle" data-container="body" data-toggle="popover"
                                    data-placement="top" data-content="<?php echo $_smarty_tpl->tpl_vars['CUSTOMCSS_INFO_LABEL']->value;?>
"
                                    data-original-title="<?php echo $_smarty_tpl->tpl_vars['INFO']->value;?>
"></i></span></label>
                        <textarea name="customCSS" style="height: 150px;" class="form-control"
                            id="inputCustomCSS"><?php echo $_smarty_tpl->tpl_vars['CUSTOMCSS']->value;?>
</textarea>
                    </div>
                    <div class="col-md-6">
                        <label for="customJS"><?php echo $_smarty_tpl->tpl_vars['CUSTOMJS_LABEL']->value;?>
 <span class="badge badge-info"><i
                                    class="fas fa-question-circle" data-container="body" data-toggle="popover"
                                    data-placement="top" data-content="<?php echo $_smarty_tpl->tpl_vars['CUSTOMJS_INFO_LABEL']->value;?>
"
                                    data-original-title="<?php echo $_smarty_tpl->tpl_vars['INFO']->value;?>
"></i></span></label>
                        <textarea name="customJS" style="height: 150px;" class="form-control"
                            id="inputCustomJS"><?php echo $_smarty_tpl->tpl_vars['CUSTOMJS']->value;?>
</textarea>
                    </div>
                </div>
            </div>
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
