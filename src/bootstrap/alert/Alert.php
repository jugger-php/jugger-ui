<?php

namespace jugger\ui\bootstrap\alert;

use jugger\ui\Widget;
use jugger\html\Html;

class Alert extends Widget
{
    public function run()
    {
        $header = $this->get('header');
        $options = $this->getOptions();
        $content = $this->get('content', '');
        $dismiss = $this->get('dismiss', false);

        echo Html::beginTag('div', $options);
        if ($header) {
            echo Html::h4($header, ['class' => 'alert-heading']);
            echo Html::p($content);
        }
        elseif ($dismiss) {
            echo "<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>";
            echo $content;
        }
        else {
            echo $content;
        }
        echo Html::endTag('div');
    }

    public function getOptions()
    {
        $options = [
            'class' => 'alert',
            'role' => 'alert',
        ];
        $options['class'] .= " alert-".$this->get('type', 'info');

        return array_merge($options, $this->get('options', []));
    }
}
