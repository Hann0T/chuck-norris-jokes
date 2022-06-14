# Chuck Norris Jokes

Create random chuck norris jokes

## Installation

Require the package using composer

```bash
composer require hann0t/chuck-norris-jokes
```

## Usage

```php
use Hann0t\ChuckNorrisJokes\JokeFactory;

$jokes = new JokeFactory();
$joke = $jokes->getRandomJoke();
```

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License
[MIT](./LICENSE.md)
