<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this -> load -> model("user_model");
        $this -> load -> model("order_model");
    }

    public function login_page()
    {
        $this -> load -> view('login');
    }

    public function login()
    {
        $username = $this -> input -> post("username");
        $password = $this -> input -> post("password");

        $row = $this -> user_model -> get_by_username_password($username, $password);
        if($row){
            $this->session->set_userdata(array(
                "userinfo" => $row
            ));
            redirect("welcome/index");
        } else {
            echo "登录失败";
        }
    }

    public function register_page()
    {
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this -> load -> view("register");
    }

	public function check_username()
    {
        $username = $this -> input -> post("username");
        $row = $this -> user_model -> check_username($username);
        if($row){
            echo "no";
        }else{
            echo "yes";
        }
	}

	public function register()
    {
        $username = $this -> input -> post("username");
        $password = $this -> input -> post("password");
        $num = $this -> user_model -> insert_user($username, $password);
        if($num > 0){
            redirect("user/login_page");
        }
    }
    public function logout()
    {
        $this->session->unset_userdata('userinfo');
//        $this->session->sess_destroy();
        redirect("welcome");
    }

    public function user_detail()
    {
        $userinfo = $this->session->userdata('userinfo');;
        $user_id = $userinfo -> user_id;
        $order_list = $this -> order_model -> get_order_by_user_id($user_id);
        $this->load->view('user_detail', array(
            "order_list" => $order_list
        ));
    }
}
