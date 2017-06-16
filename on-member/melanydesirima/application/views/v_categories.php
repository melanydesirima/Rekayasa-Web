<?php
	if (empty($hasil)) {
		echo "Tidak ada data category";
	}
	else {
?>

<h3> Table Category </h3>

<table>
	<tr bgcolor="FF8844">
		<th> CategoryID </th>
		<th> CategoryName </th>
		<th> Description </th>
		<th> Picture </th>
	</tr>

<?php
	$no = 1;
	foreach ($hasil as $data):
?>

<tr>
	<td> <?php echo $data->CategoryID; ?> </td>
	<td> <?php echo $data->CategoryName; ?> </td>
	<td> <?php echo $data->Description; ?> </td>
	<td> <?php echo $data->Picture; ?> </td>
</tr>

<?php
	$no++;
	endforeach;
?>

</table>

<?php
}
?>