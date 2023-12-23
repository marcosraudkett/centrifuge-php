<?php

namespace Mvrc\CentrifugePhp\Requests;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Contracts\Body\HasBody;
use Saloon\Traits\Body\HasJsonBody;

class BroadcastRequest extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function __construct(
        protected array $channels,
        protected array $data
    ){}
    
    protected function defaultBody(): array
    {
        return [
            'channels' => $this->channels,
            'data' => $this->data,
        ];
    }

    public function resolveEndpoint(): string
    {
        return '/broadcast';
    }
}