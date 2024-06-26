<?php
/* Smarty version 3.1.48, created on 2024-05-24 12:31:54
  from '/var/www/html/mhtmshop/themes/revostore/templates/_partials/breadcrumb.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66505e8a69ada1_52820311',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2a819360aecb24f8dcf23d28cbd31a905dbec7ee' => 
    array (
      0 => '/var/www/html/mhtmshop/themes/revostore/templates/_partials/breadcrumb.tpl',
      1 => 1716542997,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66505e8a69ada1_52820311 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['page']->value['page_name'] != 'index') {?>
<div class="breadcrumb_wrapper" data-depth="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['breadcrumb']->value['count'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
    <div class="container">
        <nav data-depth="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['breadcrumb']->value['count'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="breadcrumb">
          <ol itemscope itemtype="http://schema.org/BreadcrumbList">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['breadcrumb']->value['links'], 'path', false, NULL, 'breadcrumb', array (
  'iteration' => true,
));
$_smarty_tpl->tpl_vars['path']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['path']->value) {
$_smarty_tpl->tpl_vars['path']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['iteration']++;
?>
              <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                <a itemprop="item" href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['path']->value['url'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
                  <span itemprop="name"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['path']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</span>
                </a>
                <meta itemprop="position" content="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( (isset($_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['iteration'] : null),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" />
              </li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'cart') {?>
                <li itemtype="http://schema.org/ListItem" itemscope="" itemprop="itemListElement">
                    <a>
                      <span itemprop="name"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shopping Cart','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
                    </a>
                  </li>
            <?php }?>
          </ol>
        </nav>
    </div>
</div>
<?php }
}
}
