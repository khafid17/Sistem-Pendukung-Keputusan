<script type="text/javascript">
$(function () {
    // Create the chart
    $('#container').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: 'Hasil Kalkulasi'
        },
        subtitle: {
            text: 'Klik kolom untuk lebih jelas</a>.'
        },
        xAxis: {
            type: 'category'
        },
        yAxis: {
            title: {
                text: 'Bobot'
            }

        },
        legend: {
            enabled: false
        },
        plotOptions: {
            series: {
                borderWidth: 0,
                dataLabels: {
                    enabled: true,
                    format: '{point.y:.1f}'
                }
            }
        },

        tooltip: {
            headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
            pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}</b> of total<br/>'
        },

        series: [{
            name: 'Detail',
            colorByPoint: true,
            data: [
				<?php
					$q1 = $con->query("select * from result where status='n' order by bobot desc");
					while($r1 = $q1->fetch_array()){
						echo "
							{
								name: '".$r1['nama']."',
								y: ".$r1['bobot'].",
								drilldown: '".$r1['id']."'
							},
						";
					}
				?>
			]
        }],
        drilldown: {
            series: [
				<?php
					
					$qd = $con->query("select * from result");
					while($rd = $qd->fetch_array()){
						echo "
						{
							name: '".$rd['nama']."',
							id: '".$rd['id']."',
							data: [
								[
									'C1 : Pengalaman Kerja',
									".$rd['c1']."
								],
								[
									'C2 : Pendidikan',
									".$rd['c2']."
								],
								[
									'C3 : Usia',
									".$rd['c3']."
								],
								[
									'C4 : Status Perkawinan',
									".$rd['c4']."
								],
								[
									'C5 : Alamat',
									".$rd['c5']."
								],
								[
									'C6 : Hasil Ujian',
									".$rd['c6']."
								],
							]
						},
						";
					}
					
				?>
			]
        }
    });
});
</script>
<script src="assets/highcharts/highcharts.js"></script>
<script src="assets/highcharts/data.js"></script>
<script src="assets/highcharts/drilldown.js"></script>

<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div></body>

<h2>Detail</h2>

<table class='table table-bordered'>
	<tr>
		<th>Nama</th>
		<th>Hasil</th>
	</tr>
	<?php
		$q = $con->query("select * from result where status='n' order by bobot desc");
		while($r = $q->fetch_array()){
			echo "
					<tr>
						<td>".$r['nama']."</td>
						<td>".$r['bobot']."</td>
					</tr>
			";
		}
	?>
</table>

<br>
<br>