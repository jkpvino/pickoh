<?php
/**
 * Apptha
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the EULA
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://www.apptha.com/LICENSE.txt
 *
 * ==============================================================
 *                 MAGENTO EDITION USAGE NOTICE
 * ==============================================================
 * This package designed for Magento COMMUNITY edition
 * Apptha does not guarantee correct work of this extension
 * on any other Magento edition except Magento COMMUNITY edition.
 * Apptha does not provide extension support in case of
 * incorrect edition usage.
 * ==============================================================
 *
 * @category    Apptha
 * @package     Apptha_Marketplace
 * @version     1.9.0
 * @author      Apptha Team <developers@contus.in>
 * @copyright   Copyright (c) 2015 Apptha. (http://www.apptha.com)
 * @license     http://www.apptha.com/LICENSE.txt
 *
 */
/**
 * if Onestepcheckout is activated redirect to Onestepcheckout or else redirect to magento checkout
 */
class Apptha_Onestepcheckout_Block_Checkout_Onepage_Link extends Mage_Checkout_Block_Onepage_Link {
    /**
     * Redirect to onestepcheck url if enabled
     *
     * @return string
     *
     */
    public function getCheckoutUrl() {
        /**
         * Check onestep checkout links not enabled
         */
        if (! $this->helper ( 'onestepcheckout' )->isOnepageCheckoutLinksEnabled ()) {
            return parent::getCheckoutUrl ();
        }
        return $this->getUrl ( 'onestepcheckout', array (
                '_secure' => true 
        ) );
    }
}
