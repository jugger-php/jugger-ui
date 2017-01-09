<?php

use PHPUnit\Framework\TestCase;
use jugger\ui\bootstrap\card\Card;

class BootstrapCardTest extends TestCase
{
    public function testDefault()
    {
        $this->assertEquals(
            Card::widget([
                'img-top' => [
                    'src' => 'link-to-img',
                ],
                'title' => 'Main title',
                'subtitle' => 'Sub title',
                'text' => [
                    'block1',
                    'block2',
                    'block3',
                ],
                'links' => [
                    [
                        'href' => '/',
                        'text' => 'Link1',
                    ],
                    [
                        'type' => 'primary',
                        'href' => '#',
                        'text' => 'Link1',
                    ],
                ],
                'footer' => 'any html text',
            ]),
            ""
        );
    }
}
