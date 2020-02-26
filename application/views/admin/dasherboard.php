<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="UTF-8" />
    <title>BCORE Admin Dashboard Template | Dashboard </title>
     <meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
        <script type="text/javascript" src="<?php echo base_url();?>js/jsval.js"></script>
     <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <!-- GLOBAL STYLES -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/main.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/theme.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/MoneAdmin.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/Font-Awesome/css/font-awesome.css" />
    <!--END GLOBAL STYLES -->

    <!-- PAGE LEVEL STYLES -->
    <link href="<?php echo base_url();?>assets/css/layout2.css" rel="stylesheet" />
       <link href="<?php echo base_url();?>assets/plugins/flot/examples/examples.css" rel="stylesheet" />
       <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/timeline/timeline.css" />
       <script type="text/javascript">
            function check_delete()
            {
                var chk=confirm('Are You Sure to Delete This ?');
                if(chk)
                {
                    return true;
                }
                else{
                    return false;
                }
            }
        </script>
       
    <!-- END PAGE LEVEL  STYLES -->
     <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>

    <!-- END HEAD -->

    <!-- BEGIN BODY -->
<body class="padTop53 " >

    <!-- MAIN WRAPPER -->
    <div id="wrap" >
        

        <!-- HEADER SECTION -->
        <div id="top">

            <nav class="navbar navbar-inverse navbar-fixed-top " style="padding-top: 10px;">
                <a data-original-title="Show/Hide Menu" data-placement="bottom" data-tooltip="tooltip" class="accordion-toggle btn btn-primary btn-sm visible-xs" data-toggle="collapse" href="#menu" id="menu-toggle">
                    <i class="icon-align-justify"></i>
                </a>
                <!-- LOGO SECTION -->
                <header class="navbar-header">

                    <a href="index.html" class="navbar-brand">
                    <img src="<?php echo base_url();?>assets/img/logo.png" alt="" />
                        
                  </a>
                </header>
                <!-- END LOGO SECTION -->
                <ul class="nav navbar-top-links navbar-right">

                    <!-- MESSAGES SECTION -->
                    
                    <!--END MESSAGES SECTION -->

                    <!--TASK SECTION -->
                   
                    <!--END TASK SECTION -->

                    <!--ALERTS SECTION -->
<!--                    <li class="chat-panel dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <span class="label label-info">8</span>   <i class="icon-comments"></i>&nbsp; <i class="icon-chevron-down"></i>
                        </a>

                        <ul class="dropdown-menu dropdown-alerts">

                            <li>
                                <a href="#">
                                    <div>
                                        <i class="icon-comment" ></i> New Comment
                                    <span class="pull-right text-muted small"> 4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="icon-twitter info"></i> 3 New Follower
                                    <span class="pull-right text-muted small"> 9 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="icon-envelope"></i> Message Sent
                                    <span class="pull-right text-muted small" > 20 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="icon-tasks"></i> New Task
                                    <span class="pull-right text-muted small"> 1 Hour ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="icon-upload"></i> Server Rebooted
                                    <span class="pull-right text-muted small"> 2 Hour ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a class="text-center" href="#">
                                    <strong>See All Alerts</strong>
                                    <i class="icon-angle-right"></i>
                                </a>
                            </li>
                        </ul>

                    </li>
                     END ALERTS SECTION 

                    ADMIN SETTINGS SECTIONS 

                    <li class="dropdown">-->
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="icon-user "></i>&nbsp; <i class="icon-chevron-down "></i>
                        </a>

                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#"><i class="icon-user"></i> User Profile </a>
                            </li>
                            <li><a href="#"><i class="icon-gear"></i> Settings </a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="<?php echo base_url();?>super_admin/logout"><i class="icon-signout"></i> Logout </a>
                            </li>
                        </ul>

                    </li>
                    <!--END ADMIN SETTINGS -->
                </ul>

            </nav>

        </div>
        <!-- END HEADER SECTION -->



        <!-- MENU SECTION -->
       <div id="left" >
            <div class="media user-media well-small">
<!--                <a class="user-link" href="#">
                    <img class="media-object img-thumbnail user-img" alt="User Picture" src="<?php echo base_url();?>assets/img/user.gif" />
                </a>-->
                <br />
                <div class="media-body">
                    <h5 class="media-heading"><?php echo $this->session->userdata('full_name')?> </h5>
                    <ul class="list-unstyled user-info">
                        
                        <li>
                             <a class="btn btn-success btn-xs btn-circle" style="width: 10px;height: 12px;"></a> Online
                           
                        </li>
                       
                    </ul>
                </div>
                <br />
            </div>

            <ul id="menu" class="collapse">

                
                <li class="panel active">
                    <a href="<?php echo base_url()?>super_admin" >
                        <i class="icon-table"></i> Dashboard
	   
                       
                    </a>                   
                </li>



                <li class="panel ">
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav">
                        <i class="icon-tasks"> </i> JOB MANAGEMENT    
	   
                        <span class="pull-right">
                          <i class="icon-angle-left"></i>
                        </span>
<!--                       &nbsp; <span class="label label-default">10</span>&nbsp;-->
                    </a>
                    <ul class="collapse" id="component-nav">
                       
                        <li class=""><a href="<?php echo base_url()?>super_admin/add_job_list"><i class="icon-angle-right"></i> ADD JOB LIST </a></li>
                         <li class=""><a href="<?php echo base_url()?>super_admin/manage_job_list"><i class="icon-angle-right"></i> MANAGE JOB LIST</a></li>
                        <li class=""><a href="<?php echo base_url()?>super_admin/add_job_list_detail"><i class="icon-angle-right"></i> ADD JOB LIST DETAIL </a></li>
                        <li class=""><a href="<?php echo base_url()?>super_admin/manage_job_list_detail"><i class="icon-angle-right"></i> MANAGE JOB LIST DETAIL </a></li>
                       
                         

                    </ul>
                </li>
                <li class="panel ">
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle collapsed" data-target="#form-nav">
                        <i class="icon-pencil"></i> CV MANAGEMENT
	   
                        <span class="pull-right">
                            <i class="icon-angle-left"></i>
                        </span>
                          &nbsp; <span class="label label-success"></span>&nbsp;
                    </a>
                    <ul class="collapse" id="form-nav">
                        <li class=""><a href="<?php echo base_url()?>super_admin/add_cv"><i class="icon-angle-right"></i> ADD CV </a></li>
                        <li class=""><a href="<?php echo base_url()?>super_admin/manage_cv_list"><i class="icon-angle-right"></i> MANAGE CV </a></li>
                        <li class=""><a href="<?php echo base_url()?>super_admin/manage_cv_list_detail"><i class="icon-angle-right"></i> MANAGE CV DEtail</a></li>
                        
                    </ul>
                </li>

                <li class="panel">
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#pagesr-nav">
                        <i class="icon-table"></i> TIPS&&TRICKS
	   
                        <span class="pull-right">
                            <i class="icon-angle-left"></i>
                        </span>
                          &nbsp; <span class="label label-info"></span>&nbsp;
                    </a>
                    <ul class="collapse" id="pagesr-nav">
                        <li><a href="<?php echo base_url()?>super_admin/add_tips"><i class="icon-angle-right"></i> Add TIPS </a></li>
                        <li><a href="<?php echo base_url()?>super_admin/manage_add_tips"><i class="icon-angle-right"></i> MANAGE TIPS </a></li>
                        
                    </ul>
                </li>
                
                <li class="panel">
                    
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#chart-nav">
                        <i class="icon-bar-chart"></i> MANGE USER
	   
                        <span class="pull-right">
                            <i class="icon-angle-left"></i>
                        </span>
                          &nbsp; <span class="label label-danger">4</span>&nbsp;
                    </a>
                    
                    <ul class="collapse" id="chart-nav">



                         <li class=""><a href="<?php echo base_url()?>super_admin/manage_user_detail"><i class="icon-angle-right"></i> MANAGE USER  </a></li>
                         <li class=""> <?php
                                                $access_lavel = $this->session->userdata('access_lavel');
                                                if ($access_lavel==1) {
                                                    ?><a href="<?php echo base_url()?>super_admin/add_admin_list"><i class="icon-angle-right"></i> ADD Admin  </a> <?php } ?></li>
                         <li class=""><a href="<?php echo base_url()?>super_admin/manage_admin_detail"><i class="icon-angle-right"></i> Manage Admin  </a></li>
                       
                    </ul>
                
                </li>
                 

                
               
               
                </li>


              

                
               

            </ul>

</div>
        <!--END MENU SECTION -->

   <?php echo $dasherboard_main_content;?>

       

    <!-- FOOTER -->
    <div id="footer">
        <p>&copy;  binarytheme &nbsp;2014 &nbsp;</p>
    </div>
    <!--END FOOTER -->


    <!-- GLOBAL SCRIPTS -->
    <script src="<?php echo base_url();?>assets/plugins/jquery-2.0.3.min.js"></script>
     <script src="<?php echo base_url();?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <!-- END GLOBAL SCRIPTS -->

    <!-- PAGE LEVEL SCRIPTS -->
    <script src="<?php echo base_url();?>assets/plugins/flot/jquery.flot.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/flot/jquery.flot.resize.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/flot/jquery.flot.time.js"></script>
     <script  src="<?php echo base_url();?>assets/plugins/flot/jquery.flot.stack.js"></script>
    <script src="<?php echo base_url();?>assets/js/for_index.js"></script>
   
    <!-- END PAGE LEVEL SCRIPTS -->


</body>

    <!-- END BODY -->
</html>
