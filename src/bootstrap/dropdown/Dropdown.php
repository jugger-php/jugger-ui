<?php

namespace jugger\ui\bootstrap\dropdown;

use jugger\ui\Widget;
use jugger\html\Html;

class Dropdown extends Widget
{
    protected static $id = 0;

    public function run()
    {
        $this->render('index', [
            'trigger' => $this->getTrigger(),
            'items' => $this->getItems(),
        ]);
    }

    public function getTrigger()
    {

    }

    public function getItems()
    {
        
    }
}
