<?php
class Users extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('users_model');
                $this->load->helper('url_helper');
        }
        public function index(){
                $this->load->view("users/index");
        }
        public function get_all()
        {
                $keyword = $this->input->post('keyword');
                $data['users'] = $this->users_model->get_users($keyword);
	        $this->load->view('users/showusers', $data);
        }

        public function get_one()
        {       
                $id = $this->input->post('user');
                $data['user'] = $this->users_model->get_user($id);
                $this->load->view('users/showuser', $data);
        }
}