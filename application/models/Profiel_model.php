<?php
class Profiel_model extends CI_Model{
    function login($email, $wachtwoord)
    {
        $this -> db -> select('id, email, wachtwoord');
        $this -> db -> from('Persoon');
        $this -> db -> where('email', $email);
        $this -> db -> where('wachtwoord', MD5($wachtwoord));
        $this -> db -> limit(1);

        $query = $this -> db -> get();

        if($query -> num_rows() == 1)
        {
            return $query->result();
        }
        else
        {
            return false;
        }
    }
//    public function getData(){
//
//        return $this->db->get('Persoon')->result();
//    }

}