<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Remedios extends MX_Controller
{

    public function index()
    {
        $this->load->view('index');
    }

    function ver($remedio_id = 0)
    {
        $data['remedio'] = 'Teste';
        $this->load->view('ver', $data);
    }

}

/* End of file remedios.php */
/* Location: ./application/modules/remedios/controllers/remedios.php */