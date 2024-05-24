<?php
/* Smarty version 3.1.48, created on 2024-05-24 12:31:53
  from '/var/www/html/mhtmshop/modules/ybc_specificprices/views/templates/hook/display_product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66505e89bf4387_74753616',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '04d53aaf77ee3c8b4531d3cd484a7a14ab136cbb' => 
    array (
      0 => '/var/www/html/mhtmshop/modules/ybc_specificprices/views/templates/hook/display_product.tpl',
      1 => 1716542996,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:modules/ybc_specificprices/views/templates/hook/_product.tpl' => 1,
  ),
),false)) {
function content_66505e89bf4387_74753616 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="ybc_countdown col-sm-12 col-md-6 col-lg-6">
    <div id="ybc_specificprices">
        <h3 class="h1 products-section-title text-uppercase">
            <span><i class="fa fa-tags"></i><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['specific_title']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</span>
        </h3>
        <div class="ets-product-specific">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products_list']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_72026570166505e89bf2051_79388052', 'product_miniature');
?>

            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </div>
</div><?php }
/* {block 'product_miniature'} */
class Block_72026570166505e89bf2051_79388052 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_miniature' => 
  array (
    0 => 'Block_72026570166505e89bf2051_79388052',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php $_smarty_tpl->_subTemplateRender('file:modules/ybc_specificprices/views/templates/hook/_product.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?>
                <?php
}
}
/* {/block 'product_miniature'} */
}
