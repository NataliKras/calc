<?php

spl_autoload_register(function ($class) {
    $source = str_replace(
        ['\\App\\', "\\"],
        ['\\src\\', DIRECTORY_SEPARATOR],
        __DIR__ . "\\..\\$class.php"
    );

    if (file_exists($source)) {
        require_once $source;
    }
});
