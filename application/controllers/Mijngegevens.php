<?php


class Mijngegevens extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->ingelogd();
    }

    function leeftijd($gbdatum)
    {
        $gbdatum=explode("-",$gbdatum);
        $tempm = date("m");
        $tempd = date("j");
        $tempj = date("Y");
        $leeftijd = $tempj - $gbdatum[0];
        if($tempm<$gbdatum[1] || ($tempm==$gbdatum[1] && $tempd<$gbdatum[2]))
            $leeftijd--;
        return ($leeftijd>=18);
    }

    public function index($page='mijngegevens')
    {
        $this->load->helper('form', 'url', 'security');
        $this->load->library('form_validation');
        // Laad de database:
        $this->load->model('page_model');

        $configuratie = array(
            array(
                'field' => 'nickname',
                'label' => 'Nickname',
                'rules' => 'trim|xss_clean|required|min_length[3]|max_length[12]',
                'errors' => array(
                    'required' => 'U moet een %s invullen.',
                    'min_length' => 'Uw %s moet minstens 3 karakters zijn.',
                    'max_length' => 'Uw %s mag maximaal 12 karakters bevatten.',
                ),
            ),
            array(
                'field' => 'naam',
                'label' => 'Naam',
                'rules' => 'trim|required|min_length[2]|max_length[44]',
                'errors' => array(
                    'required' => 'U moet een %s invullen.',
                    'min_length' => 'Uw %s moet minstens 2 karakters zijn.',
                    'max_length' => 'Uw %s mag maximaal 44 karakters bevatten.',
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
                'rules' => 'trim|required|valid_email',
                'errors' => array(
                    'required' => 'U moet een %s invullen.',
                    'valid_email' => 'Vul een geldig %s-adres in.',
                ),
            ),
            array(
                'field' => 'geboortedatum',
                'label' => 'Geboortedatum (JJJJ-MM-DD)',
                'rules' => 'trim|required|is_unique[Persoon.email]|callback_leeftijd',
                'errors' => array(
                    'required' => 'U moet een %s invullen.',
                    'is_unique' => 'De %s moet uniek zijn.',
                    'leeftijd' => 'U moet ouder dan 18 zijn.'
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

    if ($page=='verwijder')
    {
        $id = $this->db
            ->select('id')
            ->from('Persoon')
            ->where('nickname', $_SESSION['nickname'])
            ->get()->row_array()['id'];
        $verwijder = true;
        if ($verwijder) {
            $this->db->where('id', $id);
            $this->db->delete('Persoon');
            $this->db->where('id', $id);
            $this->db->delete('Merkvoorkeur');
        }
        redirect('mijnprofiel/inlog/anoniem');
    }
    else if (!file_exists(APPPATH . 'views/mijngegevens/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        } else {
            if ($page == 'mijngegevens') {
                if ($this->form_validation->run() == false) {
                    $this->load->view('templates/inlogheader');
                    $this->load->view('mijngegevens/' . $page);
                    $this->load->view('templates/inlogfooter');
                } else {
                    $id = $this->db
                        ->select('id')
                        ->from('Persoon')
                        ->where('nickname', $_SESSION['nickname'])
                        ->get()->row_array()['id'];
                    $query = $this->db->select('tI,tN, tT, tJ')->from('Persoon')
                        ->group_start()
                        ->where('id', $id)
                        ->group_end()
                        ->get();
                    foreach ($query->result() as $row) {
                        $tI = $row->tI;
                        $tN = $row->tN;
                        $tT = $row->tT;
                        $tJ = $row->tJ;
                    }
                        $vI = abs(100 - $tI);
                        $vJ = abs(100 - $tJ);
                        $vN = abs(100 - $tN);
                        $vT = abs(100 - $tT);

                        $persoondata = array(
                            'nickname' => $this->input->post('nickname'),
                            'naam' => $this->input->post('naam'),
                            'wachtwoord' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                            'email' => $this->input->post('email'),
                            'geboortedatum' => $this->input->post('geboortedatum'),
                            'geslacht' => $this->input->post('geslacht'),
                            'foto' => $this->input->post('foto'),
                            'beschrijving' => $this->input->post('beschrijving'),
                            'geslachtsvoorkeur' => $this->input->post('geslachtsvoorkeur'),
                            'leeftijdsvoorkeurmin' => $this->input->post('minleeftijd'),
                            'leeftijdsvoorkeurmax' => $this->input->post('maxleeftijd'),
                            'tI' => floor($tI),
                            'tN' => floor($tN),
                            'tT' => floor($tT),
                            'tJ' => floor($tJ),
                            'vI' => floor($vI),
                            'vN' => floor($vN),
                            'vT' => floor($vT),
                            'vJ' => floor($vJ)
                        );
                    $verwijder = true;
                    if ($verwijder) {
                        $this->db->where('id', $id);
                        $this->db->delete('Persoon');
                        $this->db->where('id', $id);
                        $this->db->delete('Merkvoorkeur');
                    }

                        $this->db->insert('Persoon', $persoondata);
                        $id = $this->db
                            ->select('id')
                            ->from('Persoon')
                            ->where('nickname', $this->input->post('nickname'))
                            ->get()->row_array()['id'];
                        $merken = $this->input->post('brands');
                        foreach ($merken as $merk) {
                            $merkdata = array(
                                'id' => $id,
                                'merk' => $merk
                            );
                            $this->db->insert('Merkvoorkeur', $merkdata);
                        }


                    $this->session->sess_destroy();
                        redirect('mijnprofiel/inlog/anoniem');
                    }

            }
            else
            {
                $this->load->view('templates/inlogheader');
                $this->load->view('mijngegevens/' . $page);
                $this->load->view('templates/inlogfooter');
            }
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

