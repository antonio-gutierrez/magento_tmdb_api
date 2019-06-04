<?php
/**
 * Created by PhpStorm.
 * User: antonio
 * Date: 03/06/19
 * Time: 00:12
 */

namespace Mundipagg\Tmdb\Block\Adminhtml;

use Magento\Framework\View\Element\Template;
use \Magento\Backend\Block\Template\Context;
use Mundipagg\Tmdb\WebService\TmdbWebServiceInterface;
use Mundipagg\Tmdb\Api\TmdbRepositoryInterface;

class Index extends Template
{
    /**
     * @var \Magento\Framework\HTTP\ZendClientFactory $clientFactory
     */
    private $context;

    /**
     * @var \Mundipagg\Tmdb\WebService\TmdbWebServiceInterface $tmdbWebService
     */
    private $tmdbWebService;

    /**
     * @var \Mundipagg\Tmdb\Api\TmdbRepositoryInterface $tmdbRepository
     */
    private $tmdbRepository;

    /**
     * Index constructor.
     */
    public function __construct(
        Context $context,
        TmdbWebServiceInterface $tmdbWebService,
        TmdbRepositoryInterface $tmdbRepository
    )
    {
        $this->tmdbWebService = $tmdbWebService;
        $this->tmdbRepository = $tmdbRepository;
        parent::__construct($context);
    }

    public function getMovie()
    {
        $this->tmdbWebService->setMethodUrl("discover/movie");

        $this->tmdbWebService->addParams([
            "sort_by"       =>  "popularity.desc",
            "include_adult" =>  "false",
            "include_video" =>  "false",
            "page"          =>  $this->getPage()
        ]);

        return $this->tmdbWebService->getResponse();
    }
}