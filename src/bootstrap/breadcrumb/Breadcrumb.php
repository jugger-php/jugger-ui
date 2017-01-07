<?php

namespace jugger\ui\bootstrap\breadcrumb;

use jugger\ui\Widget;
use jugger\html\Html;

class Breadcrumb extends Widget
{
    public function run()
    {
        $items = $this->getItems();
        $options = $this->getOptions();

        echo Html::beginTag('ol', $options);
        foreach ($items as $item) {
            echo $item;
        }
        echo Html::endTag('ol');
    }

    public function getOptions()
    {
        $options = [
            'class' => 'breadcrumb',
        ];
        return array_merge($options, $this->get('options', []));
    }

    public function getItems()
    {
        $ret = [];
        $items = $this->get('items', []);
        foreach ($items as $item) {
            $isActive = end($items) === $item;
            $ret[] = $this->renderItem($item, $isActive);
        }
        return $ret;
    }

    public function renderItem($item, bool $isActive)
    {
        if (is_string($item)) {
            return $item;
        }
        elseif (is_array($item)) {
            $options = [
                'class' => 'breadcrumb-item'
            ];
            if ($isActive) {
                $options['class'] .= ' active';
            }
            return Html::li($this->renderItemLink($item), $options);
        }
        else {
            throw new \Exception("Invalide type of parametr 'item': ". gettype($item));
        }
    }

    public function renderItemLink(array $item)
    {
        $text = $item['text'];
        $href = $item['href'] ?? '#';

        return Html::a($text, $href);
    }
}
