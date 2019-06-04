<?php
/**
 * Created by PhpStorm.
 * User: antonio
 * Date: 03/06/19
 * Time: 12:33
 */

namespace Mundipagg\Tmdb\WebService;

use \Zend\Http\Request;
use \Zend\Http\Client;
use Mundipagg\Tmdb\Helper\Data;

class TmdbWebService implements TmdbWebServiceInterface
{

    const API_BASE_URL = "https://api.themoviedb.org/3/";
    const IMAGE_BASE_URL = "https://image.tmdb.org/t/p/w300";
    const SKU_PREFIX = "tmdb-";

    /**
     * @var string
     */
    protected $methodUrl;

    /**
     * Parameters to be sent
     *
     * @var array
     */
    private $customParam;

    /**
     * @var \Mundipagg\Tmdb\Helper\Data
     */
    private $helperData;

    /**
     * TmdbWebService constructor.
     *
     * @param \Zend\Http\Request $request
     * @param Zend\Http\Client $client
     * @param Mundipagg\Tmdb\Helper\Data $helperData
     */
    public function __construct(Request $request, Client $client, Data $helperData)
    {
        $this->request = $request;
        $this->client = $client;
        $this->helperData = $helperData;
        $this->customParam = [
            "api_key" => $this->helperData->getGeneralConfig("api_key")
        ];
    }

    /**
     * Returns uri string
     *
     * @return stringt
     */
    public function getURI(): string
    {
        return self::API_BASE_URL . $this->methodUrl;
    }

    /**
     * Add custom parameters to send with API request
     *
     * @param string $methodUrl
     * @return \Mundipagg\Tmdb\WebService\TmdbWebServiceInterface $this
     */
    public function setMethodUrl($methodUrl): TmdbWebServiceInterface
    {
        $this->methodUrl = $methodUrl;
        return $this;
    }

    public function setHeaders()
    {
        $httpHeaders = new \Zend\Http\Headers();
        $httpHeaders->addHeaders([
            'Accept' => 'application/json',
            'Content-Type' => 'application/json'
        ]);
        $this->request->setHeaders($httpHeaders);
    }

    public function getCustomParam()
    {
        return new \Zend\Stdlib\Parameters($this->customParam);
    }

    public function getOptions()
    {
        return [
            'adapter'   => 'Zend\Http\Client\Adapter\Curl',
            'curloptions' => [CURLOPT_FOLLOWLOCATION => true],
            'maxredirects' => 0,
            'timeout' => 30
        ];
    }

    public function addParams($params = [])
    {
        $this->customParam = array_merge($this->customParam, $params);
        return $this;
    }

    public function getParams()
    {
        return $this->customParam;
    }

    public function getResponse()
    {
        $this->setHeaders();

        $this->request->setUri($this->getURI());
        $this->request->setMethod(\Zend\Http\Request::METHOD_GET);
        $this->request->setQuery($this->getCustomParam());

        $this->client->setOptions($this->getOptions());

        $response = $this->client->send($this->request);
        return json_decode($response->getBody());
    }

    public function setGenre($genre_id)
    {
        $this->addParams(['with_genres' => $genre_id]);
        return $this;
    }

    public function getImage($imagePath = "")
    {
        if (empty($imagePath)) {
            return "http://lorempixel.com/150/225/1/No%20Poster%20Avaliable/";
        }
        return TmdbWebService::IMAGE_BASE_URL . $imagePath;
    }


}