<?php
/**
 * Created by PhpStorm.
 * User: antonio
 * Date: 03/06/19
 * Time: 12:32
 */

namespace Mundipagg\Tmdb\WebService;


interface TmdbWebServiceInterface
{

    /**
     * Add custom parameters to send with API request
     *
     * @param string $data
     * @return \Mundipagg\Tmdb\WebService\TmdbWebServiceInterface $this
     */
    public function setMethodUrl($methodUrl): TmdbWebServiceInterface;

    /**
     * Returns uri string
     *
     * @return stringt
     */
    public function getURI();
}