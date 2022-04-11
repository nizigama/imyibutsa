# imyibutsa
A package for generating random Burundian proverbs.

## Installation

Require the package using composer, requires at least **php7.4** 

```bash
composer require nizigama/imyibutsa
```

## Usage

```php
use Nizigama\Imyibutsa\ProverbFactory;

# Create a proverbs factory
$factory = new ProverbFactory();

# Generate a random proverb
$proverb = $factory->getRandomProverb();
```

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License
[MIT](./LICENSE)