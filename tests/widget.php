<?php

use PHPUnit\Framework\TestCase;
use jugger\ui\Widget;

class RetWidget extends Widget
{
    public $param1 = 'default';
    public $param2;
    public $param3;

    public function run()
    {
        $params = [
            "param1" => $this->param1,
            "param2" => $this->param2,
            "param3" => $this->param3,
        ];
        return json_encode($params);
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
            '{"param1":"default","param2":null,"param3":null}'
        );
        $this->assertEquals(
            RetWidget::widget([
                'param1' => 'value1'
            ]),
            '{"param1":"value1","param2":null,"param3":null}'
        );
        $this->assertEquals(
            RetWidget::widget([
                'param2' => 'value2',
                'param3' => 'value3',
            ]),
            '{"param1":"default","param2":"value2","param3":"value3"}'
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
