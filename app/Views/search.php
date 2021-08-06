<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">

	<link rel="stylesheet" href="<?php echo base_url().'/headerlink/bootstrap.min.css'; ?>">
  	<script src="<?php echo base_url().'/headerlink/jquery.min.js'; ?>"></script>
  	<script src="<?php echo base_url().'/headerlink/bootstrap.min.js'; ?>"></script>
	
	<title>Search Data</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12 mt-4">
				<div class="card">
					<div class="card-header">
						<h4 class="card-title">Sudent & Parent Record</h4>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-md-6">

							<form action="" method="POST">
								<div class="form-group">
									<input type="text" name="rollno" class="form-control" placeholder="Enter Roll No." required>
								</div>
								<button type="submit" class="btn btn-primary" name="search_by_rollno">Search</button>
							</form>
							<br>
							</div>
						</div>

						<?php
						 $connection = mysqli_connect("localhost","root","rootadmin","ci4");
						 if(isset($_POST['search_by_rollno']))
						 {
						 	$rollno = $_POST['rollno'];
						 	$query = "SELECT * FROM student WHERE rollno='$rollno' ";		 	
						 	$query_run = mysqli_query($connection, $query);

						?>

						<div class="table-responsive">
						<table class="table table-bordered">
						  <thead>
						    <tr>
						      <th scope="col">Id</th>
						      <th scope="col">Roll No.</th>
						      <th scope="col">Name</th>
						    </tr>
						  </thead>
						  <tbody>
						  	<?php
						  	if(mysqli_num_rows($query_run) > 0)
						 	{
						 		while($row = mysqli_fetch_array($query_run))
						 		{

						  	?>
						    <tr>
						     <h3>Student Data</h3>
						      <td><?php echo $row['id']; ?></td>
						      <td><?php echo $row['rollno']; ?></td>
						      <td><?php echo $row['name']; ?></td>
						    </tr>
						    <?php
						    	}
						 	}
						 	else
						 	{
						 	
							 ?>
							 	<tr>
							 		<h3>Student Data</h3>
							 		<td colspan="6">No Record Found...!</td>
							 	</tr>


							 	<?php
						 	}

						    	?>
						  </tbody>
						</table>	
						</div>
						<?php 
						}
						?>

						<!--==============Parent record================-->

						<?php
						 $connection = mysqli_connect("localhost","root","rootadmin","ci4");
						 if(isset($_POST['search_by_rollno']))
						 {
						 	$rollno = $_POST['rollno'];
						 	$query = "SELECT * FROM parent WHERE rollno='$rollno' ";		 	
						 	$query_run = mysqli_query($connection, $query);

						?>

						<div class="table-responsive">
						<table class="table table-bordered">
						  <thead>
						    <tr>
						      <th scope="col">Id</th>
						      <th scope="col">Roll No.</th>
						      <th scope="col">Father</th>
						      <th scope="col">Mother</th>
						      <th scope="col">Phone</th>
						      <th scope="col">Address</th>
						    </tr>
						  </thead>
						  <tbody>
						  	<?php
						  	if(mysqli_num_rows($query_run) > 0)
						 	{
						 		while($row = mysqli_fetch_array($query_run))
						 		{

						  	?>
						    <tr>
						     <h3>Parent Data</h3>
						      <td><?php echo $row['id']; ?></td>
						      <td><?php echo $row['rollno']; ?></td>
						      <td><?php echo $row['father']; ?></td>
						      <td><?php echo $row['mother']; ?></td>
						      <td><?php echo $row['phone']; ?></td>
						      <td><?php echo $row['address']; ?></td>
						    </tr>
						    <?php
						    	}
						 	}
						 	else
						 	{
						 	
							 ?>
							 	<tr>
							 		<h3>Parent Data</h3>
							 		<td colspan="6">No Record Found...!</td>
							 	</tr>


							 	<?php
						 	}

						    	?>
						  </tbody>
						</table>	
						</div>
						<?php 
						}
						?>
					</div>
				</div>
			</div>
		</div>
	</div>



</body>
</html>