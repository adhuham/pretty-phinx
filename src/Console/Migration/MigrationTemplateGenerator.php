<?php

namespace PrettyPhinx\Console\Migration;

use Phinx\Migration\CreationInterface;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class MigrationTemplateGenerator implements CreationInterface
{
    public function __construct(InputInterface $input = null, OutputInterface $output = null)
    {
    }

    public function setInput(InputInterface $input)
    {
    }

    public function setOutput(OutputInterface $output)
    {
    }

    public function getInput()
    {
    }

    public function getOutput()
    {
    }

    public function getMigrationTemplate()
    {
        return file_get_contents('src/Console/Migration/migration.template.php.dist');
    }

    public function postMigrationCreation($migrationFilename, $className, $baseClassName)
    {
    }
}
