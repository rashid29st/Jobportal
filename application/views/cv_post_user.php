<div class="box">
    <div class="border-right">
        <div class="border-bot">
            <div class="border-left">
                <div class="left-top-corner">
                    <div class="right-top-corner">
                        <div class="inner">
                            <h2><span>ENTER YOUR</span> DETAILS</h2>
                            <h3 style="color:#3333ff">
                                <?php
                                $msg = $this->session->userdata('message');
                                if ($msg) {
                                    echo $msg;
                                    $this->session->unset_userdata('message');
                                }
                                ?>




                            </h3>
                            <form id="contacts-form" action="<?php echo base_url(); ?>welcome/save_cv_list_details" method="post" onsubmit="return validateStandard(this)">
                                <fieldset>

                                    <div class="field" align="center">

                                        <select name="list_name">
                                            <option>SElECT JOB LIST</option>
                                            <?php
                                            foreach ($all_published_list as $v_category) {
                                                ?>
                                                <option value="<?php echo $v_category->cv_id; ?>"><?php echo $v_category->list_name; ?></option>
                                            <?php } ?>
                                        </select>		</div>
                                   											<div class="field">
                                                                                                                                            <label>Your E-mail:</label>
                                                                                                                                            <input type="email" value=""/>
                                                                                                                                    </div>
                                                                                                                                  
                                    <div class="field">
                                        <label>your educational background</label>
                                        <textarea class="input-large span10" cols="1" rows="1"type="text" name="job_detail" ></textarea>
                                    </div>
                                    <div class="field">
                                        <label>contact number</label>
                                        <textarea class="input-large span10" cols="1" rows="1" type="text" name="ex_detail" err="no number is allowed" required regexp="JSVAL_RX_ALPHA"></textarea>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="publication_status" id="optionsRadios2" value="0" /><h3 style="color: blue"> accept term</h3> 
                                        </label>
                                    </div>
                                    <div class="wrapper">
                                        <label>&nbsp;</label>
                                        <input type="submit"  class="link1"></div>

                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>