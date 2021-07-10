# Pretty Phinx
Pretty Phinx adds prettified and readable syntax to popular **[Phinx](https://github.com/cakephp/phinx)** migration library. Phinx's default syntax can become cluttered and hard-to-read at times. Pretty Phinx uses method-chaining and adds readable methods for popular column types.

## Installation
Using composer
```
composer require adhuham/pretty-phinx
```

### Console
Use `vendor/bin/pretty-phinx` instead of `vendor/bin/phinx` to access console tools.

### Migrations
You need to extend `PrettyPhinx\Migration\AbstractMigration` instead of `Phinx\Migration\AbstractMigration` base in your migration classes. When you generate migration classes using `vendor/bin/pretty-phinx` it will create the classes with `vendor/bin/pretty-phinx`.

```php
use PrettyPhinx\Migration\AbstractMigration;

class MyNewMigration extends AbstractMigration
{
    public function change()
    {
    }
}

```

#### Creating tables 
```php
$post = $this->table('post');
$post->bigIncrements('id')->add();
$post->string('slug')->unique()->add();
$post->string('title')->length(255)->add();
$post->text('content')->nullable()->add();
$post->create();
```

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

#### Primary Keys
By default, automatic primary key creation is disabled. You've to manually create the primary keys using [auto-incrementing methods](#auto-incrementing-methods).

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
  ->onDelete('cascade')
  ->add();

$post->update();
```

Use Phinx's default syntax to delete or existence-check foreign keys (`$table->dropForeignKey('tag_id')` and `$table->hasForeignKey('tag_id')`). See [Phinx Docs: Working With Foreign Keys](https://book.cakephp.org/phinx/0/en/migrations.html#working-with-foreign-keys)

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

#### Auto-incrementing
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
$table->string('title')->nullable(false)->add(); // disable null (NOT NULL)

// ->unique()
$table->string('title')->unique()->add();

// ->index()
$table->string('title')->index()->add();

// ->after()
$table->string('title')->after('another_column')->add();

// ->charset()
$table->string('title')->charset('utf8')->add();

// ->collation()
$table->string('title')->collation('utf8_general_ci')->add();
```

#### Encoding
Default charset/collation is `utf8mb4` and `utf8mb4_unicode_ci` for both table and columns.

To change the collation of a table
```php
$table = $this->table('post');
// this changes the collation of "post" table
$table->collation('utf8_general_ci');
// ... 
// ...
$table->update();
```

## License
MIT License

Copyright (c) 2021 Mohamed Adhuham

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
