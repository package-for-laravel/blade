# Package for Laravel Blade Helpers and Tools

```
ARCHIVED: This project is archived and no longer maintained.
```

This adds useful blade tools.

## Installation

`composer require package-for-laravel/blade`

## Usage

### `@activeroute` directive

This takes a route string or array and returns the word `active` if that pattern is matched. It's proxied to `Request::Is`

```php
<a href="{{ route('users.index') }}" class="menu-link @activeroute(['users.*'])">Users</a>
```

This would make a class of `menu-link active` when you are on routes named `users.index` or `users.create`, but just `menu-link` on `companies.index`.

## Credits

This package is created and maintained by [Aaron Saray](https://github.com/aaronsaray) 
