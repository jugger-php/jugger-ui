<?php

use PHPUnit\Framework\TestCase;
use jugger\ui\bootstrap\breadcrumb\Breadcrumb;

class BreadcrumbTest extends TestCase
{
    public function testBase()
    {
        $this->assertEquals(
            Breadcrumb::widget([
                'items' => [
                    [
                        'href' => '/',
                        'text' => 'Link1',
                    ],
                    '<li>Link2</li>',
                    [
                        'text' => 'Link3',
                    ],
                ],
            ]),
            "<ol class='breadcrumb'><li class='breadcrumb-item'><a href='/'>Link1</a></li><li>Link2</li><li class='breadcrumb-item active'><a href='#'>Link3</a></li></ol>"
        );
        $this->assertEquals(
            Breadcrumb::widget([
                'options' => [
                    'id' => 'my-breadcrumb',
                ],
            ]),
            "<ol id='my-breadcrumb' class='breadcrumb'></ol>"
        );
    }
}
