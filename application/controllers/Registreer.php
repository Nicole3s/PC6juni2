<?php


class Registreer extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }


    public function index($page='registreer')
    {
        $this->load->helper('form','url','security');
        $this->load->library('form_validation');
        // Laad de database:
        $this->load->model('page_model');

        $configuratie = array(
            array(
                'field' => 'nickname',
                'label' => 'Nickname',
                'rules' => 'trim|required|min_length[3]|max_length[12]|is_unique[Persoon.nickname]',
                'errors' => array(
                    'required' => 'U moet een %s invullen.',
                    'min_length' => 'Uw %s moet minstens 3 karakters zijn.',
                    'max_length' => 'Uw %s mag maximaal 12 karakters bevatten.',
                    'is_unique' => 'Dit %s bestaat al.'
                ),
            ),
            array(
                'field' => 'voornaam',
                'label' => 'Voornaam',
                'rules' => 'trim|required|min_length[2]|max_length[16]',
                'errors' => array(
                    'required' => 'U moet een %s invullen.',
                    'min_length' => 'Uw %s moet minstens 2 karakters zijn.',
                    'max_length' => 'Uw %s mag maximaal 16 karakters bevatten.',
                ),
            ),
            array(
                'field' => 'tussenvoegsel',
                'label' => 'Tussenvoegsel',
                'rules' => 'trim|required|min_length[2]|max_length[12]',
                'errors' => array(
                    'required' => 'U moet een %s invullen.',
                    'min_length' => 'Uw %s moet minstens 2 karakters zijn.',
                    'max_length' => 'Uw %s mag maximaal 12 karakters bevatten.',
                ),
            ),
            array(
                'field' => 'achternaam',
                'label' => 'Achternaam',
                'rules' => 'trim|required|min_length[2]|max_length[16]',
                'errors' => array(
                    'required' => 'U moet een %s invullen.',
                    'min_length' => 'Uw %s moet minstens 2 karakters zijn.',
                    'max_length' => 'Uw %s mag maximaal 16 karakters bevatten.',
                ),
            ),
            array(
                'field' => 'password',
                'label' => 'Wachtwoord',
                'rules' => 'trim|min_length[3]|max_length[16]|required',
                'errors' => array(
                    'min_length' => 'Uw %s moet minstens 3 karakters zijn.',
                    'max_length' => 'Uw %s mag maximaal 16 karakters bevatten.',
                    'required' => 'U moet een %s invullen.',
                ),
            ),
            array(
                'field' => 'passconf',
                'label' => 'Wachtwoord Bevestiging',
                'rules' => 'trim|required|matches[password]',
                'errors' => array(
                    'required' => 'U moet een %s invullen.',
                    'matches' => 'De %s moet matchen.',
                ),
            ),
            array(
                'field' => 'email',
                'label' => 'Email',
                'rules' => 'trim|required|valid_email|is_unique[Persoon.email]',
                'errors' => array(
                    'required' => 'U moet een %s invullen.',
                    'valid_email' => 'Vul een geldig %s-adres in.',
                    'is_unique' => 'De %s moet uniek zijn.'
                ),
            ),
            array(
                'field' => 'geboortedatum',
                'label' => 'Geboortedatum (JJJJ-MM-DD)',
                'rules' => 'trim|required|is_unique[Persoon.email]',
                'errors' => array(
                    'required' => 'U moet een %s invullen.',
                    'is_unique' => 'De %s moet uniek zijn.',
                ),
            ),
            array(
                'field' => 'beschrijving',
                'label' => 'Beschrijving',
                'rules' => 'xss_clean|trim|required',
                'errors' => array(
                    'required' => 'U moet een %s invullen.',
                ),
            ),
            array(
                'field' => 'minleeftijd',
                'label' => 'Minimum leeftijd',
                'rules' => 'trim|required',
                'errors' => array(
                    'required' => 'U moet een %s invullen.',
                ),
            ),
            array(
                'field' => 'maxleeftijd',
                'label' => 'Maximum leeftijd',
                'rules' => 'trim|required',
                'errors' => array(
                    'required' => 'U moet een %s invullen.',
                ),
            ),
        );

        $this->form_validation->set_rules($configuratie);

        if ( ! file_exists(APPPATH.'views/registreer/'.$page.'.php'))
        {
            // Whoops, we don't have a page for that!
            show_404();
        }
        else if($page=='registreer')
        {
            if ($this->form_validation->run() == FALSE)
            {
                $this->load->view('templates/regheader');
                $this->load->view('registreer/'.$page);
                $this->load->view('templates/footer');
            }
            else
            {
                $this->load->view('templates/header');
                $this->load->view('registreer/registreergelukt');
                $this->load->view('templates/footer');
            }
        }
        else
        {
            $this->load->view('templates/header');
            $this->load->view('registreer/'.$page);
            $this->load->view('templates/footer');
        }
    }
}

