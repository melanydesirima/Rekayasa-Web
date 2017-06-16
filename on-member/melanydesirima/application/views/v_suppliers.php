<?php
	if (empty($hasil)) {
		echo "Tidak ada data supplier";
	}
	else {
?>

<h3> Table Supplier </h3>

<table>
	<tr bgcolor="FF8844">
		<th> SupplierID </th>
		<th> CompanyName </th>
		<th> ContactName </th>
		<th> ContactTitle </th>
		<th> Address </th>
		<th> City </th>
		<th> Region </th>
		<th> PostalCode </th>
		<th> Country </th>
		<th> Phone </th>
		<th> Fax </th>
		<th> HomePage </th>
	</tr>

<?php
	$no = 1;
	foreach ($hasil as $data):
?>

<tr>
	<td> <?php echo $data->SupplierID; ?> </td>
	<td> <?php echo $data->CompanyName; ?> </td>
	<td> <?php echo $data->ContactName; ?> </td>
	<td> <?php echo $data->ContactTitle; ?> </td>
	<td> <?php echo $data->Address; ?> </td>
	<td> <?php echo $data->City; ?> </td>
	<td> <?php echo $data->Region; ?> </td>
	<td> <?php echo $data->PostalCode; ?> </td>
	<td> <?php echo $data->Country; ?> </td>
	<td> <?php echo $data->Phone; ?> </td>
	<td> <?php echo $data->Fax; ?> </td>
	<td> <?php echo $data->HomePage; ?> </td>
</tr>

<?php
	$no++;
	endforeach;
?>

</table>

<?php
}
?>