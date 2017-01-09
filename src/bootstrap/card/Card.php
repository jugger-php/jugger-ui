<?php

namespace jugger\ui\bootstrap\card;

use jugger\html\Html;
use jugger\ui\Widget;
use jugger\ui\bootstrap\WidgetTrait;

class Card extends Widget
{
    use WidgetTrait;

    public function run()
    {
        $view = $this->get('view', 'default');
        $this->render($view, [
            'options' => $this->getOptions(),
            'img' => $this->getElement('img'),
            'title' => $this->getElement('title'),
            'links' => $this->getElement('links'),
            'header' => $this->getElement('header'),
            'footer' => $this->getElement('footer'),
            'content' => $this->getElement('content'),
            'subtitle' => $this->getElement('subtitle'),
        ]);
    }

    public function getElement(string $name)
    {
        $data = $this->get($name);
        if (is_string($data)) {
            return new Content($data);
        }
        elseif (is_array($data)) {
            switch ($name) {
                case 'img':
                    $item['class'] = 'card-image-top';
                    return new Tag('img', $item);

                case 'title':
                    $item['class'] = 'card-title';
                    return new ContentTag('h4', $item);

                case 'subtitle':
                    $item['class'] = 'card-subtitle mb-2 text-muted';
                    return new ContentTag('h6', $item);

                case 'content':
                    return $this->getContentTags($item);

                case 'links':
                    return $this->getLinksTags($item);
            }
        }
        else {
            return null;
        }
    }

    public function getContentTags(array $items)
    {
        $ret = [];
        foreach ($items as $item) {
            $ret[] = new P($item, ['class' => 'card-text']);
        }
        return $ret;
    }

    public function getLinksTags(array $items)
    {
        $ret = [];
        foreach ($items as $item) {
            if ($item instanceof Tag) {
                $ret[] = $item;
            }
            elseif (is_string($item)) {
                $ret[] = new Content($item);
            }
        }
        return $ret;
    }
}
