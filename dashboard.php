<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<!-- Apple iOS and Android stuff (do not remove) -->
<meta name="apple-mobile-web-app-capable" content="no" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />

<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no,maximum-scale=1" />

<!-- Required Stylesheets -->


<link rel="stylesheet" type="text/css" href="css/reset.css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/text.css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/fonts/ptsans/stylesheet.css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/fluid.css" media="screen" />

<link rel="stylesheet" type="text/css" href="css/mws.style.css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/icons/16x16.css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/icons/24x24.css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/icons/32x32.css" media="screen" />

<!-- Demo and Plugin Stylesheets -->
<link rel="stylesheet" type="text/css" href="css/demo.css" media="screen" />

<link rel="stylesheet" type="text/css" href="plugins/colorpicker/colorpicker.css" media="screen" />
<link rel="stylesheet" type="text/css" href="plugins/imgareaselect/css/imgareaselect-default.css" media="screen" />
<link rel="stylesheet" type="text/css" href="plugins/fullcalendar/fullcalendar.css" media="screen" />
<link rel="stylesheet" type="text/css" href="plugins/fullcalendar/fullcalendar.print.css" media="print" />
<link rel="stylesheet" type="text/css" href="plugins/chosen/chosen.css" media="screen" />
<link rel="stylesheet" type="text/css" href="plugins/prettyphoto/css/prettyPhoto.css" media="screen" />
<link rel="stylesheet" type="text/css" href="plugins/tipsy/tipsy.css" media="screen" />
<link rel="stylesheet" type="text/css" href="plugins/sourcerer/Sourcerer-1.2.css" media="screen" />
<link rel="stylesheet" type="text/css" href="plugins/jgrowl/jquery.jgrowl.css" media="screen" />
<link rel="stylesheet" type="text/css" href="plugins/fileinput/css/fileinput.css" media="screen" />
<link rel="stylesheet" type="text/css" href="plugins/spinner/ui.spinner.css" media="screen" />
<link rel="stylesheet" type="text/css" href="plugins/timepicker/timepicker.css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/jui/jquery.ui.css" media="screen" />

<link id="ll" rel="stylesheet" type="text/css" href="css/core/form.css" media="screen" />

<!-- Theme Stylesheet -->
<link rel="stylesheet" type="text/css" href="css/mws.theme.css" media="screen" />

<link rel="stylesheet" type="text/css" href="css/tablecloth.css" media="screen" />


<script type="text/javascript" src="js/tablecloth.js"></script>
<!-- JavaScript Plugins -->
<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="js/jquery.mousewheel-min.js"></script>

<!-- jQuery-UI Dependent Scripts -->
<script type="text/javascript" src="js/jquery-ui.js"></script>
<script type="text/javascript" src="plugins/spinner/ui.spinner.min.js"></script>
<script type="text/javascript" src="plugins/timepicker/timepicker-min.js"></script>
<script type="text/javascript" src="js/jquery.ui.touch-punch.min.js"></script>

<!-- Plugin Scripts -->
<script type="text/javascript" src="plugins/imgareaselect/jquery.imgareaselect.min.js"></script>
<script type="text/javascript" src="plugins/duallistbox/jquery.dualListBox-1.3.min.js"></script>
<script type="text/javascript" src="plugins/jgrowl/jquery.jgrowl-min.js"></script>
<script type="text/javascript" src="plugins/fileinput/js/jQuery.fileinput.js"></script>
<script type="text/javascript" src="plugins/fullcalendar/fullcalendar.min.js"></script>
<script type="text/javascript" src="plugins/chosen/chosen.jquery.min.js"></script>
<script type="text/javascript" src="plugins/prettyphoto/js/jquery.prettyPhoto-min.js"></script>
<!--[if lt IE 9]>
<script type="text/javascript" src="plugins/flot/excanvas.min.js"></script>
<![endif]-->

<script type="text/javascript" src="plugins/colorpicker/colorpicker-min.js"></script>
<script type="text/javascript" src="plugins/tipsy/jquery.tipsy-min.js"></script>
<script type="text/javascript" src="plugins/sourcerer/Sourcerer-1.2-min.js"></script>
<script type="text/javascript" src="plugins/placeholder/jquery.placeholder-min.js"></script>
<script type="text/javascript" src="plugins/validate/jquery.validate-min.js"></script>

<!-- Core Script -->
<script type="text/javascript" src="js/mws.js"></script>

<!-- Themer Script (Remove if not needed) -->
<script type="text/javascript" src="js/themer.js"></script>

    

<link type='text/css' href='css/basic.css' rel='stylesheet' media='screen' />
<script src="js/jquery_modal.js" type="text/javascript"></script>
<script src="js/jquery.simplemodal.js" type="text/javascript"></script>
<script src="js/basic.js" type="text/javascript"></script>

<script src=" ui/jquery.ui.core.js"></script>
<script src=" ui/jquery.ui.widget.js"></script>
<script src=" ui/jquery.ui.position.js"></script>
<script src=" ui/jquery.ui.autocomplete.js"></script>
	<link rel="stylesheet" href="base/jquery.ui.all.css">  
<link rel="stylesheet" href="panel/style.css" type="text/css" media="screen" />    
	
<style type="text/css">
Div#example_length label{
/*	width:500px;*/
}

</style>

<script type="text/javascript">
	$(document).ready(function()
	{
		
		document.getElementById("upper_menu").style.padding="15px";
		var load="<img src='images/ajax-loader.gif' alt='loading...' />";
			
		
		
		$("#salesman").click(function(){
			document.getElementById("my_div").style.width="600px";
			document.getElementById("my_sub_div").style.padding="0px";
			document.getElementById("ques_header").innerHTML="Salesman";
			document.getElementById("upper_menu").innerHTML="<ul><li><a href='#' class='mws-ic-16 ic-cross' id='delete_salesman'>Delete Salesman</a></li><li><a href='#' class='mws-ic-16 ic-arrow-refresh' id='view_salesman'>View Salesman</a></li></ul>";
			
			$("#my_sub_div").html(load).load("forms/salesman_details.php");	
					
		});
		
		$("#broker").click(function(){
			document.getElementById("my_div").style.width="600px";
			document.getElementById("my_sub_div").style.padding="0px";
			document.getElementById("ques_header").innerHTML="Broker";
			document.getElementById("upper_menu").innerHTML="<ul><li><a href='#' class='mws-ic-16 ic-cross' id='delete_broker'>Delete Broker</a></li><li><a href='#' class='mws-ic-16 ic-arrow-refresh' id='view_broker'>View Broker</a></li></ul>";
			
			
			$("#my_sub_div").html(load).load("forms/broker_details.php");	
					
		});
		
		$("#narration").click(function(){
			document.getElementById("my_div").style.width="750px";
			document.getElementById("my_sub_div").style.padding="0px";
			document.getElementById("ques_header").innerHTML="Narration Details";
			document.getElementById("upper_menu").innerHTML="<ul><li><a href='#' class='mws-ic-16 ic-cross' id='delete_narration'>Delete Narration</a></li><li><a href='#' class='mws-ic-16 ic-arrow-refresh' id='view_narration'>View Narration</a></li></ul>";
			var load="<img src='images/ajax-loader.gif' alt='loading...' />";
			$("#my_sub_div").html(load).load("forms/narattion_det.php");	
				
		});
		
		$("#brand").click(function(){
			//alert(document.getElementById("my_div").style.width);
			document.getElementById("my_div").style.width="1050px";
			document.getElementById("my_sub_div").style.padding="0px";
			document.getElementById("ques_header").innerHTML="Brand Master";
			document.getElementById("upper_menu").innerHTML="<ul><li><a href='#' class='mws-ic-16 ic-cross' id='delete_brand'>Delete Brand</a></li><li><a href='#' class='mws-ic-16 ic-arrow-refresh' id='view_salesman'>View Brands</a></li></ul>";
			var load="<img src='images/ajax-loader.gif' alt='loading...' />";
			$("#my_sub_div").html(load).load("forms/brand_master.php");	
					
		});
		
		$("#item").click(function(){
			document.getElementById("my_div").style.width="90%";
			document.getElementById("my_sub_div").style.padding="0px";
			document.getElementById("ques_header").innerHTML="Item Master";
			document.getElementById("upper_menu").innerHTML="<ul><li><a href='#' class='mws-ic-16 ic-cross' id='delete_item'>Delete Item</a></li><li><a href='#' class='mws-ic-16 ic-arrow-refresh' id='view_salesman'>View Item</a></li></ul>";
			var load="<img src='images/ajax-loader.gif' alt='loading...' />";
			$("#my_sub_div").html(load).load("forms/item_master.php");	
					
		})
		
		$("#purchase").click(function(){
			document.getElementById("my_div").style.width="1060px";
			document.getElementById("my_sub_div").style.padding="0px";
			document.getElementById("ques_header").innerHTML="Purchase Entry";
			document.getElementById("upper_menu").innerHTML="<ul><li><a href='#' class='mws-ic-16 ic-cross' id='delete_purchase'>Delete Purchase Account</a></li><li><a href='#' class='mws-ic-16 ic-arrow-refresh' id='view_salesman'>View Purchase Entry</a></li></ul>";
			var load="<img src='images/ajax-loader.gif' alt='loading...' />";
			$("#my_sub_div").html(load).load("forms/purchase_det.php");	
					
		})
		
		$("#sale").click(function(){
			document.getElementById("my_div").style.width="1080px";
			document.getElementById("my_sub_div").style.padding="0px";
			document.getElementById("ques_header").innerHTML="Sales Details";
			document.getElementById("upper_menu").innerHTML="<ul><li><a href='#' class='mws-ic-16 ic-cross' id='delete_sale'>Delete Sale Account </a></li><li><a href='#' class='mws-ic-16 ic-arrow-refresh' id='view_salesman'>View Sale Entry</a></li></ul>";
			var load="<img src='images/ajax-loader.gif' alt='loading...' />";
			$("#my_sub_div").html(load).load("forms/sale_det.php");	
					
		})
		
		
		$("#account").click(function(){
			document.getElementById("my_div").style.width="1080px";
			document.getElementById("my_sub_div").style.padding="0px";
			document.getElementById("ques_header").innerHTML="Account Master";
			document.getElementById("upper_menu").innerHTML="<ul><li><a href='#' class='mws-ic-16 ic-cross' id='delete_account'>Delete Account</a></li><li><a href='#' class='mws-ic-16 ic-arrow-refresh' id='view_account'>View Account</a></li></ul>";
			var load="<img src='images/ajax-loader.gif' alt='loading...' />";
			$("#my_sub_div").html(load).load("forms/acc_det_info.php");	
					
		})
		
		
		$("#bank").click(function(){
			document.getElementById("my_div").style.width="1050px";
			document.getElementById("my_sub_div").style.padding="0px";
			document.getElementById("ques_header").innerHTML="Bank Book";
			document.getElementById("upper_menu").innerHTML="<ul><li><a href='#' class='mws-ic-16 ic-accept' id='salesman'>Add Salesman</a></li><li><a href='#' class='mws-ic-16 ic-cross' id='delete_salesman'>Delete Salesman</a></li><li><a href='#' class='mws-ic-16 ic-printer' id='update_salesman'>Update Salesman</a></li><li><a href='#' class='mws-ic-16 ic-arrow-refresh' id='view_salesman'>View Salesman</a></li></ul>";
			var load="<img src='images/ajax-loader.gif' alt='loading...' />";
			$("#my_sub_div").html(load).load("forms/bank_book.php");	
					
		})
		
		$("#city").click(function(){
			document.getElementById("my_div").style.width="600px";
			document.getElementById("my_sub_div").style.padding="0px";
			document.getElementById("ques_header").innerHTML="City Details";
			document.getElementById("upper_menu").innerHTML="<ul><li><a href='#' class='mws-ic-16 ic-cross' id='delete_city'>Delete City</a></li><li><a href='#' class='mws-ic-16 ic-arrow-refresh' id='view_city'>View City</a></li></ul>";
			var load="<img src='images/ajax-loader.gif' alt='loading...' />";
			$("#my_sub_div").html(load).load("forms/city_details.php");	
					
		})
		
		
		$("#asset_grp").click(function(){
			document.getElementById("my_sub_div").style.padding="0px";
			var load="<img src='images/ajax-loader.gif' alt='loading...' />";
			$("#my_sub_div").html(load).load("forms/asset_grp.php");	
					
		})
		
		
		$("#group").toggle(function(){document.getElementById("group").className='mws-i-24 i-folder-1'},function(){document.getElementById("group").className='mws-i-24 i-folder'});
			
		$(".trigger").click(function(){
			$(".panel").toggle("fast");
			$(this).toggleClass("active");
			return false;
		});
	
	});
	
	
	
</script>

<title>MWS Admin - Dashboard</title>

</head>

<body>

		<!-- Header -->
	<div id="mws-header" class="clearfix">
    
    	<!-- Logo Container -->
    	<div id="mws-logo-container">
        
        	<!-- Logo Wrapper, images put within this wrapper will always be vertically centered -->
        	<div id="mws-logo-wrap">
            	
			</div>
        </div>
        
        <!-- User Tools (notifications, logout, profile, change password) -->
        <div id="mws-user-tools" class="clearfix">
        
        	<!-- Notifications -->
        	
            <!-- Messages -->
            
            
            <!-- User Information and functions section -->
            <div id="mws-user-info" class="mws-inset">
            
            	<!-- User Photo -->
            	<div id="mws-user-photo">
                	<img src="example/profile.jpg" alt="User Photo" />
                </div>
                
                <!-- Username and Functions -->
                <div id="mws-user-functions">
                    <div id="mws-username">
                        Hello, Adminstrator
                    </div>
                    <ul>
                    	<li><a href="#">Profile</a></li>
                        <li><a href="#">Change Password</a></li>
                        <li><a href="index-2.html">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Start Main Wrapper -->
    <div id="mws-wrapper">
    
    	<!-- Necessary markup, do not remove -->
		<div id="mws-sidebar-stitch"></div>
		<div id="mws-sidebar-bg"></div>
        
        <!-- Sidebar Wrapper -->
        <div id="mws-sidebar">
        
        	<!-- Searchbox -->
        	<div id="mws-searchbox" class="mws-inset">
            	<form action="http://www.malijuthemeshop.com/themes/mws-admin/1.3/typography.html">
                	<input type="text" class="mws-search-input" />
                    <input type="submit" class="mws-search-submit" />
                </form>
            </div>
            
            <!-- Main Navigation -->
            <div id="mws-navigation">
            	<ul>
					<li>
                		<a href="#" class="mws-i-24 i-android">Masters</a>
                		<ul>
							<li><a href="#" class="mws-i-24 i-file-cabinet" id="account">Account Master</a></li>
							<li><a href="#" class="mws-i-24 i-address-book-2" id="item">Item Master</a></li>
							<li><a href="#" class="mws-i-24 i-creditcard" id="brand">Brand Master</a></li>
							<li>
								<a href="#" class="mws-i-24 i-folder" id="group">Group Master</a>
								<ul>
									<li><a href="#" id="asset_grp">Asset Group</a></li>
									<li><a href="#" id="liability">Liability Group</a></li>
									<li><a href="#" id="pl_debit">P & L debit Group</a></li>
									<li><a href="#" id="pl_credit">P & L credit Group</a></li>
								</ul> 
								
							</li>
							<li><a href="#" class="mws-i-24 i-male-contour" id="salesman">Salesman Master</a></li>
							<li><a href="#" class="mws-i-24 i-halloween-pumpkin" id="broker">Broker Master</a></li>
							<li><a href="#" class="mws-i-24 i-help" id="narration">Narration Master</a></li>
							<li><a href="#" class="mws-i-24 i-home" id="city">City Master</a></li>
						</ul>
					</li>	
					<li>
						<a href="#" class="mws-i-24 i-price-tag">Transactions</a>
						<ul>
							<li><a href="#" class="mws-i-24 i-arrow-down" id="purchase">Purchase Entry</a></li>
							<li><a href="#" class="mws-i-24 i-arrow-up" id="sale">Sales Details</a></li>
							<li><a href="#" class="mws-i-24 i-clipboard-1" id="bank">Bank book</a></li>
						</ul>
					</li>
					<li>
						<a href="report_home.php" class="mws-i-24 i-price-tag">Reports</a>
						
					</li>
							
                	
                </ul>
            </div>            
        </div>
        
        <!-- Main Container Start -->
        <div id="mws-container" class="clearfix">
        
        	<!-- Inner Container Start -->
            <div class="container" >
            <div class='mws-panel grid_8' id="my_div" style='width:600px'>
                	<div class='mws-panel-header'>
                    	<span class='mws-i-24 i-list' id="ques_header">Add Question</span>
                    </div>
                    <div class='mws-panel-body'>
                		<form class='mws-form'>
                			<div class='mws-panel-toolbar top clearfix' id="upper_menu">
								
							</div>
							<div class='mws-form-inline' id='my_sub_div'>
								
							</div>
							
						</form>
					</div>
			</div>
            <!-- Inner Container End -->
                       
            <!-- Footer -->
            <div id="mws-footer">
            	Copyright © 2012 Science and Technology Park,University of Pune
            </div>
            
        </div>
        <div id="msg" style='visibility: hidden'></div>
        <!-- Main Container End -->
        
    </div>
	</div>
	
	<div class="panel" style="position:absolute;">
		<div style="color:#FFFFFF">
			Pankaj Swami
		</div>
	</div>

	<a class="trigger" href="#QueryBuilder">Add Filter</a>
	
</body>
</html>