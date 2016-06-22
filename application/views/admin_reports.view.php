<div class="panel panel-default">
  	<div class="panel-heading">Reports</div>
  	<div class="panel-body">

  		<form class="form-horizontal" method="post" action="http://<?php echo base_url(); ?>/manager/reports">
			<div class="form-group">
				<label for="inputReport" class="col-sm-2 col-sm-offset-1 control-label">Report:</label>
				<div class="col-sm-6">
		   			<select class="form-control">
  						<option>--Select Report--</option>
  						<option>Orders</option>
 					 </select>
				</div>
	  		</div>

 			<div class="form-group">
				<div class='datepicker input-group date' style="width:138px">
				    <input type='text' class="form-control" placeholder="dd/mm/yyyy" name="dt_from" value=""/>
				    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
				    </span>
				</div>
	  		</div>

	  	</form>
  </div>
</div>
