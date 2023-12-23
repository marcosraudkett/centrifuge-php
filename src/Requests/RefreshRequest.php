<?php

namespace Mvrc\CentrifugePhp\Requests;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Contracts\Body\HasBody;
use Saloon\Traits\Body\HasJsonBody;

class RefreshRequest extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function __construct(
        protected string $user,
        protected ?string $client = null,
        protected ?string $session = null,
        protected ?string $expired = null,
        protected ?string $expire_at = null,
    ){}
    
    protected function defaultBody(): array
    {
        return [
            'user' => $this->user,
            'client' => $this->client,
            'expired' => $this->expired,
            'expire_at' => $this->expire_at,
        ];
    }

    public function resolveEndpoint(): string
    {
        return '/refresh';
    }
}