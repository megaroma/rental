<?php
class Cars_m extends CI_Model {

        public function __construct()
        {
                parent::__construct();
                $this->load->database();
        }

        public function all_available() {

        	$sql = "select * from cars where status = 'available'";
        	$query = $this->db->query($sql);
        	$result = $query->result();
        	return $result;
        }

}