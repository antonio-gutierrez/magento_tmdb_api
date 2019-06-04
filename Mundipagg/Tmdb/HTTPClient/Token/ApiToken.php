<?php

/**
 * This class returns a string token
 *
 * @package Mundipagg\Tmdb\HTTPClient\Token
 * @author Antonio Gutierrez <gutierrez.computacao@gmail.com>
 * @version 1.0.0
 */
namespace Mundipagg\Tmdb\HTTPClient\Token;

class ApiToken implements ApiTokenInterface
{
    private $apiToken = null;

    /**
     * Token construct
     *
     * @param string $api_token
     */
    public function __construct(string $api_token = null)
    {
        $this->apiToken = $api_token;
    }

    /**
     * @param  string $apiToken
     * @return Mundipagg\Tmdb\HTTPClient\Token\ApiTokenInterface
     * @since 1.0.0
     */
    public function setToken(string $apiToken): ApiTokenInterface
    {
        $this->apiToken = $apiToken;
        return $this;
    }

    /**
     * @return string
     * @since 1.0.0
     */
    public function getToken(): string
    {
        return $this->apiToken;
    }

    /**
     * @return string
     * @since 1.0.0
     */
    public function __toString(): string
    {
        return $this->apiToken;
    }
}