<?php

class Controller
{
    // ini controller untuk mengelola view
    public function view($view, $data = [])
    {
        require_once "../app/views/" . $view . ".php";
    }


    // ini controller untuk mengelola model
    public function model($model)
    {
        require_once "../app/models/" . $model . ".php";
        return new $model;
    }
}
