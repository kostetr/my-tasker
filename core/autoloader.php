<?php

namespace core;

spl_autoload_register(function($className) {
    $file_windows = $className . '.php';
    $file_linux = str_replace('\\', "/", $file_windows);
    if (file_exists($file_windows)) {
        include_once $file_windows;
        return true;
    } if (file_exists($file_linux)) {
        include_once $file_linux;
        return true;
    } return false;
});





