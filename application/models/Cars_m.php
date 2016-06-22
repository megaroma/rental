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

        public function get_car($id) {
                $sql = "select * from cars where id = ? ";
                $query = $this->db->query($sql,array($id));
                $result = $query->result();
                return $result[0];                
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