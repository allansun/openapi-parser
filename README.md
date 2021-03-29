# PHP OpenAPI (Swagger) parser 

A universal OpenAPI (V3) or Swagger (V2) schema parser to convert OpenAPI/Swagger files into PHP object for 
programming use.

### Installing

```
composer require-dev allansun/openapi-parser
```


## Usage

This project is used for 'dev' environment only. It does not generate/provide any codes for run-time environment.

To start

```php
<?php

    use OpenAPI\Parser;
    
    $OpenAPI = Parser::parse('openapi.json');
```

The parser class will automatically detect input file type (JSON or YAML) and use correct parser (Swagger or OpenAPI)
to parse the input.

Alternatively, you can call the correct parser directly.

```php
<?php

    use OpenAPI\Parser\OpenAPIParser;
    
    $Parser = new OpenAPIParser();
    
    $OpenAPI = $Parser->parse(json_decode(file_get_contents('openapi.json'), true));
```

Or to parse the legacy Swagger version

```php
<?php

    use OpenAPI\Parser\SwaggerParser;
    
    $Parser = new SwaggerParser();
    
    $Swagger = $Parser->parse(json_decode(file_get_contents('swagger.json'), true));
```

The result would be:

![OpenAPI](./docs/openapi-parser.png)


## Contributing

Please read [CONTRIBUTING.md](https://gist.github.com/PurpleBooth/b24679402957c63ec426) for details on our code of 
conduct, and the process for submitting pull requests to us.

## Versioning

We use [SemVer](http://semver.org/) for versioning. For the versions available, see the 
[tags on this repository](https://github.com/allansun/openapi-parser/tags). 

## Authors

* **Allan Sun** - *Initial work* - [Allan Sun](https://github.com/allansun)

See also the list of [contributors](https://github.com/allansun/openapi-parser/contributors) who participated in this 
project.

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details

