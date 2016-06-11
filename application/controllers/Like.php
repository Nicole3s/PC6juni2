<?php


class Like extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->ingelogd();
    }

    public function index($page='like')
    {
        //VOOOR TEST HAAL DIT WEG!!!!!!!!!!!!!!//VOOOR TEST HAAL DIT WEG!!!!!!!!!!!!!!//VOOOR TEST HAAL DIT WEG!!!!!!!!!!!!!!
        //VOOOR TEST HAAL DIT WEG!!!!!!!!!!!!!!
        //VOOOR TEST HAAL DIT WEG!!!!!!!!!!!!!!
        //VOOOR TEST HAAL DIT WEG!!!!!!!!!!!!!!
        $page='like';
        //VOOOR TEST HAAL DIT WEG!!!!!!!!!!!!!!
        //VOOOR TEST HAAL DIT WEG!!!!!!!!!!!!!!
        if ( ! file_exists(APPPATH.'views/like/'.$page.'.php'))
        {
            // Whoops, we don't have a page for that!
            show_404();
        }
        else
        {
            $this->load->view('templates/inlogheader');
            $this->load->view('like/'.$page);
            $this->load->view('templates/inlogfooter');
        }
    }

    function ingelogd()
    {
        $ingelogd = $this->session->userdata('ingelogd');

        if($ingelogd != TRUE || !isset($ingelogd))
        {
            redirect('mijnprofiel/inlog/anoniem');
        }
    }
}

