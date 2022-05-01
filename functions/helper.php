<?php

function p($data) {
    echo "<pre>" . print_r($data, true) . "</pre>";
}

function pd($data) {
    echo "<pre>" . print_r($data, true) . "</pre>";
    die();
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

function url($url) {
    return APP_URL . $url;
}

function redirect($url) {
    header("Location: " .  APP_URL . $url);
}