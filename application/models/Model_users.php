<?php

/**
 * Created by PhpStorm.
 * User: Janko
 * Date: 27.5.2016
 * Time: 18:55
 */
class Model_users extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    // vsi shranjni uporabiki
    public function getUsers()
    {
        $query = $this->db->query("SELECT * FROM users");
        if($query->num_rows() > 0)
        {
            return $query->result();
        }
        else
        {
            return null;
        }
    }

    // podatki o posameznem uporabniku
    public function getSingleUser($userId)
    {
        $table = 'users';
        $userData = $this->db->get_where($table, array('id' => $userId));
        return $userData->result();

    }
    
    // posodobi podatke o uporabniku 
    public function updateUser($data, $userId)
    {
        $table = 'users';
        $this->db->set($data);
        $this->db->where('id', $userId);
        return $this->db->update($table, $data);
    }
    
    // dodajanje v bazo 
    public function insertUser($data)
    {
        $table = 'users';
        return $this->db->insert($table, $data);
    }
    
    // brisanje uporabnikov
    public function deleteUser($id)
    {
        $table = 'users';
        return $this->db->delete($table, 'id ='.$id);
    }

}