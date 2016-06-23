<?php
class Report extends CI_Model {

        public function __construct()
        {
                parent::__construct();
                $this->load->database();
        }

 
        public function av_cars($from,$till) {
                $fd = date("Y-m-d",strtotime($from));   
                $td = date("Y-m-d",strtotime($till));   

                $out_data = array();

                $sql = "select 
                                c.id,
                                c.brand,
                                c.model
                        from 
                        cars c 
                        where
                                ( select count(*) from orders o where 
                                        o.car_id = c.id and o.status_id in (3,4) and
                                        ((o.end_rent_time >= ?) and  (o.start_rent_time <= ? ))
                                        ) = 0
                        ";

                        
                $data = array($fd, $td);

                $query = $this->db->query($sql,$data);
                $result = $query->result();
                $out_data['available'] = $result;

                $sql = "
                        select
                                c.id,
                                c.brand,
                                c.model,
                                o.start_rent_time,
                                o.end_rent_time,
                                (select concat(u.full_name, ' ', u.email) from users u where u.id = o.user_id) as user
                        from orders o, cars c where 
                                        o.car_id = c.id and o.status_id in (3,4) and
                                        ((o.end_rent_time >= ?) and  (o.start_rent_time <= ? ))                        

                ";

                $query = $this->db->query($sql,$data);
                $result = $query->result();
                $out_data['booked'] = $result;
                return $out_data;
        }


        public function orders($from,$till) {
                $fd = date("Y-m-d",strtotime($from));   
                $td = date("Y-m-d",strtotime($till));   
                $sql = "
                        select 
                                s.name,
                                (select count(*) from orders o where o.status_id = s.id and o.dt between ? and ? ) as `total`
                        from statuses s 
                                
                ";
                $query = $this->db->query($sql,array($fd,$td));
                $result = $query->result();
                return $result;                
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