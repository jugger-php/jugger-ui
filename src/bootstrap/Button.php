<?php

namespace jugger\ui\bootstrap;

use jugger\html\Html;

abstract class Button
{
    public static function widget($class, $content, array $options = [])
    {
        $default = [
            'type' => "button",
            'class' => "btn btn-{$class}",
        ];
        $options = array_merge($default, $options);

        return Html::contentTag('button', $content, $options);
    }

    public static function primary($content, array $options = [])
    {
        return self::widget('primary', $content, $options);
    }

    public static function default($content, array $options = [])
    {
        return self::widget('default', $content, $options);
    }

    public static function secondary($content, array $options = [])
    {
        return self::widget('secondary', $content, $options);
    }

    public static function success($content, array $options = [])
    {
        return self::widget('success', $content, $options);
    }

    public static function info($content, array $options = [])
    {
        return self::widget('info', $content, $options);
    }

    public static function warning($content, array $options = [])
    {
        return self::widget('warning', $content, $options);
    }

    public static function danger($content, array $options = [])
    {
        return self::widget('danger', $content, $options);
    }

    public function reset($content, array $options = [])
    {
        $options['type'] = 'reset';
        return self::danger($content, $options);
    }

    public function submit($content, array $options = [])
    {
        $options['type'] = 'submit';
        return self::success($content, $options);
    }
}
