<?php 

    include("../connection/con1.php");

/*	$from=$_POST['from'];
	$to=$_POST['to'];
	$selection=$_POST['selection'];
	$csv=$_POST['csv'];
*/	
 
	 $b_name=$_GET['b_name'];
	 //$b_name="chocolate";
	 $query="select * from brand_master where brand_name='$b_name'";
	 //echo "$query";
	 $result_2=mysql_query($query);
	 $row=mysql_fetch_assoc($result_2);
	 $str="<div style='padding-left:50px;padding-top:10px'>
				<table border='1' cellpadding='10'>
					<tr>
						<th>Brand Name</th><th colspan='2'>Opening</th><th colspan='2'>Closing</th><th>Purchase Rate</th><th>Sale Rate</th>
					</tr>
					<tr>
						<th></th><th>Upper</th><th>Lower</th><th>Upper</th><th>Lower</th><th></th><th></th>
					</tr>";

	$str.="<tr>
				<td id='brand_name' onclick='get_brand_details(this.id)'>".$row['brand_name']."</td><td id='opening_upper'>".$row['upper_available']."</td><td id='opening_lower'>".$row['lower_available']."</td><td id='closing_upper'>".$row['qty1']."</td><td id='closing_lower'>".$row['qty2']."</td><td id='pur'>".$row['pur']."</td><td id='sal'>".$row['sal']."</td>
			</tr>";

	$str.="</table>
		</div><div id='container' style='min-width: 400px; height: 400px; margin: 0 auto'></div>";
	echo "$str"
?>
<html>
	<head>
		<script type="text/javascript" src="../js/jquery-1.5.1.min.js"></script>
		<script type="text/javascript">
	$(function () {
    var chart;
	 $(document).ready(function() {
		b_name=document.getElementById("brand_name").innerHTML;
		opening_upper=document.getElementById("opening_upper").innerHTML;
		opening_lower=document.getElementById("opening_lower").innerHTML;
		closing_upper=document.getElementById("closing_upper").innerHTML;
		closing_lower=document.getElementById("closing_lower").innerHTML;
		pur=document.getElementById("pur").innerHTML;
		sal=document.getElementById("sal").innerHTML;
		
		//alert(b_name+"-----"+opening_upper+"-----"+opening_lower+"-----"+closing_upper+"-----"+closing_lower+"-----"+pur)
        chart = new Highcharts.Chart({
            chart: {
                renderTo: 'container',
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false
            },
            title: {
                text: b_name+' Graph Report'
            },
            tooltip: {
                formatter: function() {
                    return '<b>'+ this.point.name +'</b>: '+ Math.round(this.percentage,'2') +' %';
                }
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: true,
                        color: '#000000',
                        connectorColor: '#000000',
                        formatter: function() {
                            return '<b>'+ this.point.name +'</b>: '+ Math.round(this.percentage,5) +' %';
                        }
                    }
                }
            },
            series: [{
                type: 'pie',
                name: 'Browser share',
                data: [
                    ['Opening Upper',   parseInt(opening_upper)],
                    ['Opening Lower',   parseFloat(opening_lower)],
                    {
                        name: 'Closing Upper',
                        y: parseFloat(closing_upper),
                        sliced: true,
                        selected: true
                    },
                    ['Closing Lower',    parseFloat(closing_lower)],
                   ]
            }]
        });
    });
    
});
		</script>
	</head>
	<body>
	
	
	
	 <script src="../js/highcharts.js"></script>
	 <script src="../js/modules/exporting.js"></script>
	</body>
</html>

