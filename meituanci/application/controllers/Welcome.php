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
//        foreach ($results as $product){
//
//            $num = $this->order_model->get_count_by_product_id($product->product_id);
//            $product->num = $num->num == null?0:$num->num;
//
//        }
        $this->load->view('index',array('result'=>$results));
    }

	public function detail($product_id)
    {
        $row = $this->product_model->get_product_by_id($product_id);
        $results = $this->product_model->get_comment($product_id);
        foreach ($results as $res){
            $imgs = $this->product_model->get_img($res->id);
            $res->imgs = $imgs;
        }

        $userinfo = $this->session->userdata('userinfo');
        if(empty($userinfo)){
            //没登录
            $row->collect = '收藏';
        }else{
            //已登录
            $user_id = $userinfo -> user_id;
            $collect = $this->product_model->get_collect($user_id,$product_id);
            if(($collect == null)){
                //未收藏 显示收藏
                $row->collect = '收藏';
            }else{
                //已收藏 显示取消
                $row->collect = '取消';
            }
        }

        $this -> load -> view('detail',array('row'=>$row,'results'=>$results));
    }

    public function success()
    {
        $this -> load -> view('success');
    }

    public function submit_order(){
        $product_id = $this->input->get('productId');

        $product = $this->product_model->get_product_by_id($product_id);

//        var_dump($product_id);
        $this -> load -> view('submit_order',array('product'=>$product));
    }

    public function add_order(){
        $product_id = $this->input->get('productId');
        $num = $this->input->get('num');
        $price = $this->input->get('price');
        $userinfo = $this->session->userdata('userinfo');
        $user_id = $userinfo->user_id;

        $rows = $this->order_model->add_order($user_id,$product_id,$price,$num);
        if($rows>0){
            echo 'success';
        }else{
            echo 'fail';
        }
    }


}
