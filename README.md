# MvcCore Extension - Tracy MvcCore Panel

[![Latest Stable Version](https://img.shields.io/badge/Stable-v3.2.0-brightgreen.svg?style=plastic)](https://github.com/mvccore/example-helloworld/releases)
[![License](https://img.shields.io/badge/Licence-BSD-brightgreen.svg?style=plastic)](https://mvccore.github.io/docs/mvccore/3.0.0/LICENCE.md)
![PHP Version](https://img.shields.io/badge/PHP->=5.3-brightgreen.svg?style=plastic)

Extension for MvcCoreExt_Tracy extension to render and add into tracy debug panel current MvcCore application instance, printed by \Tracy\Dumper::toHtml(MvcCore::GetInstance()); to display main application objects used to render current page response.

Rendered objects inside MvcCore app: 
- MvcCore_Request
- MvcCore_Response
- MvcCore_Router
- MvcCore_Controller
- all preroute, predispatch and postdispatch configured handlers
- many other internal MvcCore app instance values

## Installation
```shell
composer require mvccore/ext-tracy-mvccore
```
