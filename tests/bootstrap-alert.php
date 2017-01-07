<?php

use PHPUnit\Framework\TestCase;
use jugger\ui\bootstrap\alert\Alert;

class BootstrapAlertTest extends TestCase
{
    public function testBase()
    {
        $this->assertEquals(
            Alert::widget([
                'type' => 'success',
                'content' => 'Test content!',
            ]),
            "<div class='alert alert-success' role='alert'>Test content!</div>"
        );
        $this->assertEquals(
            Alert::widget([
                'type' => 'danger',
                'content' => 'Test content!',
            ]),
            "<div class='alert alert-danger' role='alert'>Test content!</div>"
        );
    }

    public function testHeader()
    {
        $this->assertEquals(
            Alert::widget([
                'type' => 'info',
                'header' => 'Test alert!',
                'content' => 'Test content...',
            ]),
            "<div class='alert alert-info' role='alert'><h4 class='alert-heading'>Test alert!</h4><p>Test content...</p></div>"
        );
    }

    public function testDismiss()
    {
        $this->assertEquals(
            Alert::widget([
                'type' => 'warning',
                'dismiss' => true,
                'content' => 'Test content...',
            ]),
            "<div class='alert alert-warning' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Test content...</div>"
        );
    }
}
