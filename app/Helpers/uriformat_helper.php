<?php

if (!function_exists('getPath')) {
    function getPath()
    {
        $uri = new \CodeIgniter\HTTP\URI();
        $uri = service('uri');
        return $uri->getPath();
    }

}

if (!function_exists('getSegment')) {
    function getSegment(int $number)
    {
        $uri = new \CodeIgniter\HTTP\URI();
        $uri = service('uri');
        $segment = explode('/', $uri->getPath());

        if (count($segment) > $number) {
            return $segment[$number];
        }
        return "";
    }

}

// if (!function_exists('getSegment')) {
//     function getSegment(int $number)
//     {
//         $router = \CodeIgniter\Config\Services::router();
//         $router->controllerName();
//         $router->methodName();
//         $ctrl_method = strtolower(substr($router->controllerName(), 17, strlen($router->controllerName())) . '/' . $router->methodName());

//         $uri = new \CodeIgniter\HTTP\URI();
//         $uri = service('uri');
//         $temp = str_replace(base_url(), "", current_url());
//         dd($temp);
//         $segment = str_replace($ctrl_method, "", $uri->getPath());
//         $ex_segment = explode('/', str_replace($ctrl_method, "", $uri->getPath()));
//         if (strlen($segment) > 0) {
//             // print_r($ex_segment);
//             return $ex_segment[$number];
//         }
//         return "";
//     }
// }
