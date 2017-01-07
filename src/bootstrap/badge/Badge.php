<?php

namespace jugger\ui\bootstrap\badge;

use jugger\ui\Widget;
use jugger\html\Html;

class Badge extends Widget
{
    public function run()
    {
        $type = $this->get('type', 'default');
        $class = "badge badge-{$type}";
        if ($this->get('pill', false)) {
            $class .= " badge-pill";
        }
        $content = $this->get('content', '');

        return Html::contentTag('span', $content, compact('class'));
    }
}
