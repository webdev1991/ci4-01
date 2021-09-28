<?php /*

$conn = mysqli_connect("localhost", "root", "rootadmin", "ci4");

$sql = "SELECT * FROM course";

$results = mysqli_query($conn, $sql);

*/

?>

<!DOCTYPE html>
<html>
<head>
  <title>Codeigniter 4 Form Validation Example</title>
  
<link rel="stylesheet" href="<?php echo base_url().'/headerlink/select2.css'; ?>">
<script src="<?php echo base_url().'/headerlink/select2.js'; ?>"></script>


</head>
<body>
  <h3 style="text-align: center;">Edit Student Information..</h3>
 <div class="container">
    <br>
    
    <div class="row">
      <div class="col-md-9">
        <form action="<?php echo base_url('/stuller/update/'.$table['id']) ?>" method="post" accept-charset="utf-8" >
          <input type="hidden" name="_method" value="PUT" />
          
          <div class="form-group">
            <label for="roll_no">Roll No.(code 329000)</label>
            <input type="number" name="roll_no" value="<?= $table['roll_no']; ?>" class="form-control" id="formGroupExampleInput" placeholder="Please enter roll no">
          </div> 

          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" value="<?= $table['name']; ?>" class="form-control" id="formGroupExampleInput" placeholder="Please enter name">
          </div>

          <div class="form-group">
            <label for="name">DOB</label>
            <input type="date" name="dob" value="<?= $table['dob']; ?>" class="form-control" id="formGroupExampleInput" placeholder="Please enter name">
          </div> 

          <div class="form-group">
            <label for="name">Father Name</label>
            <input type="text" name="fname" value="<?= $table['fname']; ?>" class="form-control" id="formGroupExampleInput" placeholder="Please enter name">
          </div> 

          <div class="form-group">
            <label for="name">Mother Name</label>
            <input type="text" name="mname" value="<?= $table['mname']; ?>" class="form-control" id="formGroupExampleInput" placeholder="Please enter name">
          </div> 

           <div class="form-group">
            <label for="phone">Phone No.</label>
            <input type="number" name="phone" value="<?= $table['phone']; ?>" class="form-control" id="formGroupExampleInput" placeholder="Please phone no">
          </div> 

          <div class="form-group">
            <label for="address">Address</label>
            <input type="text" name="address" value="<?= $table['address']; ?>" class="form-control" id="formGroupExampleInput" placeholder="Please address">
          </div> 

<!--
          <div class="form-group">
            <label for="course_id">Course Id</label>
            <select class="form-control" id="multiselect" name="course_id[]" multiple="true" id="formGroupExampleInput" placeholder ="Please select option" >
              <option value="1">TALLY</option>
              <option value="2">PHP</option>
              <option value="3">jQuery</option>
              <option value="4">Assembly</option>
              <option value="5">Modelling</option>
              <option value="6">Databases</option>
              <option value="7">Cyber Security</option>
              <option value="8"> TALLY</option>
              <option value="9">User interfaces</option>
              <option value="10">PHP</option>
            </select>
          </div>

-->
          <!--========= Select option using while loop ========-->  
          <!--

          <div class="form-group">
            <label for="course_id">Course Id</label>

            <select class="form-control" id="multiselect1" name="course_id[]" multiple="true">

            <?php /* while($row = mysqli_fetch_array($result1)):;?>

            <option value="<?php echo $row[0];?>"><?php echo $row[1];?></option>

            <?php endwhile;   */?>

             </select>
          </div>

          -->

          <!--============ Select option using foreach loop =============-->
<!--
          <div class="form-group">
            <label for="course_id">Course Name</label>

            <select name="course_id[]" id="multiselect1" class="form-control" multiple="true">
        
                <?php

                /*

                foreach($results as $result) { ?>
                    <option value="<?php echo $result['id']; ?>">
                        <?php echo $result['c_name']; ?>
                    </option>
                <?php } 

                */

                ?>
            
            </select>

          </div>
-->
          
          <div class="form-group">
           <button type="submit" name="submit" id="send_form" class="btn btn-primary">Update</button>
          </div>
        </form>

        <?php 

        /*

        $conn = mysqli_connect("localhost", "root", "rootadmin", "ci4");


        if(isset($_POST['submit']))
        {
          $roll_no=$_POST['roll_no'];
          $name=$_POST['name'];
          $dob=$_POST['dob'];
          $fname=$_POST['fname'];
          $mname=$_POST['mname'];
          $phone=$_POST['phone'];
          $address=$_POST['address'];
          //print_r($_POST['course_id']);

          foreach ($_POST['course_id'] as $key => $value) {
            $course_id=$_POST['course_id'][$key];

            $sql = "INSERT INTO student (`roll_no`, `name`, dob, fname, mname, `phone`, `address`, `course_id`) VALUES ('$roll_no', '$name', '$dob', '$fname', '$mname', '$phone', '$address', '$course_id')";

            $result = mysqli_query($conn, $sql);
          }
        }
        
        */
          ?>
      </div>
 
    </div>
  
</div>
  
  <script> 
    /*
    $(document).ready(function(){
      $("#multiselect1").select2({
        placeholder: "select course",
        tags: true,
        tokenSeparators: ['/',',',',',""]
      });
    });

*/
  </script>



</body>
</html>