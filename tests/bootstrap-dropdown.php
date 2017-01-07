<?php

use PHPUnit\Framework\TestCase;
use jugger\ui\bootstrap\dropdown\Dropdown;

class BootstrapDropdownTest extends TestCase
{
    public function testItems()
    {
        $this->assertEquals(
            Dropdown::widget([
                'button' => [
                    'text' => 'Dropdown button',
                    'options' => 'btn btn-primary',
                ],
                'items' => [
                    [
                        'href' => '/',
                        'text' => 'Link1',
                    ],
                    [
                        'href' => '#',
                        'text' => 'Link2',
                    ],
                ],
            ]),
            "<div class='dropdown'><button class='btn btn-primary dropdown-toggle' type='button' id='dropdown-1' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>Dropdown button</button><div class='dropdown-menu' aria-labelledby='dropdown-1'><a class='dropdown-item' href='/'>Link1</a><a class='dropdown-item' href='#'>Link2</a></div></div>"
        );
        $this->assertEquals(
            Dropdown::widget([
                'link' => [
                    'href' => '#',
                    'text' => 'Dropdown link',
                ],
                'items' => [
                    [
                        'href' => '/',
                        'text' => 'Link1',
                    ],
                    [
                        'href' => '#',
                        'text' => 'Link2',
                    ],
                ],
            ]),
            "<div class='dropdown'><a class='dropdown-toggle' href='#' id='dropdown-2' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>Dropdown link</a><div class='dropdown-menu' aria-labelledby='dropdown-2'><a class='dropdown-item' href='/'>Link1</a><a class='dropdown-item' href='#'>Link2</a></div></div>"
        );
        $this->assertEquals(
            Dropdown::widget([

            ]),
            ""
        );
        $this->assertEquals(
            Dropdown::widget([

            ]),
            ""
        );
    }
}
