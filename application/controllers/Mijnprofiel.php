<?php


class Mijnprofiel extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    function logout()
    {
        $this->session->sess_destroy();
        redirect();
    }

    function wachtwoord($ww)
    {
        $hash = $this->db
            ->select('wachtwoord')
            ->from('Persoon')
            ->where('nickname', $this->input->post('nickname'))
            ->get()->row_array()['wachtwoord'];
        return (password_verify($ww, $hash));
    }

    public function index($page='mijnprofiel', $fout='ingelogd')
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
                'rules' => 'trim|required',
                'errors' => array(
                    'required' => 'U moet een %s invullen.',
                ),
            ),
            array(
                'field' => 'password',
                'label' => 'Wachtwoord',
                'rules' => 'trim|required|callback_wachtwoord',
                'errors' => array(
                    'wachtwoord' => 'Verkeerd wachtwoord en/of nickname.',
                    'required' => 'U moet een %s invullen.',
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
            if ($fout=='anoniem')
            {
                echo '<script language="javascript">';
                echo 'alert("U dient ingelogd te zijn om deze pagina te bezoeken")';
                echo '</script>';
            }
            $this->load->view('templates/header');
            $this->load->view('mijnprofiel/'.$page);
            $this->load->view('templates/footer');
        }
        else
        {
            $data = array(
                'nickname' => $this->input->post('nickname'),
                'ingelogd' => TRUE
            );

            $this->session->set_userdata($data);

            redirect();
        }
    }

}

