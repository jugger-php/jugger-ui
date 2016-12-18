<?php

namespace jugger\ui\bootstrap;

use jugger\html\Html;

abstract class Grid
{
    public static function col($xs, $sm, $md, $lg, $xl)
    {
        $class = "";
        $sizes = compact('xs','sm','md','lg','xl');
        foreach ($sizes as $size => $value) {
            $value = (int) $value;
            if ($value > 0) {
                $class .= " col-{$size}-{$value}";
            }
        }

        return Html::tag('div', ['class' => $class]);
    }
}
