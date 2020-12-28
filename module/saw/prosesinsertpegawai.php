<?php
	$nama 	= $_POST['nama'];
	$c1 	= $_POST['c1'];
	$c2 	= $_POST['c2'];
	$c3 	= $_POST['c3'];
	$c4 	= $_POST['c4'];
	$c5 	= $_POST['c5'];
	$c6 	= $_POST['c6'];
	$count 	= count($nama);
	
	for($i=0;$i<$count;$i++){
		$q = $con->query("insert into pegawai(nama, 
												c1, c2, c3, 
												c4, c5, c6)
										values('$nama[$i]',
												'$c1[$i]', '$c2[$i]', '$c3[$i]',
												'$c4[$i]', '$c5[$i]', '$c6[$i]'
												)");
	}
	
	if($q){
		echo "
				<div class='alert alert-success'>
					<strong>Success!</strong> Data Berhasil Dimasukkan 
					Proses <a href='index.php?mod=saw&act=kalkulasi'>Klik Disini</a>.
				</div>
			";
	}
?>