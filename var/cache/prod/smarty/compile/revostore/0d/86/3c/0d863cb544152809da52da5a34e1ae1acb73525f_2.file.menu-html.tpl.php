<?php
/* Smarty version 3.1.48, created on 2024-05-24 12:31:54
  from '/var/www/html/mhtmshop/themes/revostore/modules/ets_megamenu/views/templates/hook/menu-html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66505e8a3c8960_51367028',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0d863cb544152809da52da5a34e1ae1acb73525f' => 
    array (
      0 => '/var/www/html/mhtmshop/themes/revostore/modules/ets_megamenu/views/templates/hook/menu-html.tpl',
      1 => 1716542997,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66505e8a3c8960_51367028 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['menus']->value)) && $_smarty_tpl->tpl_vars['menus']->value) {?>
    <ul class="mm_menus_ul">
        <li class="close_menu">
            <div class="pull-left">
                <span class="mm_menus_back">
                    <i class="icon-bar"></i>
                    <i class="icon-bar"></i>
                    <i class="icon-bar"></i>
                </span>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Menu','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

                
            </div>
            <div class="pull-right">
                <span class="mm_menus_back_icon"></span>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Back','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

            </div>
        </li>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['menus']->value, 'menu');
$_smarty_tpl->tpl_vars['menu']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['menu']->value) {
$_smarty_tpl->tpl_vars['menu']->do_else = false;
?>
            <li  class="mm_menus_li <?php if ($_smarty_tpl->tpl_vars['menu']->value['custom_class']) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['menu']->value['custom_class'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?> <?php if ($_smarty_tpl->tpl_vars['menu']->value['sub_menu_type']) {?>mm_sub_align_<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( strtolower($_smarty_tpl->tpl_vars['menu']->value['sub_menu_type']),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?> <?php if ($_smarty_tpl->tpl_vars['menu']->value['columns']) {?>mm_has_sub<?php }?>">
                <a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['menu']->value['menu_link'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
                    <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['menu']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

                    <?php if ($_smarty_tpl->tpl_vars['menu']->value['bubble_text']) {?><span class="mm_bubble_text" style="background: <?php if ($_smarty_tpl->tpl_vars['menu']->value['bubble_background_color']) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['menu']->value['bubble_background_color'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>#FC4444<?php }?>; color: <?php if (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['menu']->value['bubble_text_color'],'html','UTF-8' ))) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['menu']->value['bubble_text_color'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>#ffffff<?php }?>;"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['menu']->value['bubble_text'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</span><?php }?>
                </a>
                <?php if ($_smarty_tpl->tpl_vars['menu']->value['columns']) {?><span class="arrow closed"></span><?php }?>
                <?php if ($_smarty_tpl->tpl_vars['menu']->value['columns']) {?>
                    <ul class="mm_columns_ul" style="width:<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['menu']->value['sub_menu_max_width'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
%;">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['menu']->value['columns'], 'column');
$_smarty_tpl->tpl_vars['column']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['column']->value) {
$_smarty_tpl->tpl_vars['column']->do_else = false;
?>
                            <li class="mm_columns_li column_size_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['column']->value['column_size']), ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['column']->value['is_breaker']) {?>mm_breaker<?php }?> <?php if ($_smarty_tpl->tpl_vars['column']->value['blocks']) {?>mm_has_sub<?php }?>">
                                <?php if ((isset($_smarty_tpl->tpl_vars['column']->value['blocks'])) && $_smarty_tpl->tpl_vars['column']->value['blocks']) {?>
                                    <ul class="mm_blocks_ul">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['column']->value['blocks'], 'block');
$_smarty_tpl->tpl_vars['block']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['block']->value) {
$_smarty_tpl->tpl_vars['block']->do_else = false;
?>
                                            <li data-id-block="<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['block']->value['id_block']), ENT_QUOTES, 'UTF-8');?>
" class="mm_blocks_li">
                                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayBlock','block'=>$_smarty_tpl->tpl_vars['block']->value),$_smarty_tpl ) );?>

                                            </li>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </ul>
                                <?php }?>
                            </li>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </ul>
                <?php }?>     
            </li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
<?php }
}
}
