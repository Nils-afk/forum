<?php
/* Smarty version 4.3.1, created on 2023-05-12 16:35:07
  from '/home/vol1000_8/epizy.com/epiz_34193542/htdocs/custom/panel_templates/Default/collections/dashboard_stats/recent_topics.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_645e4e9bad95c5_81017502',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '98f70b225575f7014969c4f64e02bdf8cc3c92bd' => 
    array (
      0 => '/home/vol1000_8/epizy.com/epiz_34193542/htdocs/custom/panel_templates/Default/collections/dashboard_stats/recent_topics.tpl',
      1 => 1683900890,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_645e4e9bad95c5_81017502 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card stats-card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"><?php echo $_smarty_tpl->tpl_vars['TITLE']->value;?>
</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $_smarty_tpl->tpl_vars['VALUE']->value;?>
</div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-comment fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>
<?php }
}
