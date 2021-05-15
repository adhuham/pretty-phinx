<?php

namespace PrettyPhinx\Console\Command;

use PrettyPhinx\Console\Config\Config;
use Phinx\Console\Command\Create as PhinxCreate;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Phinx\Util\Util;

class Create extends PhinxCreate
{
    protected static $defaultName = 'create';

    protected function loadConfig(InputInterface $input, OutputInterface $output)
    {
        $configFilePath = $this->locateConfigFile($input);
        $output->writeln('<info>using config file</info> ' . Util::relativePath($configFilePath));

        $parser = $input->getOption('parser');

        // If no parser is specified try to determine the correct one from the file extension.  Defaults to YAML
        if ($parser === null) {
            $extension = pathinfo($configFilePath, PATHINFO_EXTENSION);

            switch (strtolower($extension)) {
                case self::FORMAT_JSON:
                    $parser = self::FORMAT_JSON;
                    break;
                case self::FORMAT_YML_ALIAS:
                case self::FORMAT_YML:
                    $parser = self::FORMAT_YML;
                    break;
                case self::FORMAT_PHP:
                default:
                    $parser = self::FORMAT_DEFAULT;
                    break;
            }
        }

        switch (strtolower($parser)) {
            case self::FORMAT_JSON:
                $config = Config::fromJson($configFilePath);
                break;
            case self::FORMAT_PHP:
                $config = Config::fromPhp($configFilePath);
                break;
            case self::FORMAT_YML_ALIAS:
            case self::FORMAT_YML:
                $config = Config::fromYaml($configFilePath);
                break;
            default:
                throw new InvalidArgumentException(sprintf('\'%s\' is not a valid parser.', $parser));
        }

        $output->writeln('<info>using config parser</info> ' . $parser);

        $this->setConfig($config);
    }
}
