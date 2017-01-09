<?php

namespace jugger\ui;

abstract class Widget
{
    public function render()
    {
        try {
            ob_start();
            $content  = $this->run();
            $content .= ob_get_contents();
            return $content;
        }
        finally {
            ob_end_clean();
        }
    }

    abstract public function run();

    public static function widget(...$params)
    {
        $class = get_called_class();
        $class = new $class(...$params);
        return $class->render();
    }

    // public function renderView(string $viewName)
    // {
    //     $path = $this->getViewsPath() ."/{$viewName}.php";
    //     if (file_exists($path)) {
    //         return new View($path);
    //     }
    //     else {
    //         throw new \Exception("Not found view '{$viewName}'");
    //     }
    // }
}
