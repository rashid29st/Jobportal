
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
                                        <h2><span>LAtest</span> News</h2>
                                        <ul class="news">
                                            <?php
                                            foreach ($all_published_list as $v_list) {
                                                ?>
                                                <li><a href="<?php echo base_url(); ?>welcome/tips_detail/<?php echo $v_list->tips_id ?>"><?php echo $v_list
                                            ->tip_title
                                            ?></a></li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            echo $this->pagination->create_links();
            ?>
        </div>
    </article>

</div>
</section>