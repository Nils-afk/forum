<?php
/* Smarty version 4.3.1, created on 2023-05-13 09:08:00
  from '/home/vol1000_8/epizy.com/epiz_34193542/htdocs/custom/templates/Nexus/badges/user/profile_tab.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_645f3750bad117_61197739',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '104bccef42fa1bd76df8d2368e3fe56af54f78b7' => 
    array (
      0 => '/home/vol1000_8/epizy.com/epiz_34193542/htdocs/custom/templates/Nexus/badges/user/profile_tab.tpl',
      1 => 1683960292,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_645f3750bad117_61197739 (Smarty_Internal_Template $_smarty_tpl) {
?><style>
    .main-wrapper {
        width: 90%;
        max-width: 900px;
        margin: 3em auto;
        text-align: center;
    }

    .bdg {
        position: relative;
        margin: 1.5em 3em;
        width: 4em;
        height: 6.2em;
        border-radius: 10px;
        display: inline-block;
        top: 0;
        transition: all 0.2s ease;
    }

    .bdg:before,
    .bdg:after {
        position: absolute;
        width: inherit;
        height: inherit;
        border-radius: inherit;
        background: inherit;
        content: "";
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        margin: auto;
    }

    .bdg:before {
        transform: rotate(60deg);
    }

    .bdg:after {
        transform: rotate(-60deg);
    }

    .bdg:hover {
        top: -4px;
    }

    .bdg .circle {
        /* width: 60px; */
        height: 60px;
        position: absolute;
        background: #fff;
        z-index: 10;
        border-radius: 50%;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        margin: auto;
    }

    .bdgsmall .circlesmall {
        /* width: 60px; */
        height: 60px;
        position: absolute;
        background: #fff;
        z-index: 10;
        border-radius: 50%;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        margin: auto;
    }

    .bdgsmall {
        position: relative;
        border-radius: 50%;
        margin: 1.5em 3em;
        width: 0em;
        height: 0em;
        border-radius: 10px;
        display: inline-block;
        top: 0;
        transition: all 0.2s ease;
    }

    .bdgsmall .circlesmall i.fa {
        font-size: 2em;
        margin-top: 8px;
    }

    .bdg .circle i.fa {
        font-size: 2em;
        margin-top: 8px;
    }

    .bdg .font {
        display: inline-block;
        margin-top: 1em;
    }

    .bdg .ribbon {
        position: absolute;
        border-radius: 4px;
        padding: 5px 5px 4px;
        width: 100px;
        z-index: 11;
        color: #fff;
        bottom: 12px;
        left: 50%;
        margin-left: -50px;
        height: 25px;
        font-size: 14px;
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.27);
        text-shadow: 0 2px 2px rgba(0, 0, 0, 0.1);
        text-transform: uppercase;
        background: linear-gradient(to bottom right, #555 0%, #333 100%);
        cursor: default;
        white-space: nowrap;
    }
</style>
<h3 class="ui header" style="display: flex; align-items: center; justify-content: space-between;">

</h3>


<div class="main-wrapper">

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['BADGES_LIST']->value, 'badges');
$_smarty_tpl->tpl_vars['badges']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['badges']->value) {
$_smarty_tpl->tpl_vars['badges']->do_else = false;
?>
        <?php if ($_smarty_tpl->tpl_vars['badges']->value['status'] == 1) {?>
            <div class="bdg"
                style="background: linear-gradient(to bottom right, <?php echo $_smarty_tpl->tpl_vars['badges']->value['bdg_color'];?>
 0%, <?php echo $_smarty_tpl->tpl_vars['badges']->value['bdg_color'];?>
 100%); color: <?php echo $_smarty_tpl->tpl_vars['badges']->value['bdg_color'];?>
;">
                >
                <div class="circle"> <?php echo $_smarty_tpl->tpl_vars['badges']->value['bdg_icon'];?>
</div>
                <div class="ribbon"><?php echo $_smarty_tpl->tpl_vars['badges']->value['bdg_ribbon'];?>
</div>
            </div>
        <?php } else { ?>
            <div class="bdg"
                style="background: linear-gradient(to bottom right, rgb(148, 148, 184) 0%, rgb(148, 148, 184) 100%); color: rgb(148, 148, 184);">
                >
                <div class="circle"> <?php echo $_smarty_tpl->tpl_vars['badges']->value['bdg_icon'];?>
</div>
                <div class="ribbon"><?php echo $_smarty_tpl->tpl_vars['POSTS']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['USER_POSTS']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['badges']->value['require_posts'];?>
</div>
            </div>
        <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


</div>
<?php }
}
