<?php
/* Smarty version 4.3.1, created on 2023-05-13 08:49:13
  from '/home/vol1000_8/epizy.com/epiz_34193542/htdocs/custom/templates/Nexus/Nexus/scrollbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_645f32e9ce02a9_58600456',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bb4df1787e8f047cf0610a19f21eace22e8e144b' => 
    array (
      0 => '/home/vol1000_8/epizy.com/epiz_34193542/htdocs/custom/templates/Nexus/Nexus/scrollbar.tpl',
      1 => 1683960344,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_645f32e9ce02a9_58600456 (Smarty_Internal_Template $_smarty_tpl) {
?><style>
    <?php if ($_smarty_tpl->tpl_vars['NEXUS_DARK_MODE']->value == '1') {?>
        ::-webkit-scrollbar {
            width: 6px;
            background-color: #1b1b1b;
        }

        ::-webkit-scrollbar-thumb {
            background: #292929;
            border-radius: 10px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #303030;
        }

    <?php } else { ?>
        ::-webkit-scrollbar {
            width: 6px;
            background-color: #f3f6fa;
        }

        ::-webkit-scrollbar-thumb {
            background: #d4d4d5;
            border-radius: 10px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #c3c4c6;
        }

    <?php }?>
</style><?php }
}
