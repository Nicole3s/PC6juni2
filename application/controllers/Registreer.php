<?php


class Registreer extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index($page='registreer')
    {
        if ( ! file_exists(APPPATH.'views/registreer/'.$page.'.php'))
        {
            // Whoops, we don't have a page for that!
            show_404();
        }
        {

            $this->load->helper('url');
            $this->load->model('page_model');
            $data['title']=ucfirst($page);
           // $data['dataSet']= $this->page_model->getTestData();

            //$dataSet = $this->page_model->getTestData();
            $this->load->view('templates/header');
            $this->load->view('registreer/'.$page);
            $this->load->view('templates/footer');



        }
    }
}

