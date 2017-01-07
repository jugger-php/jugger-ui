<?php

namespace jugger\ui;

abstract class Widget
{
    protected $params;

    public function __construct(array $params = [])
    {
        $this->params = $params;
        $this->init();
    }

    public function get(string $name, $default = null)
    {
        return $this->params[$name] ?? $default;
    }

    protected function init()
    {
        // pass
    }

    protected function runInternal(): string
    {
        try {
            ob_start();
            $output  = $this->run();
            $output .= ob_get_contents();
            return $output;
        }
        finally {
            ob_end_clean();
        }
    }

    public static function widget(array $params = []): string
    {
        $class = get_called_class();
        $widget = new $class($params);
        return $widget->runInternal();
    }

    public function run()
    {
        $this->render();
    }

    protected function render(string $view = 'index', array $params = [])
    {
        $path = $this->getViewsPath() ."/{$view}.php";
        if (file_exists($path)) {
            include $path;
            unset($params);
        }
        else {
            throw new \Exception("View '{$view}' not found");
        }
    }

    protected function getViewsPath(): string
    {
        $class = get_called_class();
        $class = new \ReflectionClass($class);
        return dirname($class->getFileName()).'/views';
    }
}
