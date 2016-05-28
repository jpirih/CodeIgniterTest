<?php

/**
 * Created by PhpStorm.
 * User: Janko
 * Date: 27.5.2016
 * Time: 18:46
 */
class Users extends CI_Controller
{
    public function index($page = 'users')
    {
        if(!file_exists(APPPATH.'views/pages/'.$page.'.php'))
        {
            show_404();
        }
        else
        {
            //include model 
            $this->load->model('Model_users');
            
            // array podatkov za template
            $data = array(
                'title' =>'Users | Uporabniki ',
                'main_heading' => 'Pregled Uporabnikov',
                'users' => $this->Model_users->getUsers()
            );
            
            $this->parser->parse('templates/header', $data);
            $this->parser->parse('pages/users', $data);
            $this->parser->parse('templates/footer', $data);
        }

    }
    
    // vnosni obrazec za vnos novega uporabnika 
    public function addUserView ($page = 'add_user')
    {
        if(!file_exists(APPPATH.'views/pages/'.$page.'.php'))
        {
            show_404();
        }
        else
        {
            $this->load->helper('form');
            
            $data = array(
                'title' => 'Nov uporabnik',
                'main_heading' => 'Dodaj novega uporabnika'
            );
            
            $this->parser->parse('templates/header', $data);
            $this->parser->parse('pages/add_user', $data);
            $this->parser->parse('templates/footer', $data);
        }
    }
    
    // shrani podatke o uporabniku v bazo 
    public function addUser()
    {
        $this->load->model('Model_users');
        $this->load->helper('form');
        $data = array(
            'first_name' => $this->input->post('first_name'),
            'last_name' => $this->input->post('last_name'),
            'email' => $this->input->post('email')
        );

        $this->Model_users->insertUser($data);
        
        redirect(base_url('users'));
    }
    
    // obrazec za urejanje podatkov
    public function editUserView($userId)
    {
        $this->load->model('Model_users');
        $this->load->helper('form');
        
        if(!file_exists(APPPATH.'views/pages/edit_user.php'))
        {
            show_404();
        }
        else
        {
            $data = array(
                'title' => 'Edit User',
                'main_heading' => 'Uredi podatke o uporabniku',
                'user' => $this->Model_users->getSingleUser($userId)
            );

            $this->parser->parse('templates/header', $data);
            $this->parser->parse('pages/edit_user', $data);
            $this->parser->parse('templates/footer', $data);
        }
        
    }

    // posodobi podatke o uporabniku v bazi
    public function updateUser($userId)
    {
        $this->load->helper('form');
        $this->load->model('Model_users');
        
        $data = array(
            'first_name' => $this->input->post('first_name'),
            'last_name' => $this->input->post('last_name'),
            'email' => $this->input->post('email')
        );
        
        $this->Model_users->updateUser($data,$userId);
        redirect(base_url('users'));
    }

    // brisanje uporabnika iz baze
    public function deleteUser($id)
    {
        $this->load->model('Model_users');
        $this->Model_users->deleteUser($id);
        
        redirect(base_url('users'));
    }
    

}