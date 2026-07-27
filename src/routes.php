<?php
require_once 'Route.php';

/**
 * return Route[]
 */
return [
    '/' => new Route('/', 'Start', 'home.php'),
    '/rosskur2026' => new Route(
        path: '/rosskur2026',
        title: 'Rosskur 2026',
        view: 'rosskur2026/index.php',
        css: '../pages/rosskur2026/style.css'
    ),
    '/rosskur2026/signedup' => new Route(
        path: '/rosskur2026/signedup',
        title: 'Rosskur 2026 - Du bist angemeldet!',
        view: 'rosskur2026/submitted.php',
        showInNav: false,
        css: '../pages/rosskur2026/style.css'
    ),
    '/canada' => new Route('/canada', 'Kanada 2026', 'canada.php'),
    '/contact' => new Route('/contact', 'Kontakt', 'contact.php'),
    '/error' => new Route('/error', 'Fehler', 'error.php', false),
];