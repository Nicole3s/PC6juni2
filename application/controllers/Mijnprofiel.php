<?php


class Mijnprofiel extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index($page='mijnprofiel')
    {
        $this->load->helper('form','url','security');
        $this->load->library('form_validation');
        // Laad de database:
        $this->load->model('page_model');



           // $data['dataSet']= $this->page_model->getTestData();

        $configuratie = array(
            array(
                'field' => 'nickname',
                'label' => 'Nickname',
                'rules' => 'trim|required|matches[Persoon.nickname]',
                'errors' => array(
                    'required' => 'U moet een %s invullen.',
                    'matches' => 'Uw %s is niet correct.'
                ),
            ),
            array(
                'field' => 'password',
                'label' => 'Wachtwoord',
                'rules' => 'trim|required|matches[Persoon.password]',
                'errors' => array(
                    'required' => 'U moet een %s invullen.',
                    'matches' => 'Uw %s is niet correct.'
                ),
            ),
        );

        $this->form_validation->set_rules($configuratie);

        if ( ! file_exists(APPPATH.'views/mijnprofiel/'.$page.'.php'))
        {
            // Whoops, we don't have a page for that!
            show_404();
        }
        else if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('templates/header');
            $this->load->view('mijnprofiel/'.$page);
            $this->load->view('templates/footer');
        }
        else
        {
            $this->load->view('templates/header');
            //MOETNOGVERANDERDWORDEN
            $this->load->view('registreer/registreergelukt');
            $this->load->view('templates/footer');
        }
    }

}

