<?php

class Campaigns extends Controller
{

    function __construct()
    {
        parent::__construct();
        $logged = Session::get('loggedIn');
        if ($logged == false) {
            Session::destroy();
            header('location: ' . URL . 'index');
            exit;
        }
        $this->loadModel('campaign');
    }

    function index()
    {
        $data = $this->model->getData();
        $this->view->campaigns = $data;
        $this->view->render('campaigns/index');
    }

    function logout()
    {
        Session::destroy();
        header('location: ../index');
        exit;
    }


}