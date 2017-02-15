<?php

class About extends Controller {

    public function index($name = '') {
        $user = $this->model('User');
        $user->name = $name;

        $this->view('about/index',['name' => $user->name]);
    }



}