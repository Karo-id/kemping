<?php

class Home extends Controller
{
    public function index()
    {
        $this->view("partials/head");
        $this->view("Home");
        $this->view("partials/footer");
    }
}
