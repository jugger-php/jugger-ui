<?php

use jugger\html\Html;

// pre-proccessing
$params['options']['class'] .= " navbar-light";

// begin
echo Html::beginTag('nav', $params['options']);

// brand
echo $params['brand'] ?? "";

// left

// right

// end
echo Html::endTag('nav');
