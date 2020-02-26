<?php
foreach ($job_by_id as $v_job) {
    ?>
    <section id="content" class="col-3-4">
    <!--				<div id="slogan"><img src="<?php echo base_url(); ?>images/slogan.jpg"></div>-->
        <div class="inside">
    <!--					<h2><span>Article</span> name</h2>-->
            <div class="img-box"><img src="<?php echo base_url(); ?>images/3page-img1.jpg"> <?php echo $v_job->tip_title; ?></br><?php echo $v_job->tips_detail; ?></div>
            </p>
        </div>
    </section>
<?php } ?>  