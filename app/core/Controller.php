<<<<<<< HEAD
<?php

class Controller {
    public function view($view, $data = [])
    {
        require_once '../app/views/'.$view.'.php';
    }

    public function model($model)
    {
        require_once '../app/models/'.$model.'.php';
        return new $model;
    }
=======
<?php

class Controller {
    public function view($view, $data = [])
    {
        require_once '../app/views/'.$view.'.php';
    }

    public function model($model)
    {
        require_once '../app/models/'.$model.'.php';
        return new $model;
    }
>>>>>>> 41f2624d6277b3a9def1ad9b61259ca811f6a95c
}