<?php

namespace jugger\ui\bootstrap\badge;

use jugger\ds\Ds;
use jugger\html\ContentTag;

class Badge extends ContentTag
{
    public function __construct(array $params)
    {
        $this->class = 'badge';
        $params = Ds::arr($params);
        $content = $params['content'] ?? '';

        if ($params['type']) {
            $this->class .= " badge-{$params['type']}";
        }
        if ($params['pill']) {
            $this->class .= " badge-pill";
        }

        $params->removeKeys('type', 'pill', 'content');
        parent::__construct('span', $content, $params->toArray());
    }
}
