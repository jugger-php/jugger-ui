<?php

namespace jugger\ui\bootstrap\nav;

use jugger\ui\Widget;
use jugger\html\Html;

class Nav extends Widget
{
    public function run()
    {
        $items = $this->getItems();
        $options = $this->getOptions();

        echo Html::beginTag('ul', $options);
        foreach ($items as $item) {
            echo $item;
        }
        echo Html::endTag('ul');
    }

    public function getOptions()
    {
        $options = [
            'class' => 'nav',
        ];
        if ($this->get('justified')) {
            $options['class'] .= ' nav-justified';
        }
        if ($this->get('pills')) {
            $options['class'] .= ' nav-pills';
        }
        if ($this->get('tabs')) {
            $options['class'] .= ' nav-tabs';
        }

        return array_merge($options, $this->get('options', []));
    }

    public function getItems()
    {
        $ret = [];
        $items = $this->get('items', []);
        foreach ($items as $item) {
            $ret[] = $this->renderItem($item);
        }
        return $ret;
    }

    public function renderItem($item)
    {
        if (is_string($item)) {
            return $item;
        }
        elseif (is_array($item)) {
            return Html::li(
                $this->renderItemLink($item),
                ['class' => 'nav-item']
            );
        }
        else {
            throw new \Exception("Invalide type of parametr 'item': ". gettype($item));
        }
    }

    public function renderItemLink(array $item)
    {
        $text = $item['text'];
        $href = $item['href'] ?? '#';
        $class = 'nav-link';
        if (isset($item['active'])) {
            $class .= " active";
        }
        elseif (isset($item['disabled'])) {
            $class .= " disabled";
        }

        return Html::a($text, $href, ['class' => $class]);
    }
}
