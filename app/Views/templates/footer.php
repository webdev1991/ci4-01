  
  <link rel="stylesheet" href="<?php echo base_url().'/headerlink/bootstrap.min.css'; ?>">
  <script src="<?php echo base_url().'/headerlink/jquery.min.js'; ?>"></script>
  <script src="<?php echo base_url().'/headerlink/bootstrap.min.js'; ?>"></script>
  <!-- Sweetalert2 -->  
  <script src="<?php echo base_url().'/headerlink/sweetalert2.all.min.js'; ?>"></script>
  <link rel="stylesheet" href="<?php echo base_url().'/headerlink/sweetalert2.min.css'; ?>">
  

  <script>

  	$(document).ready(function () {

  		$('.delete_btn_ajax').click(function (e) {
  			e.preventDefault();

  			//alert(" I am here");
            //console.log("Hello");

            var deleteid = $(this).closest("tr").find('.delete_id_value').val();

            //console.log(deleteid);
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
                
                /*
                Swal.fire(
                  'Deleted!',
                  'Your file has been deleted.',
                  'success'
                )
                */

                $.ajax({
                    type:"POST",
                    url: "code.php",
                    data: {
                      "delete_btn_set": 1,
                      "delete_id": deleteid,
                    },
                    success: function (response) {
                    Swal.fire(
                      'Deleted!',
                      'Your file has been deleted.',
                      'success'
                    )

                    }
                });

              }
            })

  		});
  	});
  </script>

<!--
<em>&copy; 2021</em>
-->


</body>
</html>