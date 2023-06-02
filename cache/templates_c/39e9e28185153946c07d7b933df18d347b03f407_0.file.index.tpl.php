<?php
/* Smarty version 4.3.1, created on 2023-05-12 23:42:46
  from '/home/vol1000_8/epizy.com/epiz_34193542/htdocs/custom/templates/DefaultRevamp/suggestions/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_645eb2d6b8d7c1_07821376',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '39e9e28185153946c07d7b933df18d347b03f407' => 
    array (
      0 => '/home/vol1000_8/epizy.com/epiz_34193542/htdocs/custom/templates/DefaultRevamp/suggestions/index.tpl',
      1 => 1683927735,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:navbar.tpl' => 1,
    'file:suggestions/search.tpl' => 1,
    'file:suggestions/categories.tpl' => 1,
    'file:suggestions/recent_activity.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_645eb2d6b8d7c1_07821376 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="ui container" style="padding-bottom:300px;">
  <div class="ui segment">
	<div class="ui stackable grid">
	  <div class="ui centered row">
		<div class="ui ten wide tablet twelve wide computer column">
		  <h1 style="display:inline;"><?php echo $_smarty_tpl->tpl_vars['SUGGESTIONS']->value;?>
</h1><span class="right floated">
		  <div class="ui small dropdown primary button">
		    <span class="text"><?php echo $_smarty_tpl->tpl_vars['SORT_BY']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['SORT_BY_VALUE']->value;?>
</span> <i class="dropdown icon"></i>
		    <div class="menu">
			  <a rel="noopener nofollow" class="item" href="<?php echo $_smarty_tpl->tpl_vars['SORT_NEWEST_LINK']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['NEWEST']->value;?>
</a>
			  <a rel="noopener nofollow" class="item" href="<?php echo $_smarty_tpl->tpl_vars['SORT_RECENT_ACTIVITY_LINK']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['RECENT_ACTIVITY']->value;?>
</a>
			  <a rel="noopener nofollow" class="item" href="<?php echo $_smarty_tpl->tpl_vars['SORT_LIKES_LINK']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['LIKES']->value;?>
</a>
		    </div>
		  </div>
          <?php if ((isset($_smarty_tpl->tpl_vars['CAN_CREATE']->value))) {?>
		  <a class="ui small primary button" href="<?php echo $_smarty_tpl->tpl_vars['NEW_SUGGESTION_LINK']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['NEW_SUGGESTION']->value;?>
</a>
          <?php }?>
          </span>
		  <hr>
		  
		  <?php if ((isset($_smarty_tpl->tpl_vars['SUGGESTIONS_LIST']->value))) {?>
			<table class="ui fixed single line selectable unstackable small padded res table">
			  <thead>
				<tr>
				  <th class="eight wide"><?php echo $_smarty_tpl->tpl_vars['SUGGESTION_TITLE']->value;?>
</th>
				  <th class="three wide"><?php echo $_smarty_tpl->tpl_vars['STATS']->value;?>
</th>
				  <th class="five wide"><?php echo $_smarty_tpl->tpl_vars['LAST_REPLY']->value;?>
</th>
				</tr>
			  </thead>
			  <tbody>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SUGGESTIONS_LIST']->value, 'suggestion');
$_smarty_tpl->tpl_vars['suggestion']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['suggestion']->value) {
$_smarty_tpl->tpl_vars['suggestion']->do_else = false;
?>
				  <tr>
					<td>
					  <h5 class="ui header">
						<div class="content">
						  <?php echo $_smarty_tpl->tpl_vars['suggestion']->value['status'];?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['suggestion']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['suggestion']->value['title'];?>
</a>
						  <div class="sub header">
							<span data-toggle="tooltip" data-content="<?php echo $_smarty_tpl->tpl_vars['suggestion']->value['created'];?>
"><?php echo $_smarty_tpl->tpl_vars['suggestion']->value['created_rough'];?>
</span> <?php echo $_smarty_tpl->tpl_vars['BY']->value;?>
 <a style="<?php echo $_smarty_tpl->tpl_vars['suggestion']->value['author_style'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['suggestion']->value['author_link'];?>
" data-poload="<?php echo $_smarty_tpl->tpl_vars['USER_INFO_URL']->value;
echo $_smarty_tpl->tpl_vars['suggestion']->value['author_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['suggestion']->value['author_username'];?>
</a>
						  </div>
					   </div>
					  </h5>
					</td>
					
					<td>
					  <strong><?php echo $_smarty_tpl->tpl_vars['suggestion']->value['likes'];?>
</strong> <?php echo $_smarty_tpl->tpl_vars['LIKES']->value;?>
<br />
					  <strong><?php echo $_smarty_tpl->tpl_vars['suggestion']->value['dislikes'];?>
</strong> <?php echo $_smarty_tpl->tpl_vars['DISLIKES']->value;?>

					</td>
					
					<td>
					  <h5 class="ui header">
						<div class="content">
						  <div class="sub header">
							<span data-toggle="tooltip" data-content="<?php echo $_smarty_tpl->tpl_vars['suggestion']->value['updated'];?>
"><?php echo $_smarty_tpl->tpl_vars['suggestion']->value['updated_rough'];?>
</span></br> <?php echo $_smarty_tpl->tpl_vars['BY']->value;?>
 <a style="<?php echo $_smarty_tpl->tpl_vars['suggestion']->value['updated_by_style'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['suggestion']->value['updated_by_link'];?>
" data-poload="<?php echo $_smarty_tpl->tpl_vars['USER_INFO_URL']->value;
echo $_smarty_tpl->tpl_vars['suggestion']->value['updated_by_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['suggestion']->value['updated_by_username'];?>
</a>
						  </div>
					   </div>
					  </h5>
					</td>
				  </tr>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			  </tbody>
			</table>
			
			<?php echo $_smarty_tpl->tpl_vars['PAGINATION']->value;?>
	
		  <?php } else { ?>
			<?php echo $_smarty_tpl->tpl_vars['NO_SUGGESTIONS']->value;?>

		  <?php }?>
		  
		</div>
		
		<div class="ui six wide tablet four wide computer column">
		  <?php $_smarty_tpl->_subTemplateRender('file:suggestions/search.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
		  <?php $_smarty_tpl->_subTemplateRender('file:suggestions/categories.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
		  <?php $_smarty_tpl->_subTemplateRender('file:suggestions/recent_activity.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
		</div>
		
	  </div>
	</div>
  </div>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
