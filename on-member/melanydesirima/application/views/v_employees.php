<?php
	if (empty($hasil)) {
		echo "Tidak ada data employee";
	}
	else {
?>

<h3> Table Employees </h3>

<table>
	<tr bgcolor="FF8844">
		<th> EmployeeID </th>
		<th> LastName </th>
		<th> FirstName </th>
		<th> Title </th>
		<th> TitleOfCourtesy </th>
		<th> BirthDate </th>
		<th> HireDate </th>
		<th> Address </th>
		<th> City </th>
		<th> Region </th>
		<th> PostalCode </th>
		<th> Country </th>
		<th> HomePhone </th>
		<th> Extension </th>
		<th> Photo </th>
		<th> Notes </th>
		<th> ReportsTo </th>
		<th> Sex </th>
	</tr>

<?php
	$no = 1;
	foreach ($hasil as $data):
?>

<tr>
	<td> <?php echo $data->EmployeeID; ?> </td>
	<td> <?php echo $data->LastName; ?> </td>
	<td> <?php echo $data->FirstName; ?> </td>
	<td> <?php echo $data->Title; ?> </td>
	<td> <?php echo $data->TitleOfCourtesy; ?> </td>
	<td> <?php echo $data->BirthDate; ?> </td>
	<td> <?php echo $data->HireDate; ?> </td>
	<td> <?php echo $data->Address; ?> </td>
	<td> <?php echo $data->City; ?> </td>
	<td> <?php echo $data->Region; ?> </td>
	<td> <?php echo $data->PostalCode; ?> </td>
	<td> <?php echo $data->Country; ?> </td>
	<td> <?php echo $data->HomePhone; ?> </td>
	<td> <?php echo $data->Extension; ?> </td>
	<td> <?php echo $data->Photo; ?> </td>
	<td> <?php echo $data->Notes; ?> </td>
	<td> <?php echo $data->ReportsTo; ?> </td>
	<td> <?php echo $data->sex; ?> </td>
</tr>

<?php
	$no++;
	endforeach;
?>

</table>

<?php
}
?>