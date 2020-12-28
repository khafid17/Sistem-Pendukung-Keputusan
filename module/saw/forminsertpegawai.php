<form method='post' action='index.php?mod=saw&act=prosesinsertpegawai'>
<?php
	
	$j = $_POST['jml'];
	for($i=1;$i<=$j;$i++){
		echo "
			<div class='col-md-2'>
			<div class='form-group'>
				<label>Pegawai ke ".$i."</label>
				<input type='text' name='nama[]' class='form-control'>
			</div>
			<div class='form-group'>
				<label>C1 : Pengalaman Kerja</label>
				<input type='text' name='c1[]' class='form-control'>
			</div>
			<div class='form-group'>
				<label>C2 : Pendidikan</label>
				<input type='text' name='c2[]' class='form-control'>
			</div>
			<div class='form-group'>
				<label>C3 : Usia</label>
				<input type='text' name='c3[]' class='form-control'>
			</div>
			<div class='form-group'>
				<label>C4 : Status</label>
				<input type='text' name='c4[]' class='form-control'>
			</div>
			<div class='form-group'>
				<label>C5 : Alamat</label>
				<input type='text' name='c5[]' class='form-control'>
			</div>
			<div class='form-group'>
				<label>C6 : Hasil Test</label>
				<input type='text' name='c6[]' class='form-control'>
			</div>
			</div>
		";
	}
	
?>
		<div class='col-md-4'>
			<div class='form-group'>
				<input type='submit' value='Proses' class='btn btn-primary'>
			</div>
		</div>
</form>