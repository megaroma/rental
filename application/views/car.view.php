<div class="container">
<h1>Car Detail</h1>

<img src="http://<?php echo base_url();?>assets/imgs/cars/<?php echo $car->photo; ?>">

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



<?php if($request_form): ?>
  		<form class="form-horizontal" method="post">
			<div class="form-group">
				<label for="inputFromDT" class="col-sm-2 col-sm-offset-1 control-label">From:</label>
				<div class="col-sm-6">
				    <input type='text' class="datepicker-input form-control" placeholder="dd/mm/yyyy" name="dt_from" />
				</div>
	  		</div>

			<div class="form-group">
				<label for="inputTillDT" class="col-sm-2 col-sm-offset-1 control-label">Till:</label>
				<div class="col-sm-6">
				    <input type='text' class="datepicker-input form-control" placeholder="dd/mm/yyyy" name="dt_till" />
				</div>
	  		</div>

			<div class="form-group">
				<label for="inputComment" class="col-sm-2 col-sm-offset-1 control-label">Comment:</label>
				<div class="col-sm-6">
				    <textarea class="form-control" rows="3" name="comment"></textarea>
				</div>
	  		</div>

	  		<input type="hidden" name="action" value="request">

	  		<div class="form-group">
				<div class="col-sm-offset-4 col-sm-4">
		  			<button type="submit" class="btn btn-lg btn-primary btn-block">Request</button>
				</div>
	  		</div>
	  	</form>

<?php endif; ?>


</div>
    <script>

           $( ".datepicker-input" ).datepicker();
    </script>