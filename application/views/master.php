<!DOCTYPE html> 
<html lang="en">
    <head>
        <h3 style="color: blue" align="center"> <?php   
              $name=$this->session->userdata('user_name');
              if($name)
              {
                  echo 'Hello Welcome, '. $name;
              }
              ?>
              
              </h3>
        <title>Home <?php echo $title; ?> | BizSolutions - Free Website Template from Templates.com</title>
        <meta name="description" content="Place your description here">
        <meta name="keywords" content="put, your, keyword, here">
        <meta name="author" content="Templates.com - website templates provider">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/reset.css" type="text/css" media="all">
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/layout.css" type="text/css" media="all">
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css" type="text/css" media="all">
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/zerogrid.css" type="text/css" media="all">
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/responsive.css" type="text/css" media="all">
        <script type="text/javascript" src="<?php echo base_url(); ?>js/maxheight.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>s/jquery-1.4.2.min.js" ></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/script.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/css3-mediaqueries.js"></script>
        <!--[if lt IE 7]>
                <link rel="stylesheet" href="css/ie6.css" type="text/css" media="screen">
                <script type="text/javascript" src="js/ie_png.js"></script>
                <script type="text/javascript">
                        ie_png.fix('.png');
                </script>
        <![endif]-->
        <!--[if lt IE 9]>
                <script type="text/javascript" src="js/html5.js"></script>
        <![endif]-->
    </head>
    <body id="page1" onLoad="new ElementMaxHeight();">
        <div class="tail-bottom">
            <div id="main" class="zerogrid">
                <!-- header -->
                <header>
                    <div class="nav-box">
                        <nav>
                            <ul class="fright">
                                <li><a href="<?php echo base_url(); ?>index.php/welcome/all_job">ALL JOB</a></li>
                                <li><a href="<?php echo base_url(); ?>index.php/welcome/all_cv">ALL CV</a></li>
                                
                            </ul>
                            <ul class="normal-menu">
                                <li class="current"><a href="<?php echo base_url(); ?>">home</a></li>
                                
                                <li><a href="<?php echo base_url(); ?>index.php/welcome/all_tips">Tips&Tricks</a></li>
                                <?php
                                $user_id = $this->session->userdata('user_id');
                                if ($user_id == NULL) {
                                    ?>
                                     <li><a href="<?php echo base_url(); ?>index.php/welcome/post_cv">Upload CV</a></li>
                                    <li><a href="<?php echo base_url(); ?>index.php/welcome/post_job">Post Job</a></li>
                                    <li><a href="<?php echo base_url(); ?>index.php/welcome/sign_up">Sign UP</a></li>
                                    <?php } 
          else{
          ?>
                                    <li><a href="<?php echo base_url(); ?>index.php/welcome/cv_post_user">Upload CV</a></li>
                                    <li><a href="<?php echo base_url(); ?>index.php/welcome/job_post_by_user">Post Job</a></li>
                                    <li><a href="<?php echo base_url(); ?>index.php/welcome/user_logout">Sign out</a></li>
                                    <?php }?>
                                </ul>
                                <div class='response-menu'>
                                    <div><img src='<?php echo base_url(); ?>images/menu2.png'/></div>
                                    <select onChange="location = this.value">
                                        <option></option>
                                        <option value="index.html">Home</option>
                                        <option value="about-us.html">About</option>
                                        <option value="articles.html">Articles</option>
                                        <option value="contact-us.html">Contacts</option>
                                        <option value="sitemap.html">SiteMap</option>
                                    </select>
                                </div>
                            </nav>

                        </div>
<!--                        <h1><a href="index.html"><img src="<?php echo base_url(); ?>images/logo.gif" /></a></h1>-->
<!--                        <form action="" id="text">
                            <fieldset>
                                
                                <input type="text" id="given_text" onkeyup="makerequest(this.value,'res')>
                                <a href="#" onClick="document.getElementById('search-form').submit()"><img src="<?php echo base_url(); ?>images/button-search.gif"></a>
                            </fieldset>
                        </form>-->
                    </header>
                    <div class="wrapper indent">
                        <!-- content -->
                        <?php echo $maincontent; ?>
                        <!-- aside -->
                        <?php
                        if ($slider) {
                            ?>
                            <aside class="col-1-4">
                                <div class="inside">
                                    <ul class="insurance">
                                        <li><strong>Contact US</strong>rashid29st@gmail.com</li>
                                        <li><strong>Phone</strong>01818804034, 01714477937</li>
                                        <li><strong>ADDRESS</strong>CHOWMATHA, BARISAL</li>
                                    </ul>
                                    <h2><span>JOB</span>  LIST</h2>
                                    <ul class="services">
        <?php
        foreach ($recent_post_sidebar as $v_list) {
            ?>
                                            <li><a href="<?php echo base_url(); ?>welcome/article_id/<?php echo $v_list->list_id ?>"><?php echo $v_list
                                ->list_name
            ?></a></li>
                                                <?php } ?>
                                        <!--						<li><a href="#">Unde omnisiste</a></li>
                                                                                        <li><a href="#">Natus errorsit voluptatem</a></li>-->

                                    </ul>
                                    <div class="wrapper"><a href="<?php echo base_url(); ?>index.php/welcome/all_job" class="link1"><span><span>More Services</span></span></a></div>
                                </div>
                            </aside>
    <?php } ?>
                </div>
                <!-- footer -->
                <footer>
                    <div class="inside">

                        <a rel="nofollow" href="http://www.zerotheme.com" class="new_window"></a> designed by MD. MAMUN OR RASHID</a>
                    </div>
                </footer>
            </div>
        </div>
    </body>
</html>