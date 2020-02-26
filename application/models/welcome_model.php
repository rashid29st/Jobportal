<?php

class Welcome_Model extends CI_Model {

    //put your code here
    public function select_all_published_list() {
        $this->db->select('*');
        $this->db->from('tbl_joblist');
        $this->db->where('publication_status', 1);
        $query_result = $this->db->get();
        $result = $query_result->result();
//        echo '<pre>';
//        print_r($result);
//        exit();

        return $result;
    }

    public function select_all_published_list_p($per_page, $offset) {
        if ($offset == null) {
            $offset = 0;
        }
        $this->db->select('*');
        $this->db->from('tbl_joblist');
        $this->db->limit($per_page, $offset);
        $this->db->where('publication_status', 1);
        $query_result = $this->db->get();
        $result = $query_result->result();
//        echo '<pre>';
//        print_r($result);
//        exit();

        return $result;
    }

    public function select_all_published_job() {
        $this->db->select('*');
        $this->db->from('tbl_job_detail');
        $this->db->where('publication_status', 1);
        $query_result = $this->db->get();
        $result = $query_result->result();
//        echo '<pre>';
//        print_r($result);
//        exit();

        return $result;
    }

    public function select_recent_joblist() {
        $this->db->select('*');
        $this->db->from('tbl_joblist');
        $this->db->order_by('list_id', 'desc');
        $this->db->limit(3);
        $query_result = $this->db->get();
        $result = $query_result->result();

        return $result;
    }

    public function select_recent_joblist_sidebar() {
        $this->db->select('*');
        $this->db->from('tbl_joblist');
        $this->db->order_by('list_id', 'desc');
        $this->db->limit(18);
        $query_result = $this->db->get();
        $result = $query_result->result();

        return $result;
    }

    public function select_all_published_cvlist_p($per_page, $offset) {
        if ($offset == null) {
            $offset = 0;
        }
        $this->db->select('*');
        $this->db->from('tbl_cv');
        $this->db->limit($per_page, $offset);
        $this->db->where('publication_status', 1);
        $query_result = $this->db->get();
        $result = $query_result->result();
//        echo '<pre>';
//        print_r($result);
//        exit();

        return $result;
    }

    public function select_all_published_cvlist() {

        $this->db->select('*');
        $this->db->from('tbl_cv');

        $this->db->where('publication_status', 1);
        $query_result = $this->db->get();
        $result = $query_result->result();
//        echo '<pre>';
//        print_r($result);
//        exit();

        return $result;
    }

//    public function select_all_published_blog()
//    {
//        $this->db->select('*');
//        $this->db->from('tbl_blog');
//        $this->db->where('publication_status',1);
//        $this->db->order_by('blog_id','desc');
//        $query_result=$this->db->get();
//        $result=$query_result->result() ;
//       
//        return $result;
//    }
//    public function blog_info_by_id($blog_id)
//    {
//        $this->db->select('*');
//        $this->db->from('tbl_blog');
//        $this->db->where('blog_id',$blog_id);
//        $query_result=$this->db->get();
//        $result=$query_result->row();
//       
//        return $result;
//    }
    public function select_job_by_list_id($list_name) {
        $this->db->select('*');
        $this->db->from('tbl_job_detail');
        $this->db->where('list_name', $list_name);
        $this->db->where('publication_status', 1);
        $query_result = $this->db->get();
        $result = $query_result->result();

        return $result;
    }

    public function select_recent_job() {
        $this->db->select('*');
        $this->db->from('tbl_job_detail');
        $this->db->order_by('job_id', 'desc');
        $this->db->limit(5);
        $query_result = $this->db->get();
        $result = $query_result->result();

        return $result;
    }

    public function select_job_details_by_id($job_id) {
        $this->db->select('*');
        $this->db->from('tbl_job_detail');
        $this->db->where('publication_status', 1);
        $this->db->where('job_id', $job_id);
        $query_result = $this->db->get();
        $result = $query_result->result();



        return $result;
    }

    public function update_hit_count($hit_count, $job_id) {
        $this->db->set('hit_count', $hit_count);
        $this->db->where('job_id', $job_id);
        $this->db->update('tbl_job_detail');
    }

    public function save_user_info($data) {
        $this->db->insert('tbl_user', $data);
    }

    public function check_user_login_info($email_address, $password) {
        $this->db->select('*');
        $this->db->from('tbl_user');
        $this->db->where('email_address', $email_address);
        $this->db->where('password', md5($password));
        $query_result = $this->db->get();
        $result = $query_result->row();

        return $result;
    }

    public function save_job_list_info($data) {
        $this->db->insert('tbl_job_detail', $data);
    }

    public function save_cv_list_info($data) {
        $this->db->insert('tbl_cv_detail', $data);
    }

    public function select_cv_by_list_id($list_name) {
        $this->db->select('*');
        $this->db->from('tbl_cv_detail');
        $this->db->where('list_name', $list_name);
        $this->db->where('publication_status', 1);
        $query_result = $this->db->get();
        $result = $query_result->result();

        return $result;
    }

    public function select_cv_detail_by_list_id($cvv_id) {
        $this->db->select('*');
        $this->db->from('tbl_cv_detail');
        $this->db->where('cvv_id', $cvv_id);
        $this->db->where('publication_status', 1);
        $query_result = $this->db->get();
        $result = $query_result->result();

        return $result;
    }

    public function select_all_published_tips_p($per_page, $offset) {
        if ($offset == null) {
            $offset = 0;
        }
        $this->db->select('*');
        $this->db->from('tbl_tips');
        $this->db->limit($per_page, $offset);
        $this->db->where('publication_status', 1);
        $query_result = $this->db->get();
        $result = $query_result->result();
//        echo '<pre>';
//        print_r($result);
//        exit();

        return $result;
    }

    public function select_all_published_tips() {

        $this->db->select('*');
        $this->db->from('tbl_tips');

        $this->db->where('publication_status', 1);
        $query_result = $this->db->get();
        $result = $query_result->result();
//        echo '<pre>';
//        print_r($result);
//        exit();

        return $result;
    }

    public function select_tips_details_by_id($tips_id) {
        $this->db->select('*');
        $this->db->from('tbl_tips');
        $this->db->where('tips_id', $tips_id);
        $query_result = $this->db->get();
        $result = $query_result->result();



        return $result;
    }

    public function select_recent_tips() {
        $this->db->select('*');
        $this->db->from('tbl_tips');
        $this->db->order_by('tips_id', 'desc');
        $this->db->limit(7);
        $query_result = $this->db->get();
        $result = $query_result->result();

        return $result;
    }

    public function select_recent_list() {
        $this->db->select('*');
        $this->db->from('tbl_joblist');
        $this->db->order_by('list_id', 'desc');
        $this->db->limit(4);
        $query_result = $this->db->get();
        $result = $query_result->result();

        return $result;
    }

    public function select_recent_tips_limit() {
        $this->db->select('*');
        $this->db->from('tbl_tips');
        $this->db->order_by('tips_id', 'desc');
        $this->db->limit(3);
        $query_result = $this->db->get();
        $result = $query_result->result();

        return $result;
    }

    public function check_email_address($email_address) {
        $this->db->select('*');
        $this->db->from('tbl_user ');
        $this->db->where('email_address', $email_address);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function update_customer_activation_status($user_id) {
        $this->db->set('publication_status', 1);
        $this->db->where('user_id', $user_id);
        $this->db->update('tbl_user');
    }

    public function select_all_published_cv() {
        $this->db->select('*');
        $this->db->from('tbl_cv');
        $this->db->where('publication_status', 1);
        $query_result = $this->db->get();
        $result = $query_result->result();
//        echo '<pre>';
//        print_r($result);
//        exit();

        return $result;
    }

//    public function save_blog_comments($data)
//    {
//        $this->db->insert('tbl_comments',$data);
//    }
//    public function select_comments_by_blog_id($blog_id)
//    {
//        $this->db->select('*');
//        $this->db->from('tbl_comments');
//        $this->db->where('blog_id',$blog_id);
//        $this->db->where('publication_status',1);
//        
//        $query_result=$this->db->get();
//        $result=$query_result->result();
//       
//        return $result;
//    }
//    public function select_populer_blog()
//    {
//        $this->db->select('*');
//        $this->db->from('tbl_blog');
//        $this->db->where('publication_status',1);
//        $this->db->order_by('hit_count','desc');
//        $this->db->limit(5);
//        
//        $query_result=$this->db->get();
//        $result=$query_result->result();
//       
//        return $result;
    //}
}
