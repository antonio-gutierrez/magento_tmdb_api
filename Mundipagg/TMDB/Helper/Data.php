<?php

/**
 * This class returns datas from xml config file
 *
 * @package Mundipagg\TMDB\Helper\Data
 * @author Antonio Gutierrez <gutierrez.computacao@gmail.com>
 * @version 1.0.0
 */
namespace Mundipagg\TMDB\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Store\Model\ScopeInterface;

class Data  extends AbstractHelper
{
    const XML_PATH_TMDB = 'tmdb/';

    /**
     * @param  string $field
     * @param  int $storeId
     * @return string
     * @since 1.0.0
     */
    public function getConfigValue(string $field, int $storeId = null): string
    {
        return $this->scopeConfig->getValue(
            $field, ScopeInterface::SCOPE_STORE, $storeId
        );
    }

    /**
     * @param  string $code
     * @param  int $storeId
     * @return string
     * @since 1.0.0
     */
    public function getGeneralConfig(string $code, int $storeId = null): string
    {
        return $this->getConfigValue(self::XML_PATH_TMDB .'general/'. $code, $storeId);
    }
}