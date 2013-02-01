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


<!-- JavaScript Plugins -->
<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="js/jquery.mousewheel-min.js"></script>

<!-- jQuery-UI Dependent Scripts -->
<script type="text/javascript" src="js/jquery-ui.js"></script>
<script type="text/javascript" src="plugins/spinner/ui.spinner.min.js"></script>
<script type="text/javascript" src="plugins/timepicker/timepicker-min.js"></script>
<script type="text/javascript" src="js/jquery.ui.touch-punch.min.js"></script>


<link type='text/css' href='css/demo.css' rel='stylesheet' media='screen' />

<!-- Contact Form CSS files -->
<link type='text/css' href='css/basic.css' rel='stylesheet' media='screen' />
<script type='text/javascript' src='js/jquery.simplemodal.js'></script>

<!-- Plugin Scripts -->
<script type="text/javascript" src="plugins/imgareaselect/jquery.imgareaselect.min.js"></script>
<script type="text/javascript" src="plugins/duallistbox/jquery.dualListBox-1.3.min.js"></script>
<script type="text/javascript" src="plugins/jgrowl/jquery.jgrowl-min.js"></script>
<script type="text/javascript" src="plugins/fileinput/js/jQuery.fileinput.js"></script>
<script type="text/javascript" src="plugins/fullcalendar/fullcalendar.min.js"></script>
<script type="text/javascript" src="plugins/datas/jquery.dataTables-min.js"></script>
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



<style type="text/css">
.my_table{
	tr.odd td{
	background: none;
	}

	tr.even td{
	background: none;
	}
}

</style>

<script type="text/javascript">
	$(document).ready(function()
	{
		
		document.getElementById("upper_menu").style.padding="15px";
		var load="<img src='images/ajax-loader.gif' alt='loading...' />";
			
		$("#my_sub_div").html(load).load("forms/stock_all.php",{}, function (responseText){
						alert(responseText);
						//var data=responseText.split(",");
						//alert(data)
						//document.getElementById("my_sub_div").innerHTML="";
						var count=document.getElementById("count").value;
						//alert(count)
						var i=0;
						var brand_name=new Array();
						var opening_upper=new Array();
						var opening_lower=new Array();
						var closing_upper=new Array();
						var closing_lower=new Array();
						while(i<count)
						{
							brand_name[i]=document.getElementById(i+"_brand_name").innerHTML;
							opening_upper[i]=parseInt(document.getElementById(i+"_opening_upper").innerHTML);
							opening_lower[i]=parseInt(document.getElementById(i+"_opening_lower").innerHTML);
							closing_upper[i]=parseInt(document.getElementById(i+"_closing_upper").innerHTML);
							closing_lower[i]=parseInt(document.getElementById(i+"_closing_lower").innerHTML);
							i++;
						}
						//alert(brand_name)
			chart = new Highcharts.Chart({
            chart: {
                renderTo: 'container',
                type: 'column'
            },
            title: {
                text: 'Stock Availability'
            },
            xAxis: {
                //
					categories: brand_name
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Stock in nnumbers'
                },
                stackLabels: {
                    enabled: true,
                    style: {
                        fontWeight: 'bold',
                        color: (Highcharts.theme && Highcharts.theme.textColor) || 'gray'
                    }
                }
            },
            legend: {
                align: 'right',
                x: -100,
                verticalAlign: 'top',
                y: 20,
                floating: true,
                backgroundColor: (Highcharts.theme && Highcharts.theme.legendBackgroundColorSolid) || 'white',
                borderColor: '#CCC',
                borderWidth: 1,
                shadow: false
            },
            tooltip: {
                formatter: function() {
                    return '<b>'+ this.x +'</b><br/>'+
                        this.series.name +': '+ this.y +'<br/>'+
                        'Total: '+ this.point.stackTotal;
                }
            },
            plotOptions: {
                column: {
                    stacking: 'normal',
                    dataLabels: {
                        enabled: true,
                        color: (Highcharts.theme && Highcharts.theme.dataLabelsColor) || 'white'
                    }
                }
            },
            series: [{
                name: 'Opening Upper',
                //data: [10, 5]
				data: opening_upper
            }, {
                name: 'Opening Lower',
                data: opening_lower
            }, {
                name: 'Closing Upper',
                data: closing_upper
            }, {
                name: 'Closing Lower',
                data: closing_lower
            }]
        });
	
	
	});	
						
		
		/*$("#stock").click(function(){
			document.getElementById("my_div").style.width="800px";
			document.getElementById("my_sub_div").style.padding="0px";
			document.getElementById("ques_header").innerHTML="City Details";
			/*document.getElementById("upper_menu").innerHTML="<ul><li><a href='#' class='mws-ic-16 ic-accept' id='salesman'>Add Salesman</a></li><li><a href='#' class='mws-ic-16 ic-cross' id='delete_salesman'>Delete Salesman</a></li><li><a href='#' class='mws-ic-16 ic-printer' id='update_salesman'>Update Salesman</a></li><li><a href='#' class='mws-ic-16 ic-arrow-refresh' id='view_salesman'>View Salesman</a></li></ul>";*/
			/*var load="<img src='images/ajax-loader.gif' alt='loading...' />";
			//$("#my_sub_div").html(load).load("forms/city_details.php");	
			
			//alert("1")
			//$('#filter-modal').modal();
			
			$("#cls-modal").click(function (){
				var from=document.getElementById("from").value;
				var to=document.getElementById("to").value;
				if(document.getElementById("selection1").value=="on")
				{
					selection="all";
				}
				else
				{
					selection="selected";
				}
				
				if(document.getElementById("csv1").value=="on")
				{
					csv="purchase";
				}
				else if(document.getElementById("csv2").value=="on")
				{
					csv="sales";
				}
				else
				{
					csv="mrp";
				}
				
				/*var csv1=document.getElementById("csv1").value;
				var csv2=document.getElementById("csv2").value;
				var csv3=document.getElementById("csv3").value;*/
				
				//alert("From :"+from+"------To :"+to+"-------Selection"+selection+"------CSV :"+csv);
				
				/*$("#my_sub_div").html(load).load("forms/stock_all.php",{from:from,to:to,selection:selection,csv:csv}, function (responseText){
						//alert(responseText);
						//var data=responseText.split(",");
						//alert(data)
						//document.getElementById("my_sub_div").innerHTML="";
						var count=document.getElementById("count").value;
						alert(count)
						var i=0;
						var brand_name=new Array();
						var opening_upper=new Array();
						var opening_lower=new Array();
						var closing_upper=new Array();
						var closing_lower=new Array();
						while(i<count)
						{
							brand_name[i]=document.getElementById(i+"_brand_name").innerHTML;
							opening_upper[i]=parseInt(document.getElementById(i+"_opening_upper").innerHTML);
							opening_lower[i]=parseInt(document.getElementById(i+"_opening_lower").innerHTML);
							closing_upper[i]=parseInt(document.getElementById(i+"_closing_upper").innerHTML);
							closing_lower[i]=parseInt(document.getElementById(i+"_closing_lower").innerHTML);
							i++;
						}
						//alert(brand_name)
			chart = new Highcharts.Chart({
            chart: {
                renderTo: 'container',
                type: 'column'
            },
            title: {
                text: 'Stock Availability'
            },
            xAxis: {
                //
					categories: brand_name
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Stock in nnumbers'
                },
                stackLabels: {
                    enabled: true,
                    style: {
                        fontWeight: 'bold',
                        color: (Highcharts.theme && Highcharts.theme.textColor) || 'gray'
                    }
                }
            },
            legend: {
                align: 'right',
                x: -100,
                verticalAlign: 'top',
                y: 20,
                floating: true,
                backgroundColor: (Highcharts.theme && Highcharts.theme.legendBackgroundColorSolid) || 'white',
                borderColor: '#CCC',
                borderWidth: 1,
                shadow: false
            },
            tooltip: {
                formatter: function() {
                    return '<b>'+ this.x +'</b><br/>'+
                        this.series.name +': '+ this.y +'<br/>'+
                        'Total: '+ this.point.stackTotal;
                }
            },
            plotOptions: {
                column: {
                    stacking: 'normal',
                    dataLabels: {
                        enabled: true,
                        color: (Highcharts.theme && Highcharts.theme.dataLabelsColor) || 'white'
                    }
                }
            },
            series: [{
                name: 'Opening Upper',
                //data: [10, 5]
				data: opening_upper
            }, {
                name: 'Opening Lower',
                data: opening_lower
            }, {
                name: 'Closing Upper',
                data: closing_upper
            }, {
                name: 'Closing Lower',
                data: closing_lower
            }]
        });
				});	
				
				$.modal.close();
			});
					
		})*/
		
		//all_stock();
		
		
		
			
	});
	
	
	function get_brand_details(brand_id)
	{
		//alert(brand_id)
		var b_name=document.getElementById(brand_id).innerHTML;
		//alert(b_name)
		//$("#my_sub_div").html(load).load("forms/city_details.php");
		window.open("http://localhost/mws-admin_new/forms/get_selected_stock.php?b_name="+b_name);	
	}
	
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
						<a href="#" class="mws-i-24 i-price-tag">Reports</a>
						<ul>
							<li><a href="#" class="mws-i-24 i-arrow-down" id="stock">Stock Report</a></li>							
						</ul>
					</li>
                </ul>
            </div>            
        </div>
        
        <!-- Main Container Start -->
        <div id="mws-container" class="clearfix">
        
        	<!-- Inner Container Start -->
            <div class="container" >
            <div class='mws-panel grid_8' id="my_div" style='width:1000px'>
                	<div class='mws-panel-header'>
                    	<span class='mws-i-24 i-list' id="ques_header">All Reports</span>
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
                       
			<!-- Filter Modal -->		   
			<div id="filter-modal" style="padding:40px;height:250px;width:400px">
				<table style="padding:30px;" class="my_table">
					<tbody>
						<tr style="background:none">
							<td style="background:none"><strong>Date</strong></td>
						</tr>
						<tr style="background:none">
							<td style="background:none"></td><td style="background:none">From</td><td style="background:none"><input type="text" id="from"/></td>
						</tr>
						<tr style="background:none">
							<td style="background:none"></td><td style="background:none">To</td><td style="background:none"><input type="text" id="to"/></td>
						</tr>
						<tr style="background:none">
							<td style="background:none"><strong>Selection</strong></td>
						</tr>
						<tr style="background:none">
							<td style="background:none"></td><td style="background:none" colspan="2"><input type="radio" name="selection" id="selection1"/> All Items</td>
						</tr>
						<tr style="background:none">
							<td style="background:none"></td><td style="background:none" colspan="2"><input type="radio" name="selection" id="selection2"/> Selected Items</td>
						</tr>
						<tr style="background:none">
							<td style="background:none"><strong>Closing Stock Value</strong></td>
						</tr>
						<tr style="background:none">
							<td style="background:none"></td><td style="background:none" colspan="2"><input type="radio" name="csv" id="csv1"/> Purchase Avg Rate</td>
						</tr>
						<tr style="background:none">
							<td style="background:none"></td><td style="background:none" colspan="2"><input type="radio" name="csv" id="csv2"/> Sales Avg Rate</td>
						</tr>
						<tr style="background:none">
							<td style="background:none"></td><td style="background:none" colspan="2"><input type="radio" name="csv" id="csv3"/> M. R. P. Rate</td>
						</tr>
					</tbody>
				</table>
				<input type="button" id="cls-modal" value=" Ok "/>
			
			</div>
			
			<!-- Filter Modal End-->		   
					   
            <!-- Footer -->
            <div id="mws-footer">
            	Copyright © 2012 Science and Technology Park,University of Pune
            </div>
            
        </div>
        <div id="msg" style='visibility: hidden'></div>
        <!-- Main Container End -->
        <script src="js/highcharts.js"></script>
		<script src="js/modules/exporting.js"></script>
    </div>
	
</body>
</html>