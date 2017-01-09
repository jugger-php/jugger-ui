<?php

namespace jugger\ui\bootstrap;

use jugger\html\Tag;
use jugger\html\EmptyTag;

trait ItemsTrait
{
    public function addItems(array $items)
    {
        foreach ($items as $item) {
            if (is_string($item)) {
                $this->add(new EmptyTag($item));
            }
            elseif ($item instanceof Tag) {
                $this->addItem($item);
            }
            else {
                throw new \Exception('Invalide type of item. Must be only "string" or implements "\jugger\html\Tag"');
            }
        }
    }

    public function addItem(Tag $item)
    {
        $this->add($item);
    }
}
