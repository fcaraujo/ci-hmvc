<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Cms extends CI_Controller
{

    public function index()
    {
        $this->load->view('index');
    }

}

/* End of file cms.php */
/* Location: ./application/modules/cms/controllers/cms.php */