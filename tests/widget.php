<?php

use PHPUnit\Framework\TestCase;
use jugger\ui\Widget;

class RetWidget extends Widget
{
    public function run()
    {
        return json_encode($this->params);
    }
}

class ViewWidget extends Widget
{
    public function run()
    {
        echo $this->getViewsPath();
    }
}

class WidgetTest extends TestCase
{
    public function testRetWidget()
    {
        $this->assertEquals(
            RetWidget::widget(),
            '[]'
        );
        $this->assertEquals(
            RetWidget::widget([
                'param1' => 'value1'
            ]),
            '{"param1":"value1"}'
        );
        $this->assertEquals(
            RetWidget::widget([
                'param2' => 'value2',
                'param3' => 'value3',
            ]),
            '{"param2":"value2","param3":"value3"}'
        );
        $this->assertEquals(
            RetWidget::widget([
                'param1' => 'value1',
                'param2' => 'value2',
                'param3' => 'value3',
            ]),
            '{"param1":"value1","param2":"value2","param3":"value3"}'
        );
    }

    public function testViewWidget()
    {
        $this->assertEquals(
            ViewWidget::widget(),
            __DIR__.'/views'
        );
    }
}
