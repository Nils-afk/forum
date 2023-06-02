<?php
/* Smarty version 4.3.1, created on 2023-05-13 08:49:13
  from '/home/vol1000_8/epizy.com/epiz_34193542/htdocs/custom/templates/Nexus/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_645f32e9cd7191_83470904',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '05bfd57c58ea4d22c59228e1fc8e98fd0387db41' => 
    array (
      0 => '/home/vol1000_8/epizy.com/epiz_34193542/htdocs/custom/templates/Nexus/header.tpl',
      1 => 1683960328,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Nexus/colors.tpl' => 1,
    'file:Nexus/modern.tpl' => 1,
    'file:Nexus/scrollbar.tpl' => 1,
  ),
),false)) {
function content_645f32e9cd7191_83470904 (Smarty_Internal_Template $_smarty_tpl) {
if (defined("HTML_CLASS")) {
$_smarty_tpl->_assignInScope('HTMLCLASS', " ".((string)(defined('HTML_CLASS') ? constant('HTML_CLASS') : null)));
} else {
$_smarty_tpl->_assignInScope('HTMLCLASS', '');
}
if (defined("HTML_LANG")) {
$_smarty_tpl->_assignInScope('HTMLLANG', " lang='".((string)(defined('HTML_LANG') ? constant('HTML_LANG') : null))."'");
} else {
$_smarty_tpl->_assignInScope('HTMLLANG', " lang='en'");
}
if (defined("HTML_RTL") && (defined('HTML_RTL') ? constant('HTML_RTL') : null) == true) {
$_smarty_tpl->_assignInScope('HTMLRTL', " dir='rtl'");
} else {
$_smarty_tpl->_assignInScope('HTMLRTL', " dir='ltr'");
}
if (defined("LANG_CHARSET")) {
$_smarty_tpl->_assignInScope('METACHARSET', ((string)(defined('LANG_CHARSET') ? constant('LANG_CHARSET') : null)));
} else {
$_smarty_tpl->_assignInScope('METACHARSET', "utf-8");
}
if ((isset($_smarty_tpl->tpl_vars['PAGE_DESCRIPTION']->value)) && preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['PAGE_DESCRIPTION']->value, $tmp) > 0) {
$_smarty_tpl->_assignInScope('PAGEDESCRIPTION', ((string)$_smarty_tpl->tpl_vars['PAGE_DESCRIPTION']->value));
} else {
$_smarty_tpl->_assignInScope('PAGEDESCRIPTION', " ");
}
if ((isset($_smarty_tpl->tpl_vars['PAGE_KEYWORDS']->value)) && preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['PAGE_KEYWORDS']->value, $tmp) > 0) {
$_smarty_tpl->_assignInScope('PAGEKEYWORDS', ((string)$_smarty_tpl->tpl_vars['PAGE_KEYWORDS']->value));
} else {
$_smarty_tpl->_assignInScope('PAGEKEYWORDS', " ");
}?>

<!DOCTYPE html>
<html<?php echo $_smarty_tpl->tpl_vars['HTMLCLASS']->value;
echo $_smarty_tpl->tpl_vars['HTMLLANG']->value;
echo $_smarty_tpl->tpl_vars['HTMLRTL']->value;?>
>
    <!-- Nexus 1.7.2 by VertisanPRO | https://github.com/VertisanPRO/nexus -->
    <head>
        <meta charset="<?php echo $_smarty_tpl->tpl_vars['METACHARSET']->value;?>
">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <?php if ($_smarty_tpl->tpl_vars['EMBEDTITLE']->value == '$every') {?>
            <title><?php echo $_smarty_tpl->tpl_vars['TITLE']->value;?>
 &bull; <?php echo (defined('SITE_NAME') ? constant('SITE_NAME') : null);?>
</title>
        <?php } else { ?>
            <title><?php echo $_smarty_tpl->tpl_vars['EMBEDTITLE']->value;?>
</title>
        <?php }?>

        <?php if ((isset($_smarty_tpl->tpl_vars['FAVICON']->value))) {?>
            <link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['FAVICON']->value;?>
" type="image/x-icon" />
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['EMBEDTITLE']->value == '$every') {?>
            <meta name="author" content="<?php echo $_smarty_tpl->tpl_vars['TITLE']->value;?>
 &bull; <?php echo (defined('SITE_NAME') ? constant('SITE_NAME') : null);?>
" />
        <?php } else { ?>
            <meta name="author" content="<?php echo $_smarty_tpl->tpl_vars['EMBEDTITLE']->value;?>
" />
        <?php }?>
        <meta name='description' content='<?php echo $_smarty_tpl->tpl_vars['EMBEDTEXT']->value;?>
' />
        <meta name='keywords' content='<?php echo $_smarty_tpl->tpl_vars['EMBEDKEYWORDS']->value;?>
' />

        <?php if ($_smarty_tpl->tpl_vars['EMBEDTITLE']->value == '$every') {?>
            <meta property="og:title" content="<?php echo $_smarty_tpl->tpl_vars['TITLE']->value;?>
 &bull; <?php echo (defined('SITE_NAME') ? constant('SITE_NAME') : null);?>
" />
        <?php } else { ?>
            <meta property="og:title" content="<?php echo $_smarty_tpl->tpl_vars['EMBEDTITLE']->value;?>
" />
        <?php }?>
        <meta property="og:type" content="website" />
        <meta property="og:url" content="<?php echo $_smarty_tpl->tpl_vars['OG_URL']->value;?>
" />
        <meta property="og:image" content="<?php echo $_smarty_tpl->tpl_vars['EMBEDICON']->value;?>
" />
        <meta property='og:description' content='<?php echo $_smarty_tpl->tpl_vars['EMBEDTEXT']->value;?>
' />
        <meta name="theme-color" content="<?php echo $_smarty_tpl->tpl_vars['EMBEDCOLOR']->value;?>
">
        <meta content="<?php echo $_smarty_tpl->tpl_vars['EMBEDCOLOR']->value;?>
" data-react-helmet="true" name="theme-color" />

        <!-- Twitter Card Properties -->
        <?php if ($_smarty_tpl->tpl_vars['EMBEDTITLE']->value == '$every') {?>
            <meta name="twitter:title" content="<?php echo $_smarty_tpl->tpl_vars['TITLE']->value;?>
 &bull; <?php echo (defined('SITE_NAME') ? constant('SITE_NAME') : null);?>
" />
        <?php } else { ?>
            <meta name="twitter:title" content="<?php echo $_smarty_tpl->tpl_vars['EMBEDTITLE']->value;?>
" />
        <?php }?>
        <meta name="twitter:card" content="summary" />
        <meta name="twitter:image" content="<?php echo $_smarty_tpl->tpl_vars['OG_IMAGE']->value;?>
" />

        <?php if ((isset($_smarty_tpl->tpl_vars['PAGE_DESCRIPTION']->value)) && preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['PAGE_DESCRIPTION']->value, $tmp) > 0) {?>
            <meta name="twitter:description" content="<?php echo $_smarty_tpl->tpl_vars['PAGE_DESCRIPTION']->value;?>
" />
        <?php }?>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['TEMPLATE_CSS']->value, 'css');
$_smarty_tpl->tpl_vars['css']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['css']->value) {
$_smarty_tpl->tpl_vars['css']->do_else = false;
?>
            <?php echo $_smarty_tpl->tpl_vars['css']->value;?>

        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        <?php if ($_smarty_tpl->tpl_vars['CUSTOMCSS']->value != '') {?>
            <style>
                <?php echo $_smarty_tpl->tpl_vars['CUSTOMCSS']->value;?>

            </style>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['COLORSSTYLE']->value == '1') {?>
            <?php $_smarty_tpl->_subTemplateRender('file:Nexus/colors.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['NAVBARSTYLE']->value == '2') {?>
            <?php $_smarty_tpl->_subTemplateRender('file:Nexus/modern.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php }?>

        <?php $_smarty_tpl->_subTemplateRender('file:Nexus/scrollbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <?php if ((isset($_smarty_tpl->tpl_vars['ANALYTICS_ID']->value))) {?>
            
                <?php echo '<script'; ?>
 async src="https://www.googletagmanager.com/gtag/js?id=<?php echo $_smarty_tpl->tpl_vars['ANALYTICS_ID']->value;?>
"><?php echo '</script'; ?>
>
                <?php echo '<script'; ?>
 type="text/javascript">
                    window.dataLayer = window.dataLayer || [];

                    function gtag() { dataLayer.push(arguments); }
                    gtag('js', new Date());

                    gtag('config', '<?php echo $_smarty_tpl->tpl_vars['ANALYTICS_ID']->value;?>
');
                <?php echo '</script'; ?>
>
            
        <?php }?>

        <?php if ((isset($_smarty_tpl->tpl_vars['DEBUGBAR_JS']->value))) {?>
            <?php echo $_smarty_tpl->tpl_vars['DEBUGBAR_JS']->value;?>

        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['ARCVIEW']->value == '1') {?>
            <?php echo '<script'; ?>
 async src="<?php echo $_smarty_tpl->tpl_vars['ARCURL']->value;?>
"><?php echo '</script'; ?>
>
        <?php }?>
    </head>

        <body<?php if ($_smarty_tpl->tpl_vars['NEXUS_DARK_MODE']->value) {?> class="dark" <?php }?> id="page-<?php if (is_numeric((defined('PAGE') ? constant('PAGE') : null))) {
echo $_smarty_tpl->tpl_vars['TITLE']->value;
} else {
echo (defined('PAGE') ? constant('PAGE') : null);
}?>"><?php }
}
