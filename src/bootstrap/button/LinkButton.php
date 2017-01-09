<?php

namespace jugger\ui\bootstrap\button;

use jugger\html\Html;

class LinkButton extends Button
{
    public function __construct(string $content, string $href = '#', array $params = [])
    {
        $default = [
            'type' => 'link',
            'href' => $href,
        ];
        parent::__construct($content, array_merge($default, $params));
        $this->name = 'a';
        $this->type = null;
        $this->role = $params['role'] ?? 'button';
    }
}
