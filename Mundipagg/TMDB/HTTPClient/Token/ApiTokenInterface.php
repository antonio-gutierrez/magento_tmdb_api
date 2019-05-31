<?php

/**
 * Basic interface for classes that returns a string token
 *
 * @package Mundipagg\TMDB\HTTPClient\Token
 * @author Antonio Gutierrez <gutierrez.computacao@gmail.com>
 * @version 1.0.0
 */
namespace Mundipagg\TMDB\HTTPClient\Token;


interface ApiTokenInterface
{
    /**
     * @param  string           $apiToken
     * @return Mundipagg\TMDB\HTTPClient\Token\ApiTokenInterface
     * @since 1.0.0
     */
    public function setToken(string $apiToken): ApiTokenInterface;

    /**
     * @return string
     */
    public function getToken(): string;

}