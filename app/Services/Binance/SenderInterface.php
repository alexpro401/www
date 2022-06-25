<?php

namespace App\Services\Binance;

use Psr\Http\Message\ResponseInterface;

interface SenderInterface
{
    public const METHOD_GET = 'get';
    public const METHOD_POST = 'post';

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function send(
        string $apiUrl,
        string $method = self::METHOD_GET,
        array $params = [],
    ): null|ResponseInterface;
}
