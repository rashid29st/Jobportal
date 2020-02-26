
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
                                        <th>user_id</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>password</th>
                                        <th>access_lavel</th>


                                        <th>ACTION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($all_list as $v_category) {
                                        ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $v_category->admin_id ?></td>
                                            <td><?php echo $v_category->admin_full_name ?></td>
                                            <td><?php echo $v_category->admin_email_address ?></td>
                                            <td><?php echo $v_category->admin_password ?></td>
                                            <td><?php echo $v_category->access_lavel ?></td>

                                            <td>
                                                <?php
                        $access_lavel=$this->session->userdata('access_lavel');
                        if($access_lavel==1)
                        {
                    ?>
                                                <a class=".col-lg-3" href="<?php echo base_url(); ?>super_admin/delete_admin_list_detail/<?php echo $v_category->admin_id ?>" title="DELETE" onclick="return check_delete();">
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


    </div>




</div>
<!--END PAGE CONTENT -->


</div>

<!--END MAIN WRAPPER -->

<!-- FOOTER -->
