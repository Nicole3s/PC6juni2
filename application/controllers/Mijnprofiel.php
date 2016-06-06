<?php


class Mijnprofiel extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index($page='mijnprofiel')
    {
        if ( ! file_exists(APPPATH.'views/mijnprofiel/'.$page.'.php'))
        {
            // Whoops, we don't have a page for that!
            show_404();
        }
        {

            $this->load->helper('url');
            $this->load->model('page_model');
            $data['title']=ucfirst($page);
           // $data['dataSet']= $this->page_model->getTestData();

          //  $dataSet = $this->page_model->getTestData();
            $this->load->view('templates/header');
            $this->load->view('mijnprofiel/'.$page);
            $this->load->view('templates/footer');



        }
    }
}

