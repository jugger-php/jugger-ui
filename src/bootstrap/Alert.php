<?php

namespace jugger\ui\bootstrap;

use jugger\html\Html;

abstract class Alert
{
    public static function widget($class, array $options = [])
    {
        $options['role'] = 'alert';
        $options['class'] = "alert alert-{$class}";

        if (!empty($header)) {
            $content = Html::h4($header, ['class' => 'alert-heading']) . $content;
        }

        if (!empty($button)) {
            $btn = Button::widget('&times;', [
                'class' => 'close',
                'data-dismiss' => 'alert',
                'aria-label' => 'close',
            ]);
            $content = $btn . $content;
            $options['class'] .= " alert-dismissible fade in";
        }
        return Html::div($content, $options);
    }
}
