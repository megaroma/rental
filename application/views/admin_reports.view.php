<div class="panel panel-default">
  	<div class="panel-heading">Reports</div>
  	<div class="panel-body">

  		<form class="form-horizontal" method="post" action="http://<?php echo base_url(); ?>/manager/reports">
			<div class="form-group">
				<label for="inputReport" class="col-sm-2 col-sm-offset-1 control-label">Report:</label>
				<div class="col-sm-6">
		   			<select class="form-control" name="report">
  						<option>--Select Report--</option>
  						<option <?php echo ($report == "Orders")? "selected" : ""; ?> >Orders</option>
 					 </select>
				</div>
	  		</div>

			<div class="form-group">
				<label for="inputFromDT" class="col-sm-2 col-sm-offset-1 control-label">From:</label>
				<div class="col-sm-6">
				    <input type='text' class="datepicker-input form-control" placeholder="dd/mm/yyyy" name="dt_from" value="<?php echo $dt_from; ?>"/>
				</div>
	  		</div>

			<div class="form-group">
				<label for="inputTillDT" class="col-sm-2 col-sm-offset-1 control-label">Till:</label>
				<div class="col-sm-6">
				    <input type='text' class="datepicker-input form-control" placeholder="dd/mm/yyyy" name="dt_till" value="<?php echo $dt_till; ?>"/>
				</div>
	  		</div>

	  		<input type="hidden" name="action" value="run">

	  		<div class="form-group">
				<div class="col-sm-offset-4 col-sm-4">
		  			<button type="submit" class="btn btn-lg btn-primary btn-block">Run</button>
				</div>
	  		</div>
	  	</form>
  </div>
</div>

<?php if($report_sent): ?>
<div class="panel panel-default">
  	<div class="panel-heading"><?php echo $report." From: ".$dt_from." Till: ".$dt_till;?></div>
  	<div class="panel-body">

  </div>
</div>
<?php endif; ?>

    <script>

           $( ".datepicker-input" ).datepicker();
    </script>
