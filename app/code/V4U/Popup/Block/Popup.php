<?php

namespace V4U\Popup\Block;

use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use V4U\Popup\Helper\Data;
use Magento\Framework\App\Config\ScopeConfigInterface;

class Popup extends Template
{
    /**
     * @var Data
     */
    protected $helper;

    public function __construct(Context $context, Data $helper,\Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig) {
        $this->helper = $helper;
        $this->scopeConfig = $scopeConfig;
        parent::__construct($context);
    }

    /*
     * @return bool
     */
    public function isEnabled()
    {
        return $this->helper->isEnabled();
    }

    /*
     * @return string
     */
    public function getBlockIdentifier()
    {
        return $this->helper->getBlockIdentifier();
    }
    /*
     * @return string
     */
    public function getCookieTime()
    {
    	return $this->helper->getCookieTime();
    }
}