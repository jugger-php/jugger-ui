<?php

namespace jugger\ui\bootstrap\breadcrumb;

use jugger\ds\Ds;
use jugger\html\Tag;
use jugger\html\EmptyTag;
use jugger\html\ContentTag;
use jugger\html\tag\Li;
use jugger\html\bootstrap\ItemsTrait;

class Breadcrumb extends ContentTag
{
    use ItemsTrait;

    public function __construct(array $params)
    {
        $this->class = 'breadcrumb';

        $params = Ds::arr($params);
        if ($params['items']) {
            $this->addItems($params['items']);
        }

        $params->removeKeys('items');
        parent::__construct('ol', '', $params->toArray());
    }

    public function addItems(array $items)
    {
        foreach ($items as $item) {
            if (is_string($item)) {
                $this->add(new EmptyTag($item));
            }
            elseif ($item instanceof Tag) {
                $li = new Li();
                $li->class = 'breadcrumb-item';
                $li->add($item);
                if (end($items) === $item) {
                    $li->class .= " active";
                }
                $this->add($li);
            }
            else {
                throw new \Exception('Invalide type of item. Must be only "string" or implements "\jugger\html\Tag"');
            }
        }
    }
}
