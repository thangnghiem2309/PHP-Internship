<?php

if(!function_exists('require_file'))
{
    function require_file($pathFolder)
    {
        $files = array_diff(scandir($pathFolder), ['.', '..']);
        foreach($files as $fileName)
        {
            require_once $pathFolder . $fileName;
        }
    }
}
if(!function_exists('debug'))
{
    function debug($var)
    {
        echo "<pre>";
        print_r($var);
        die;
    }
}
if(!function_exists('e404'))
{
    function e404()
    {
        echo "404 - NOT FOUND";
        die;
    }
}
if(!function_exists('showViewClient'))
{
    function showViewClient($view, $data = null)
    {
        if(!empty($data))
        {
            extract($data);
        }
        require_once './client/views/master.php';
    }
}