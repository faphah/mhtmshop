<?php
/* Smarty version 3.1.48, created on 2024-05-24 12:31:54
  from '/var/www/html/mhtmshop/themes/revostore/modules/ybc_blog_free/views/templates/hook/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66505e8addc3f9_55546230',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9c9e1d7d23604ad269945b8f9c17a437314ed885' => 
    array (
      0 => '/var/www/html/mhtmshop/themes/revostore/modules/ybc_blog_free/views/templates/hook/footer.tpl',
      1 => 1716542997,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66505e8addc3f9_55546230 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
    ybc_blog_free_like_url = '<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['like_url']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
';
    ybc_like_error ='<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['ybc_like_error']->value,'quotes','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
';
    YBC_BLOG_FREE_GALLERY_SPEED = <?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['YBC_BLOG_FREE_GALLERY_SPEED']->value), ENT_QUOTES, 'UTF-8');?>
;
    YBC_BLOG_FREE_SLIDER_SPEED = <?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['YBC_BLOG_FREE_SLIDER_SPEED']->value), ENT_QUOTES, 'UTF-8');?>
;
    YBC_BLOG_FREE_GALLERY_SKIN = '<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['YBC_BLOG_FREE_GALLERY_SKIN']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
';
    YBC_BLOG_FREE_GALLERY_AUTO_PLAY = <?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['YBC_BLOG_FREE_GALLERY_AUTO_PLAY']->value), ENT_QUOTES, 'UTF-8');?>
;
<?php echo '</script'; ?>
><?php }
}
