<?php
/* Smarty version 4.3.1, created on 2023-05-12 21:55:04
  from '/home/vol1000_8/epizy.com/epiz_34193542/htdocs/modules/Staff/pages/panel/staff.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_645e999878f3d8_59511140',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cca69993e71cd001d30a11d4d5f1c46810fbbac7' => 
    array (
      0 => '/home/vol1000_8/epizy.com/epiz_34193542/htdocs/modules/Staff/pages/panel/staff.tpl',
      1 => 1683921149,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:sidebar.tpl' => 1,
    'file:navbar.tpl' => 1,
    'file:footer.tpl' => 1,
    'file:scripts.tpl' => 1,
  ),
),false)) {
function content_645e999878f3d8_59511140 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body id="page-top">

<div id="wrapper">
	<?php $_smarty_tpl->_subTemplateRender('file:sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	<div id="content-wrapper" class="d-flex flex-column">
		<div id="content">
			<?php $_smarty_tpl->_subTemplateRender('file:navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
			<div class="container-fluid">
				<div class="row align-items-center mb-4">
					<div class="col-sm-6">
						<h1 class="h3 mb-0 text-gray-800"><?php echo $_smarty_tpl->tpl_vars['PAGE_TITLE']->value;?>
</h1>
					</div>
					<div class="col-sm-6">
						<ol class="breadcrumb float-sm-right mb-0">
							<li class="breadcrumb-item">
								<a href="<?php echo $_smarty_tpl->tpl_vars['SITE_HOME']->value;?>
panel"><?php echo $_smarty_tpl->tpl_vars['STAFF_LANGUAGE']->value['dashboard'];?>
</a>
							</li>
							<li class="breadcrumb-item">
								<?php echo $_smarty_tpl->tpl_vars['STAFF_LANGUAGE']->value['settings'];?>

							</li>
						</ol>
					</div>
				</div>

				<?php if ((isset($_smarty_tpl->tpl_vars['SUCCESS']->value))) {?>
					<div class="alert alert-success">
						<h5>
							<i class="fas fa-check-circle fa-fw"></i>
							<?php echo $_smarty_tpl->tpl_vars['STAFF_LANGUAGE']->value['success'];?>

						</h5>
						<?php echo $_smarty_tpl->tpl_vars['SUCCESS']->value;?>

					</div>
				<?php }?>
				<?php if ((isset($_smarty_tpl->tpl_vars['ERROR']->value))) {?>
					<div class="alert alert-danger">
						<h5>
							<i class="fas fa-exclamation-circle fa-fw"></i>
							<?php echo $_smarty_tpl->tpl_vars['STAFF_LANGUAGE']->value['error'];?>

						</h5>
						<?php echo $_smarty_tpl->tpl_vars['ERROR']->value;?>

					</div>
				<?php }?>
				<div class="card shadow">
					<div class="card-body">
						<form method="post">
							<div class="row justify-content-center">
								<div class="col-lg-6">
									<div class="form-group">
										<label for="inputPageTitle"><?php echo $_smarty_tpl->tpl_vars['STAFF_LANGUAGE']->value['pageTitle'];?>
</label>
										<input type="text" name="pageTitle" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['SETTINGS']->value['pageTitle'];?>
" id="inputPageTitle">
									</div>
									<div class="form-group">
										<label for="inputLinkPath"><?php echo $_smarty_tpl->tpl_vars['STAFF_LANGUAGE']->value['linkPath'];?>
</label>
										<input type="text" name="linkPath" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['SETTINGS']->value['linkPath'];?>
" id="inputLinkPath">
									</div>
									<div class="form-group">
										<label for="inputLinkLocation"><?php echo $_smarty_tpl->tpl_vars['STAFF_LANGUAGE']->value['linkLocation'];?>
</label>
										<select name="linkLocation" class="form-control" id="inputLinkLocation">
											<option value="1"<?php if (($_smarty_tpl->tpl_vars['SETTINGS']->value['linkLocation'] == '1')) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['STAFF_LANGUAGE']->value['navbar'];?>
</option>
											<option value="2"<?php if (($_smarty_tpl->tpl_vars['SETTINGS']->value['linkLocation'] == '2')) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['STAFF_LANGUAGE']->value['navbarMoreDropdown'];?>
</option>
											<option value="3"<?php if (($_smarty_tpl->tpl_vars['SETTINGS']->value['linkLocation'] == '3')) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['STAFF_LANGUAGE']->value['footer'];?>
</option>
											<option value="4"<?php if (($_smarty_tpl->tpl_vars['SETTINGS']->value['linkLocation'] == '4')) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['STAFF_LANGUAGE']->value['none'];?>
</option>
										</select>
									</div>
									<div class="form-group">
										<label for="inputNavIcon"><?php echo $_smarty_tpl->tpl_vars['STAFF_LANGUAGE']->value['navIcon'];?>
</label>
										<input type="text" name="navIcon" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['SETTINGS']->value['navIcon'];?>
" id="inputNavIcon">
									</div>
									<div class="form-group">
										<label for="inputNavOrder"><?php echo $_smarty_tpl->tpl_vars['STAFF_LANGUAGE']->value['navOrder'];?>
</label>
										<input type="text" name="navOrder" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['SETTINGS']->value['navOrder'];?>
" id="inputNavOrder">
									</div>
									<div class="text-right">
										<input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
										<input type="submit" class="btn btn-primary" value="<?php echo $_smarty_tpl->tpl_vars['STAFF_LANGUAGE']->value['submit'];?>
">
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
				<div style="height: 1rem;"></div>
			</div>
		</div>
		<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	</div>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:scripts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>
</html><?php }
}
