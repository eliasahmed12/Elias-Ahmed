<?php


function view($view, $data=[], $print = true)
{
    $output = "View Not Found";
    $extension = "pages/".$view.".php";
    if (file_exists($extension))
    {
        extract($data);
        ob_start();
        include $extension;
        $output = ob_get_clean();
    }
    if ($print)
    {
        print $output;
    }
}