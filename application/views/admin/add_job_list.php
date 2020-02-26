    <script type="text/javascript" src="<?php echo base_url();?>js/jsval.js"></script>
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
                                                    $msg=$this->session->userdata('message');
                                                    if($msg)
                                                    {
                                                        echo $msg;
                                                        $this->session->unset_userdata('message');
                                                    }
                                                
                                                ?>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" action="<?php echo base_url();?>super_admin/save_job_list" method="post" onsubmit="return validateStandard(this)">
                                        <div class="form-group">
                                            <label>Input name of job</label>
                                            <input class="form-control" placeholder="Enter text" type="text" name="list_name" err="no number is allowed" required regexp="JSVAL_RX_ALPHA">
                                            <p class="help-block">Example Banker,Scienetist</p>
                                        </div>
<!--                                        
                                           
                                            </div>
                                            
                                            <label class="checkbox-inline">
                                                <input type="checkbox" />3
                                            </label>
                                        </div>-->
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
                                
                                        <button type="submit" class="btn btn-default">Submit Button</button>
                                        <button type="reset" class="btn btn-default">Reset Button</button>
                                    </form>
<!--                                </div>
                                <div class="col-lg-6">-->
<!--                                    <h1>Disabled Form States</h1>-->
<!--                                    <form role="form">
                                        <fieldset disabled="disabled">
                                            <div class="form-group">
                                                <label for="disabledSelect">Disabled input</label>
                                                <input class="form-control" id="disabledInput" type="text" placeholder="Disabled input" disabled="disabled" />
                                            </div>
                                            <div class="form-group">
                                                <label for="disabledSelect">Disabled select menu</label>
                                                <select id="disabledSelect" class="form-control">
                                                    <option>Disabled select</option>
                                                </select>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" disabled="disabled" /> Checkbox
                                                </label>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Disabled Button</button>
                                        </fieldset>
                                    </form>-->
<!--                                    <h1>Form Validation States</h1>-->
<!--                                    <form role="form">
                                        <div class="form-group has-success">
                                            <label class="control-label" for="inputSuccess">Input with success</label>
                                            <input type="text" class="form-control" id="inputSuccess" />
                                        </div>
                                        <div class="form-group has-warning">
                                            <label class="control-label" for="inputWarning">Input with warning</label>
                                            <input type="text" class="form-control" id="inputWarning" />
                                        </div>
                                        <div class="form-group has-error">
                                            <label class="control-label" for="inputError">Input with error</label>
                                            <input type="text" class="form-control" id="inputError" />
                                        </div>
                                    </form>-->
<!--                                    <h1>Input Groups</h1>-->
<!--                                    <form role="form">
                                        <div class="form-group input-group">
                                            <span class="input-group-addon">@</span>
                                            <input type="text" class="form-control" placeholder="Username" />
                                        </div>
                                        <div class="form-group input-group">
                                            <input type="text" class="form-control" />
                                            <span class="input-group-addon">.00</span>
                                        </div>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-eur"></i>
                                            </span>
                                            <input type="text" class="form-control" placeholder="With Icon" />
                                        </div>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon">$</span>
                                            <input type="text" class="form-control" />
                                            <span class="input-group-addon">.00</span>
                                        </div>
                                        <div class="form-group input-group">
                                            <input type="text" class="form-control" />
                                            <span class="input-group-btn">
                                                <button class="btn btn-default" type="button">
                                                    <i class="icon-search"></i>
                                                </button>
                                            </span>
                                        </div>
                                    </form>-->
<!--                                </div>-->
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