<?php

namespace Mvrc\CentrifugePhp\Requests;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Contracts\Body\HasBody;
use Saloon\Traits\Body\HasJsonBody;

class InfoRequest extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function __construct(
    ){}
    
    protected function defaultBody(): array
    {
        return [];
    }

    public function resolveEndpoint(): string
    {
        return '/info';
    }
}