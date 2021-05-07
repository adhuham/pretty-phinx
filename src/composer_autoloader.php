<?php

/**
 * Copied from: https://github.com/cakephp/phinx/blob/master/src/composer_autoloader.php
 */

return function () {
    $files = [
      __DIR__ . '/../../../autoload.php', // composer dependency
      __DIR__ . '/../vendor/autoload.php', // stand-alone package
    ];
    foreach ($files as $file) {
        if (is_file($file)) {
            require_once $file;

            return true;
        }
    }

    return false;
};
