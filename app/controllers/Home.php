<?php

class Home extends Controller{
    public function index() {
        $data['judul'] = 'Home';
        $this->view('template/headers',$data);
        $this->view('home/index');
        $this->view('template/footers');
    }
}