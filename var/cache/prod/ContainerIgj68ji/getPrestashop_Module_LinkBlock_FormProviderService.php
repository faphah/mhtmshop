<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.module.link_block.form_provider' shared service.

return $this->services['prestashop.module.link_block.form_provider'] = new \PrestaShop\Module\LinkList\Form\LinkBlockFormDataProvider(${($_ = isset($this->services['prestashop.module.link_block.repository']) ? $this->services['prestashop.module.link_block.repository'] : $this->load('getPrestashop_Module_LinkBlock_RepositoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['prestashop.module.link_block.cache']) ? $this->services['prestashop.module.link_block.cache'] : ($this->services['prestashop.module.link_block.cache'] = new \PrestaShop\Module\LinkList\Cache\LegacyLinkBlockCache())) && false ?: '_'}, ${($_ = isset($this->services['prestashop.adapter.legacy.context']) ? $this->services['prestashop.adapter.legacy.context'] : $this->getPrestashop_Adapter_Legacy_ContextService()) && false ?: '_'}->getLanguages(false, ${($_ = isset($this->services['prestashop.adapter.shop.context']) ? $this->services['prestashop.adapter.shop.context'] : ($this->services['prestashop.adapter.shop.context'] = new \PrestaShop\PrestaShop\Adapter\Shop\Context())) && false ?: '_'}->getContextShopID()), ${($_ = isset($this->services['prestashop.adapter.shop.context']) ? $this->services['prestashop.adapter.shop.context'] : ($this->services['prestashop.adapter.shop.context'] = new \PrestaShop\PrestaShop\Adapter\Shop\Context())) && false ?: '_'}, ${($_ = isset($this->services['prestashop.adapter.legacy.configuration']) ? $this->services['prestashop.adapter.legacy.configuration'] : ($this->services['prestashop.adapter.legacy.configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration())) && false ?: '_'});