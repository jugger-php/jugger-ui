<?php

use PHPUnit\Framework\TestCase;
use jugger\ui\bootstrap\badge\Badge;

class BootstrapBadgeTest extends TestCase
{
    public function testDropdown()
    {
        $this->assertEquals(
            Badge::widget([
                'type' => 'success',
                'content' => 'value',
            ]),
            "<span class='badge badge-success'>value</span>"
        );
        $this->assertEquals(
            Badge::widget([
                'pill' => true,
                'type' => 'danger',
                'content' => 'value',
            ]),
            "<span class='badge badge-danger badge-pill'>value</span>"
        );
    }
}
