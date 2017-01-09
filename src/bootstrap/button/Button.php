<?php

namespace jugger\ui\bootstrap\button;

use jugger\ds\Ds;
use jugger\html\ContentTag;

class Button extends ContentTag
{
    public function __construct(string $content = '', array $params = [])
    {
        $this->class = 'btn';
        $this->type = 'button';
        $params = Ds::arr($params);

        if ($params['type'] && $params['outline']) {
            $this->class .= " btn-outline-{$params['type']}";
        }
        elseif ($params['type']) {
            $this->class .= " btn-{$params['type']}";
        }
        if (in_array($params['size'], ['sm', 'lg'])) {
            $this->class .= " btn-{$params['size']}";
        }
        if ($params['block']) {
            $this->class .= " btn-block";
        }
        if ($params['active']) {
            $this->class .= " active";
        }

        $params->removeKeys('type', 'outline', 'size', 'block', 'active');
        parent::__construct('button', $content, $params->toArray());
    }
}
