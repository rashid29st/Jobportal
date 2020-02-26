<?php

class Super_Admin_Model extends CI_Model {
    
    public function save_job_list($data)
    {
        $this->db->insert('tbl_joblist',$data);
    }
    public function save_admin_list($data)
    {
        $this->db->insert('tbl_admin',$data);
    }
   
     public function select_all_list_p($per_page,$offset)
    {
        if($offset==null)
        {
            $offset=0;
        }
        $this->db->select('*');
        $this->db->from('tbl_joblist');
        $this->db->limit($per_page,$offset);
        $query_result=$this->db->get();
        $result=$query_result->result();
        
//        echo '<pre>';
//        print_r($result);
//        exit();
       
        return $result;
    }
    public function select_all_list()
    {
        
        $this->db->select('');
        $this->db->from('tbl_joblist');
       
        $query_result=$this->db->get();
        $result=$query_result->result();
        
//        echo '<pre>';
//        print_r($result);
//        exit();
       
        return $result;
    }
    public function update_publication_status_by_id($list_id)
    {
        
        $this->db->set('publication_status',1);
        $this->db->where('list_id',$list_id);
        $this->db->update('tbl_joblist');
        
        
    }
    public function update_t_publication_status_by_id($list_id)
    {
        
        $this->db->set('publication_status',0);
        $this->db->where('list_id',$list_id);
        $this->db->update('tbl_joblist');
        
        
    }
//    public function update_unpublication_status_by_id($category_id)
//    {
//        
//        $this->db->set('publication_status',0);
//        $this->db->where('category_id',$category_id);
//        $this->db->update('tbl_category');
//     }
     public function delete_list_by_id($list_id)
     {
         $this->db->where('list_id',$list_id);
         $this->db->delete('tbl_joblist');
     }
         public function update_list_info($data,$list_id)
     {
         $this->db->where('list_id',$list_id);
         $this->db->update('tbl_joblist',$data);
          
       
        return $result;
         
         
     }
//      public function select_blog_by_id($blog_id){
//          $this->db->select('*');
//        $this->db->from('tbl_blog');
//        $this->db->where('blog_id',$blog_id);
//        $query_result=$this->db->get();
//        $result=$query_result->row();
//       
//        return $result;
//    }
     public function save_job_list_info($data)
     {
         $this->db->insert('tbl_job_detail',$data);
     }
     
     public function select_list_by_id($list_id)
     {
         $this->db->select('*');
        $this->db->from('tbl_joblist');
        $this->db->where('list_id',$list_id);
        $query_result=$this->db->get();
        $result=$query_result->row();
       
        return $result;
     }
     public function select_list_by_id_detail($job_id)
     {
         $this->db->select('*');
        $this->db->from('tbl_job_detail');
        $this->db->where('job_id',$job_id);
        $query_result=$this->db->get();
        $result=$query_result->result();
       
        return $result;
     }
       public function select_all_list_detial($per_page,$offset)
     {
            if($offset==null)
        {
            $offset=0;
        }
         $this->db->select('*');
        $this->db->from('tbl_job_detail');
        $this->db->limit($per_page,$offset);
       
        $query_result=$this->db->get();
        $result=$query_result->result();
//       echo '<pre>';
//       print_r($result);
//        exit();
        return $result;
     }
      public function select_all_cv_detial()
     {
         $this->db->select('*');
        $this->db->from('tbl_cv_detail');
       
        $query_result=$this->db->get();
        $result=$query_result->result();
//       echo '<pre>';
//       print_r($result);
//        exit();
        return $result;
     }
     public function select_all_list_detial_by_id($job_id){
          $this->db->select('*');
        $this->db->from('tbl_job_detail');
        $this->db->where('job_id',$job_id);
        $query_result=$this->db->get();
        $result=$query_result->row();
     
       
        return $result;
    }
     public function update_job_details($data,$job_id){
        
        $this->db->where('job_id',$job_id);
        $this->db->update('tbl_job_detail',$data);
        
    }
//     public function select_all_blog(){
//        $this->db->select('*');
//        $this->db->from('tbl_blog');
//        $this->db->order_by('blog_id','desc');
//        $query_result=$this->db->get();
//        $result=$query_result->result();
//       
//        return $result;
//    }
//    
//    public function update_publication_blogstatus($blog_id){
//        $this->db->set('publication_status',1);
//        $this->db->where('blog_id',$blog_id);
//        $this->db->update('tbl_blog');
//        
//    }
//    
//    public function update_unpublication_blogstatus($blog_id){
//        $this->db->set('publication_status',0);
//        $this->db->where('blog_id',$blog_id);
//        $this->db->update('tbl_blog');
//    }
//    
//    public function delete_blog_data($blog_id){
//        
//        $this->db->where('blog_id',$blog_id);
//        $this->db->delete('tbl_blog');
//        
//        
//    }
//    
//    public function update_blogstate($data,$blog_id){
//        
//        $this->db->where('blog_id',$blog_id);
//        $this->db->update('tbl_blog',$data);
//        
//    }
     public function update_publication_status_by_id_detail($job_id)
    {
        
        $this->db->set('publication_status',1);
        $this->db->where('job_id',$job_id);
        $this->db->update('tbl_job_detail');
        
        
    }
     public function update_publication_status_by_id_detail_t($job_id)
    {
        
        $this->db->set('publication_status',0);
        $this->db->where('job_id',$job_id);
        $this->db->update('tbl_job_detail');
        
        
    }
     public function delete_list_by_id_detail($job_id)
     {
         $this->db->where('job_id',$job_id);
         $this->db->delete('tbl_job_detail');
     }
     
     public function select_all_user_list($per_page,$offset)
     {
          if($offset==null)
        {
            $offset=0;
        }
         $this->db->select('*');
        $this->db->from('tbl_user');
        $this->db->limit($per_page,$offset);
       
        $query_result=$this->db->get();
        $result=$query_result->result();
//       echo '<pre>';
//       print_r($result);
//        exit();
        return $result;
     }
     public function select_all_admin_list()
     {
         $this->db->select('*');
        $this->db->from('tbl_admin');
       
        $query_result=$this->db->get();
        $result=$query_result->result();
//       echo '<pre>';
//       print_r($result);
//        exit();
        return $result;
     }
     public function delete_user_by_id($user_id)
     {
         $this->db->where('user_id',$user_id);
         $this->db->delete('tbl_user');
     }
     public function save_tips_info($data)
     {
         $this->db->insert('tbl_tips',$data);
     }
      public function select_all_tips_detial($per_page,$offset)
     {
          if($offset==null)
        {
            $offset=0;
        }
         $this->db->select('*');
        $this->db->from('tbl_tips');
        $this->db->limit($per_page,$offset);
       
        $query_result=$this->db->get();
        $result=$query_result->result();
//       echo '<pre>';
//       print_r($result);
//        exit();
        return $result;
     }
     public function update_publication_status_by_tips_detail($tips_id)
    {
        
        $this->db->set('publication_status',1);
        $this->db->where('tips_id',$tips_id);
        $this->db->update('tbl_tips');
        
        
    }
    public function update_publication_status_by_tips_detail_t($tips_id)
    {
        
        $this->db->set('publication_status',0);
        $this->db->where('tips_id',$tips_id);
        $this->db->update('tbl_tips');
        
        
    }
    public function delete_tips_by_id_detail($tips_id)
     {
         $this->db->where('tips_id',$tips_id);
         $this->db->delete('tbl_tips');
     }
      public function save_cv_list($data)
    {
        $this->db->insert('tbl_cv',$data);
    }
    public function select_all_cv()
    {
        $this->db->select('*');
        $this->db->from('tbl_cv');
        $query_result=$this->db->get();
        $result=$query_result->result();
        
//        echo '<pre>';
//        print_r($result);
//        exit();
       
        return $result;
    }
     public function update_publication_status_by_cv($cv_id)
    {
        
        $this->db->set('publication_status',1);
        $this->db->where('cv_id',$cv_id);
        $this->db->update('tbl_cv');
        
        
    }
    public function update_publication_status_by_cv_t($cv_id)
    {
        
        $this->db->set('publication_status',0);
        $this->db->where('cv_id',$cv_id);
        $this->db->update('tbl_cv');
        
        
    }
    public function delete_cv_by_id($cv_id)
     {
         $this->db->where('cv_id',$cv_id);
         $this->db->delete('tbl_cv');
     }
     public function update_publication_status_by_cv_detail($cvv_id)
    {
        
        $this->db->set('publication_status',1);
        $this->db->where('cvv_id',$cvv_id);
        $this->db->update('tbl_cv_detail');
        
        
    }
    public function update_publication_status_by_cv_detail_t($cvv_id)
    {
        
        $this->db->set('publication_status',1);
        $this->db->where('cvv_id',$cvv_id);
        $this->db->update('tbl_cv_detail');
        
        
    }
    public function delete_cv_by_id_detail($cvv_id)
     {
         $this->db->where('cvv_id',$cvv_id);
         $this->db->delete('tbl_cv_detail');
     }
     public function delete_admin_by_id_detail($admin_id)
     {
         $this->db->where('admin_id',$admin_id);
         $this->db->delete('tbl_admin');
     }
     
}
