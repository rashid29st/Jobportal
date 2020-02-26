

<section id="content" class="col-3-4">
    <div id="slogan"><img src="<?php echo base_url(); ?>images/slogan.jpg"></div>
    <div class="inside">
        <h2><span>Welcome</span> TO JOB PORTAL</h2>
        <p><b>BD JOBS</b>  Alljobsbd.com is a most popular job site in Bangladesh. It provides Recruitment information like Government jobs or Govt. Job, Newspaper jobs, bank </p>
    </div>
    <div class="wrapper">
        <article class="col-1-2">
            <div class="wrap-col">
                <div class="box maxheight">
                    <div class="border-right maxheight">
                        <div class="border-bot maxheight">
                            <div class="border-left maxheight">
                                <div class="left-top-corner maxheight">
                                    <div class="right-top-corner maxheight">
                                        <div class="inner">
                                            <h2><span>LAtest</span> Tips</h2>
                                            <ul class="news">
                                                <?php
                                                foreach ($all_published_tips as $v_tips) {
                                                    ?>
                                                    <li><strong><?php echo $v_tips->created_date_time; ?></strong><a href="<?php echo base_url();?>welcome/tips_detail/<?php echo $v_tips->tips_id?>"><?php echo $v_tips->tip_title; ?></a> </li>
                                                   
                                                    <?php } ?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
            
    </div>
</section>