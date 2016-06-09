<?php


class Registreer extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
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
                'rules' => 'trim|xss_clean|required|min_length[3]|max_length[12]|is_unique[Persoon.nickname]',
                'errors' => array(
                    'required' => 'U moet een %s invullen.',
                    'min_length' => 'Uw %s moet minstens 3 karakters zijn.',
                    'max_length' => 'Uw %s mag maximaal 12 karakters bevatten.',
                    'is_unique' => 'Deze %s bestaat al.'
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
                'rules' => 'trim|min_length[2]|max_length[12]',
                'errors' => array(
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


        echo var_dump($this->db);


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
                $this->load->view('templates/header');
                $this->load->view('registreer/'.$page);
                $this->load->view('templates/footer');
            }
            else
            {
                $temp = $this->input->post('vraag1');
                //initialisatie $tI
                $tI = 50;
                if ($temp=='-1')
                    $tI-=10;
                else if ($temp=='-2')
                    $tI+=10;
                $temp = $this->input->post('vraag2');
                if ($temp=='-1')
                    $tI-=10;
                else if ($temp=='-2')
                    $tI+=10;
                $temp = $this->input->post('vraag3');
                if ($temp=='-1')
                    $tI-=10;
                else if ($temp=='-2')
                    $tI+=10;
                $temp = $this->input->post('vraag4');
                if ($temp=='-1')
                    $tI-=10;
                else if ($temp=='-2')
                    $tI+=10;
                $temp = $this->input->post('vraag5');
                if ($temp=='-1')
                    $tI-=10;
                else if ($temp=='-2')
                    $tI+=10;
                //initialisatie $tN
                $tN = 50;
                $temp = $this->input->post('vraag6');
                if ($temp=='-1')
                    $tN+=12.5;
                else if ($temp=='-2')
                    $tN-=12.5;
                $temp = $this->input->post('vraag7');
                if ($temp=='-1')
                    $tN+=12.5;
                else if ($temp=='-2')
                    $tN-=12.5;
                $temp = $this->input->post('vraag8');
                if ($temp=='-1')
                    $tN+=12.5;
                else if ($temp=='-2')
                    $tN-=12.5;
                $temp = $this->input->post('vraag9');
                if ($temp=='-1')
                    $tN+=12.5;
                else if ($temp=='-2')
                    $tN-=12.5;
                //initialisatie $tT
                $tT = 50;
                $temp = $this->input->post('vraag10');
                if ($temp=='-1')
                    $tT+=12.5;
                else if ($temp=='-2')
                    $tT-=12.5;
                $temp = $this->input->post('vraag11');
                if ($temp=='-1')
                    $tT+=12.5;
                else if ($temp=='-2')
                    $tT-=12.5;
                $temp = $this->input->post('vraag12');
                if ($temp=='-1')
                    $tT+=12.5;
                else if ($temp=='-2')
                    $tT-=12.5;
                $temp = $this->input->post('vraag13');
                if ($temp=='-1')
                    $tT+=12.5;
                else if ($temp=='-2')
                    $tT-=12.5;
                //initialisatie $tJ
                $tJ = 50;
                $temp = $this->input->post('vraag14');
                if ($temp=='-1')
                    $tJ+=8.3333;
                else if ($temp=='-2')
                    $tJ-=8.3333;
                $temp = $this->input->post('vraag15');
                if ($temp=='-1')
                    $tJ+=8.3333;
                else if ($temp=='-2')
                    $tJ-=8.3333;
                $temp = $this->input->post('vraag16');
                if ($temp=='-1')
                    $tJ+=8.3333;
                else if ($temp=='-2')
                    $tJ-=8.3333;
                $temp = $this->input->post('vraag17');
                if ($temp=='-1')
                    $tJ+=8.3333;
                else if ($temp=='-2')
                    $tJ-=8.3333;
                $temp = $this->input->post('vraag18');
                if ($temp=='-1')
                    $tJ+=8.3333;
                else if ($temp=='-2')
                    $tJ-=8.3333;
                $temp = $this->input->post('vraag19');
                if ($temp=='-1')
                    $tJ+=8.3333;
                else if ($temp=='-2')
                    $tJ-=8.3333;
                $vI=abs($tI-100);
                $vN=abs($tN-100);
                $vT=abs($tT-100);
                $vJ=abs($tJ-100);
                $tv=' ';
                if ($this->input->post('tussenvoegsel')!=NULL)
                {
                    $tv=' '.$this->input->post('tussenvoegsel').' ';
                }
                $persoondata = array(
                    'nickname' => $this->input->post('nickname'),
                    'naam' => $this->input->post('voornaam').$tv.$this->input->post('achternaam'),
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

                $this->db->insert('Persoon', $persoondata);
                $id = $this->db
                    ->select('id')
                    ->from('Persoon')
                    ->where('nickname', $this->input->post('nickname'))
                    ->get()->row_array()['id'];
                $merken = $this->input->post('brands');
                foreach ($merken as $merk)
                {
                    $merkdata = array(
                        'id' => $id,
                        'merk' => $merk
                    );
                    $this->db->insert('Merkvoorkeur',$merkdata);
                }


// Produces: INSERT INTO mytable (title, name, date) VALUES ('My title', 'My name', 'My date')
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

