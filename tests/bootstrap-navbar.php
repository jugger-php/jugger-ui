<?php

use PHPUnit\Framework\TestCase;
use jugger\ui\bootstrap\navbar\NavBar;

class BootstrapNavbarTest extends TestCase
{
    public function testBrand()
    {
        $this->assertEquals(
            NavBar::widget(),
            "<nav class='navbar navbar-light'></nav>"
        );
        $this->assertEquals(
            NavBar::widget([
                'brand-text' => "Test",
            ]),
            "<nav class='navbar navbar-light'><h1 class='navbar-brand mb-0'>Test</h1></nav>"
        );
        $this->assertEquals(
            NavBar::widget([
                'brand-link' => [
                    'href' => '/',
                    'text' => 'Test',
                ],
            ]),
            "<nav class='navbar navbar-light'><a class='navbar-brand' href='/'>Test</a></nav>"
        );
        $this->assertEquals(
            NavBar::widget([
                'brand' => 'any html code'
            ]),
            "<nav class='navbar navbar-light'>any html code</nav>"
        );
    }

    public function testLeft()
    {

    }
}
