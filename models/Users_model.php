<?php
class Users_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }

        public function get_users($keyword)
        {       
                $this->db->like('first_name', $keyword, 'after');
                $query = $this->db->get('users');
                return $query->result_array();
        }

        public function get_user($id)
        {
                $query = $this->db->get_where('users', array('id' => $id));
                return $query->row_array();
        }
}