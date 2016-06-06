<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page_model extends CI_Model{
    public function getData(){

        return $this->db->get('Persoon')->result();

    }

    public function getMoreData(){

        return $this->db->get('Merkvoorkeur')->result();
    }

}