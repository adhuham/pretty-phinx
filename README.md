# Pretty Phinx
Adds prettified and readable syntax to popular Phinx migration library. Phinx's default syntax can become cluttered and hard to read at times. Pretty Phinx adds more readable syntax to the Phinx library to make the process of managing database migrations a breeze. It uses method-chaining instead of arguements and adds more easy-to-use methods to create popular column types.

## Installation
Using composer
```
composer require adhuham/pretty-phinx
```

## Usage

### Console
Use `vendor/bin/pretty-phinx` instead of `vendor/bin/phinx` to access console tools.

### Migrations

Creating tables. 
```php
$post = $this->table('post');
$post->bigIncrements('id')->add();
$post->string('slug')->unique()->add();
$post->string('title')->length(255)->add();
$post->text('content')->nullable()->add();
$post->create();
```

Updating tables. 
```php
$post = $this->table('post');
$post->bigIncrements('id')->change();
$post->string('slug')->unique()->change();
$post->string('title')->length(255)->change();
$post->text('content')->nullable()->change();
$post->update();
```

By default, automatic primary key creation is disabled. You've to manually create the primary keys using auto-incrementing methods.

### Available Methods

```php
$table->unsignedBigInteger();
$table->unsignedSmallInteger();
$table->unsignedSmallInteger();
$table->unsignedTinyInteger();
$table->unsignedInteger();

$table->bigInteger();
$table->mediumInteger();
$table->smallInteger();
$table->tinyInteger();
$table->integer();

$table->text();
$table->longText();
$table->mediumText();
$table->tinyText();

$table->decimal($precision = 8, $scale = 2);
$table->boolean();

$table->dateTime();
$table->date();
$table->time();
``` 

Auto-incrementing methods.
``php
$table->bigIncrements();
$table->mediumIncrements();
$table->smallIncrements();
$table->tinyIncrements();
$table->increments();
```
