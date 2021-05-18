<?php

namespace PrettyPhinx\Db;

use Phinx\Db\Table as PhinxTable;
use Phinx\Db\Adapter\MysqlAdapter;

class Table extends PhinxTable
{
    protected $tableOptions = [];
    protected $field = null;
    protected $foriegn;

    public function integer(string $name)
    {
        $this->field = [
            'name' => $name,
            'type' => 'integer',
            'opts' => [],
            'index' => null
        ];

        return $this;
    }

    public function bigInteger(string $name)
    {
        $this->field = [
            'name' => $name,
            'type' => 'integer',
            'opts' => [
                'limit' => MysqlAdapter::INT_BIG
            ],
            'index' => null
        ];

        return $this;
    }

    public function mediumInteger(string $name)
    {
        $this->field = [
            'name' => $name,
            'type' => 'integer',
            'opts' => [
                'limit' => MysqlAdapter::INT_MEDIUM
            ],
            'index' => null
        ];

        return $this;
    }

    public function smallInteger(string $name)
    {
        $this->field = [
            'name' => $name,
            'type' => 'integer',
            'opts' => [
                'limit' => MysqlAdapter::INT_SMALL
            ],
            'index' => null
        ];

        return $this;
    }

    public function tinyInteger(string $name)
    {
        $this->field = [
            'name' => $name,
            'type' => 'integer',
            'opts' => [
                'limit' => MysqlAdapter::INT_TINY
            ],
            'index' => null
        ];

        return $this;
    }

    public function unsignedInteger(string $name)
    {
        $this->field = [
            'name' => $name,
            'type' => 'integer',
            'opts' => [
                'signed' => false
            ],
            'index' => null
        ];

        return $this;
    }

    public function unsignedBigInteger(string $name)
    {
        $this->field = [
            'name' => $name,
            'type' => 'integer',
            'opts' => [
                'signed' => false,
                'limit' => MysqlAdapter::INT_BIG
            ],
            'index' => null
        ];

        return $this;
    }

    public function unsignedMediumInteger(string $name)
    {
        $this->field = [
            'name' => $name,
            'type' => 'integer',
            'opts' => [
                'signed' => false,
                'limit' => MysqlAdapter::INT_MEDIUM
            ],
            'index' => null
        ];

        return $this;
    }

    public function unsignedSmallInteger(string $name)
    {
        $this->field = [
            'name' => $name,
            'type' => 'integer',
            'opts' => [
                'signed' => false,
                'limit' => MysqlAdapter::INT_SMALL
            ],
            'index' => null
        ];

        return $this;
    }

    public function unsignedTinyInteger(string $name)
    {
        $this->field = [
            'name' => $name,
            'type' => 'integer',
            'opts' => [
                'signed' => false,
                'limit' => MysqlAdapter::INT_TINY
            ],
            'index' => null
        ];

        return $this;
    }

    public function increments(string $name)
    {
        $this->field = [
            'name' => $name,
            'type' => 'integer',
            'isPrimary' => true,
            'opts' => [
                'signed' => false,
                'identity' => true
            ],
            'index' => null
        ];

        return $this;
    }

    public function bigIncrements(string $name)
    {
        $this->field = [
            'name' => $name,
            'type' => 'integer',
            'isPrimary' => true,
            'opts' => [
                'signed' => false,
                'identity' => true,
                'limit' => MysqlAdapter::INT_BIG
            ],
            'index' => null
        ];

        return $this;
    }

    public function mediumIncrements(string $name)
    {
        $this->field = [
            'name' => $name,
            'type' => 'integer',
            'isPrimary' => true,
            'opts' => [
                'signed' => false,
                'identity' => true,
                'limit' => MysqlAdapter::INT_MEDIUM
            ],
            'index' => null
        ];

        return $this;
    }

    public function smallIncrements(string $name)
    {
        $this->field = [
            'name' => $name,
            'type' => 'integer',
            'isPrimary' => true,
            'opts' => [
                'signed' => false,
                'identity' => true,
                'limit' => MysqlAdapter::INT_SMALL
            ],
            'index' => null
        ];

        return $this;
    }

    public function tinyIncrements(string $name)
    {
        $this->field = [
            'name' => $name,
            'type' => 'integer',
            'isPrimary' => true,
            'opts' => [
                'signed' => false,
                'identity' => true,
                'limit' => MysqlAdapter::INT_TINY            ],
            'index' => null
        ];

        return $this;
    }

    public function decimal(string $name, int $precision = 8, int $scale = 2)
    {
        $this->field = [
            'name' => $name,
            'type' => 'time',
            'opts' => [
                'precision' => $precision,
                'scale' => $scale
            ],
            'index' => null
        ];

        return $this;
    }

    public function boolean(string $name)
    {
        $this->field = [
            'name' => $name,
            'type' => 'boolean',
            'opts' => [],
            'index' => null
        ];

        return $this;
    }

    public function string(string $name)
    {
        $this->field = [
            'name' => $name,
            'type' => 'string',
            'opts' => [
                'length' => 191,
                'encoding' => 'utf8mb4',
                'collation' => 'utf8mb4_unicode_ci',
            ],
            'index' => null
        ];

        return $this;
    }

    public function text(string $name)
    {
        $this->field = [
            'name' => $name,
            'type' => 'text',
            'opts' => [
                'encoding' => 'utf8mb4',
                'collation' => 'utf8mb4_unicode_ci',
            ],
            'index' => null
        ];

        return $this;
    }

    public function longText(string $name)
    {
        $this->field = [
            'name' => $name,
            'type' => 'text',
            'opts' => [
                'encoding' => 'utf8mb4',
                'collation' => 'utf8mb4_unicode_ci',
                'limit' => MysqlAdapter::TEXT_LONG
            ],
            'index' => null
        ];

        return $this;
    }

    public function mediumText(string $name)
    {
        $this->field = [
            'name' => $name,
            'type' => 'text',
            'opts' => [
                'encoding' => 'utf8mb4',
                'collation' => 'utf8mb4_unicode_ci',
                'limit' => MysqlAdapter::TEXT_MEDIUM
            ],
            'index' => null
        ];

        return $this;
    }

    public function tinyText(string $name)
    {
        $this->field = [
            'name' => $name,
            'type' => 'text',
            'opts' => [
                'encoding' => 'utf8mb4',
                'collation' => 'utf8mb4_unicode_ci',
                'limit' => MysqlAdapter::TEXT_TINY
            ],
            'index' => null
        ];

        return $this;
    }

    public function json(string $name)
    {
        $this->field = [
            'name' => $name,
            'type' => 'json',
            'opts' => [
            ],
            'index' => null
        ];

        return $this;
    }

    public function dateTime(string $name)
    {
        $this->field = [
            'name' => $name,
            'type' => 'datetime',
            'opts' => [],
            'index' => null
        ];

        return $this;
    }

    public function date(string $name)
    {
        $this->field = [
            'name' => $name,
            'type' => 'date',
            'opts' => [],
            'index' => null
        ];

        return $this;
    }

    public function time(string $name)
    {
        $this->field = [
            'name' => $name,
            'type' => 'time',
            'opts' => [],
            'index' => null
        ];

        return $this;
    }

    public function timestamp(string $name)
    {
        $this->field = [
            'name' => $name,
            'type' => 'timestamp',
            'opts' => [],
            'index' => null
        ];

        return $this;
    }

    public function default($value)
    {
        $this->field['opts']['default'] = $value;

        return $this;
    }

    public function length(int $length)
    {
        $this->field['opts']['length'] = $length;

        return $this;
    }

    public function nullable(?bool $isNullable = true)
    {
        $this->field['opts']['null'] = $isNullable;

        return $this;
    }

    public function signed(?bool $isSigned = true)
    {
        $this->field['opts']['signed'] = $isSigned;

        return $this;
    }

    public function charset(string $charset)
    {
        if (empty($this->field)) {
            $this->changeTableOptions(['encoding' => $charset]);
        } else {
            $this->field['opts']['encoding'] = $charset;
        }

        return $this;
    }

    public function collation(string $collation)
    {
        if (empty($this->field)) {
            $this->changeTableOptions(['collation' => $collation]);
        } else {
            $this->field['opts']['collation'] = $collation;
        }

        return $this;
    }

    public function after(string $field)
    {
        $this->field['opts']['after'] = $field;

        return $this;
    }

    public function unique()
    {
        $name = $this->field['name'];
        $this->field['index']['fields'][] = $name;
        $this->field['index']['opts']['unique'] = true;

        return $this;
    }

    public function index()
    {
        $name = $this->field['name'];
        $this->field['index']['fields'][] = $name;

        return $this;
    }

    public function foreign(string $name)
    {
        $this->foreign = [
            'field' => $name
        ];

        return $this;
    }

    public function references(string $foreignKey)
    {
        if (!empty($this->foreign)) {
            $this->foreign['foreignField'] = $foreignKey;
        }

        return $this;
    }

    public function on(string $table)
    {
        if (!empty($this->foreign)) {
            $this->foreign['table'] = $table;
        }

        return $this;
    }


    public function onUpdate(string $action)
    {
        if (!empty($this->foreign)) {
            $this->foreign['update'] = $action;
        }

        return $this;
    }

    public function onDelete(string $action)
    {
        if (!empty($this->foreign)) {
            $this->foreign['delete'] = $action;
        }

        return $this;
    }

    private function changeTableOptions(array $options)
    {
        $this->table->setOptions(array_merge($this->table->getOptions(), $options));
    }

    public function add()
    {
        if (!empty($this->field)) {
            $this->addColumn($this->field['name'], $this->field['type'], $this->field['opts']);

            $index = $this->field['index'] ?? null;
            if (!empty($index)) {
                $this->addIndex($index['fields'], $index['opts'] ?? []);
            }

            if (!empty($this->field['isPrimary'])) {
                if (empty($this->tableOptions)) {
                    $this->tableOptions = [
                        'id' => false,
                        'primary_key' => [$this->field['name']]
                    ];
                } else {
                    $this->tableOptions['primary_key'][] = $this->field['name'];
                }

                $this->changeTableOptions($this->tableOptions);
            }

            $this->field = null;
        }

        if (!empty($this->foreign)) {
            $opts = [
                'constraint' => $this->table->getName() . '_' . $this->foreign['field'] . '_foreign'
            ];

            if (isset($this->foreign['update'])) {
                $opts['update'] = $this->foreign['update'];
            }

            if (isset($this->foreign['delete'])) {
                $opts['delete'] = $this->foreign['delete'];
            }

            $this->addForeignKey(
                $this->foreign['field'],
                $this->foreign['table'],
                $this->foreign['foreignField'],
                $opts
            );
        }
    }

    public function change()
    {
        $field = $this->field;
        $index = $field['index'] ?? null;

        $this->changeColumn($field['name'], $field['type'], $field['opts']);

        if (!empty($index)) {
            $this->addIndex($index['fields'], $index['opts'] ?? []);
        }

        $options = $this->table->getOptions();

        if (isset($options['primary_key'])) {
            $primaryKeys = [...$options['primary_key'], $field['name']];
        } else {
            $primaryKeys = [$field['name']];
        }

        $this->changePrimaryKey($primaryKeys);

        $this->field = null;
    }
}
