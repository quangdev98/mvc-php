<h2>Index Page</h2>
<table>
	<thead>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Nội dung</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($data['data'] as $val){ ?>
			<tr>
				<td><?= $val->id; ?></td>
				<td><?= $val->title; ?></td>
				<td><?= $val->content; ?></td>
			</tr>
		<?php } ?>
	</tbody>
</table>










