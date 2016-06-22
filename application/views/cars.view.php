
<div class="container">
<h1>Cars</h1>
	<div class="row">
		<?php 
		$i=0;
		foreach($cars as $car): ?>

		<?php $i++; ?>
		<div class="col-md-3">
			<img src="assets/imgs/cars/<?php echo $car->photo; ?>" alt="" width="270" height="190">
			<h4><?php echo $car->brand; ?> <?php echo $car->model; ?></h4>
			<ul>
				<li>Year: <b><?php echo $car->year; ?></b></li>
				<li>Seats: <b><?php echo $car->seats; ?></b></li>
				<li>Price: <b><?php echo $car->price; ?></b></li>
			</ul>
			<a class="btn btn-large car_button" href="#"><span>Details</span></a>
		</div>
		<?php 
		if($i == 4) {
			echo "</div>";
			echo "<div class=\"row\">";
			$i = 0;
		}
		endforeach; ?>
	</div>
</div>
