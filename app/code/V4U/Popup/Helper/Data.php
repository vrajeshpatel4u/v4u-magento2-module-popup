<?php

namespace V4U\Popup\Helper;

use Magento\Framework\App\Config\ScopeConfigInterface;

class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
    /**
     * @var \Magento\Framework\App\Config\ScopeConfigInterface
     */
    protected $scopeConfig;
 
    /**
     * Data constructor
     * @param \Magento\Framework\App\Helper\Context $context
     * @param \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
     */
    public function __construct(
        \Magento\Framework\App\Helper\Context $context,
        \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
    ) {
        parent::__construct($context);
            
    }


    /**
     * @return $isenabled
     */
    public function isEnabled()
    {
        $isEnabled = $this->scopeConfig->getValue(
            'popup/general/enable', 
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
 
        return $isEnabled;
    }

    /**
     * @return $blockIdentifier
     */
    public function getBlockIdentifier()
    {
        $blockIdentifier = $this->scopeConfig->getValue(
            'popup/general/blockIdentifier', 
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
 
        return $blockIdentifier;
    }

    /**
     * @return $cookieTime
     */
    public function getCookieTime()
    {
        $cookieTime = $this->scopeConfig->getValue(
            'popup/general/cookieTime', 
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
 
        return $cookieTime;
    }
}