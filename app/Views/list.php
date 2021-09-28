<!DOCTYPE html>
<html>
<head>
<title>Display Records</title>

<link rel="stylesheet" href="<?php echo base_url().'/headerlink/bootstrap.min.css'; ?>">
  <script src="<?php echo base_url().'/headerlink/jquery.min.js'; ?>"></script>
  <script src="<?php echo base_url().'/headerlink/bootstrap.min.js'; ?>"></script>

<!-- Sweetalert2 -->  
  <script src="<?php echo base_url().'/headerlink/sweetalert2.all.min.js'; ?>"></script>
  <link rel="stylesheet" href="<?php echo base_url().'/headerlink/sweetalert2.min.css'; ?>">

    <!-- CSS Alertify -->
  <link rel="stylesheet" href="<?php echo base_url().'/headerlink/alertify.min.css'; ?>">

</head>

<body>

  
<div class="container">
  <h3>Display Records</h3>
  <table class="table table-striped">
    <thead>
      <th class="cust_id" scope="col_id">Id</th>
      <th scope="col">Roll No</th>
      <th scope="col">Name</th>
      <th scope="col">DOB</th>
      <th scope="col">Father Name</th>
      <th scope="col">Mother Name</th>
      <th scope="col">Phone</th>
      <th scope="col">Address</th>
      <th scope="col">Action</th>
    </thead>
    <tbody>
      <?php  foreach ($table as $k) { ?>

        <tr>
          <td><?php echo $k['id'];?></td>
          <td><?php echo $k['roll_no'];?></td>
          <td><?php echo $k['name'];?></td>
          <td><?php echo $k['dob'];?></td>
          <td><?php echo $k['fname'];?></td>
          <td><?php echo $k['mname'];?></td>
          <td><?php echo $k['phone'];?></td>
          <td><?php echo $k['address'];?></td>
          <td>
            <a href="<?php echo base_url().'/stuller/edit/'.$k['id']; ?>" class="btn btn-primary btn-sm">Edit</a>

            <a href="<?php echo base_url().'/stuller/delete/'.$k['id']; ?>" class="btn btn-danger btn-sm delete-btn">Delete</a>
          </td>

          <td>
            <button type="button" class="Confirm_del_btn btn btn-danger btn-sm" > Confirm Del</button>
<!--
            <input type="hidden" class="delete_id_value" value="<?php echo $k['id']; ?>" >
            <a href="javascripit:void(0)" class="delete_btn_ajax btn btn-danger">Confirm Del</a>                      
-->
          </td>

        </tr>
      <?php } ?>
    </tbody>
    
  </table>
  
</div>

<script>
 
  $(document).ready(function () {

        $('.Confirm_del_btn').click(function (e) {
            e.preventDefault();

            var id = $(this).val();

           // console.log("hello");

            Swal.fire({
              title: 'Are you sure?',
              text: "You won't be able to revert this!",
              icon: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Yes, delete it!'
              }).then((result) => {
              if (result.isConfirmed) {

                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url().'/stuller/delete/'.$k['id']; ?> " ,
                    success: function(response) {
                      
                     Swal.fire(
                        'Deleted!',
                        'Your file has been deleted.',
                        'success'
                      )
                     
                    window.location.reload();
                    }
                });

              }

            })

        });
    });

</script>



</body>
</html>

<?php //include('templates/footer.php') ?>