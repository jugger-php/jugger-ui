<?php

namespace jugger\ui;

class View
{
    protected $filePath;
    protected $assets = [];

    public function __construct(string $filePath)
    {
        $this->filePath = $filePath;
    }
}
