
<h3>Available Cars:</h3>

<p>
<table class="table table-striped table-bordered table-hove">
	<thead>
		<tr>
			<th>Car id</th>
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

<h3>Booked Cars:</h3>

<p>
<table class="table table-striped table-bordered table-hove">
	<thead>
		<tr>
			<th>Car id</th>
			<th>Car</th>
			<th>User</th>
			<th>Days</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($booked as $car): ?>
			<tr>
				<td><?php echo $car->id; ?></td>
				<td><?php echo $car->brand." ".$car->model; ?></td>
				<td><?php echo $car->user; ?></td>
				<td><?php echo $car->start_rent_time." - ".$car->end_rent_time; ?></td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>
</p>
