<?php
require_once 'Router.php';

$router = new Router();

$route = $_SERVER['REQUEST_URI'];
$page = $router->get($route);

if ($page == null) {
    $page = $router->get('/error');
}

$title = $page->title . ' | Sippis @ DPSG Idstein';
$content = __DIR__ . '/pages/' . $page->view;

require 'templates/layout.php';