<?php

namespace Mvrc\CentrifugePhp\Requests;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Contracts\Body\HasBody;
use Saloon\Traits\Body\HasJsonBody;

class SubscribeRequest extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function __construct(
        protected string $user,
        protected string $channel,
        protected ?array $info = null,
        protected ?string $client = null,
        protected ?string $session = null,
        protected ?string $data = null,
    ){}
    
    protected function defaultBody(): array
    {
        return [
            'user' => $this->user,
            'channel' => $this->channel,
            'info' => $this->info,
            'client' => $this->client,
            'session' => $this->session,
            'data' => $this->data,
        ];
    }

    public function resolveEndpoint(): string
    {
        return '/subscribe';
    }
}