<?php

namespace jugger\ui\bootstrap\button;

class SuccessButton extends Button
{
    public function __construct(string $content = '', array $params = [])
    {
        $params['type'] = 'success';
        parent::__construct($content, $params);
    }
}
