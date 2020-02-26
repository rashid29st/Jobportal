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
                serverPage='<?php echo base_url();?>welcome/check_customer_email_login/'+given_text;
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

function makerequest2(given_text,objID)
 {
	//alert(given_text);
        //var obj = document.getElementById(objID);
                serverPage='<?php echo base_url();?>checkout/check_login_email/'+given_text;
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
                                        if(xmlhttp.responseText=='User Not Found !')
                                        {
                                            document.getElementById('sbtn').disabled=true;
                                        }
                                         if(xmlhttp.responseText=='User Found')
                                        {
                                            document.getElementById('sbtn').disabled=false;
                                        }
		 }
	}
xmlhttp.send(null);
}
//-->
</script>

<div class="box">
    <div class="border-right">
        <div class="border-bot">
            <div class="border-left">
                <div class="left-top-corner">
                    <div class="right-top-corner">
                        <div class="inner">
                            <h3 style="color: red" >
              <?php
                $msg=$this->session->userdata('message');
                if($msg)
                {
                    echo $msg;
                    $this->session->unset_userdata('message');
                }
                
              
              ?>
          </h3>
                            <h2><span>LOGIN</span> Form</h2>
                            <form action="<?php echo base_url();?>user_log/check_user_login_cv" method="post" id="contacts-form">
                                <fieldset>
                                   
                                    <div class="field">
                                        <label>Your E-mail:</label>
                                        <input class="input-large span10" type="email" id="user_email" name="email_address" onblur="makerequest(this.value, 'res')"/><span style="color:red;font-size:15" id="res"/>
                                    </div>
                                    <div class="field">
                                        <label>Your PASSWORD</label>
                                        <input class="input-large span10" type="password"  id="user_password" name="password"/>
                                    </div>
                                    
                                    <div class="wrapper">
                                        <label>&nbsp;</label>
                                        <input type="submit"  class="link1">
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>