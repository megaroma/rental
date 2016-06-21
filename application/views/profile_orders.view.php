<div class="container">
<h1 class="page-header text-center">Orders:</h1>
<div class="row">
    <div class="col-sm-3 col-md-3">
 		<div class="list-group">
  			<a href="http://<?php echo base_url(); ?>user/profile" class="list-group-item left-menu">Info</a>
  			<a href="http://<?php echo base_url(); ?>user/password" class="list-group-item left-menu">Change Password</a>
  			<a href="http://<?php echo base_url(); ?>user/orders" class="list-group-item active left-menu">My Orders</a>
		</div>
    </div>
    <div class="col-sm-9 main">

<table class="table table-striped table-bordered table-hover">
<thead>
  <tr>
    <th>Order #</th>
    <th>Car</th>
    <th>Price per day</th>
    <th>Requested Days</th>
    <th>Status</th>
    <th>Comment</th>
    <th>Last Update</th>
  </tr>
</thead>
<tbody>
<?php foreach($orders as $order): ?>
    <tr>
      <td><?php echo $order->id;?></td>
      <td><?php echo $order->brand." ".$order->model;?></td>
      <td><?php echo $order->price;?></td>
      <td><?php echo $order->start_rent_time." - ".$order->end_rent_time;?></td>
      <td><?php echo $order->status;?></td>
      <td><?php echo $order->comment;?></td>
      <td><?php echo $order->last_update;?></td>
    </tr>
<?php endforeach; ?>
</tbody>
</table>


    </div>
</div>
</div>