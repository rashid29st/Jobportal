<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function index() {
        $data = array();
        $data['all_published_list'] = $this->welcome_model->select_all_published_list();
        $data['all_published_tips'] = $this->welcome_model->select_recent_tips_limit();
        $data['recent_post'] = $this->welcome_model->select_recent_list();
        $data['recent_post_sidebar'] = $this->welcome_model->select_recent_joblist_sidebar();
        $data['maincontent'] = $this->load->view('home_page_content', $data, true);
        $data['slider'] = 1;
        $data['title'] = 'Home';
        $this->load->view('master', $data);
    }

    public function article_id($job_id) {
        $data = array();
        $data['all_published_list'] = $this->welcome_model->select_all_published_list();
        $data['job_by_id'] = $this->welcome_model->select_job_by_list_id($job_id);
        $data['recent_post'] = $this->welcome_model->select_recent_joblist();

        $data['maincontent'] = $this->load->view('article_list', $data, true);
        $data['slider'] = '';
        $data['title'] = 'job details';
        $this->load->view('master', $data);
    }

    public function article_id_detail($job_id) {
        $data = array();
        $data['all_published_list'] = $this->welcome_model->select_all_published_list();
        $data['job_by_id'] = $this->welcome_model->select_job_details_by_id($job_id);
//        $hit_count = $data['job_by_id']->hit_count + 1;
//        $this->welcome_model->update_hit_count($hit_count, $job_id);

        $data['recent_post'] = $this->welcome_model->select_recent_job();
        $data['maincontent'] = $this->load->view('article_detail', $data, true);
        $data['slider'] = '';
        $data['title'] = 'job details';
        $this->load->view('master', $data);
    }



    public function all_job() {
        $data = array();
        $this->load->library('pagination');

        $config['base_url'] =  base_url().'welcome/all_job/';
        $config['total_rows'] = $this->db->count_all('tbl_joblist');
        $config['per_page'] = 3; 
        $this->pagination->initialize($config);
        $data['all_published_list'] = $this->welcome_model->select_all_published_list_p($config['per_page'], $this->uri->segment(3));

        $data['maincontent'] = $this->load->view('all_job_list', $data, true);
        $data['slider'] = '';
        $data['title'] = 'joblist';
        $this->load->view('master', $data);
    }

    public function all_cv() {
        $data = array();
        $this->load->library('pagination');

        $config['base_url'] =  base_url().'welcome/all_cv/';
        $config['total_rows'] = $this->db->count_all('tbl_cv');
        $config['per_page'] = 3; 
        $this->pagination->initialize($config);
      
        $data['all_published_list'] = $this->welcome_model->select_all_published_cvlist_p($config['per_page'], $this->uri->segment(3));

        $data['maincontent'] = $this->load->view('all_cv_list', $data, true);
        $data['slider'] = '';
        $data['title'] = 'cvlist';
        $this->load->view('master', $data);
    }

    public function sign_up() {
        $data = array();
        $data['maincontent'] = $this->load->view('sign_up', $data, true);
        $data['slider'] = '';
        $data['title'] = 'sign_up';
        $this->load->view('master', $data);
    }

    public function save_user() {
        $data = array();
        $data['user_name'] = $this->input->post('user_name', true);
        $data['password'] = md5($this->input->post('password', true));
        $data['full_name'] = ($this->input->post('full_name', true));
        $data['email_address'] = $this->input->post('email_address', true);
        $data['mobile_no'] = $this->input->post('mobile_no', true);

        $this->welcome_model->save_user_info($data);
        $sdata = array();
        $sdata['message'] = 'Save User Information Successfully ! You may Login Now ';
        $this->session->set_userdata($sdata);
        /*
         * Start Send Customer Activation Email
         */
        $mdata = array();
        $mdata['from_address'] = 'rupuu7879@gmail.com';
        $mdata['admin_full_name'] = 'Khalid Hasan';
        $mdata['to_address'] = $data['email_address'];
        $mdata['subject'] = 'Account Activation Email';
        $mdata['user_name'] = $data['user_name'];
        $mdata['user_id'] = $this->session->userdata('user_id');
        $mdata['password'] = $this->input->post('password', true);
        $this->mailer_model->sendEmail($mdata, 'activation_email');
        /*
         * End Send Customer Activation Email
         */
        redirect('welcome/sign_up');
    }

    public function update_user_status($user_enc_id) {

        $id = str_replace("%F2", "/", $user_enc_id);

        $user_id = $this->encrypt->decode($id);
        $this->welcome_model->update_customer_activation_status($user_id);
        $data['all_published_list'] = $this->welcome_model->select_all_published_list();
        $data['maincontent'] = $this->load->view('post_job', $data, true);
        $data['slider'] = '';
        $data['title'] = 'Post Job';
        $this->load->view('master', $data);
        ;
    }

//    public function check_user_login() {
//        $e_mail = $this->input->post('e_mail');
//        $password= $this->input->post('password');
//
//        $result = $this->welcome_model->check_user_login_info($e_mail,$password);
//        
//        
//        $sdata = array();
//        
//         
//        if ($result) {
//
//            $sdata['user_name'] = $result->user_name;
//            $sdata['e_mail'] = $result->e_mail;
//            $sdata['user_id'] = $result->user_id;
//            $this->session->set_userdata($sdata);
//         
//            redirect('welcome/index');
//        } else {
//            $sdata['message'] = 'User Id / Password Invalid';
//            $this->session->set_userdata($sdata);
//            redirect('welcome/post_job');
//        }
//    }


    public function check_customer_email($email_address) {
        $result = $this->welcome_model->check_email_address($email_address);
        if ($result) {
            echo 'Email Address Alredy Exists!';
        } else {
            echo 'Email Address Avilable';
        }
//        echo ''.$email_address;
    }

    public function check_customer_email_login($email_address) {
        $result = $this->welcome_model->check_email_address($email_address);
        if ($result) {
            echo 'User FOUND!';
        } else {
            echo 'USER NOT FOUND';
        }
//        echo ''.$email_address;
    }

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

    public function post_job() {
        $data = array();
        $data['all_published_list'] = $this->welcome_model->select_all_published_list();
        $data['maincontent'] = $this->load->view('post_job', $data, true);
        $data['slider'] = '';
        $data['title'] = 'Post Job';
        $this->load->view('master', $data);
    }

    public function post_cv() {
        $data = array();
        $data['all_published_list'] = $this->welcome_model->select_all_published_list();
        $data['maincontent'] = $this->load->view('post_cv', $data, true);
        $data['slider'] = '';
        $data['title'] = 'Post Job';
        $this->load->view('master', $data);
    }

    public function job_post_by_user() {
        $data = array();
        $data['all_published_list'] = $this->welcome_model->select_all_published_list();
        $data['maincontent'] = $this->load->view('job_post_by_user', $data, true);
        $data['slider'] = '';
        $data['title'] = 'Post Job';
        $this->load->view('master', $data);
    }

    public function save_job_list_details() {
        $data = array();

        $data['list_name'] = $this->input->post('list_name', true);
        $data['job_detail'] = $this->input->post('job_detail', true);
        $data['ex_detail'] = $this->input->post('ex_detail', true);
        $data['attachment'] = $this->input->post('attachment', true);
        $data['publication_status'] = $this->input->post('publication_status', true);
//        echo '<pre>';
//        print_r($data);
//        exit();
//         $data['created_date_time']=$this->session->userdata('created_date_time');
//          $data['hit_count']=$this->session->userdata('hit_count');
//       $data['author_name']=$this->session->userdata('full_name');

        $this->welcome_model->save_job_list_info($data);
        $sdata = array();
        $sdata['message'] = "Save Information Successfully ";
        $this->session->set_userdata($sdata);
        redirect('welcome/job_post_by_user');
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
       redirect('welcome/cv_post_user');
    }















    public function cv_id($cvv_id) {
        
        
        $data = array();
        $data['all_published_list'] = $this->welcome_model->select_all_published_cvlist();
        $data['cv_by_id'] = $this->welcome_model->select_cv_by_list_id($cvv_id);
         
       // $data['cv_by_id'] = $this->welcome_model->select_cv_by_list_id($cvv_id);
//        echo '<pre>';
//        print_r($data);
//        exit();
//        $data['recent_post'] = $this->welcome_model->select_recent_joblist();
        $data['maincontent'] = $this->load->view('cv_list', $data, true);
        $data['slider'] = '';
        $data['title'] = 'job details';
        $this->load->view('master', $data);
    }

    public function cv_id_detail($cvv_id) {
        $data = array();
        $data['all_published_list'] = $this->welcome_model->select_all_published_cvlist();
        $data['cv_by_id'] = $this->welcome_model->select_cv_detail_by_list_id($cvv_id);
//        echo '<pre>';
//        print_r($data);
//        exit();
//        $hit_count = $data['job_by_id']->hit_count + 1;
//        $this->welcome_model->update_hit_count($hit_count, $job_id);

       // $data['recent_post'] = $this->welcome_model->select_recent_job();
        $data['maincontent'] = $this->load->view('cv_detail', $data, true);
        $data['slider'] = '';
        $data['title'] = 'job details';
        $this->load->view('master', $data);
    }

    public function all_tips() {
        $data = array();
        $this->load->library('pagination');

        $config['base_url'] =  base_url().'welcome/all_tips/';
        $config['total_rows'] = $this->db->count_all('tbl_tips');
        $config['per_page'] = 3; 
        $this->pagination->initialize($config);
        //$data['all_published_list'] = $this->welcome_model->select_all_published_list_p($config['per_page'], $this->uri->segment(3));
        $data['all_published_list'] = $this->welcome_model->select_all_published_tips_p($config['per_page'], $this->uri->segment(3));

        $data['maincontent'] = $this->load->view('tips', $data, true);
        $data['slider'] = '';
        $data['title'] = 'joblist';
        $this->load->view('master', $data);
    }

    public function tips_detail($tips_id) {
        $data = array();
        $data['all_published_list'] = $this->welcome_model->select_all_published_tips();
        $data['job_by_id'] = $this->welcome_model->select_tips_details_by_id($tips_id);


//        $hit_count=$data['job_by_id']->hit_count+1;
//        $this->welcome_model->update_hit_count($hit_count,$tips_id);
//        $data['recent_post'] = $this->welcome_model->select_recent_tips();
        $data['maincontent'] = $this->load->view('tips_detail', $data, true);
        $data['slider'] = '';
        $data['title'] = 'job details';
        $this->load->view('master', $data);
    }

    public function cv_post_user() {
        $data = array();
        $data['all_published_list'] = $this->welcome_model->select_all_published_cv();
        $data['maincontent'] = $this->load->view('cv_post_user', $data, true);
        $data['slider'] = '';
        $data['title'] = 'cv_post';
        $this->load->view('master', $data);
    }

    public function user_logout() {
        $this->session->unset_userdata('user_name');
        $this->session->unset_userdata('user_id');
        redirect('welcome', 'refresh');
    }
    public function check_search() {
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

}
