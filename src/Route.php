<?php

final class Route
{
    public function __construct(
        public string  $path,
        public string  $title,
        public string  $view,
        public bool    $showInNav = true,
        public ?string $css = null
    )
    {
    }
}