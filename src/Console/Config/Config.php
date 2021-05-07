<?php

namespace PrettyPhinx\Console\Config;

use PrettyPhinx\Console\Migration\MigrationTemplateGenerator;
use Phinx\Config\Config as PhinxConfig;

class Config extends PhinxConfig
{
    public function getMigrationBaseClassName($dropNamespace = true)
    {
        $className = !isset($this->values['migration_base_class'])
            ? 'PrettyPhinx\Migration\AbstractMigration' : $this->values['migration_base_class'];

        return $dropNamespace ? (substr(strrchr($className, '\\'), 1) ?: $className) : $className;
    }

    public function getTemplateClass()
    {
        if (!isset($this->values['templates']['class'])) {
            return MigrationTemplateGenerator::class;
        }

        return $this->values['templates']['class'];
    }
}
