<?php

/**
 * Basic interface that returns a token
 *
 * @package Mundipagg\Tmdb\HTTPClient\Token
 * @author Antonio Gutierrez <gutierrez.computacao@gmail.com>
 * @version 1.0.0
 */
namespace Mundipagg\Tmdb\HTTPClient\Token;


interface ApiTokenInterface
{
    /**
     * @param  string $apiToken
     * @return Mundipagg\Tmdb\HTTPClient\Token\ApiTokenInterface
     * @since 1.0.0
     */
    public function setToken(string $apiToken): ApiTokenInterface;

    /**
     * @return string
     * @since 1.0.0
     */
    public function getToken(): string;

}