<?php
	if (empty($hasil)) {
		echo "Tidak ada data order details";
	}
	else {
?>

<h3> Table Order Details </h3>

<table>
	<tr bgcolor="FF8844">
		<th> Order DetailsID </th>
		<th> OrderID </th>
		<th> ProductID </th>
		<th> UnitPrice </th>
		<th> Quantity </th>
		<th> Discount </th>
	</tr>

<?php
	$no = 1;
	foreach ($hasil as $data):
?>

<tr>
	<td> <?php echo $data->odID; ?> </td>
	<td> <?php echo $data->OrderID; ?> </td>
	<td> <?php echo $data->ProductID; ?> </td>
	<td> <?php echo $data->UnitPrice; ?> </td>
	<td> <?php echo $data->Quantity; ?> </td>
	<td> <?php echo $data->Discount; ?> </td>
</tr>

<?php
	$no++;
	endforeach;
?>

</table>

<?php
}
?>