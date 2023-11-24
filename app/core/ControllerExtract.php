<?php

namespace app\core;

class ControllerExtract
{
    public static function extract()
    {
        $uri = Uri::uri();
        $controller = "Home";

        if (isset($ri[0]) && $ri[0] !== "") {
            $controller = ucfirst($uri[0]);
        }

        $namespaceAndController = "app\\controllers\\" . $controller;

        if (class_exists($namespaceAndController)) {
            $controller = $namespaceAndController;
        }

        return $controller;
    }
}