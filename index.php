<!DOCTYPE html>
<html>
<head>
	<title>Visualisasi Data Menggunakan ChartJs - Ngoding Way Indonesia</title>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css">
</head>
<style>
	html{
		font-family: lato;
	}

	.container{
		margin: 100px;
	}
</style>
<body>
<div class="container">

	<h1>
	 Visualisasi Data Menggunakan ChartJs
	</h1>

	<h3>
		<u>Pelajaran Favorit Siswa Sma</u>
	</h3>

	<br>

	<canvas id="mychart" width="400" height="200"></canvas>

</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
<script>
	var ctx = document.getElementById("mychart");
	var mychart = new Chart(ctx, {
		type : "pie",
		data : {
			labels : ["ipa","ips","matematika","bahasa indonesia","bahasa inggris"],
			datasets : [{
				label : "Pelajaran Favorit Siswa",
				data : [<?php 
					include("koneksi.php");
				$jumlah_ipa = mysqli_query($conn,"SELECT * FROM mapel ORDER BY jumlah='ipa'");
				echo mysqli_num_rows($jumlah_ipa);?>,
				<?php 
				include("koneksi.php");
				$jumlah_ips = mysqli_query($conn,"SELECT * FROM mapel ORDER BY jumlah='ips'");
				echo mysqli_num_rows($jumlah_ips);?>,
				<?php 
				include("koneksi.php");
				$jumlah_mtk = mysqli_query($conn,"SELECT * FROM mapel ORDER BY jumlah='matematika'");
				echo mysqli_num_rows($jumlah_mtk);?>,
				<?php 
				include("koneksi.php");
				$jumlah_bindo = mysqli_query($conn,"SELECT * FROM mapel ORDER BY jumlah='bahasa indonesia'");
				echo mysqli_num_rows($jumlah_bindo);?>,
				<?php 
				include("koneksi.php");
				$jumlah_bing = mysqli_query($conn,"SELECT * FROM mapel ORDER BY jumlah='bahasa inggris'");
				echo mysqli_num_rows($jumlah_bing);?>],
				backgroundColor : [
				'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)'],
                borderColor : [
            'rgba(255, 99, 132, 1)',
            'rgba(255, 99, 132, 1)',
             'rgba(255, 99, 132, 1)',
             'rgba(255, 99, 132, 1)',
             'rgba(255, 99, 132, 1)'],
                borderWidth : 1
			}]
		},
		options : {
			scales : {
				yAxes : [{
					ticks : {
						beginAtZero: true
					}
				}]
			}
		}
	});
</script>
</body>
</html>