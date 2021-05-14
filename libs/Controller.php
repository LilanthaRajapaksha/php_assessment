<?php


class Controller
{
    /**
     * @var View
     */
    protected $view;
    /**
     * @var mixed
     */
    protected $model;

    /**
     * Controller constructor.
     */
    public function __construct()
    {
        $this->view = new View();
    }

    /**
     * @param $name
     * @return mixed
     */
    public function loadModel($name)
    {
        $path = 'models/' . $name . 'Model.php';
        if (file_exists($path)) {
            require $path;
            $modelName = $name . 'Model';
            return $this->model = new $modelName();
        }
    }

}