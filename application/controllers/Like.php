<?php


class Like extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->ingelogd();
    }

    public function index($page='like',$id2='-1')
    {
        if ($page=='connect')
        {
            $id = $this->db
                ->select('id')
                ->from('Persoon')
                ->where('nickname', $_SESSION['nickname'])
                ->get()->row_array()['id'];
            $like = array(
                'id' => $id,
                'gegeven_aan' => $id2
            );

            $this->db->insert('Likes', $like);
            redirect('like/geliked');
        }
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

