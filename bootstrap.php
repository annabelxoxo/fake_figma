<?php

// Laadt automatisch klassen uit de map classes/ (bv. new Shape() -> classes/Shape.php)
spl_autoload_register(function (string $class): void {
    $file = __DIR__ . '/classes/' . str_replace('\\', '/', $class) . '.php';
    if (file_exists($file)) {
        require_once $file;
    }
});
