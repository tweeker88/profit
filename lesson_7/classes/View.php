<?php
/**
 * Created by PhpStorm.
 * User: Shani
 * Date: 12.03.2018
 * Time: 21:27
 */

class View
{
    protected $data = [];

    public function assign($name, $value)
    {
        $this->data[$name] = $value;
    }

    public function display($template)
    {
        echo $this->render($template);
    }

    public function render($template)
    {
        ob_start();

        foreach ($this->data as $key => $value){
            $$key = $value;
          }

        include __DIR__ . '/../templates/' . $template . '.php';

        $html = ob_get_contents();

        ob_end_clean();
        return $html;
    }
}