<?php

namespace PrettyPhinx\Migration;

use Phinx\Migration\AbstractMigration as Migration;
use PrettyPhinx\Db\Table;

abstract class AbstractMigration extends Migration
{
    public function table(
        $tableName,
        $options = [
            'id' => false,
            'encode' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci'
        ]
    ) {
        $table = new Table($tableName, $options, $this->getAdapter());
        $this->tables[] = $table;

        return $table;
    }
}
