<?php


class Pages extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index($page='home')
    {
        if (!file_exists(APPPATH . 'views/pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }
        {

            $this->load->helper('url');
            $this->load->model('page_model');
            $data['title'] = ucfirst($page);
            // $data['dataSet']= $this->page_model->getData();
            // $data['dataSetMore']= $this->page_model->getMoreData();
            // $dataSet = $this->page_model->getData();
            //  $dataSetMore = $this->page_model->getMoreData();
            $this->load->view('templates/header', $data);
            $this->load->view('pages/' . $page, $data);
            $this->load->view('templates/footer', $data);

        }
    }

    
}