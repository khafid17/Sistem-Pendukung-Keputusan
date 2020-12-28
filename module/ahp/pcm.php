<?php $pri = $_POST['price'];?>
<?php $mul = $_POST['multi'];?>
<?php $ptg = $_POST['prestige'];?>
<table class='table table-bordered'>
	<tr>
		<td>Kriteria</td>
		<td>Price</td>
		<td>Multiuse</td>
		<td>Prestige</td>
	</tr>
	<tr>
		<td>Price</td>
		<td><?php echo $pri; ?></td>
		<td><?php echo $mul; ?></td>
		<td><?php echo $ptg;?></td>
	</tr>
	<tr>
		<td>Multiuse</td>
		<td><?php echo $pri; ?> / <?php echo $mul; ?> = <?php echo number_format($prim=$pri/$mul, 3); ?></td>
		<td><?php echo $mul; ?> / <?php echo $mul; ?> = <?php echo number_format($mm=$mul/$mul, 3); ?></td>
		<td><?php echo $mul; ?> / <?php echo $ptg; ?> = <?php echo number_format($mptg=$mul/$ptg, 3); ?></td>
	</tr>
	<tr>
		<td>Prestige</td>
		<td><?php echo $pri; ?> / <?php echo $ptg; ?> = <?php echo number_format($primul=$pri/$ptg, 3); ?></td>
		<td><?php echo $mul; ?> / <?php echo $ptg; ?> = <?php echo number_format($ptgmul=$mul/$ptg, 3); ?></td>
		<td><?php echo $ptg; ?> / <?php echo $ptg; ?> = <?php echo number_format($ptgptg=$ptg/$ptg, 3); ?></td>
	</tr>
</table>

<div class='col-md-12'>
	Iterasi-1<br>
	<?php
		echo "<table border=1>";
		echo "<tr><td>| ".number_format($pri,2)."</td><td> | ".number_format($mul,2)."</td><td colspan='2'> | ".number_format($ptg,2)." |</td> <td>| ".number_format($pri,2)."</td><td> | ".number_format($mul,2)."</td><td colspan='2'> | ".number_format($ptg,2)." |</td> <td>| ".$n1=(number_format($pri,2)*number_format($pri,2))+(number_format($mul,2)*number_format($prim,2))+(number_format($ptg,2)*number_format($primul,2))."</td><td>| ?</td></tr>";
		echo "<tr><td>| ".number_format($prim,2)."</td><td> | ".number_format($mm,2)."</td><td> | ".number_format($mptg,2)." |</td><td> X </td> <td>| ".number_format($prim,2)."</td><td> | ".number_format($mm,2)."</td><td> | ".number_format($mptg,2)." |</td> <td> = </td> <td>| ".$n2=(number_format($prim,2)*number_format($pri,2))+(number_format($mm,2)*number_format($prim,2))+(number_format($mptg,2)*number_format($primul,2))."</td></tr>";
		echo "<tr><td>| ".number_format($primul,2)."</td><td> | ".number_format($ptgmul,2)."</td><td colspan='2'> | ".number_format($ptgptg,2)." |</td> <td>| ".number_format($primul,2)."</td><td> | ".number_format($ptgmul,2)."</td><td colspan='2'> | ".number_format($ptgptg,2)." |</td> <td>| ?</td></tr>";
	?>
	
</div>