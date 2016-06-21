<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth {
	private $ver = "1.00";
	private $CI;
	private $messages = array(
		"Ok",
		"Authentication failed. You entered an incorrect email or password",
		"Your account is inactive. Contact your administrator to activate it."
		);
	private $user;
	private $error_n = 0;


        public function __construct() {
        	$this->CI = get_instance();
        	$this->CI->load->library('session');
        	$this->CI->load->database();
                if(isset($this->CI->session->user_logged) && ($this->CI->session->user_logged))
                {
                        $session_user = $this->CI->session->user;
                        $sql = "select * from users where email = ? ";
                        $query = $this->CI->db->query($sql,array($session_user->email));
                        $result = $query->result();
                        $user = $result[0];

                        $this->user = $user;
                        $this->CI->session->user = $user;
                } else {
                        $this->CI->session->user_logged = false;
                        $this->CI->session->user = array();
                }

        }

        public function get_error() {
        	return $this->messages[$this->error_n];
        }

        public function ver() {
        	return $this->ver;
        }

        public function get_user() {
                return $this->user;
        }

        public function login($email,$password,$remember) {
        	$res = $this->_login($email,$password,$remember);
        	if(!$res) {
        		$this->CI->session->user_logged = false;
        		$this->CI->session->user = array();
        	}
        	return $res;
        }


        public function check() {
        	return isset($this->CI->session->user_logged) ? $this->CI->session->user_logged  : false;
        }

        public function logout() {
        	$this->CI->session->user_logged = false;
        	$this->CI->session->user = array();
        }

        public function has_role($role_name) {
        	if(!$this->CI->session->user_logged) {
        		return false;
        	}
        	$sql = "select * from roles where name = ?";
        	$query = $this->CI->db->query($sql,array($role_name));
        	$result = $query->result();
        	if(count($result) > 0) {
        		$role = $result[0];
        		return ($this->CI->session->user->role_id == $role->id);
        	} else {
        		return false;
        	}
        }


        public function register($data) {
        	$this->CI->db->insert('users', $data);
        }

        //-----private-----

        private function _login($email, $password, $remember) {
        	$sql = "select * from users where email = ? ";
        	$query = $this->CI->db->query($sql,array($email));
        	$result = $query->result();
        	if(count($result) > 0) {
        		$user = $result[0];
        		if(md5($password) == $user->password) {
        			if($user->active == 1) {
        				$this->error_n = 0;
        				$this->CI->session->user_logged = true;
        				$this->CI->session->user = $user;
        				return true;

        			}  else {
        				$this->error_n = 2;
        				return false;        				
        			}

        		} else {
        			$this->error_n = 1;
        			return false;
        		}

        	} else {
        		$this->error_n = 1;
        		return false;
        	}
        }
}