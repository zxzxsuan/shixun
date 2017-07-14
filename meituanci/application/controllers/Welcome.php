<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this -> load -> model("product_model");
        $this -> load -> model("order_model");
    }
    public function index()
    {
        $results = $this->product_model->get_product();
        foreach ($results as $product){

            $num = $this->order_model->get_count_by_product_id($product->product_id);
            $product->num = $num->num == null?0:$num->num;

        }
        $this->load->view('index',array('result'=>$results));
    }

	public function detail()
    {
        $this -> load -> view('detail');
    }
    public function success()
    {
        $this -> load -> view('success');
    }


}
