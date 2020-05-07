<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<table>
			<tr>
				<th>Nama</th>
			</tr>
			<?php foreach ($data as $row) : ?>
				<tr>
					<td><?php echo $row->nama ?></td>
				</tr>
			<?php endforeach; ?>
		</table>
	</body>
</html>