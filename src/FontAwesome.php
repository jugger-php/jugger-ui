<?php

namespace jugger\ui;

use jugger\html\Html;

abstract class FontAwesome
{
    protected static function base($class, $size = 1)
    {
        $class = "fa fa-{$size} fa-{$class}";
        return Html::i('', [
            'class' => $class,
            'aria' => [
                'hidden' => 'true',
            ],
        ]);
    }

    public static function addressBook($size)
    {
        return self::base('address-book', $size);
    }

    public static function addressBookO($size)
    {
        return self::base('address-book-o', $size);
    }

    public static function addressCard($size)
    {
        return self::base('address-card', $size);
    }

    public static function addressCardO($size)
    {
        return self::base('address-card-o', $size);
    }

    public static function bathtub($size)
    {
        return self::base('bath', $size);
    }

    /*
     * Others classes
     */

    public static function __callStatic($name, array $args)
    {
        $size = $args[0] ?? 1;
        return self::base($name, $size);
    }
}
