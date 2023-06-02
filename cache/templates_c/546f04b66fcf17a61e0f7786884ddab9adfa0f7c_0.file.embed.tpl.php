<?php
/* Smarty version 4.3.1, created on 2023-05-13 08:49:59
  from '/home/vol1000_8/epizy.com/epiz_34193542/htdocs/custom/templates/Nexus/template_settings/tpl/embed.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_645f3317939907_16869827',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '546f04b66fcf17a61e0f7786884ddab9adfa0f7c' => 
    array (
      0 => '/home/vol1000_8/epizy.com/epiz_34193542/htdocs/custom/templates/Nexus/template_settings/tpl/embed.tpl',
      1 => 1683960376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_645f3317939907_16869827 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Embed Content -->
<div class="card mb-3">
    <h3 class="card-header mb-3 text-center"><?php echo $_smarty_tpl->tpl_vars['EMBED_PAGE']->value;?>
</h3>
    <div class="card-body">
        <form action="" method="POST">
            <input type="hidden" name="sel_btn_session" value="embed" />
            <div class="form-group">
                <label for="embedTitle"><?php echo $_smarty_tpl->tpl_vars['EMBEDTITLE_LABEL']->value;?>
 <span class="badge badge-info"><i
                            class="fas fa-question-circle" data-container="body" data-toggle="popover"
                            data-placement="top" data-content="<?php echo $_smarty_tpl->tpl_vars['EMBEDTITLE_INFO_LABEL']->value;?>
"
                            data-original-title="<?php echo $_smarty_tpl->tpl_vars['INFO']->value;?>
"></i></span></label>
                <input type="text" name="embedTitle" class="form-control" id="inputEmbedTitle"
                    placeholder="<?php echo (defined('SITE_NAME') ? constant('SITE_NAME') : null);?>
" value="<?php echo $_smarty_tpl->tpl_vars['EMBEDTITLE']->value;?>
">
            </div>
            <div class="form-group">
                <label for="embedText"><?php echo $_smarty_tpl->tpl_vars['EMBEDTEXT_LABEL']->value;?>
</label>
                <input type="text" name="embedText" class="form-control" id="inputEmbedText" value="<?php echo $_smarty_tpl->tpl_vars['EMBEDTEXT']->value;?>
">
            </div>
            <div class="form-group">
                <label for="embedColor"><?php echo $_smarty_tpl->tpl_vars['EMBEDCOLOR_LABEL']->value;?>
</label>
                <input type="color" class="form-control" id="inputEmbedColor" name="embedColor" value="<?php echo $_smarty_tpl->tpl_vars['EMBEDCOLOR']->value;?>
">
            </div>
            <div class="form-group">
                <label for="embedIcon"><?php echo $_smarty_tpl->tpl_vars['EMBEDICON_LABEL']->value;?>
 <span class="badge badge-info"><i
                            class="fas fa-question-circle" data-container="body" data-toggle="popover"
                            data-placement="top" data-content="<?php echo $_smarty_tpl->tpl_vars['EMBEDICON_INFO_LABEL']->value;?>
"
                            data-original-title="<?php echo $_smarty_tpl->tpl_vars['INFO']->value;?>
"></i></span></label>
                <input type="text" name="embedIcon" class="form-control" id="inputEmbedIcon"
                    placeholder="https://example.com/img/logo.png" value="<?php echo $_smarty_tpl->tpl_vars['EMBEDICON']->value;?>
">
            </div>
            <div class="form-group">
                <label for="embedKeywords"><?php echo $_smarty_tpl->tpl_vars['EMBEDKEYWORDS_LABEL']->value;?>
 <span class="badge badge-info"><i
                            class="fas fa-question-circle" data-container="body" data-toggle="popover"
                            data-placement="top" data-content="<?php echo $_smarty_tpl->tpl_vars['EMBEDKEYWORDS_INFO_LABEL']->value;?>
"
                            data-original-title="<?php echo $_smarty_tpl->tpl_vars['INFO']->value;?>
"></i></span></label>
                <input type="text" name="embedKeywords" class="form-control" id="inputEmbedKeywords"
                    value="<?php echo $_smarty_tpl->tpl_vars['EMBEDKEYWORDS']->value;?>
">
            </div>
            <div class="form-group">
                <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
                <button type="submit" class="btn btn-primary w-100"><i class="fas fa-save"></i>
                    <?php echo $_smarty_tpl->tpl_vars['SUBMIT']->value;?>
</button>
            </div>
        </form>
        <div class="card shadow mb-4 embed-preview">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary"><?php echo $_smarty_tpl->tpl_vars['EMBEDPREVIEW_LABEL']->value;?>
</h6>
            </div>
            <div class="card-body ">
                <div class="message">
                    <div class="name-box">
                        <img src="https://i.imgur.com/B8B0Zrc.png"
                            style="width: 52px;height: 52px;border-radius: 3.14vh;" />
                        <h2 class="name">Nexus <?php echo $_smarty_tpl->tpl_vars['EMBEDTEMPLATE_LABEL']->value;?>
</h2>
                        <span class="bot-tag"><?php echo $_smarty_tpl->tpl_vars['EMBEDBOT_LABEL']->value;?>
</span>
                        <p class="date">27/09/2022</p>
                    </div>
                    <div class="content-box">
                        <p class="content"><?php echo $_smarty_tpl->tpl_vars['EMBEDMESSAGEPREVIEW_LABEL']->value;?>
</p>
                        <div class="embed-box">
                            <?php if ($_smarty_tpl->tpl_vars['EMBEDTITLE']->value == '$every') {?>
                                <p class="title link" onclick="window.open('/')"><?php echo $_smarty_tpl->tpl_vars['TITLE']->value;?>
 &bull; <?php echo (defined('SITE_NAME') ? constant('SITE_NAME') : null);?>

                                </p>
                            <?php } else { ?>
                                <p class="title link" onclick="window.open('/')"><?php echo $_smarty_tpl->tpl_vars['EMBEDTITLE']->value;?>
</p>
                            <?php }?>
                            <p class="description">
                                <?php echo $_smarty_tpl->tpl_vars['EMBEDTEXT']->value;?>

                            </p>
                            <img src="<?php echo $_smarty_tpl->tpl_vars['EMBEDICON']->value;?>
" alt="Error: Failed to load image" class="thumbnail-picture" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    * {
        margin: 0;
        padding: 0;
    }

    .screen-size-error-container,
    .screen-size-error {
        display: none;
    }

    .link {
        color: #00b0f4;
        cursor: pointer;
        font-family: "Whitney";
    }

    .link:hover {
        text-decoration: underline;
    }

    .message {
        width: fit-content;
        height: fit-content;
    }

    .name-box {
        display: flex;
    }

    .profile-picture {
        width: 50px;
        height: 50px;
        border-radius: 50%;
    }

    .name {
        font-weight: normal;
        margin-top: 1px;
        margin-left: 1rem;
        font-size: 1.1rem;
        font-family: "Whitney";
    }

    .bot-tag {
        position: relative;
        background-color: #7289da;
        height: min-content;
        padding: 0.17rem;
        border-radius: 4px;
        font-size: 0.7rem;
        color: white;
        top: 4px;
        left: 4px;
    }

    .date {
        color: grey;
        font-size: 0.8rem;
        margin-top: 6px;
        margin-left: 13px;
        font-weight: 500;
        font-family: "Whitney";
    }

    .content-box {
        position: relative;
        top: -25px;
        left: 66.5px;
    }

    .embed-box {
        background-color: #161c25;
        margin-top: -10px;
        width: 135%;
        height: 145px;
        border-left: 5px solid <?php if ((isset($_smarty_tpl->tpl_vars['EMBEDCOLOR']->value))) {
echo $_smarty_tpl->tpl_vars['EMBEDCOLOR']->value;
} else { ?>#46d0e6<?php }?>;
        border-radius: 4px;
        position: relative;
    }

    .author {
        position: absolute;
        margin-top: 10px;
        margin-left: 6px;
        color: #ffffff;
    }

    .author-picture {
        width: 26px;
        height: 26px;
        border-radius: 50%;
    }

    .author-name {
        color: #ffffff;
        font-weight: normal;
        top: -26px;
        left: 35px;
        font-size: 1rem;
        position: relative;
        width: min-content;
        margin-right: 0;
    }

    .thumbnail-picture {
        width: 100px;
        height: 100px;
        border-radius: 5px;
        right: 15px;
        top: 15px;
        position: absolute;
    }

    .title {
        position: relative;
        font-weight: lighter;
        top: 14px;
        left: 10px;
    }

    .description {
        position: relative;
        top: 0px;
        left: 10px;
        color: hsla(0, 0%, 100%, 0.6);
        font-size: 14px;
        font-weight: 500;
        max-width: 360px;
    }

    @media screen and (max-width: 1024px) {
        .embed-preview {
            display: none !important;
        }
    }
</style><?php }
}
