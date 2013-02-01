		<script type="text/javascript">
			$(document).ready(function() {
				var ajax_load = "<img src='loading.gif' alt='Loading...' />";
				document.getElementById("ques_header").innerHTML="Add Center";
				document.getElementById("upper_menu").innerHTML="<ul><li><a href='#' class='mws-ic-16 ic-accept' id='add_center'>Add Center</a></li><li><a href='#' class='mws-ic-16 ic-cross' id='delete_cener'>Delete Center</a></li><li><a href='#' class='mws-ic-16 ic-printer' id='update_center'>Update Cener</a></li><li><a href='#' class='mws-ic-16 ic-arrow-refresh' id='view_center'>View Center</a></li></ul>";
				
				$("#add_grp").click(function() {
				
					var bsno = document.getElementById("bsno").value;
					var in_out = document.getElementById("in_out").value;
					var asset_heading = document.getElementById("asset_heading").value;
					var schd = document.getElementById("schd").value;
					var grp_type = document.getElementById("grp_type").value;
					
					
					alert(bsno+"---"+in_out+"---"+asset_heading+"---"+schd+"---"+grp_type);
					
					$("#msg").html(ajax_load).load("forms/asset_grp_add.php", {
						bsno:bsno,
						in_out:in_out,
						asset_heading:asset_heading,
						schd:schd,
						grp_type:grp_type
					}, function(responseText) {
						alert("Response:" + responseText);
					});
				});
				
				
					
			});

		</script>

		<?php
			echo "
				<div class='mws-form-row'>
					<label>BSNO :</label>
					<div class='mws-form-item small'>
						<input type='text' id='bsno' class='mws-textinput'/>
					</div>
                </div>
				<div class='mws-form-row'>
					<label>In / Out :</label>
					<div class='mws-form-item small'>
						<input type='text' id='in_out' class='mws-textinput'/>
				</div>
                </div>
				<div class='mws-form-row'>
					<label>Asset Heading :</label>
					<div class='mws-form-item small'>
						<input type='text' id='asset_heading' class='mws-textinput'/>
					</div>
                </div>
				<div class='mws-form-row'>
					<label>SCHD (Y / N) :</label>
					<div class='mws-form-item small'>
						<input type='text' id='schd' class='mws-textinput'/>
					</div>
                </div>
				<div class='mws-form-row'>
					<label>Select Group :</label>
					<div class='mws-form-item small'>
						<select id='grp_type'><option>Asset Group</option><option>Liability Group</option><option>P & L Debit Group</option><option>P & L Credit Group</option></select>
					</div>
                </div>
			</div>
			<div class='mws-button-row'>
				<input class='mws-button red' type='button' id='add_grp' value='Add'/>
				<button type='reset' id='reset' class='mws-button gray'>Reset</button>
				<button type='button' id='cancel' class='mws-button gray'>Cancel</button>
			<div id='main2' style='visibility:hidden'></div>";
		?>
