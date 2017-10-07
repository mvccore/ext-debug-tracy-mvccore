# MvcCore Extension - Debug Tracy Panel - MvcCore Core Overview

[![Latest Stable Version](https://img.shields.io/badge/Stable-v4.2.0-brightgreen.svg?style=plastic)](https://github.com/mvccore/ext-debug-tracy-mvccore/releases)
[![License](https://img.shields.io/badge/Licence-BSD-brightgreen.svg?style=plastic)](https://mvccore.github.io/docs/mvccore/4.0.0/LICENCE.md)
![PHP Version](https://img.shields.io/badge/PHP->=5.3-brightgreen.svg?style=plastic)

MvcCore Debug Tracy Extension to render and add into tracy debug panel current MvcCore application instance, printed by `\Tracy\Dumper::toHtml(\MvcCore::GetInstance());` to display main application objects used to render current page response.

## Installation
```shell
composer require mvccore/ext-debug-tracy-mvccore
```

Rendered objects inside MvcCore app: 
- `\MvcCore\Request`
- `\MvcCore\Response`
- `\MvcCore\Router`
- `\MvcCore\Controller`
- all preroute, predispatch and postdispatch configured handlers
- many other internal MvcCore app instance values
