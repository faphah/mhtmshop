<?php
/* Smarty version 3.1.48, created on 2024-05-24 12:31:53
  from '/var/www/html/mhtmshop/modules/ybc_productimagehover/views/templates/hook/renderJs.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66505e89223612_29230155',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bf5d1a544e32652d1d51c1b001c9a65f8919bc6e' => 
    array (
      0 => '/var/www/html/mhtmshop/modules/ybc_productimagehover/views/templates/hook/renderJs.tpl',
      1 => 1716542996,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66505e89223612_29230155 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
 var baseAjax ='<?php if ((isset($_smarty_tpl->tpl_vars['_PI_VER_17_']->value)) && $_smarty_tpl->tpl_vars['_PI_VER_17_']->value) {
echo $_smarty_tpl->tpl_vars['baseAjax']->value;
} else {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['baseAjax']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?>';
 var YBC_PI_TRANSITION_EFFECT = '<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['YBC_PI_TRANSITION_EFFECT']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
';
 var _PI_VER_17_ = <?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['_PI_VER_17_']->value), ENT_QUOTES, 'UTF-8');?>

 var _PI_VER_16_ = <?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['_PI_VER_16_']->value), ENT_QUOTES, 'UTF-8');?>

<?php echo '</script'; ?>
><?php }
}
