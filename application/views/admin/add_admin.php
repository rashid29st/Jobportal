<div id="content">


    <div class="inner">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">ADD ADmin LIST BELOW</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 style="color: blue">
                            <?php
                            $msg = $this->session->userdata('message');
                            if ($msg) {
                                echo $msg;
                                $this->session->unset_userdata('message');
                            }
                            ?>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <form  enctype="multipart/form-data" action="<?php echo base_url();?>super_admin/save_admin_list_details" method="post">
                                    <div class="form-group">
                                        <label>JOB TITLE</label>

                                       
                                    </div>
                                    <div class="form-group">
                                        <label>Admin full name</label>

                                        <textarea class="form-control" rows="3" placeholder="Enter text" type="text" name="admin_full_name" err="no number is allowed" required regexp="JSVAL_RX_ALPHA"></textarea>
                                    </div>




                                    <div class="form-group">
                                        <label>Admin email address</label>

                                        <textarea class="form-control" rows="3" placeholder="Enter email" type="email" name="admin_email_address" err="no number is allowed" required regexp="JSVAL_RX_ALPHA"></textarea>
                                    </div>
                                    &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp;
                                    <!--                                    <div class="form-group">
                                                                            <label class="control-label col-lg-4">Upload Attachment</label>
                                                                            <div class="col-lg-8"><input type="file" name="attachment" /></div>
                                                                        </div>-->
                                    <div class="form-group">
                                        <label>Password</label>

                                        <textarea class="form-control" rows="3" placeholder="Enter password" type="password" name="admin_password" ></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Access level</label>

                                        <textarea class="form-control" rows="3" placeholder="Enter level" type="int" name="access_lavel" ></textarea>
                                    </div>
                                    
                                    &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp;

                            </div>


                        </div>

                        



                        </br>
                        </br>
                        <div>

                        </div>                                     

                        <div>    

                            <button type="submit" class="btn btn-default">Submit Button</button>
                            <button type="reset" class="btn btn-default">Reset Button</button>
                        </div> 
                        </form>

    


</div>
<!--END PAGE CONTENT -->
</div>


<!--END MAIN WRAPPER -->

<!-- FOOTER -->