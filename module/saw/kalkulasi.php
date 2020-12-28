<h2>Bobot C1 : Pengalaman Kerja</h2>
<table class='table '>
	<tr>
		<th>Nama</th>
		<th>C1</th>
		<th>Bobot</th>
	</tr>
	
	<?php
		$qc1 = $con->query("select * from pegawai");
		while($rc1 = $qc1->fetch_array()){
	?>
	
	<tr>
		<th><?php echo $rc1['nama'];?></th>
		<th><?php echo $rc1['c1'];?></th>
		
	<?php 
		$qqc1 = $con->query("select max(c1) As C1 from pegawai");
		while($rrc1 = $qqc1->fetch_array()){
					
			echo "<th>".$rc1['c1']." / ".$rrc1['C1']."= "; 
			echo round($rc1['c1']/$rrc1['C1'],3); 
			echo "</th>";
			
		}
		echo "</tr>";
		}
	
	?>
</table>

<h2>Bobot C2 : Pendidikan</h2>
<table class='table '>
	<tr>
		<th>Nama</th>
		<th>C2</th>
		<th>Bobot</th>
	</tr>
	
	<?php
		$qc2 = $con->query("select * from pegawai");
		while($rc2 = $qc2->fetch_array()){
	?>
	
	<tr>
		<th><?php echo $rc2['nama'];?></th>
		<th><?php echo $rc2['c2'];?></th>
		
	<?php 
		$qqc2 = $con->query("select max(c2) As C2 from pegawai");
		while($rrc2 = $qqc2->fetch_array()){
			
			echo "<th>".$rc2['c2']." / ".number_format($rrc2['C2'],1)."= ".number_format($rc2['c2']/$rrc2['C2'],3)."</th>";
			
		}
		echo "</tr>";
		}
	
	?>
</table>

<h2>Bobot C3 : Usia</h2>
<table class='table '>
	<tr>
		<th>Nama</th>
		<th>C3</th>
		<th>Bobot</th>
	</tr>
	
	<?php
		$qc3 = $con->query("select * from pegawai");
		while($rc3 = $qc3->fetch_array()){
	?>
	
	<tr>
		<th><?php echo $rc3['nama'];?></th>
		<th><?php echo $rc3['c3'];?></th>
		
	<?php 
		$qqc3 = $con->query("select max(c3) As C3 from pegawai");
		while($rrc3 = $qqc3->fetch_array()){
			
			echo "<th>".$rc3['c3']." / ".$rrc3['C3']."= ".round($rc3['c3']/$rrc3['C3'],3)."</th>";
			
		}
		echo "</tr>";
		}
	
	?>
</table>

<h2>Bobot C4 : Status Perkawinan</h2>
<table class='table '>
	<tr>
		<th>Nama</th>
		<th>C4</th>
		<th>Bobot</th>
	</tr>
	
	<?php
		$qc4 = $con->query("select * from pegawai");
		while($rc4 = $qc4->fetch_array()){
	?>
	
	<tr>
		<th><?php echo $rc4['nama'];?></th>
		<th><?php echo $rc4['c4'];?></th>
		
	<?php 
		$qqc4 = $con->query("select min(c4) As C4 from pegawai");
		while($rrc4 = $qqc4->fetch_array()){
			
			echo "<th>".number_format($rrc4['C4'],1)." / ".$rc4['c4']."= ".number_format($rrc4['C4']/$rc4['c4'], 3)."</th>";
			
		}
		echo "</tr>";
		}
	
	?>
</table>

<h2>Bobot C5 : Alamat</h2>
<table class='table '>
	<tr>
		<th>Nama</th>
		<th>C5</th>
		<th>Bobot</th>
	</tr>
	
	<?php
		$qc5 = $con->query("select * from pegawai");
		while($rc5 = $qc5->fetch_array()){
	?>
	
	<tr>
		<th><?php echo $rc5['nama'];?></th>
		<th><?php echo $rc5['c5'];?></th>
		
	<?php 
		$qqc5 = $con->query("select min(c5) As C5 from pegawai");
		while($rrc5 = $qqc5->fetch_array()){
			
			echo "<th>".number_format($rrc5['C5'],1)." / ".$rc5['c5']."= ".number_format($rrc5['C5']/$rc5['c5'], 3)."</th>";
			
		}
		echo "</tr>";
		}
	
	?>
</table>

<h2>Bobot C6 : Hasil Test</h2>
<table class='table '>
	<tr>
		<th>Nama</th>
		<th>C6</th>
		<th>Bobot</th>
	</tr>
	
	<?php
		$qc6 = $con->query("select * from pegawai");
		while($rc6 = $qc6->fetch_array()){
	?>
	
	<tr>
		<th><?php echo $rc6['nama'];?></th>
		<th><?php echo $rc6['c6'];?></th>
		
	<?php 
		$qqc6 = $con->query("select max(c6) As C6 from pegawai");
		while($rrc6 = $qqc6->fetch_array()){
			
			echo "<th>".$rc6['c6']." / ".number_format($rrc6['C6'],1)."= ".number_format($rc6['c6']/$rrc6['C6'],3)."</th>";
			
		}
		echo "</tr>";
		}
	
	?>
</table>

<h2>Normalisasi</h2>
<table class='table '>
	<tr>
		<th>Nama</th>
		<th>C1</th>
		<th>C2</th>
		<th>C3</th>
		<th>C4</th>
		<th>C5</th>
		<th>C6</th>
		<th>Bobot</th>
	</tr>
	
	<?php
		$qn = $con->query("select * from pegawai");
		while($rn = $qn->fetch_array()){
	?>
	
	<tr>
		<th><?php echo $rn['nama'];?></th>
		
	<?php 
		$tn = $con->query("select max(c1) As C1, 
								  max(c2) As C2, 
								  max(c3) As C3, 
								  min(c4) As C4, 
								  min(c5) As C5, 
								  max(c6) As C6 
								  from pegawai");
								  
		while($rt = $tn->fetch_array()){
			
			$qs = $con->query("select * from saw");
			$rs = $qs->fetch_array();
			
			$b1=number_format(($rn['c1']/$rt['C1']) * $rs['c1'],3);
			$b2=number_format(($rn['c2']/$rt['C2']) * $rs['c2'],3);
			$b3=number_format(($rn['c3']/$rt['C3']) * $rs['c3'],3);
			$b4=number_format(($rt['C4']/$rn['c4']) * $rs['c4'],3);
			$b5=number_format(($rt['C5']/$rn['c5']) * $rs['c5'],3);
			$b6=number_format(($rn['c6']/$rt['C6']) * $rs['c6'],3);
			
			$hasil = number_format(($b1+$b2+$b3+$b4+$b5+$b6), 3);
			
			echo "<th>(".number_format($rn['c1']/$rt['C1'],3)."*".$rs['c1'].")=".$b1."+</th>";
			echo "<th>(".number_format($rn['c2']/$rt['C2'],3)."*".$rs['c2'].")=".$b2."+</th>";
			echo "<th>(".number_format($rn['c3']/$rt['C3'],3)."*".$rs['c3'].")=".$b3."+</th>";
			echo "<th>(".number_format($rt['C4']/$rn['c4'],3)."*".$rs['c4'].")=".$b4."+</th>";
			echo "<th>(".number_format($rt['C5']/$rn['c5'],3)."*".$rs['c5'].")=".$b5."+</th>";
			echo "<th>(".number_format($rn['c6']/$rt['C6'],3)."*".$rs['c6'].")=".$b6."</th>";
			
			echo "<th>".$hasil."</th>";
		
		$q = $con->query("insert into result(nama, c1, c2, c3, c4, c5, c6, bobot, status)values('".$rn['nama']."', '$b1', '$b2', '$b3', '$b4', '$b5', '$b6', '$hasil', 'n')");
		
		}
		echo "</tr>";
		}
	
	?>
</table>

<?php echo "<strong>Untuk Melihat Diagram <a href='index.php?mod=saw&act=diagram_saw'>Klik Disini</a></storng>"; ?>