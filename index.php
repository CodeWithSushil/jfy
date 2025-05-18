<?php

$method = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];

if($method === 'GET' && $uri === '/')
{
    echo "WELCOME TO INDEX PAGE!";
} elseif($method === 'GET' && $uri === '/home')
{
    echo <<<HTML
<h1>Home Page</h1>
HTML;
}
else
{
echo <<<HTML
<h1>404 - Page not found</h1>
HTML;
}







