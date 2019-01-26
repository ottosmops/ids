# Parse ids to an array 

[![Software License](https://img.shields.io/badge/license-MIT-blue.svg?style=flat-square)](LICENSE.md)
[![Latest Stable Version](https://img.shields.io/badge/Version-stable-blue.svg?format=flat-square)](https://packagist.org/packages/ottosmops/ids)
[![Build Status](https://travis-ci.com/ottosmops/ids.svg?branch=master)](https://travis-ci.com/ottosmops/ids)
[![SensioLabsInsight](https://insight.sensiolabs.com/projects/248db8b3-4969-48c5-9a61-9c7346832ff0/mini.png)](https://insight.sensiolabs.com/projects/248db8b3-4969-48c5-9a61-9c7346832ff0)
[![Packagist Downloads](https://img.shields.io/packagist/dt/ottosmops/ids.svg?style=flat-square)](https://packagist.org/packages/ottosmops/ids)


## Idea
For PHP CLI or Api, if you want to have an option for one or more ids (integers), this very small package is a helper, which parses a string to an array of ids.

| Input | Output |
|:----:|:----:|
|1|[1]|
|1,2|[1,2]|
|1-3 | [1,2,3] |
| 1-5,7,8 | [1,2,3,4,5,7,8] |

## Usage
The usage is very simple:

```php 
$ids = '1-3';
$array = Ids::parse($ids); // [1,2,3]
```

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

