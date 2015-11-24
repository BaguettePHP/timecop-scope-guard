Timecop Scope Guard
===================

[![](https://img.shields.io/packagist/v/timecop/scope-guard.svg)](https://packagist.org/packages/timecop/scope-guard)

## DESCRIPTION

[hnw/php-timecop](https://github.com/hnw/php-timecop) helper using Scope Guard pattern.

## INSTALL

Require [hnw/php-timecop](https://github.com/hnw/php-timecop) extension.

```
cd /path/to/your-project
composer require --dev timecop/scope-guard
```

## USAGE

```php
<?php

public function test_foo()
{
    // Don't remove $t
    $t = new \TimeFreezeScopeGuard('2007-08-31 12:00:00');

    echo date('Y-m-d H:i:s');
    // 2007-08-31 12:00:00
}
```

Even if it was warned that $t is an unused variable, please do not remove it.

When `test_foo()` method has completed, `$t` variable is deleted by GC, timecop is turn off.

## LICENSE

```
Copyright 2015 pixiv Inc.

Licensed under the Apache License, Version 2.0 (the "License");
you may not use this file except in compliance with the License.
You may obtain a copy of the License at

   http://www.apache.org/licenses/LICENSE-2.0

Unless required by applicable law or agreed to in writing, software
distributed under the License is distributed on an "AS IS" BASIS,
WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
See the License for the specific language governing permissions and
limitations under the License.
```
