<?php

/**
 * Basic interface that returns a token
 *
 * @package Mundipagg\TMDB\HTTPClient\Token
 * @author Antonio Gutierrez <gutierrez.computacao@gmail.com>
 * @version 1.0.0
 */
namespace Mundipagg\TMDB\HTTPClient\Token;


interface ApiTokenInterface
{
    /**
     * @param  string $apiToken
     * @return Mundipagg\TMDB\HTTPClient\Token\ApiTokenInterface
     * @since 1.0.0
     */
    public function setToken(string $apiToken): ApiTokenInterface;

    /**
     * @return string
     * @since 1.0.0
     */
    public function getToken(): string;

}