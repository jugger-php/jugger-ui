<?php

namespace jugger\ui\bootstrap\button;

class WarningButton extends Button
{
    public function __construct(string $content = '', array $params = [])
    {
        $params['type'] = 'warning';
        parent::__construct($content, $params);
    }
}
