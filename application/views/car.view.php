<div class="container">
<h1>Car Detail</h1>

<img src="assets/imgs/cars/<?php echo $car->photo; ?>">

			<ul>
				<li>Brand: <b><?php echo $car->brand; ?></b></li>
				<li>Model: <b><?php echo $car->model; ?></b></li>
				<li>Type: <b><?php echo $car->type; ?></b></li>
				<li>Color: <b><?php echo $car->color; ?></b></li>
				<li>Mileage: <b><?php echo $car->mileage; ?></b></li>
				<li>Engine Size: <b><?php echo $car->engine_size; ?></b></li>
				<li>Year: <b><?php echo $car->year; ?></b></li>
				<li>Seats: <b><?php echo $car->seats; ?></b></li>
				<li>Price: <b><?php echo $car->price; ?></b></li>
			</ul>


</div>
