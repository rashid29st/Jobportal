<?php

foreach ($cv_by_id as $v_cv){
?>
<section id="content" class="col-3-4">
<!--				<div id="slogan"><img src="<?php echo base_url();?>images/slogan.jpg"></div>-->
				<div class="inside">
<!--					<h2><span>Article</span> name</h2>-->
					<ul class="articles">
                                            <li><?php echo $v_cv->job_detail;?><br></<img src="<?php echo base_url();?>images/3page-img1.jpg"><a href="<?php echo base_url()?>welcome/cv_id_detail/<?php echo $v_cv->cvv_id?>">read more</a>&nbsp&nbsp&nbsp&nbsp;<strong><?php echo $v_cv->created_date_time;?></strong><span style="font-size: 18px;padding: 10px">Posted By  <?php echo $v_cv->author_name;?></span><br>
                                                
							</li>
						
					</ul>
				</div>
			</section>
<?php } ?>  