<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_controller extends CI_Controller
{

    public function index()
    {
        $this->load->database();
        $this->load->model('User_model');

        $data['users'] = $this->User_model->get_all_users();

        $this->load->view('user_view', $data);
    }
}
