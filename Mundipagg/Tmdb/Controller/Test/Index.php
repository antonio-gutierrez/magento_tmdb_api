<?php
/**
 * Created by PhpStorm.
 * User: antonio
 * Date: 01/06/19
 * Time: 13:56
 */

namespace Mundipagg\Tmdb\Controller\Test;

use Mundipagg\Tmdb\Helper\Data;
use \Magento\Framework\App\Action\Context;
use \Magento\Framework\App\Config\ScopeConfigInterface;

class Index extends \Magento\Framework\App\Action\Action
{
    protected $helperData;
    protected $scopeConfig;

    /**
     * Index constructor.
     */
    public function __construct(Context $context, ScopeConfigInterface $scopeConfig)
    {
        return parent::__construct($context);

    }

    public function execute()
    {
//        echo $this->helperData->getGeneralConfig('api_key');
//        echo $this->scopeConfig->getValue("tmdb/general/base_uri_api", \Magento\Store\Model\ScopeInterface::SCOPE_STORE, null);
        echo \Magento\Framework\App\ObjectManager::getInstance()->get('Magento\Framework\App\Config\ScopeConfigInterface')->getValue('tmdb/general/base_uri_api');
        echo "Funcionou";
    }
    /*
     $this->assertEquals(self::BASE_URI_API, $dataHelper->getGeneralConfig("base_uri_api"));
        $this->assertEquals(self::API_KEY, $dataHelper->getGeneralConfig("api_key"));
     * */
}