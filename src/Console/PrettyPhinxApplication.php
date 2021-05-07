<?php

namespace PrettyPhinx\Console;

use PrettyPhinx\Console\Command\Create;
use Phinx\Console\PhinxApplication;
use Phinx\Console\Command\Breakpoint;
use Phinx\Console\Command\Init;
use Phinx\Console\Command\ListAliases;
use Phinx\Console\Command\Migrate;
use Phinx\Console\Command\Rollback;
use Phinx\Console\Command\SeedCreate;
use Phinx\Console\Command\SeedRun;
use Phinx\Console\Command\Status;
use Phinx\Console\Command\Test;

class PrettyPhinxApplication extends PhinxApplication
{
    public function __construct()
    {
        parent::__construct('Phinx by CakePHP - https://phinx.org.');

        $this->addCommands([
            new Init(),
            new Create(),
            new Migrate(),
            new Rollback(),
            new Status(),
            new Breakpoint(),
            new Test(),
            new SeedCreate(),
            new SeedRun(),
            new ListAliases(),
        ]);
    }
}
