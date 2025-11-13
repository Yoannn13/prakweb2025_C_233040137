<?php

class Home extends Controller
{

    public function index()
    {
        $data['judul'] = 'Home';
        $data['nama'] =  "Yoan";
        $data['npm'] = "233040137";
        // head
        $this->view('templates/header', $data);

        $this->view('home/index', $data);

        // footer
        $this->view('templates/footer');
    }
}
