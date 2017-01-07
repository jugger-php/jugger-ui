<?php

namespace jugger\ui;

abstract class Widget
{
    public function __construct(array $params = [])
    {
        $this->init();
        $this->initParams($params);
    }

    protected function init()
    {
        // pass
    }

    protected function initParams(array $params)
    {
        foreach ($params as $name => $value) {
            if (property_exists($this, $name)) {
                $this->$name = $value;
            }
        }
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

    abstract public function run();

    protected function render(string $view, array $params = [])
    {
        $path = $this->getViewsPath() ."/{$view}.php";
        if (file_exists($path)) {
            include $path;
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
