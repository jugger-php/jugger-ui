<?php

namespace jugger\ui\bootstrap\button;

class PrimaryButton extends Button
{
    public function __construct(string $content = '', array $params = [])
    {
        $params['type'] = 'primary';
        parent::__construct($content, $params);
    }
}
