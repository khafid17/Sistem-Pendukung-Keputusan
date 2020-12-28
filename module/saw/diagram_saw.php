<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Diagram SAW</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script type="text/javascript" src="assets/chartsjs/Charts.js"></script>
</head>
<body>
    <style type="text/css">
	    body{
		    font-family: roboto;
	    }
 
	    table{
		    margin: 0px auto;
	    }
	</style>
    
        TES

    <script>
		var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: ["Nadia", "Ayunda", "Budi", "Cyntia", "Kadir"],
				datasets: [{
					label: '',
					data: [
					<?php 
					$bobot_nadia = mysqli_query($con,"select * from result where nama='nadia'");
                    $hasil = mysqli_fetch_assoc($bobot_nadia);
                    echo $hasil['bobot'];
					?>, 
					<?php 
					$bobot_ayunda = mysqli_query($con,"select * from result where nama='ayunda'");
					$hasil = mysqli_fetch_assoc($bobot_ayunda);
                    echo $hasil['bobot'];
					?>, 
					<?php 
					$bobot_budi= mysqli_query($con,"select * from result where nama='budi'");
					$hasil = mysqli_fetch_assoc($bobot_budi);
                    echo $hasil['bobot'];
					?>, 
					<?php 
					$bobot_cyntia= mysqli_query($con,"select * from mahasiswa where fakultas='cyntia'");
					$hasil = mysqli_fetch_assoc($bobot_cyntia);
                    echo $hasil['bobot'];
					?>,
                    $bobot_kadir= mysqli_query($con,"select * from mahasiswa where fakultas='kadir'");
					$hasil = mysqli_fetch_assoc($bobot_kadir);
                    echo $hasil['bobot'];
					?>,
					],
					backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)'
					],
					borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)'
					],
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});
	</script>


</body>
</html>