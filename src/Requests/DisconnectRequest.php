<?php

namespace Mvrc\CentrifugePhp\Requests;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Contracts\Body\HasBody;
use Saloon\Traits\Body\HasJsonBody;

class DisconnectRequest extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function __construct(
        protected string $user,
        protected ?string $client = null,
        protected ?string $session = null,
        protected ?array $whitelist = null,
        protected ?object $disconnect = null,
    ){}
    
    protected function defaultBody(): array
    {
        return [
            'user' => $this->user,
            'client' => $this->client,
            'session' => $this->session,
            'whitelist' => $this->whitelist,
            'disconnect' => $this->disconnect,
        ];
    }

    public function resolveEndpoint(): string
    {
        return '/disconnect';
    }
}