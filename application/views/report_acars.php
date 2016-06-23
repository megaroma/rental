
<h3>Available Cars:</h3>

<p>
<table class="table table-striped table-bordered table-hove">
	<thead>
		<tr>
			<th>ID</th>
			<th>Car</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($available as $car): ?>
			<tr>
				<td><?php echo $car->id; ?></td>
				<td><?php echo $car->brand." ".$car->model; ?></td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>
</p>


<?php echo count($available); ?>