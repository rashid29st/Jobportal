<div id="content">


    <div class="inner">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">ADD YOUR JOB LIST BELOW</h1>
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
                                <form  enctype="multipart/form-data" action="<?php echo base_url();?>super_admin/save_job_list_details" method="post">
                                    <div class="form-group">
                                        <label>JOB TITLE</label>

                                        <select class="form-control" name="list_name">
                                            <option>SElECT JOB LIST</option>
                                            <?php
                                            foreach ($all_published_list as $v_category) {
                                                ?>
                                                <option value="<?php echo $v_category->list_id; ?>"><?php echo $v_category->list_name; ?></option>
                                            <?php } ?>

                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>JOB DETAIL</label>

                                        <textarea class="form-control" rows="3" placeholder="Enter text" type="text" name="job_detail" err="no number is allowed" required regexp="JSVAL_RX_ALPHA"></textarea>
                                    </div>




                                    <div class="form-group">
                                        <label>Experience Requirements</label>

                                        <textarea class="form-control" rows="3" placeholder="Enter text" type="text" name="ex_detail" err="no number is allowed" required regexp="JSVAL_RX_ALPHA"></textarea>
                                    </div>
                                    &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp;
                                    <!--                                    <div class="form-group">
                                                                            <label class="control-label col-lg-4">Upload Attachment</label>
                                                                            <div class="col-lg-8"><input type="file" name="attachment" /></div>
                                                                        </div>-->
<!--                                    <div class="control-group">
                                        <label class="control-label" >UPLOAD Image </label>
                                        <div class="controls">
                                            <input type="file" class="span6"   name="file[]">

                                        </div>
                                    </div>-->
                                    &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp;

                            </div>


                        </div>

                        <div class="form-group">
                            <label>Publication Status</label>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="publication_status" id="optionsRadios1" value="1" checked="checked" />Show 
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="publication_status" id="optionsRadios2" value="0" />Hide
                                </label>
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