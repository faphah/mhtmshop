<?php
/* Smarty version 3.1.48, created on 2024-05-24 12:31:54
  from 'module:pscategorytreemodviewstem' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66505e8a35b184_10619727',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0aef5d4b253ac0963182526fdf8cd7c41bdc10ed' => 
    array (
      0 => 'module:pscategorytreemodviewstem',
      1 => 1716542996,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66505e8a35b184_10619727 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'categories_custom' => 
  array (
    'compiled_filepath' => '/var/www/html/mhtmshop/var/cache/prod/smarty/compile/revostore/0a/ef/5d/0aef5d4b253ac0963182526fdf8cd7c41bdc10ed_2.module.pscategorytreemodviewstem.php',
    'uid' => '0aef5d4b253ac0963182526fdf8cd7c41bdc10ed',
    'call_name' => 'smarty_template_function_categories_custom_125690697066505e8a331017_80551676',
  ),
));
$_smarty_tpl->_assignInScope('ci', 0);?>

    
    <div class="block-categories-custom col-md-3 col-sm-3 col-lg-3 hidden-sm-down">
      <div class="block-categories-custom-content">
          <h3 class="block-categories-title"> Categories </h3>
          <div class="category-top-menu-pos">
            <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'categories_custom', array('nodes'=>$_smarty_tpl->tpl_vars['categories_custom']->value['children']), true);?>

            <span class="view view_more_cat"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'More categories ','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
<i class="fa fa-angle-double-down"></i></span></span>
            <span class="view view_less_cat"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Less categories ','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
<i class="fa fa-angle-double-up"></i></span></span>
            
          </div>
      </div>
    </div><?php }
/* smarty_template_function_categories_custom_125690697066505e8a331017_80551676 */
if (!function_exists('smarty_template_function_categories_custom_125690697066505e8a331017_80551676')) {
function smarty_template_function_categories_custom_125690697066505e8a331017_80551676(Smarty_Internal_Template $_smarty_tpl,$params) {
$params = array_merge(array('nodes'=>array(),'depth'=>0), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

      <?php if (count($_smarty_tpl->tpl_vars['nodes']->value)) {?><ul class="<?php if ((isset($_smarty_tpl->tpl_vars['depth']->value)) && $_smarty_tpl->tpl_vars['depth']->value == 0) {?>category-top-menu-list <?php }?>category-sub-menu" data-show="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['depth']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['nodes']->value, 'node');
$_smarty_tpl->tpl_vars['node']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['node']->value) {
$_smarty_tpl->tpl_vars['node']->do_else = false;
$_smarty_tpl->_assignInScope('ci', $_smarty_tpl->tpl_vars['ci']->value+1);?><li <?php if ((isset($_smarty_tpl->tpl_vars['ci']->value)) && $_smarty_tpl->tpl_vars['ci']->value > 11) {?> class="hidden_product"<?php }?>><?php if ($_smarty_tpl->tpl_vars['depth']->value === 0) {?><a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['node']->value['link'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['node']->value['name'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</a><?php if ($_smarty_tpl->tpl_vars['node']->value['children']) {?><div class="navbar-toggler collapse-icons" data-toggle="collapse" data-target="#customexCollapsingNavbar<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['node']->value['id'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><i class="ion-ios-arrow-right add"></i></div><div class="collapse sub_cat_hover" id="customexCollapsingNavbar<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['node']->value['id'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'categories_custom', array('nodes'=>$_smarty_tpl->tpl_vars['node']->value['children'],'depth'=>$_smarty_tpl->tpl_vars['depth']->value+1), true);?>
</div><?php }
} else { ?><a class="category-sub-link" href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['node']->value['link'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['node']->value['name'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</a><?php if ($_smarty_tpl->tpl_vars['node']->value['children']) {?><span class="arrows" data-toggle="collapse" data-target="#customexCollapsingNavbar<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['node']->value['id'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><i class="ion-ios-arrow-right arrow-right"></i></span><div class="collapse sub_cat_hover" id="customexCollapsingNavbar<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['node']->value['id'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'categories_custom', array('nodes'=>$_smarty_tpl->tpl_vars['node']->value['children'],'depth'=>$_smarty_tpl->tpl_vars['depth']->value+1), true);?>
</div><?php }
}?></li><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul><?php }?>
    <?php
}}
/*/ smarty_template_function_categories_custom_125690697066505e8a331017_80551676 */
}
