<?php
	if (empty($hasil)) {
		echo "Tidak ada data shippers";
	}
	else {
?>

<h3> Table Shippers </h3>

<table>
	<tr bgcolor="FF8844">
		<th> ShipperID </th>
		<th> CompanyName </th>
		<th> Phone </th>
	</tr>

<?php
	$no = 1;
	foreach ($hasil as $data):
?>

<tr>
	<td> <?php echo $data->ShipperID; ?> </td>
	<td> <?php echo $data->CompanyName; ?> </td>
	<td> <?php echo $data->Phone; ?> </td>
</tr>

<?php
	$no++;
	endforeach;
?>

</table>

<?php
}
?>