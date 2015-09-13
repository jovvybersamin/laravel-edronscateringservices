<?php


if (! function_exists('is_active')) {
    function is_active($uriPattern) {
        return app('request')->is($uriPattern);
    }
}

if (! function_exists('money')) {
    function money($amount,$symbol){
        return $symbol . money_format('%i',$amount);
    }
}
