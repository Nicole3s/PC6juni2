<?php


class Inloggelukt extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->ingelogd();
    }

    public function index($page='inloggelukt')
    {

        if ( ! file_exists(APPPATH.'views/inloggelukt/'.$page.'.php'))
        {
            // Whoops, we don't have a page for that!
            show_404();
        }
        else
        {
            $this->load->view('templates/inlogheader');
            $this->load->view('inloggelukt/'.$page);
            $this->load->view('templates/inlogfooter');
        }
    }

    function ingelogd()
    {
        $ingelogd = $this->session->userdata('ingelogd');

        if($ingelogd != TRUE || !isset($ingelogd))
        {
            $msg = urlencode('Your message here');
            header('Location: inlog.php?msg=$msg');
            //redirect('mijnprofiel/inlog');
            //echo 'U moet eerst inloggen zijn om deze pagina te bekijken.';
            //die();
        }
    }
}

