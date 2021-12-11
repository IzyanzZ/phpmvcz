<?php

namespace Izyanz\app\Core;

class Service
{
    public function __construct() {}

    static function getModel($model) { return new $model; }
    static function view($view, $data = []) { include_once "../resource/views/$view.php"; }
    static function write($text = null) { print($text); }
}