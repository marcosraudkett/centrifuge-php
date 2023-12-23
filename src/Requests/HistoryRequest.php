<?php

namespace Mvrc\CentrifugePhp\Requests;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Contracts\Body\HasBody;
use Saloon\Traits\Body\HasJsonBody;

class HistoryRequest extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function __construct(
        protected string $channel,
        protected ?int $limit = null,
    ){}
    
    protected function defaultBody(): array
    {
        return [
            'channel' => $this->channel,
            'limit' => $this->limit,
        ];
    }

    public function resolveEndpoint(): string
    {
        return '/history';
    }
}