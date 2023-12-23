<?php

namespace Mvrc\CentrifugePhp\Requests;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Contracts\Body\HasBody;
use Saloon\Traits\Body\HasJsonBody;

class BatchRequest extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function __construct(
        protected array $commands,
        protected array $publish,
    ){}
    
    protected function defaultBody(): array
    {
        return [
            'commands' => $this->commands,
            'publish' => $this->publish,
        ];
    }

    public function resolveEndpoint(): string
    {
        return '/batch';
    }
}