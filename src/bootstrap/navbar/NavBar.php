<?php

namespace jugger\ui\bootstrap\navbar;

use jugger\ui\Widget;
use jugger\html\Html;

class NavBar extends Widget
{
    public function run()
    {
        $view = $this->params['view'] ?? 'index';
        $this->render('index', [
            'options' => $this->getOptions(),
            'brand' => $this->getBrand(),
            'left' => $this->getLeft(),
            'right' => $this->getRight(),
        ]);
    }

    public function getOptions()
    {
        return array_merge(
            [
                'class' => 'navbar',
            ],
            $this->params['options'] ?? []
        );
    }

    public function getBrand()
    {
        if ($this->get('brand')) {
            return $this->get('brand');
        }
        elseif ($this->get('brand-text')) {
            $text = $this->get('brand-text');
            return Html::h1($text, ['class' => 'navbar-brand mb-0']);
        }
        elseif ($this->get('brand-link')) {
            $link = $this->get('brand-link');
            return Html::a($link['text'], $link['href'], ['class' => 'navbar-brand']);
        }
        else {
            return "";
        }
    }

    public function getLeft()
    {

    }

    public function getRight()
    {

    }
}
