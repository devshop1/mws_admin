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
	$('#b_code').click(function (e) {
								 var item_name=document.getElementById("item_name").value;
									  //alert(item_name);
									  $('#brand_code_name').load("forms/fetch_brands.php",{item_name:item_name},function(responseText){
									  //alert(responseText)
									});
								
		$('#brand_code_name').modal();
	});
	
		return false;
	});
