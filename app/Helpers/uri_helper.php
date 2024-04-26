<?php

if (!function_exists('uri')) {
    function uri()
    {
        $uri = service('uri');
        return $uri;
    }
}
