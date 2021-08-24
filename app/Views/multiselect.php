<!DOCTYPE html>
<html>
<head>
  <title>Codeigniter 4 Form Validation Example</title>
  <!--
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
-->
</head>
<body>
  <h3 style="text-align: center;">Insert Multi select data</h3>
 <div class="container">
    <br>
    
    <div class="row">
      <div class="col-md-9">
        <form action="" method="post" accept-charset="utf-8" >
          
          <div class="form-group">
            <label for="roll_no">Roll No.(code 329000)</label>
            <input type="number" name="roll_no" class="form-control" id="formGroupExampleInput" placeholder="Please enter roll no">
          </div> 

          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" id="formGroupExampleInput" placeholder="Please enter name">
          </div> 

           <div class="form-group">
            <label for="phone">Phone No.</label>
            <input type="number" name="phone" class="form-control" id="formGroupExampleInput" placeholder="Please phone no">
          </div> 

          <div class="form-group">
            <label for="address">Address</label>
            <input type="text" name="address" class="form-control" id="formGroupExampleInput" placeholder="Please address">
          </div> 

          <div class="form-group">
            <label for="course_id">Course Id</label>
            <select class="form-control" name="course_id[]" multiple="true" id="formGroupExampleInput" placeholder ="Please select option" >
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
            </select>
          </div> 
 
          <div class="form-group">
           <button type="submit" name="submit" id="send_form" class="btn btn-primary">Submit</button>
          </div>
        </form>

        <?php

        $conn = mysqli_connect("localhost", "root", "rootadmin", "ci4");


        if(isset($_POST['submit']))
        {
          $roll_no=$_POST['roll_no'];
          $name=$_POST['name'];
          $phone=$_POST['phone'];
          $address=$_POST['address'];
          //print_r($_POST['course_id']);

          foreach ($_POST['course_id'] as $key => $value) {
            $course_id=$_POST['course_id'][$key];

            $sql = "INSERT INTO student (`roll_no`, `name`, `phone`, `address`, `course_id`) VALUES ('$roll_no', '$name', '$phone', '$address', '$course_id')";

            $result = mysqli_query($conn, $sql);
          }
        }

          ?>
      </div>
 
    </div>
  
</div>
</body>
</html>