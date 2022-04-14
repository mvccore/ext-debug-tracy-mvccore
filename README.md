# MvcCore - Extension - Debug - Nette Tracy - Panel MvcCore Overview

[![Latest Stable Version](https://img.shields.io/badge/Stable-v5.0.4-brightgreen.svg?style=plastic)](https://github.com/mvccore/ext-debug-tracy-mvccore/releases)
[![License](https://img.shields.io/badge/License-BSD%203-brightgreen.svg?style=plastic)](https://mvccore.github.io/docs/mvccore/5.0.0/LICENSE.md)
![PHP Version](https://img.shields.io/badge/PHP->=5.4-brightgreen.svg?style=plastic)

MvcCore Debug Tracy Extension to render and add into tracy debug panel current MvcCore application instance, printed by `\Tracy\Dumper::toHtml(\MvcCore\Application::GetInstance());` to display main application objects used to render current page response.

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
