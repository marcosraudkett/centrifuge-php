<?php

namespace Mvrc\CentrifugePhp\Requests;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Contracts\Body\HasBody;
use Saloon\Traits\Body\HasJsonBody;

class ChannelsRequest extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function __construct(
        protected ?string $pattern = null,
    ){}
    
    protected function defaultBody(): array
    {
        return [
            'pattern' => $this->pattern,
        ];
    }

    public function resolveEndpoint(): string
    {
        return '/channels';
    }
}