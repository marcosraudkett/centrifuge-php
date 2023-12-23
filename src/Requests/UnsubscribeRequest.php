<?php

namespace Mvrc\CentrifugePhp\Requests;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Contracts\Body\HasBody;
use Saloon\Traits\Body\HasJsonBody;

class UnsubscribeRequest extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function __construct(
        protected string $user,
        protected string $channel,
        protected ?string $client = null,
        protected ?string $session = null,
    ){}
    
    protected function defaultBody(): array
    {
        return [
            'user' => $this->user,
            'channel' => $this->channel,
            'client' => $this->client,
            'session' => $this->session,
        ];
    }

    public function resolveEndpoint(): string
    {
        return '/unsubscribe';
    }
}