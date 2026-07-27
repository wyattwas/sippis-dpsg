<?php

class Router
{
    /**
     * @var Route[] $routes
     */
    private array $routes;

    public function __construct()
    {
        $this->routes = require 'routes.php';
    }

    public function get(string $path): ?Route
    {
        return $this->routes[$path] ?? null;
    }

    /**
     * @return Route[]
     */
    public function all(): array
    {
        return $this->routes;
    }

    public function isCurrentRoute(string $path, Route $route): bool
    {
        return $route->path === $path;
    }
}