<?php
if (!function_exists('responseNow') || !function_exists('errorResponse')) {
    function responseNow($code, $message, $data, $statusCode)
    {
        response()->json(['ResponseCode' => $code, 'ResponseMessage' => $message, 'Response' => $data,'errors'=>[]], $statusCode)->send();
        die;
    }

    function errorResponse($code, $message, $errors, $statusCode)
    {
        response()->json(['ResponseCode' => $code, 'ResponseMessage' => $message, 'Response'=> new stdClass(),'errors' => $errors,], $statusCode)->send();
        die;
    }
}
