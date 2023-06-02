<?php
/* Smarty version 4.3.1, created on 2023-05-12 16:34:57
  from '/home/vol1000_8/epizy.com/epiz_34193542/htdocs/custom/panel_templates/Default/auth.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_645e4e910eb777_46991994',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '162baa94f1b4083320d7fe3fc98e8a24b7b458dd' => 
    array (
      0 => '/home/vol1000_8/epizy.com/epiz_34193542/htdocs/custom/panel_templates/Default/auth.tpl',
      1 => 1683900888,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:scripts.tpl' => 1,
  ),
),false)) {
function content_645e4e910eb777_46991994 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body class="bg-gradient-primary">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-9 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4"><?php echo $_smarty_tpl->tpl_vars['PLEASE_REAUTHENTICATE']->value;?>
</h1>
                            </div>
                            <?php if ((isset($_smarty_tpl->tpl_vars['ERROR']->value))) {?>
                            <div class="alert bg-danger text-white">
                                <?php echo $_smarty_tpl->tpl_vars['ERROR']->value;?>

                            </div>
                            <?php }?>
                            <form class="user" action="" method="post">
                                <div class="form-group has-feedback">
                                    <input type="password" name="password" id="password"
                                        class="form-control form-control-user" placeholder="<?php echo $_smarty_tpl->tpl_vars['PASSWORD']->value;?>
">
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
                                        <button type="submit"
                                            class="btn btn-primary btn-block btn-user"><?php echo $_smarty_tpl->tpl_vars['SUBMIT']->value;?>
</button>
                                    </div>
                                    <div class="col-6">
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['SITE_HOME']->value;?>
" class="btn btn-danger btn-block btn-user"><?php echo $_smarty_tpl->tpl_vars['CANCEL']->value;?>
</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php $_smarty_tpl->_subTemplateRender('file:scripts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>

</html><?php }
}
