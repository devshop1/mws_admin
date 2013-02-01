/*
 * SimpleModal Basic Modal Dialog
 * http://www.ericmmartin.com/projects/simplemodal/
 * http://code.google.com/p/simplemodal/
 *
 * Copyright (c) 2010 Eric Martin - http://ericmmartin.com
 *
 * Licensed under the MIT license:
 *   http://www.opensource.org/licenses/mit-license.php
 *
 * Revision: $Id: basic.js 254 2010-07-23 05:14:44Z emartin24 $
 */
jQuery(function ($) {
	// Load dialog on page load
	//$('#basic-modal-content').modal();
	// Load dialog on click
	$('#code').click(function (e) {
								
									 var gr_code=document.getElementById("gr_no").value;
									  //alert(name)
									  $('#basic-modal-content_code').load("forms/fetch_grp.php",{gr_code:gr_code},function(responseText){
									  //alert(responseText)
									});
								//	  alert(1)
		$('#basic-modal-content_code').modal();
	});
	
		return false;
	});
