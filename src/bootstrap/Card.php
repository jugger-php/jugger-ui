<?php

namespace jugger\ui\bootstrap;

use jugger\html\Html;

abstract class Card
{
    public static function widget(array $options = [], array $fieldOptions = [])
    {
        $fields = self::getFields($options);

        return Html::beginTag('div', $content, ['class' => 'card']);
    }

    public static function getFields(array $options)
    {
        $fields = [];
        $keys = ['img', 'title', 'subtitle', 'text'];
        foreach ($keys as $key) {

        }

        return $ret;
    }
}
