<?php

/**
 * Created by PhpStorm.
 * User: Nicole
 * Date: 12-6-2016
 * Time: 22:59
 */
class Zoek extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index($page='zoek')
    {

        $geslacht = $this->input->post('geslacht');
        $minleeftijd = $this->input->post('minimaal');
        $maxleeftijd = $this->input->post('maximaal');
        $sumbit = $this->input->post('submit');
        $IE = $this->input->post('ie');
        $NS = $this->input->post('ns');
        $TF = $this->input->post('tf');
        $JP = $this->input->post('jp');

        
        if ( ! file_exists(APPPATH.'views/zoek/'.$page.'.php'))
        {
            // Whoops, we don't have a page for that!
            show_404();
        }
        $this->load->helper('url', 'form');

        $data['title'] = ucfirst($page);
        





        $ingelogd = $this->session->userdata('ingelogd');
        if($ingelogd == TRUE || isset($ingelogd))
        {
            $this->load->view('templates/inlogheader', $data);
            $this->load->view('zoek/' . $page, $data, $geslacht, $minleeftijd, $maxleeftijd, $sumbit, $IE, $NS, $TF, $JP);
            $this->load->view('templates/inlogfooter', $data);
        }
        else
        {
            $this->load->view('templates/header', $data);
            $this->load->view('zoek/' . $page, $data, $geslacht, $minleeftijd, $maxleeftijd, $sumbit, $IE, $NS, $TF, $JP);
            $this->load->view('templates/footer', $data);
        }

}
}