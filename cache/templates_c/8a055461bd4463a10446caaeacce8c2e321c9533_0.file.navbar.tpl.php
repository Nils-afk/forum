<?php
/* Smarty version 4.3.1, created on 2023-05-13 08:49:59
  from '/home/vol1000_8/epizy.com/epiz_34193542/htdocs/custom/templates/Nexus/template_settings/tpl/navbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_645f33178e8da2_58021827',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8a055461bd4463a10446caaeacce8c2e321c9533' => 
    array (
      0 => '/home/vol1000_8/epizy.com/epiz_34193542/htdocs/custom/templates/Nexus/template_settings/tpl/navbar.tpl',
      1 => 1683960376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_645f33178e8da2_58021827 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Navbar Content -->
<div class="card mb-3">
    <h3 class="card-header mb-3 text-center"><?php echo $_smarty_tpl->tpl_vars['NAVBAR_PAGE']->value;?>
</h3>
    <div class="card-body">
        <form action="" method="POST">
            <input type="hidden" name="sel_btn_session" value="navbar" />
            <div class="form-group">
                <label for="navbarLogo"><?php echo $_smarty_tpl->tpl_vars['NAVBARLOGO_LABEL']->value;?>
 <span class="badge badge-info">
                        <i class="fas fa-question-circle" data-container="body" data-toggle="popover"
                            data-placement="top" data-content="<?php echo $_smarty_tpl->tpl_vars['NAVBARLOGO_INFO_LABEL']->value;?>
"
                            data-original-title="<?php echo $_smarty_tpl->tpl_vars['INFO']->value;?>
"></i>
                    </span></label>
                <input type="text" class="form-control" id="inputNavbarLogo" name="navbarLogo"
                    placeholder="https://example.com/img/logo.png" value="<?php echo $_smarty_tpl->tpl_vars['NAVBARLOGO']->value;?>
">
            </div>
            <div class="form-group">
                <label for="navbarExclude"><?php echo $_smarty_tpl->tpl_vars['NAVBAREXCLUDE_LABEL']->value;?>
 <span class="badge badge-info">
                        <i class="fas fa-question-circle" data-container="body" data-toggle="popover"
                            data-placement="top" data-content="<?php echo $_smarty_tpl->tpl_vars['NAVBAREXCLUDE_INFO_LABEL']->value;?>
"
                            data-original-title="<?php echo $_smarty_tpl->tpl_vars['INFO']->value;?>
"></i>
                    </span></label>
                <input type="text" class="form-control" id="inputNavbarExclude" name="navbarExclude"
                    placeholder="page1/page2" value="<?php echo $_smarty_tpl->tpl_vars['NAVBAREXCLUDE']->value;?>
">
            </div>
            <?php if ($_smarty_tpl->tpl_vars['NAVBARSTYLE']->value != '2') {?>
                <div class="form-group">
                    <label for="navbarSticky"><?php echo $_smarty_tpl->tpl_vars['NAVBARSTICKY_LABEL']->value;?>
</label>
                    <select id="inputNavbarSticky" class="form-control mr-sm-2" name="navbarSticky">
                        <option value="0" <?php if ($_smarty_tpl->tpl_vars['NAVBARSTICKY']->value == '0') {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['DISABLED']->value;?>
</option>
                        <option value="1" <?php if ($_smarty_tpl->tpl_vars['NAVBARSTICKY']->value == '1') {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['ENABLED']->value;?>
</option>
                    </select>
                </div>
            <?php }?>
            <div class="form-group">
                <label for="navbarStyle"><?php echo $_smarty_tpl->tpl_vars['NAVBARSTYLE_LABEL']->value;?>
 <span class="badge badge-info">
                        <i class="fas fa-question-circle" data-container="body" data-toggle="popover"
                            data-placement="top" data-content="<?php echo $_smarty_tpl->tpl_vars['NAVBARSTYLE_INFO_LABEL']->value;?>
"
                            data-original-title="<?php echo $_smarty_tpl->tpl_vars['INFO']->value;?>
"></i>
                    </span></label>
                <select id="inputNavbarStyle" class="form-control mr-sm-2" name="navbarStyle">
                    <option value="0" <?php if ($_smarty_tpl->tpl_vars['NAVBARSTYLE']->value == '0') {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['NAVBARELEGANT_LABEL']->value;?>
</option>
                    <option value="1" <?php if ($_smarty_tpl->tpl_vars['NAVBARSTYLE']->value == '1') {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['NAVBARDYNAMIC_LABEL']->value;?>
</option>
                    <option value="2" <?php if ($_smarty_tpl->tpl_vars['NAVBARSTYLE']->value == '2') {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['NAVBARMODERN_LABEL']->value;?>
</option>
                </select>
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
