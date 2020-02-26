<div id="content">


    <div class="inner">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">ADD YOUR TIPS HERE</h1>
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
                                <form role="form" action="<?php echo base_url(); ?>super_admin/save_tips" method="post" onsubmit="return validateStandard(this)">

                                    <div class="form-group">
                                        <label>TIPS TITLE</label>

                                        <textarea class="form-control" rows="3" placeholder="Enter text" type="text" name="tip_title" err="no number is allowed" required regexp="JSVAL_RX_ALPHA"></textarea>
                                    </div>




                                    <div class="form-group">
                                        <label>TIPS DETAIL</label>

                                        <textarea class="form-control" rows="3" placeholder="Enter text" type="text" name="tips_detail" err="no number is allowed" required regexp="JSVAL_RX_ALPHA"></textarea>
                                    </div>
                                    &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp;

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
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--                    </div>-->




</div>
<!--END PAGE CONTENT -->
</div>


<!--END MAIN WRAPPER -->

<!-- FOOTER -->