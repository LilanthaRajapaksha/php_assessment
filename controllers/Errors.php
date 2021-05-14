<?php

class Errors extends Controller
{

    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $this->view->msg = 'This page don not exist';
        $this->view->render('error/index');
    }

}