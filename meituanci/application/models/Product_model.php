<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model
{
    public function get_product(){
        //.....
//        $sql = 'select * from t_product';

        $sql = "select t_product.*,(select sum(num) num from t_order where t_order.product_id = t_product.product_id) num from t_product";
        return $this->db->query($sql)->result();
    }
}