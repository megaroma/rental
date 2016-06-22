<?php
class Cars_m extends CI_Model {

        public function __construct()
        {
                parent::__construct();
                $this->load->database();
                $this->load->library('auth');
        }

        public function all_available() {

        	$sql = "select * from cars where status = 'available'";
        	$query = $this->db->query($sql);
        	$result = $query->result();
        	return $result;
        }

        public function get_car($id) {
                $sql = "select * from cars where id = ? ";
                $query = $this->db->query($sql,array($id));
                $result = $query->result();
                return $result[0];                
        }

        public function save_order($car_id,$fd,$td,$comment) {
                $fd = date("Y-m-d",strtotime($from));   
                $td = date("Y-m-d",strtotime($till));   
                $user = $this->auth->get_user();

                $data = array(
                        'user_id' => $user->id,
                        'car_id' => $car_id,
                        'status_id' => 1,
                        'start_rent_time' => $fd,
                        'end_rent_time' => $td,
                        'comment' => $comment
                        'dt' => date("Y-m-d H:i:s",strtotime("NOW"))
                        );
                $this->db->insert('orders', $data);
        }

        public function my_orders($user_id) {
                $sql = "select
                                o.id,
                                c.brand,
                                c.model,
                                c.price,
                                o.start_rent_time,
                                o.end_rent_time,
                                o.status,
                                o.comment,
                                o.fd as last_update

                        from orders o,cars c
                        where
                        o.car_id = c.id
                        and o.user_id = ?
                        and NOW() between o.fd and o.td
                        order by o.fd
                ";
                $query = $this->db->query($sql,array($user_id));
                $result = $query->result();
                return $result;

        }


}