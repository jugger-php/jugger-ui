<?php

use PHPUnit\Framework\TestCase;
use jugger\ui\bootstrap\button\Button;
use jugger\ui\bootstrap\button\LinkButton;
use jugger\ui\bootstrap\button\ButtonGroup;
use jugger\ui\bootstrap\button\RadioButtonGroup;
use jugger\ui\bootstrap\button\CheckboxButtonGroup;
use jugger\ui\bootstrap\button\DangerButton;
use jugger\ui\bootstrap\button\InfoButton;
use jugger\ui\bootstrap\button\PrimaryButton;
use jugger\ui\bootstrap\button\SecondaryButton;
use jugger\ui\bootstrap\button\SuccessButton;
use jugger\ui\bootstrap\button\WarningButton;

class ButtonTest extends TestCase
{
    public function testBase()
    {
        $this->assertEquals(
            Button::widget(),
            "<button class='btn' type='button'></button>"
        );
        $this->assertEquals(
            Button::widget('Primary', [
                'type' => 'primary',
            ]),
            "<button class='btn btn-primary' type='button'>Primary</button>"
        );
        $this->assertEquals(
            Button::widget('Primary', [
                'type' => 'success',
                'outline' => true,
            ]),
            "<button class='btn btn-outline-success' type='button'>Primary</button>"
        );
        $this->assertEquals(
            Button::widget('Primary', [
                'type' => 'secondary',
                'size' => 'lg',
            ]),
            "<button class='btn btn-secondary btn-lg' type='button'>Primary</button>"
        );
        $this->assertEquals(
            Button::widget('Primary', [
                'type' => 'danger',
                'block' => true,
            ]),
            "<button class='btn btn-danger btn-block' type='button'>Primary</button>"
        );
        $this->assertEquals(
            Button::widget('Primary', [
                'type' => 'warning',
                'active' => true,
                'disabled' => true,
            ]),
            "<button class='btn btn-warning active' type='button' disabled>Primary</button>"
        );
        $this->assertEquals(
            Button::widget('', [
                'id' => 'my-button',
            ]),
            "<button class='btn' type='button' id='my-button'></button>"
        );
    }

    public function testLink()
    {
        $this->assertEquals(
            LinkButton::widget('Primary', '#', [
                'type' => 'secondary',
                'size' => 'lg',
            ]),
            "<a class='btn btn-secondary btn-lg' href='#' role='button'>Primary</a>"
        );
        $this->assertEquals(
            LinkButton::widget('Home', '/'),
            "<a class='btn btn-link' href='/' role='button'>Home</a>"
        );
    }

    public function testAdvanced()
    {
        $this->assertEquals(
            PrimaryButton::widget('Primary'),
            "<button class='btn btn-primary' type='button'>Primary</button>"
        );
        $this->assertEquals(
            SecondaryButton::widget('Secondary'),
            "<button class='btn btn-secondary' type='button'>Secondary</button>"
        );
        $this->assertEquals(
            SuccessButton::widget('Success'),
            "<button class='btn btn-success' type='button'>Success</button>"
        );
        $this->assertEquals(
            InfoButton::widget('Info'),
            "<button class='btn btn-info' type='button'>Info</button>"
        );
        $this->assertEquals(
            WarningButton::widget('Warning'),
            "<button class='btn btn-warning' type='button'>Warning</button>"
        );
        $this->assertEquals(
            DangerButton::widget('Danger'),
            "<button class='btn btn-danger' type='button'>Danger</button>"
        );
    }

    public function testGroup()
    {
        $this->assertEquals(
            ButtonGroup::widget([
                'size' => 'lg',
                'vertical' => true,
            ]),
            "<div class='btn-group-vertical btn-group-lg' role='group'></div>"
        );
        $this->assertEquals(
            ButtonGroup::widget([
                'items' => [
                    new Button('Btn1'),
                    new Button('Btn2'),
                ],
            ]),
            "<div class='btn-group' role='group'><button class='btn' type='button'>Btn1</button><button class='btn' type='button'>Btn2</button></div>"
        );
    }
}
