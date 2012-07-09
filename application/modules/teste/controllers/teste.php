<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Teste extends MX_Controller
{

    function index()
    {
        $this->load->view('index_view');
    }

    function metodo()
    {
        $this->load->view('metodo_view');
    }
}

/* End of file teste.php */
/* Location: ./modules/teste/controllers/teste.php */