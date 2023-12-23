<?php

namespace Mvrc\CentrifugePhp;

use Saloon\Http\Connector;
use Saloon\Traits\Plugins\HasTimeout;
use Saloon\Http\Auth\HeaderAuthenticator;

class CentrifugeConnector
{
    use HasTimeout;

    protected int $connectTimeout = 5;

    protected int $requestTimeout = 10;

    protected function defaultAuth(): HeaderAuthenticator
    {
        return new HeaderAuthenticator(env('CENTRIFUGE_API_KEY'), 'X-API-KEY');
    }

    public function resolveBaseUrl(): string
    {
        return config('centrifuge-php.centrifuge_api_base_url');
    }

    protected function defaultHeaders(): array
    {
        return [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ];
    }
}
