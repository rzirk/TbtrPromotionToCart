<?php declare(strict_types=1);

namespace Tbtr\PromotionToCart;

use Shopware\Core\Framework\Plugin;
use Shopware\Core\Framework\Plugin\Context\ActivateContext;
use Shopware\Core\Framework\Plugin\Context\DeactivateContext;
use Shopware\Core\Framework\Plugin\Context\InstallContext;
use Shopware\Core\Framework\Plugin\Context\UninstallContext;

class TbtrPromotionToCart extends Plugin
{
    public function install(InstallContext $context): void
    {
        parent::install($context);
        // Do stuff such as creating a new payment method
    }

    public function uninstall(UninstallContext $context): void
    {
        parent::uninstall($context);

        if ($context->keepUserData()) {
            return;
        }

        // Remove or deactivate the data created by the plugin
    }
}