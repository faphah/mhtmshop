<?php
/* Smarty version 3.1.48, created on 2024-05-24 12:31:53
  from '/var/www/html/mhtmshop/themes/revostore/modules/ets_homecategories/views/templates/hook/sub-categories.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66505e89292095_73965547',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5dfd87de5088ffb2dd555254642f88e7dff15dbe' => 
    array (
      0 => '/var/www/html/mhtmshop/themes/revostore/modules/ets_homecategories/views/templates/hook/sub-categories.tpl',
      1 => 1716542997,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66505e89292095_73965547 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['children']->value)) && $_smarty_tpl->tpl_vars['children']->value) {?>
    <ul class="homcat_tab_sub_categroies<?php if ($_smarty_tpl->tpl_vars['sort_options']->value) {?> inline_sortby<?php }?>">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['children']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
            <li>
                <a class="homcat_tab_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['category']->value['id_category']), ENT_QUOTES, 'UTF-8');?>
 <?php if (!$_smarty_tpl->tpl_vars['ETS_HOMECAT_OPEN_CAT_BY_LINK']->value) {?>homecat_ajax_tab<?php if (!$_smarty_tpl->tpl_vars['ETS_HOMECAT_TABS_GROUPED']->value) {?>_list<?php }?> homecat_ajax_tab_<?php if (!$_smarty_tpl->tpl_vars['ETS_HOMECAT_TABS_GROUPED']->value) {?>list_<?php }
echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['category']->value['id_category']), ENT_QUOTES, 'UTF-8');
}?> is_sub_cat homecat_tab_name" href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getCategoryLink($_smarty_tpl->tpl_vars['category']->value['id_category']),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" data-id-category="<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['category']->value['id_category']), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['category']->value['name'],'html' )), ENT_QUOTES, 'UTF-8');?>
</a>                
            </li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
<?php }
}
}
