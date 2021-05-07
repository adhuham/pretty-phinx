# Pretty Phinx
Pretty Phinx adds prettified and readable syntax to popular **[Phinx](https://github.com/cakephp/phinx)** migration library. Phinx's default syntax can become cluttered and hard-to-read at times. Pretty Phinx uses method-chaining instead of method arguements, and adds handy methods to deal with popular column types.

## Installation
Using composer
```
composer require adhuham/pretty-phinx
```

## Usage

### Console
Use `vendor/bin/pretty-phinx` instead of `vendor/bin/phinx` to access console tools.

### Migrations

#### Creating tables 
```php
$post = $this->table('post');
$post->bigIncrements('id')->add();
$post->string('slug')->unique()->add();
$post->string('title')->length(255)->add();
$post->text('content')->nullable()->add();
$post->create();
```
By default, automatic primary key creation is disabled. You've to manually create the primary keys using [auto-incrementing methods](#auto-incrementing-methods).

#### Updating tables 
```php
$post = $this->table('post');
$post->bigIncrements('id')->change();
$post->string('slug')->unique()->change();
$post->string('title')->length(255)->nullable()->change();
$post->text('content')->nullable()->change();

$post->string('sub_title')->after('title');
$post->update();
```

Use `->change()` instead of `->add()` to amend column.

#### Foreign Keys 
```php
$tag = $this->table('tag');
$tag->bigIncrements()->add();
$tag->string('slug')->unique()->add();
$tag->string('name')->add();
$tag->create();

$post = $this->table('post');
$post->unsignedBigInteger('tag_id');

$post->foreign('tag_id')->references('id')->on('tag')
  ->onUpdate('cascade')
  ->onDelete('cascade');

$post->update();
```

### Methods

```php
$table->unsignedBigInteger();
$table->unsignedMediumInteger();
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

#### Auto-incrementing methods
```php
// these methods will create an auto-incrementing column
$table->bigIncrements();
$table->mediumIncrements();
$table->smallIncrements();
$table->tinyIncrements();
$table->increments();
```

#### Modifiers
```php
// ->length()
$table->string('title')->length(100)->add();

// ->default()
$table->string('title')->default('untitled')->add();

// ->nullable()
$table->string('title')->nullable()->add();

// ->unique()
$table->string('title')->unique()->add();

// ->index()
$table->string('title')->index()->add();

// ->after()
$table->string('title')->after('another_column')->add();
```
