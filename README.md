# Uiibevy Core package

## A simple and fast Laravel servicing package for Uiibevy

### Installation

```bash
composer require uiibevy/core
```

### Usage

```php
use Uiibevy\Core\Service;

class UserService extends Service
{

}
```

This gives you access to a number of methods that you can use to interact with your models.
example:

```php
$user = UserService::create([
        'name' => 'John Doe',
        'email' => 'john.doe@email.com',
        'password' => 'password'
]);
```

### Methods

```php

use App\Services\UserService;

$service = UserService::autoload();

$service->create($data);
$service->update($data, $id);
$service->delete($id);
$service->find($id);
$service->all();
$service->query();

```
