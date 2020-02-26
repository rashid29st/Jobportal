<?php

foreach ($job_by_id as $v_job){
?>
<section id="content" class="col-3-4">
<!--				<div id="slogan"><img src="<?php echo base_url();?>images/slogan.jpg"></div>-->
				<div class="inside">
<!--					<h2><span>Article</span> name</h2>-->
					<ul class="articles">
                                            <li><?php echo $v_job->job_detail;?><br></<img src="<?php echo base_url();?>images/3page-img1.jpg"><a href="<?php echo base_url()?>welcome/article_id_detail/<?php echo $v_job->job_id?>">read more</a>&nbsp&nbsp&nbsp&nbsp;<strong><?php echo $v_job->created_date_time;?></strong><span style="font-size: 18px;padding: 10px">Posted By  <?php echo $v_job->author_name;?></span><br>
                                                
							</li>
						
					</ul>
				</div>
			</section>
<?php } ?>  