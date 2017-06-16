<?php
	if (empty($hasil)) {
		echo "Tidak ada data orders";
	}
	else {
?>

<h3> Table Orders </h3>

<table>
	<tr bgcolor="FF8844">
		<th> OrderID </th>
		<th> CustomerID </th>
		<th> EmployeeID </th>
		<th> OrderDate </th>
		<th> RequiredDate </th>
		<th> ShippedDate </th>
		<th> ShipVia </th>
		<th> Freight </th>
		<th> ShipName </th>
		<th> ShipAddress </th>
		<th> ShipCity </th>
		<th> ShipRegion </th>
		<th> ShipPostalCode </th>
		<th> ShipCountry </th>
	</tr>

<?php
	$no = 1;
	foreach ($hasil as $data):
?>

<tr>
	<td> <?php echo $data->OrderID; ?> </td>
	<td> <?php echo $data->CustomerID; ?> </td>
	<td> <?php echo $data->EmployeeID; ?> </td>
	<td> <?php echo $data->OrderDate; ?> </td>
	<td> <?php echo $data->RequiredDate; ?> </td>
	<td> <?php echo $data->ShippedDate; ?> </td>
	<td> <?php echo $data->ShipVia; ?> </td>
	<td> <?php echo $data->Freight; ?> </td>
	<td> <?php echo $data->ShipName; ?> </td>
	<td> <?php echo $data->ShipAddress; ?> </td>
	<td> <?php echo $data->ShipCity; ?> </td>
	<td> <?php echo $data->ShipRegion; ?> </td>
	<td> <?php echo $data->ShipPostalCode; ?> </td>
	<td> <?php echo $data->ShipCountry; ?> </td>
</tr>

<?php
	$no++;
	endforeach;
?>

</table>

<?php
}
?>