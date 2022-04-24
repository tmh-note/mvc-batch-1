<?php

function p($data) {
    echo "<pre>" . print_r($data, true) . "</pre>";
}

function app_path($path = '') {
    if($path) {
        $path = '/' . ltrim($path, '/');
    }

    return APP_PATH . $path;
}

function view($view, $data = []) {
    $view = str_replace('.', '/', $view);

    extract($data);
    
    include app_path("views/$view.view.php");
}