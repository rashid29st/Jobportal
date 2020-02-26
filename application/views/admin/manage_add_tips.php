
<!--END MENU SECTION -->


<!--PAGE CONTENT -->
<div id="content">

    <div class="inner">
        <div class="row">
            <div class="col-lg-12">


                <h2> Data Tables </h2>



            </div>
        </div>

        <hr/>


        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        DataTables Advanced Tables
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>TIPS ID</th>
                                        <th>TIPS TITLE</th>
                                        <th>TIPS DETAIL</th>
                                        <th>PUBLICATION STATUS</th>
                                         <th>CREATED TIME</th>
                                          <th>HIT COUNT</th>
                                           <th>AUTHOR NAME</th>
<!--                                        <th>EXPERIMENT DETAIL</th>
                                        <th>FILE</th>
                                        
                                       
                                       
                                        
<!--                                        <th>Engine version</th>-->
                                        <th>ACTION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($all_list as $v_category) {
                                        ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $v_category->tips_id ?></td>
                                            <td><?php echo $v_category->tip_title ?></td>
                                            <td><?php echo $v_category->tips_detail ?></td>

                                            
                                            <td><?php
                                                if ($v_category->publication_status == 1) {
                                                    echo 'Published';
                                                } else {
                                                    echo 'Unpublished';
                                                }
                                                ?></td>
                                            <td><?php echo $v_category->created_date_time ?></td>
                                            
                                            <td><?php echo $v_category->hit_count ?></td>
                                            <td><?php echo $v_category->author_name ?></td>
                                            
    <!--                                            <td class="center">4</td>-->
                                            <td class="center">
                                                <a class=".col-lg-3" href="<?php echo base_url();?>super_admin/published_tips/<?php echo $v_category->tips_id?>" title="Published">
                                                    <i class="icon-arrow-up icon-white"></i>  

                                                </a>
                                                <a class=".col-lg-3" href="<?php echo base_url();?>super_admin/unpublished_tips/<?php echo $v_category->tips_id?>" title="UnPublished">
                                                    <i class="icon-arrow-down icon-white"></i>  

                                                </a>
<!--                                                <a class=".col-lg-3" href="<?php echo base_url();?>super_admin/edit_list_detail/<?php echo $v_category->tips_id?>" title="Edit">
                                                    <i class="icon-edit icon-white"></i>  

-->                                                </a>
<?php
                        $access_lavel=$this->session->userdata('access_lavel');
                        if($access_lavel==1)
                        {
                    ?>
                                                <a class=".col-lg-3" href="<?php echo base_url();?>super_admin/delete_tips_detail/<?php echo $v_category->tips_id?>" title="DELETE" onclick="return check_delete();">
                                                    <i class="icon-trash icon-white"></i>  

                                                </a>
   <?php } ?>
                                            </td>
                                        </tr>


<?php } ?>

                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
         <?php
echo $this->pagination->create_links();
?>


    </div>




</div>
<!--END PAGE CONTENT -->


</div>

<!--END MAIN WRAPPER -->

<!-- FOOTER -->
