<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();
class Super_Admin extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $admin_id=$this->session->userdata('admin_id');
        if($admin_id ==NULL)
        {
            redirect('admin','refresh');
        }
        $this->load->model('super_admin_model','sa_model');
    }
    
    public function index()
    {
        $data=array();
        $data['dasherboard_main_content']=$this->load->view('admin/dasherboard_main_content','',true);
        $this->load->view('admin/dasherboard',$data);
    }
    public function add_job_list()
    {
        $data=array();
        $data['dasherboard_main_content']=$this->load->view('admin/add_job_list','',true);
        $this->load->view('admin/dasherboard',$data);
    }
    public function update_job_list()
    {
       $data=array();
        $list_id=$this->input->post('list_id');
        
        $data['list_name']=$this->input->post('list_name');
       // $data['category_description']=$this->input->post('category_description');
        $data['publication_status']=$this->input->post('publication_status');
        $this->sa_model->update_list_info($data,$list_id);
        redirect('super_admin/manage_job_list');
        
        
        
        
        
    }
    public function save_job_list()
    {
        $data=array();
        $data['list_name']=$this->input->post('list_name',true);
//        $data['category_description']=$this->input->post('category_description',true);
        $data['publication_status']=$this->input->post('publication_status',true);
        //$this->load->model('super_admin_model','sa_model');
        $this->sa_model->save_job_list($data);
        $sdata=array();
        $sdata['message']='Save  Information Successfully !';
        $this->session->set_userdata($sdata);
        
        redirect('super_admin/add_job_list');
    }
    public function manage_job_list()
    {
        $data=array();
        $this->load->library('pagination');

        $config['base_url'] =  base_url().'super_admin/manage_job_list/';
        $config['total_rows'] = $this->db->count_all('tbl_joblist');
        $config['per_page'] = 3; 
        $this->pagination->initialize($config);
        $data['all_list']=$this->sa_model->select_all_list_p($config['per_page'], $this->uri->segment(3));
        $data['dasherboard_main_content']=$this->load->view('admin/manage_job_list',$data,true);
        $this->load->view('admin/dasherboard',$data);
    }
    public function published_list($list_id)
    {
       
        $this->sa_model->update_publication_status_by_id($list_id);
        redirect('super_admin/manage_job_list');
    }
     public function unpublished_list($list_id)
    {
       
        $this->sa_model->update_t_publication_status_by_id($list_id);
        redirect('super_admin/manage_job_list');
    }
     public function edit_list($list_id) {
        $data = array();

        //$data['dasherboard_main_content'] = $this->welcome_model->select_all_published_category();
        $data['all_list'] = $this->sa_model->select_list_by_id($list_id);
        $data['dasherboard_main_content'] = $this->load->view('admin/edit_list', $data, true);
        $this->load->view('admin/dasherboard', $data);
    }

    public function delete_list($list_id)
    {
        $this->super_admin_model->delete_list_by_id($list_id);
        redirect('super_admin/manage_job_list');
    }
    public function add_job_list_detail()
    {
        
        $data=array();
         $data['all_published_list'] = $this->welcome_model->select_all_published_list();
        $data['all_list']=$this->sa_model->select_all_list();
        
        
        
        $data['dasherboard_main_content']=$this->load->view('admin/add_job_list_detail',$data,true);
        $this->load->view('admin/dasherboard',$data);
    }
     public function manage_job_list_detail()
    {
        $data=array();
        $this->load->library('pagination');

        $config['base_url'] =  base_url().'super_admin/manage_job_list_detail/';
        $config['total_rows'] = $this->db->count_all('tbl_job_detail');
        $config['per_page'] = 3; 
        $this->pagination->initialize($config);
        $data['all_list']=$this->sa_model->select_all_list_detial($config['per_page'], $this->uri->segment(3));
        $data['dasherboard_main_content']=$this->load->view('admin/manage_job_list_detail',$data,true);
        $this->load->view('admin/dasherboard',$data);
    }
    public function published_list_detail($job_id)
    {
       
        $this->sa_model->update_publication_status_by_id_detail($job_id);
        redirect('super_admin/manage_job_list_detail');
    }
    public function unpublished_list_detail($job_id)
    {
       
        $this->sa_model->update_publication_status_by_id_detail_t($job_id);
        redirect('super_admin/manage_job_list_detail');
    }
     public function delete_list_detail($list_id)
    {
        $this->super_admin_model->delete_list_by_id_detail($list_id);
        redirect('super_admin/manage_job_list_detail');
    }
    public function edit_list_detail($job_id) {
        $data = array();
   $data['all_published_list'] = $this->welcome_model->select_all_published_list();
        $data['all_list']=$this->sa_model->select_all_list_detial_by_id($job_id);
       
        //$data['dasherboard_main_content'] = $this->welcome_model->select_all_published_category();
//        $data['all_list'] = $this->sa_model->select_list_by_id_detail($job_id);
        $data['dasherboard_main_content'] = $this->load->view('admin/edit_list_detail', $data, true);
        $this->load->view('admin/dasherboard', $data);
    }
    public function update_edit_list_detail(){
        
        $data=array();
        $job_id= $this->input->post('job_id');
        $data['list_name']=$this->input->post('list_name');
        $data['job_detail']=$this->input->post('job_detail');
        $data['ex_detail']=$this->input->post('ex_detail');
        $data['attachment']=$this->input->post('attachment');
        $data['publication_status']=$this->input->post('publication_status');
        $data['created_date_time']=$this->input->post('created_date_time');
        
        
        $this->sa_model->update_job_details($data,$job_id);
        redirect('super_admin/manage_job_list_detail');
    }
//  public function unpublished_category($category_id)
//    {
//       
//        $this->sa_model->update_unpublication_status_by_id($category_id);
//        redirect('super_admin/manage_category');
//    }
    public function logout()
    {
        $this->session->unset_userdata('full_name');
        $this->session->unset_userdata('admin_id');
        $sdata=array();
        $sdata['message']='You are Successfully Logout !';
        $this->session->set_userdata($sdata);
        redirect('admin');
        
    }
    public function manage_user_detail()
    {
        $data=array();
        $this->load->library('pagination');

        $config['base_url'] =  base_url().'super_admin/manage_user_detail/';
        $config['total_rows'] = $this->db->count_all('tbl_user');
        $config['per_page'] = 3; 
        $this->pagination->initialize($config);
        $data['all_list']=$this->sa_model->select_all_user_list($config['per_page'], $this->uri->segment(3));
        $data['dasherboard_main_content']=$this->load->view('admin/manage_user_detail',$data,true);
        $this->load->view('admin/dasherboard',$data);
    }
     public function delete_user_detail($user_id)
    {
        $this->super_admin_model->delete_user_by_id($user_id);
        redirect('super_admin/manage_user_detail');
    }
    
//    public function edit_category($category_id)
//    {
//        $data=array();
//        $data['category_info']=$this->super_admin_model->select_category_info_by_id($category_id);
//        $data['admin_main_content']=$this->load->view('admin/edit_category',$data,true);
//        $this->load->view('admin/admin_master',$data);
//    }
//    public function update_category()
//    {
//        $data=array();
//        $category_id=$this->input->post('category_id');
//        $data['category_name']=$this->input->post('category_name');
//        $data['category_description']=$this->input->post('category_description');
//        $data['publication_status']=$this->input->post('publication_status');
//        $this->super_admin_model->update_category_info($data,$category_id);
//        redirect('super_admin/manage_category');
//    }

   
//    public function add_blog()
//    {
//        
//        $data=array();
//        $data['all_published_category']=$this->welcome_model->select_all_published_category();
//        $data['admin_main_content']=$this->load->view('admin/add_blog_form',$data,true);
//        $this->load->view('admin/admin_master',$data);
//    }
    public function save_job_list_details()
    {
        $data=array();
       
//        $data['job_id']=$this->input->post('job_id',true);
//        /*
//         * ------- Start Image Upload---------
//         */
//        $config['upload_path'] = 'images/attachment/';
//        $config['allowed_types'] = 'gif|jpg|png';
//        $config['max_size']	= '100';
//        $config['max_width']  = '1024';
//        $config['max_height']  = '768';
//
//        $this->load->library('upload', $config);
//        $this->upload->initialize($config);
//        $error='';
//        $fdata=array();
//        if ( ! $this->upload->do_upload('file[]'))
//        {
//                $error =  $this->upload->display_errors();
//                echo $error;
//                exit();
//        }
//        else
//        {
//                $fdata = $this->upload->data();
//                $data['file[]']=$config['upload_path'] .$fdata['file_name'];
//        }
//        
//        /*
//         * --------End Image Upload---------
//         */
        $data['list_name']=$this->input->post('list_name',true);
        $data['job_detail']=$this->input->post('job_detail',true);
        $data['ex_detail']=$this->input->post('ex_detail',true);
        $data['attachment']=$this->input->post('attachment',true);
        $data['publication_status']=$this->input->post('publication_status',true);
        //$data['publication_status']=$this->session->userdata('publication_status');
         $data['created_date_time']=$this->session->userdata('created_date_time');
          $data['hit_count']=$this->session->userdata('hit_count');
       $data['author_name']=$this->session->userdata('full_name');
       
       $this->super_admin_model->save_job_list_info($data);
       $sdata=array();
       $sdata['message']="Save Information Successfully ";
       $this->session->set_userdata($sdata);
       redirect('super_admin/add_job_list_detail');
    }

    
     public function add_tips()
    {
        $data=array();
        // $data['all_published_list'] = $this->welcome_model->select_all_published_list();
        $data['all_list']=$this->sa_model->select_all_list();
        $data['dasherboard_main_content']=$this->load->view('admin/add_tips',$data,true);
        $this->load->view('admin/dasherboard',$data);
    }
     public function save_tips()
    {
        $data=array();

        $data['tip_title']=$this->input->post('tip_title',true);
        $data['tips_detail']=$this->input->post('tips_detail',true);

        $data['publication_status']=$this->input->post('publication_status',true);
        
         $data['created_date_time']=$this->session->userdata('created_date_time');
          $data['hit_count']=$this->session->userdata('hit_count');
       $data['author_name']=$this->session->userdata('full_name');
       
       $this->super_admin_model->save_tips_info($data);
       $sdata=array();
       $sdata['message']="Save Information Successfully ";
       $this->session->set_userdata($sdata);
       redirect('super_admin/add_tips');
    }
    public function manage_add_tips()
    {
        $data=array();
        $this->load->library('pagination');

        $config['base_url'] =  base_url().'super_admin/manage_add_tips/';
        $config['total_rows'] = $this->db->count_all('tbl_tips');
        $config['per_page'] = 3; 
        $this->pagination->initialize($config);
        
        $data['all_list']=$this->sa_model->select_all_tips_detial($config['per_page'], $this->uri->segment(3));
        $data['dasherboard_main_content']=$this->load->view('admin/manage_add_tips',$data,true);
        $this->load->view('admin/dasherboard',$data);
    }
     public function published_tips($tips_id)
    {
       
        $this->sa_model->update_publication_status_by_tips_detail($tips_id);
        redirect('super_admin/manage_add_tips');
    }
    public function unpublished_tips($tips_id)
    {
       
        $this->sa_model->update_publication_status_by_tips_detail_t($tips_id);
        redirect('super_admin/manage_add_tips');
    }
    public function delete_tips_detail($tips_id)
    {
        $this->super_admin_model->delete_tips_by_id_detail($tips_id);
        redirect('super_admin/manage_add_tips');
    }
     public function add_cv()
    {
        $data=array();
        $data['dasherboard_main_content']=$this->load->view('admin/add_cv','',true);
        $this->load->view('admin/dasherboard',$data);
    }
    public function save_cv()
    {
        $data=array();
        $data['list_name']=$this->input->post('list_name',true);
//        $data['category_description']=$this->input->post('category_description',true);
        $data['publication_status']=$this->input->post('publication_status',true);
        //$this->load->model('super_admin_model','sa_model');
        $this->sa_model->save_cv_list($data);
        $sdata=array();
        $sdata['message']='Save CV Information Successfully !';
        $this->session->set_userdata($sdata);
        
        redirect('super_admin/add_cv');
    }
     public function manage_cv_list()
    {
        $data=array();
        $data['all_list']=$this->sa_model->select_all_cv();
        $data['dasherboard_main_content']=$this->load->view('admin/manage_cv',$data,true);
        $this->load->view('admin/dasherboard',$data);
    }
    public function published_cv($cv_id)
    {
       
        $this->sa_model->update_publication_status_by_cv($cv_id);
        redirect('super_admin/manage_cv_list');
    }
     public function unpublished_cv($cv_id)
    {
       
        $this->sa_model->update_publication_status_by_cv_t($cv_id);
        redirect('super_admin/manage_cv_list');
    }
    public function delete_cv($cv_id)
    {
        $this->super_admin_model->delete_cv_by_id($cv_id);
        redirect('super_admin/manage_cv_list');
    }
     public function manage_cv_list_detail()
    {
        $data=array();
        $data['all_list']=$this->sa_model->select_all_cv_detial();
        $data['dasherboard_main_content']=$this->load->view('admin/manage_cv_detail',$data,true);
        $this->load->view('admin/dasherboard',$data);
    }
     public function published_cv_detail($cvv_id)
    {
       
        $this->sa_model->update_publication_status_by_cv_detail($cvv_id);
        redirect('super_admin/manage_cv_list_detail');
    }
    public function published_cv_detail_t($cvv_id)
    {
       
        $this->sa_model->update_publication_status_by_cv_detail_t($cvv_id);
        redirect('super_admin/manage_cv_list_detail');
    }
    public function delete_cv_list_detail($cvv_id)
    {
        $this->super_admin_model->delete_cv_by_id_detail($cvv_id);
        redirect('super_admin/manage_cv_list_detail');
    }
    public function add_admin_list()
    {
        $data=array();
        $data['dasherboard_main_content']=$this->load->view('admin/add_admin','',true);
        $this->load->view('admin/dasherboard',$data);
    }
    public function save_admin_list_details()
    {
        $data=array();
        $data['admin_full_name']=$this->input->post('admin_full_name',true);
        $data['admin_email_address']=$this->input->post('admin_email_address',true);
        $data['admin_password'] = md5($this->input->post('admin_password',true));
           
        $data['access_lavel']=$this->input->post('access_lavel',true);     
        $this->sa_model->save_admin_list($data);
        $sdata=array();
        $sdata['message']='Save  Information Successfully !';
        $this->session->set_userdata($sdata);
        
        redirect('super_admin/add_admin_list');
    }
    public function manage_admin_detail()
    {
        $data=array();
        $data['all_list']=$this->sa_model->select_all_admin_list();
        $data['dasherboard_main_content']=$this->load->view('admin/mange_admin',$data,true);
        $this->load->view('admin/dasherboard',$data);
    }
     public function delete_admin_list_detail($admin_id)
    {
        $this->super_admin_model->delete_admin_by_id_detail($admin_id);
        redirect('super_admin/manage_admin_detail');
    }
}
