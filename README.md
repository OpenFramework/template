# Template - PHP Library

[![](https://img.shields.io/packagist/v/assouan/template.svg)](https://packagist.org/packages/assouan/template)
[![](https://img.shields.io/packagist/dt/assouan/template.svg)](https://packagist.org/packages/assouan/template)
[![](https://img.shields.io/packagist/l/assouan/template.svg)](https://packagist.org/packages/assouan/template)

Simple template engine

## Installation

Install using composer:

```bash
$ composer require assouan/template
```

## Usage

Get result
```php
$result = Template::render($file_path);
```

Display result
```php
Template::display($file_path);
```

## Example

```php
Template::share('bold', true);

echo Template::render(__DIR__.'/example.tpl.php');
echo Template::render(__DIR__.'/example.tpl.php', ['name' => 'Ryan']);
echo Template::render(__DIR__.'/example.tpl.php', ['name' => 'Jeanne']);
```

```php
<?php if (isset($bold)): ?>
Hello <b><?=$name?></b>!
<?php else: ?>
Hello <?=$name?>!
<?php endif; ?>
<br />
```
