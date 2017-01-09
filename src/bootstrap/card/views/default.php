<?php

use jugger\html\Html;

$card = new Div(['class' => 'card']);
if ($params['img']) {
    $card->addChild($params['img']);
}

$block = new Div(['class' => 'card-block']);
if ($params['title']) {
    $block->addChild($params['title']);
}
if ($params['subtitle']) {
    $block->addChild($params['subtitle']);
}
foreach ($params['content'] as $item) {
    $block->addChild($item);
}
foreach ($params['links'] as $item) {
    $block->addChild($item);
}
$card->addChild($block);

echo $card;
