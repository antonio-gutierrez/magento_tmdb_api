<?php

namespace Mundipagg\TMDB\Test\Unit;

use \PHPUnit\Framework\TestCase;
use Mundipagg\TMDB\HTTPClient\Token\ApiToken;

/**
 * Class ApiTokenTest
 */
class ApiTokenTest extends TestCase
{
    /**
     * @test
     */
    public function testShouldAddToken()
    {
        $apiToken = new ApiToken('testToken');
        $this->assertEquals('testToken', $apiToken);
    }

    /**
     * @test
     */
    public function testGetToken()
    {
        $apiToken = new ApiToken('testToken');
        $this->assertEquals('testToken', $apiToken->getToken());
    }

    /**
     * @test
     * @depends testShouldAddToken
     */
    public function testSetToken()
    {
        $apiToken = new ApiToken('testToken');
        $apiToken->setToken('newTestToken');
        $this->assertEquals('newTestToken', $apiToken);
    }
}