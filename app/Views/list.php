<!DOCTYPE html>
<html>
<head>
<title>Display Records</title>
</head>

<body>
<div class="container">
  <h3>List</h3>
  <table class="table table-striped">
    <thead>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Message</th>
    </thead>
    <tbody>
      <?php $i = 0; foreach ($table as $k) { ?>

        <tr>
          <th scope="row"><?php echo $i++ ;?></th>
          <td><?php echo $k['name'];?></td>
          <td><?php echo $k['email'];?></td>
          <td><?php echo $k['message'];?></td>
        </tr>
      <?php } ?>
    </tbody>
    
  </table>
  
</div>

</body>
</html>
