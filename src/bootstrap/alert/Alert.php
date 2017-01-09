<?php

namespace jugger\ui\bootstrap\alert;

use jugger\ds\Ds;
use jugger\html\ContentTag;
use jugger\html\tag\P;
use jugger\html\tag\Button;

class Alert extends ContentTag
{
    public $type;
    public $text;
    public $header;
    public $dismiss;

    public function __construct(array $params)
    {
        $this->class = 'alert';
        $params = Ds::arr($params);

        if ($params['type']) {
            $this->class .= " alert-{$params['type']}";
        }
        if ($params['dismiss']) {
            $this->addDismiss();
        }
        if ($params['header']) {
            $this->addHeader($params['header']);
        }
        if ($params['text']) {
            $this->addText($params['text']);
        }

        $params->removeKeys('type', 'text', 'header', 'dismiss')->merge(['role' => 'alert']);
        parent::__construct('div', '', $params->toArray());
    }

    public function addHeader(string $value)
    {
        $this->add(new ContentTag('h4', $value, ['class' => 'alert-heading']));
    }

    public function addText(string $value)
    {
        $this->add(new P($value));
    }

    public function addDismiss()
    {
        $this->add(new Button(
            '<span aria-hidden="true">&times;</span>',
            [
                'type' => 'button',
                'class' => 'close',
                'data' => [
                    'dismiss' => 'alert',
                ],
                'aria' => [
                    'label' => 'Close',
                ],
            ]
        ));
    }
}
