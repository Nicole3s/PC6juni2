<?php


class Registreertest extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index($page='test')
    {
        $this->load->helper('form','url','security');
        $this->load->library('form_validation');
        // Laad de database:
        $this->load->model('page_model');

        $configuratie = array(
            array(
                'field' => 'vraag1',
                'label' => 'Vraag 1',
                'rules' => 'trim|required',
                'errors' => array(
                    'required' => 'U moet %s invullen.',
                ),
            ),
            array(
                'field' => 'vraag2',
                'label' => 'Vraag 2',
                'rules' => 'trim|required',
                'errors' => array(
                    'required' => 'U moet %s invullen.',
                ),
            ),
            array(
                'field' => 'vraag2',
                'label' => 'Vraag 2',
                'rules' => 'trim|required',
                'errors' => array(
                    'required' => 'U moet %s invullen.',
                ),
            ),
            array(
                'field' => 'vraag3',
                'label' => 'Vraag 3',
                'rules' => 'trim|required',
                'errors' => array(
                    'required' => 'U moet %s invullen.',
                ),
            ),
            array(
                'field' => 'vraag4',
                'label' => 'Vraag 4',
                'rules' => 'trim|required',
                'errors' => array(
                    'required' => 'U moet %s invullen.',
                ),
            ),
            array(
                'field' => 'vraag5',
                'label' => 'Vraag 5',
                'rules' => 'trim|required',
                'errors' => array(
                    'required' => 'U moet %s invullen.',
                ),
            ),
            array(
                'field' => 'vraag6',
                'label' => 'Vraag 6',
                'rules' => 'trim|required',
                'errors' => array(
                    'required' => 'U moet %s invullen.',
                ),
            ),
            array(
                'field' => 'vraag7',
                'label' => 'Vraag 7',
                'rules' => 'trim|required',
                'errors' => array(
                    'required' => 'U moet %s invullen.',
                ),
            ),
            array(
                'field' => 'vraag8',
                'label' => 'Vraag 8',
                'rules' => 'trim|required',
                'errors' => array(
                    'required' => 'U moet %s invullen.',
                ),
            ),
            array(
                'field' => 'vraag9',
                'label' => 'Vraag 9',
                'rules' => 'trim|required',
                'errors' => array(
                    'required' => 'U moet %s invullen.',
                ),
            ),
            array(
                'field' => 'vraag10',
                'label' => 'Vraag 10',
                'rules' => 'trim|required',
                'errors' => array(
                    'required' => 'U moet %s invullen.',
                ),
            ),
            array(
                'field' => 'vraag11',
                'label' => 'Vraag 11',
                'rules' => 'trim|required',
                'errors' => array(
                    'required' => 'U moet %s invullen.',
                ),
            ),
            array(
                'field' => 'vraag12',
                'label' => 'Vraag 12',
                'rules' => 'trim|required',
                'errors' => array(
                    'required' => 'U moet %s invullen.',
                ),
            ),
            array(
                'field' => 'vraag13',
                'label' => 'Vraag 13',
                'rules' => 'trim|required',
                'errors' => array(
                    'required' => 'U moet %s invullen.',
                ),
            ),
            array(
                'field' => 'vraag14',
                'label' => 'Vraag 14',
                'rules' => 'trim|required',
                'errors' => array(
                    'required' => 'U moet %s invullen.',
                ),
            ),
            array(
                'field' => 'vraag15',
                'label' => 'Vraag 15',
                'rules' => 'trim|required',
                'errors' => array(
                    'required' => 'U moet %s invullen.',
                ),
            ),
            array(
                'field' => 'vraag16',
                'label' => 'Vraag 16',
                'rules' => 'trim|required',
                'errors' => array(
                    'required' => 'U moet %s invullen.',
                ),
            ),array(
                'field' => 'vraag17',
                'label' => 'Vraag 17',
                'rules' => 'trim|required',
                'errors' => array(
                    'required' => 'U moet %s invullen.',
                ),
            ),
            array(
                'field' => 'vraag18',
                'label' => 'Vraag 18',
                'rules' => 'trim|required',
                'errors' => array(
                    'required' => 'U moet %s invullen.',
                ),
            ),
            array(
                'field' => 'vraag19',
                'label' => 'Vraag 19',
                'rules' => 'trim|required',
                'errors' => array(
                    'required' => 'U moet %s invullen.',
                ),
            ),
        );

        $this->form_validation->set_rules($configuratie);

        if ( ! file_exists(APPPATH.'views/registreertest/'.$page.'.php'))
        {
            // Whoops, we don't have a page for that!
            show_404();
        }
        else if($page=='test')
        {
            if ($this->form_validation->run() == FALSE)
            {
                $this->load->view('templates/header');
                $this->load->view('registreertest/'.$page);
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
            $this->load->view('registreertest/'.$page);
            $this->load->view('templates/footer');
        }
    }
}

