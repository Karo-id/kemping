<?php

class Dashboard extends Controller
{
    public function index()
    {
        $data["title"] = "Dashboard";

        $url = $_GET["url"];
        $url = explode('/', $url);
        $edit = $url[1];

        $this->view("admin/partials/head", $data);
        $this->view("admin/partials/sidebar");
        if ($edit == "edit") {
            $this->view("admin/home/Edit");
        } else {
            $this->view("admin/home/Home");
        }
        $this->view("admin/partials/footer");
        $this->view("admin/partials/foot");
    }
}
