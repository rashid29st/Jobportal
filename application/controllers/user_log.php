<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
session_start();

class User_log extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $user_id = $this->session->userdata('user_id');
        // echo $user_id;
        //  exit();
        if ($user_id != NULL) {
            redirect('welcome/job_post_by_user', 'refresh');
        }
    }

//    public function index() {
//         $data = array();
//        $data['all_published_list'] = $this->welcome_model->select_all_published_list();
//        $data['maincontent'] = $this->load->view('post_job', $data, true);
//        $data['slider'] = '';
//        $data['title'] = 'Post Job';
//        $this->load->view('master', $data);
//        
//    }
    public function check_user_login() {
        $email_address = $this->input->post('email_address');
        $password = $this->input->post('password');

        // echo $email_address.'    '.$password;
//                             exit();
        $result = $this->welcome_model->check_user_login_info($email_address, $password);
        $sdata = array();
        if ($result) {

            $sdata['user_name'] = $result->user_name;
            $sdata['email_address'] = $result->email_address;
            $sdata['user_id'] = $result->user_id;
            $this->session->set_userdata($sdata);
            redirect('welcome/job_post_by_user');
        } else {
            $sdata['message'] = 'User Id / Password Invalid';
            $this->session->set_userdata($sdata);
            redirect('welcome/post_job');
        }
    }
    public function check_user_login_cv() {
        $email_address = $this->input->post('email_address');
        $password = $this->input->post('password');

        // echo $email_address.'    '.$password;
//                             exit();
        $result = $this->welcome_model->check_user_login_info($email_address, $password);
        $sdata = array();
        if ($result) {

            $sdata['user_name'] = $result->user_name;
            $sdata['email_address'] = $result->email_address;
            $sdata['user_id'] = $result->user_id;
            $this->session->set_userdata($sdata);
            redirect('welcome/cv_post_user');
        } else {
            $sdata['message'] = 'User Id / Password Invalid';
            $this->session->set_userdata($sdata);
            redirect('welcome/job_post_by_user');
    }
    
        }
        public function save_cv_list_details() {
        $data = array();

        $data['list_name'] = $this->input->post('list_name', true);
        $data['job_detail'] = $this->input->post('job_detail', true);
        $data['ex_detail'] = $this->input->post('ex_detail', true);
     
        $data['publication_status'] = $this->input->post('publication_status', true);
        echo '<pre>';
        print_r($data);
        exit();
         $data['created_date_time']=$this->session->userdata('created_date_time');
          $data['hit_count']=$this->session->userdata('hit_count');
       $data['author_name']=$this->session->userdata('full_name');

        $this->welcome_model->save_cv_list_info($data);
        $sdata = array();
        $sdata['message'] = "Save Information Successfully ";
        $this->session->set_userdata($sdata);
       // redirect('welcome/cv_post_user');
    }
    }

    


