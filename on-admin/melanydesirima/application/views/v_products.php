<?php
	if (empty($hasil)) {
		echo "Tidak ada data products";
	}
	else {
?>

<h3> Table Products </h3>

<table>
	<tr bgcolor="FF8844">
		<th> ProductID </th>
		<th> ProductName </th>
		<th> SupplierID </th>
		<th> CategoryID </th>
		<th> QuantityPerUnit </th>
		<th> UnitPrice </th>
		<th> UnitsInStock </th>
		<th> UnitsOnOrder </th>
		<th> ReorderLevel </th>
		<th> Discontinued </th>
	</tr>

<?php
	$no = 1;
	foreach ($hasil as $data):
?>

<tr>
	<td> <?php echo $data->ProductID; ?> </td>
	<td> <?php echo $data->ProductName; ?> </td>
	<td> <?php echo $data->SupplierID; ?> </td>
	<td> <?php echo $data->CategoryID; ?> </td>
	<td> <?php echo $data->QuantityPerUnit; ?> </td>
	<td> <?php echo $data->UnitPrice; ?> </td>
	<td> <?php echo $data->UnitsInStock; ?> </td>
	<td> <?php echo $data->UnitsOnOrder; ?> </td>
	<td> <?php echo $data->ReorderLevel; ?> </td>
	<td> <?php echo $data->Discontinued; ?> </td>
</tr>

<?php
	$no++;
	endforeach;
?>

</table>

<?php
}
?>