<?php


class View
{

    /**
     * @param $name
     * @param bool $noIncludes
     */
    public function render($name, $noIncludes = false)
    {
        if ($noIncludes == true) {
            require 'views/' . $name . '.php';
        } else {
            require 'views/header.php';
            require 'views/' . $name . '.php';
            require 'views/footer.php';
        }
    }
}