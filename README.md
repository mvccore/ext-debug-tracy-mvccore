# MvcCore Extension - Tracy MvcCore Panel
Extension for MvcCore_Debug_Tracy extension to render and add into tracy debug panel current MvcCore application instance, printed by \Tracy\Dumper::toHtml(MvcCore::GetInstance()); to display main application objects used to render current page response.

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