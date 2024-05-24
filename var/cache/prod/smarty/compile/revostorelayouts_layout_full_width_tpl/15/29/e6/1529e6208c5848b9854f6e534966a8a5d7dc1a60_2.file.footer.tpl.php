<?php
/* Smarty version 3.1.48, created on 2024-05-24 12:31:54
  from '/var/www/html/mhtmshop/themes/revostore/templates/_partials/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66505e8abeaa37_98666549',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1529e6208c5848b9854f6e534966a8a5d7dc1a60' => 
    array (
      0 => '/var/www/html/mhtmshop/themes/revostore/templates/_partials/footer.tpl',
      1 => 1716542997,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66505e8abeaa37_98666549 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="footer-container">
  <div class="container">
    <div class="footer_top">
        <?php if ((isset($_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_LOGO_FOOTER'])) && $_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_LOGO_FOOTER']) {?>
            <div class="logo_footer">
                
                <?php if ((isset($_smarty_tpl->tpl_vars['tc_dev_mode']->value)) && $_smarty_tpl->tpl_vars['tc_dev_mode']->value == true) {?>
                    <?php if ($_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_SKIN'] == 'RED') {?>
                        <img src="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tc_module_path']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
images/logo/red.png" alt="" title="" />
                    
                    <?php } elseif (($_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_SKIN']) == 'BLUE_2') {?>
                        <img src="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tc_module_path']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
images/logo/blue.png" alt="" title="" />
                    
                    <?php } elseif (($_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_SKIN']) == 'BLUE_3') {?>
                        <img src="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tc_module_path']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
images/logo/blue2.png" alt="" title="" />
                    
                    <?php } elseif (($_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_SKIN']) == 'CYAN') {?>
                        <img src="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tc_module_path']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
images/logo/cyan.png" alt="" title="" />
                    
                    <?php } elseif (($_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_SKIN']) == "GREEN_1") {?>
                        <img src="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tc_module_path']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
images/logo/green.png" alt="" title="" />
                    
                    <?php } elseif (($_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_SKIN']) == 'GREEN_2') {?>
                        <img src="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tc_module_path']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
images/logo/green2.png" alt="" title="" />
                    
                    <?php } elseif (($_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_SKIN']) == 'CUSTOM') {?>
                        <img src="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tc_module_path']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
images/logo/custom.png" alt="" title="" />
                    
                    <?php } else { ?>
                        <img src="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tc_module_path']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
images/config/<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_LOGO_FOOTER'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" alt="" title="" />
                    
                    <?php }?>
                <?php } else { ?>
                    <img src="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tc_module_path']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
images/config/<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_LOGO_FOOTER'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" alt="" title="" />
                <?php }?>

            </div>
        <?php }?>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'ybccustom1'),$_smarty_tpl ) );?>

    </div> 
    <div class="footer_middle">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooter'),$_smarty_tpl ) );?>

    </div> 
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'ybcCustom2'),$_smarty_tpl ) );?>

  </div>
  <div class="footer_after">
      <div class="container">
        <div class="row">
            <?php if ((isset($_smarty_tpl->tpl_vars['tc_config']->value['YBC_FOOTER_LINK_CUSTOM'])) && $_smarty_tpl->tpl_vars['tc_config']->value['YBC_FOOTER_LINK_CUSTOM']) {?>
                <div class="footer_link_bottom col-xs-12 col-sm-12 col-md-6">
                    <?php echo $_smarty_tpl->tpl_vars['tc_config']->value['YBC_FOOTER_LINK_CUSTOM'];?>

                </div>
             <?php }?>
            <?php if ((isset($_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_PAYMENT_LOGO'])) && $_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_PAYMENT_LOGO']) {?>
                <div class="payment_footer col-xs-12 col-sm-12 col-md-6">
                    <img src="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tc_module_path']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
images/config/<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_PAYMENT_LOGO'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Payment methods'),$_smarty_tpl ) );?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Payment methods'),$_smarty_tpl ) );?>
" />
                </div>
            <?php }?>
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterAfter'),$_smarty_tpl ) );?>

        </div>
      </div>
  </div>
  
  <div class="footer_bottom">
      <div class="container">
          <div class="row">
              <?php if ((isset($_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_COPYRIGHT_TEXT'])) && $_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_COPYRIGHT_TEXT']) {?>
                <div class="col-md-12 coppyright">
                  <div class="ybc_coppyright">
                    <?php echo $_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_COPYRIGHT_TEXT'];?>

                </div></div>
             <?php }?>
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterBefore'),$_smarty_tpl ) );?>

              <div class="col-md-12 coppyright">
                  <div class="ybc_coppyright">
                     <?php if ((isset($_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_COPYRIGHT_TEXT_EXTRA'])) && $_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_COPYRIGHT_TEXT_EXTRA']) {?>
                        <?php echo $_smarty_tpl->tpl_vars['tc_config']->value['YBC_TC_COPYRIGHT_TEXT_EXTRA'];?>

                     <?php }?>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div class="scroll_top"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'TOP','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span></div>
</div>
<?php }
}
