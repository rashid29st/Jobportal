<script type="text/javascript">
<!--
//Create a boolean variable to check for a valid Internet Explorer instance.
var xmlhttp = false;
//Check if we are using IE.
try {
//If the Javascript version is greater than 5.
xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
//alert(xmlhttp);
//alert ("You are using Microsoft Internet Explorer.");
} catch (e) {
  //alert(e);
    
//If not, then use the older active x object.
try {
//If we are using Internet Explorer.
xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
//alert ("You are using Microsoft Internet Explorer");
} catch (E) {
   // alert(E);
//Else we must be using a non-IE browser.
xmlhttp = false;
}
}
//If we are using a non-IE browser, create a javascript instance of the object.
if (!xmlhttp && typeof XMLHttpRequest != 'undefined') {
xmlhttp = new XMLHttpRequest();
//alert ("You are not using Microsoft Internet Explorer");
}

function makerequest(given_text,objID)
 {
	//alert(given_text);
        //var obj = document.getElementById(objID);
                serverPage='<?php echo base_url();?>welcome/check_customer_email/'+given_text;
	xmlhttp.open("GET", serverPage);
	xmlhttp.onreadystatechange = function()
	 {
	//alert(xmlhttp.readyState);
	//alert(xmlhttp.status);
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
		 {
			//alert(xmlhttp.responseText);
                                        document.getElementById(objID).innerHTML = xmlhttp.responseText;
			//document.getElementById(objcw).innerHTML = xmlhttp.responseText;
                                        if(xmlhttp.responseText=='Email Address Alredy Exists !')
                                        {
                                            document.getElementById('sbtn').disabled=true;
                                        }
                                         if(xmlhttp.responseText=='Email Address Avilable')
                                        {
                                            document.getElementById('sbtn').disabled=false;
                                        }
		 }
	}
xmlhttp.send(null);
}

//function makerequest2(given_text,objID)
// {
//	//alert(given_text);
//        //var obj = document.getElementById(objID);
//                serverPage='<?php echo base_url();?>checkout/check_login_email/'+given_text;
//	xmlhttp.open("GET", serverPage);
//	xmlhttp.onreadystatechange = function()
//	 {
//	//alert(xmlhttp.readyState);
//	//alert(xmlhttp.status);
//		if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
//		 {
//			//alert(xmlhttp.responseText);
//                                        document.getElementById(objID).innerHTML = xmlhttp.responseText;
//			//document.getElementById(objcw).innerHTML = xmlhttp.responseText;
//                                        if(xmlhttp.responseText=='Email Address Alredy Exists !')
//                                        {
//                                            document.getElementById('sbtn').disabled=true;
//                                        }
//                                         if(xmlhttp.responseText=='Email Address Avilable')
//                                        {
//                                            document.getElementById('sbtn').disabled=false;
//                                        }
//		 }
////	}
//xmlhttp.send(null);
//}
//-->
</script>
<html lang="en">
    <head>
        <!--
                Charisma v1.0.0

                Copyright 2012 Muhammad Usman
                Licensed under the Apache License v2.0
                http://www.apache.org/licenses/LICENSE-2.0

                http://usman.it
                http://twitter.com/halalit_usman
        -->
        <meta charset="utf-8">
        <title>Free HTML5 Bootstrap Admin Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
        <meta name="author" content="Muhammad Usman">

        <!-- The styles -->
        <link id="bs-css" href="css/bootstrap-cerulean.css" rel="stylesheet">
        <style type="text/css">
            body {
                padding-bottom: 40px;
            }
            .sidebar-nav {
                padding: 9px 0;
            }
        </style>
        <link href="css/bootstrap-responsive.css" rel="stylesheet">
        <link href="css/charisma-app.css" rel="stylesheet">
        <link href="css/jquery-ui-1.8.21.custom.css" rel="stylesheet">
        <link href='css/fullcalendar.css' rel='stylesheet'>
        <link href='css/fullcalendar.print.css' rel='stylesheet'  media='print'>
        <link href='css/chosen.css' rel='stylesheet'>
        <link href='css/uniform.default.css' rel='stylesheet'>
        <link href='css/colorbox.css' rel='stylesheet'>
        <link href='css/jquery.cleditor.css' rel='stylesheet'>
        <link href='css/jquery.noty.css' rel='stylesheet'>
        <link href='css/noty_theme_default.css' rel='stylesheet'>
        <link href='css/elfinder.min.css' rel='stylesheet'>
        <link href='css/elfinder.theme.css' rel='stylesheet'>
        <link href='css/jquery.iphone.toggle.css' rel='stylesheet'>
        <link href='css/opa-icons.css' rel='stylesheet'>
        <link href='css/uploadify.css' rel='stylesheet'>

        <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <!-- The fav icon -->
        <link rel="shortcut icon" href="img/favicon.ico">

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"><style type="text/css">
            <!--
            body,td,th {
                color: #000000;
            }
            -->
        </style></head>

    <body>
        <div class="container-fluid">
            <div class="row-fluid">

                <div class="row-fluid">
                    <div class="span12 center login-header">
                        <div align="center"><h2>Welcome </h2>
                        </div><!--/span-->
                    </div><!--/row--><br>

                    <div class="span12 center login-header">
                        <div align="center"><h3>
                                <?php
                                $msg = $this->session->userdata('message');
                                if ($msg) {
                                    echo $msg;
                                    $this->session->unset_userdata('message');
                                }
                                ?>




                            </h3>
                        </div><!--/span-->
                    </div>
                    <br>

                    <div class="row-fluid">
                        <div class="well span5 center login-box">
                            <div align="center" class="alert alert-info">
                                ENTER YOUR INFORMATION FOR SIGNUP
                            </div>
                            <br>
                            <br>
                            <form class="form-horizontal" action="<?php echo base_url(); ?>welcome/save_user" method="post">
                                <fieldset>
                                    <div class="alert alert-info">
                                        <div align="center">Please Enter your Login User Name
                                        </div>
                                        <br>
                                    </div>
                                    <div class="input-prepend" title="Username" data-rel="tooltip">
                                        <div align="center">
                                            <p><span class="add-on"><i class="icon-user"></i></span>
                                                <input autofocus class="input-large span10" name="user_name" id="username" type="text" value="" />
                                            </p>

                                        </div>
                                    </div>
                                    <br>

                                    <div class="alert alert-info">
                                        <div align="center">Please Enter with your Login Password.
                                        </div>
                                    </div>
                                    <br>
                                    <div class="clearfix"></div>

                                    <div class="input-prepend" title="Password" data-rel="tooltip"> 
                                        <div align="center"><span class="add-on"><i class="icon-lock"></i></span>
                                            <input class="input-large span10" name="password" id="password" type="password" value="" />
                                        </div>
                                    </div>
                                    <br>
                                    <div class="alert alert-info">
                                        <div align="center">Enter with your FULL NAME
                                        </div>
                                        <br>
                                    </div>
                                    <div class="input-prepend" title="Name" data-rel="tooltip">
                                        <div align="center"><span class="add-on"><i class="icon-user"></i></span>
                                            <input autofocus class="input-large span10" name="full_name" id="username" type="text" value="" />
                                        </div>
                                    </div>
                                    <br>
                                    <div class="alert alert-info">
                                        <div align="center">Enter Your EMAIL
                                        </div>
                                    </div>
                                    <br>
                                    <div class="input-prepend" title="E-Mail" data-rel="tooltip">
                                        <div align="center"><span class="add-on"><i class="icon-user"></i></span>
                                            <input autofocus class="input-large span10" name="email_address" id="username" type="email" value="" onblur="makerequest(this.value, 'res')"/><span style="color:red;font-size:15" id="res"></span>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="alert alert-info">
                                        <div align="center">Please Enter with your Mobile Number
                                        </div>
                                    </div>
                                    <br>
                                    <div class="input-prepend" title="MPBILE-NO" data-rel="tooltip">
                                        <div align="center"><span class="add-on"><i class="icon-user"></i></span>
                                            <input autofocus class="input-large span10" name="mobile_no" id="username" type="text" value="01.." />
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>

                                    <div class="input-prepend">
                                        <label class="remember" for="remember">
                                            <div align="center">
                                                <input type="checkbox" id="remember" />
                                                Remember me</div>
                                        </label>
                                    </div>
                                    <div class="clearfix"></div>

                                    <p class="center span5">
                                    <div align="center">
                                        <input type="submit" class="large-field" value="user Registration" id="sbtn" name="btn"/>
                                        </p>
                                        
                                </fieldset>
                            </form>
                        </div><!--/span-->
                    </div><!--/row-->
                </div><!--/fluid-row-->

            </div><!--/.fluid-container-->

            <!-- external javascript
            ================================================== -->
            <!-- Placed at the end of the document so the pages load faster -->

            <!-- jQuery -->
            <script src="js/jquery-1.7.2.min.js"></script>
            <!-- jQuery UI -->
            <script src="js/jquery-ui-1.8.21.custom.min.js"></script>
            <!-- transition / effect library -->
            <script src="js/bootstrap-transition.js"></script>
            <!-- alert enhancer library -->
            <script src="js/bootstrap-alert.js"></script>
            <!-- modal / dialog library -->
            <script src="js/bootstrap-modal.js"></script>
            <!-- custom dropdown library -->
            <script src="js/bootstrap-dropdown.js"></script>
            <!-- scrolspy library -->
            <script src="js/bootstrap-scrollspy.js"></script>
            <!-- library for creating tabs -->
            <script src="js/bootstrap-tab.js"></script>
            <!-- library for advanced tooltip -->
            <script src="js/bootstrap-tooltip.js"></script>
            <!-- popover effect library -->
            <script src="js/bootstrap-popover.js"></script>
            <!-- button enhancer library -->
            <script src="js/bootstrap-button.js"></script>
            <!-- accordion library (optional, not used in demo) -->
            <script src="js/bootstrap-collapse.js"></script>
            <!-- carousel slideshow library (optional, not used in demo) -->
            <script src="js/bootstrap-carousel.js"></script>
            <!-- autocomplete library -->
            <script src="js/bootstrap-typeahead.js"></script>
            <!-- tour library -->
            <script src="js/bootstrap-tour.js"></script>
            <!-- library for cookie management -->
            <script src="js/jquery.cookie.js"></script>
            <!-- calander plugin -->
            <script src='js/fullcalendar.min.js'></script>
            <!-- data table plugin -->
            <script src='js/jquery.dataTables.min.js'></script>

            <!-- chart libraries start -->
            <script src="js/excanvas.js"></script>
            <script src="js/jquery.flot.min.js"></script>
            <script src="js/jquery.flot.pie.min.js"></script>
            <script src="js/jquery.flot.stack.js"></script>
            <script src="js/jquery.flot.resize.min.js"></script>
            <!-- chart libraries end -->

            <!-- select or dropdown enhancer -->
            <script src="js/jquery.chosen.min.js"></script>
            <!-- checkbox, radio, and file input styler -->
            <script src="js/jquery.uniform.min.js"></script>
            <!-- plugin for gallery image view -->
            <script src="js/jquery.colorbox.min.js"></script>
            <!-- rich text editor library -->
            <script src="js/jquery.cleditor.min.js"></script>
            <!-- notification plugin -->
            <script src="js/jquery.noty.js"></script>
            <!-- file manager library -->
            <script src="js/jquery.elfinder.min.js"></script>
            <!-- star rating plugin -->
            <script src="js/jquery.raty.min.js"></script>
            <!-- for iOS style toggle switch -->
            <script src="js/jquery.iphone.toggle.js"></script>
            <!-- autogrowing textarea plugin -->
            <script src="js/jquery.autogrow-textarea.js"></script>
            <!-- multiple file upload plugin -->
            <script src="js/jquery.uploadify-3.1.min.js"></script>
            <!-- history.js for cross-browser state change on ajax -->
            <script src="js/jquery.history.js"></script>
            <!-- application script for Charisma demo -->
            <script src="js/charisma.js"></script>


    </body>
</html>
