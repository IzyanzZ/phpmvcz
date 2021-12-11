<?php

namespace Izyanz\app\Core;

class Route
{
    public $route = [];

    public function get($action, $callback) {
        $this->route['GET'][$action] = $callback;
    }

    public function post($action, $callback) {
        $this->route['POST'][$action] = $callback;
    }

    public function run() {
        $action = $_SERVER["REQUEST_URI"];
        $method = $_SERVER["REQUEST_METHOD"];

        $callback = $this->route[$method][$action];

        if (!$callback) {
            http_response_code(404);
            echo "ERROR";
            exit;
        }

        call_user_func($callback);
    }
}