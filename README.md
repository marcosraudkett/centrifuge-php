# Centrifuge SDK for the Centrifuge API

This is an unofficial Centrifuge PHP SDK. More information on the [official documentation page](https://centrifugal.dev/docs/server/server_api#http-api).

## Requirements

- PHP 8.1+

## Installation

```
composer require marcosraudkett/centrifuge-php
```
## Usage 

Example on how to fetch journeys
### Journeys
```php
use Mvrc\CentrifugePhp\CentrifugeConnector;
use Mvrc\CentrifugePhp\Requests\PublishRequest;

$connector = new CentrifugeConnector;
$request = new PublishRequest(
    channel: "private-test",
    data: [
        "test" => true
    ]
);

$response = $connector->send($request);

print_r($response->json());
print_r($response->status());
```

## Available requests

| Request | Description |
| - | - | 
| BatchRequest | Batch allows sending many commands in one request. | 
| BroadcastRequest | broadcast is similar to publish but allows to efficiently send the same data into many channels. | 
| ChannelsRequest | channels return active channels (with one or more active subscribers in it). | 
| DisconnectRequest | disconnect allows disconnecting a user by ID. | 
| HistoryRemoveRequest | history_remove allows removing publications in channel history. | 
| HistoryRequest | history allows getting channel history information (list of last messages published into the channel). | 
| InfoRequest | info method allows getting information about running Centrifugo nodes. | 
| PresenceRequest | presence allows getting channel online presence information (all clients currently subscribed on this channel). | 
| PresenceStatsRequest | presence_stats allows getting short channel presence information - number of clients and number of unique users (based on user ID). | 
| PublishRequest | Publish method allows publishing data into a channel (we call this message publication in Centrifugo). Most probably this is a command you'll use most of the time. | 
| RefreshRequest | refresh allows refreshing user connection (mostly useful when unidirectional transports are used). | 
| SubscribeRequest | subscribe allows subscribing active user's sessions to a channel. Note, it's mostly for dynamic server-side subscriptions. | 
| UnsubscribeRequest | unsubscribe allows unsubscribing user from a channel. | 

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Feel free to open a pull request or report an issue.
## Credits

- [Marcos Raudkett](https://github.com/marcosraudkett)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.