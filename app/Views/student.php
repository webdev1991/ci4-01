<!DOCTYPE html>
<html>
<head>
  <title>Codeigniter 4 Form Validation Example</title>
  <!--
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
-->
</head>
<body>
 <div class="container">
    <br>
    <?= \Config\Services::validation()->listErrors(); ?>
 
    <div class="row">
      <div class="col-md-9">
        <form action="<?php echo base_url('/stuller/studentsdata') ?>" method="post" accept-charset="utf-8">
          
          <div class="form-group">
            <label for="formGroupExampleInput">Roll No.</label>
            <input type="number" name="rollno" class="form-control" id="formGroupExampleInput" placeholder="Please enter roll no">
          </div> 

          <div class="form-group">
            <label for="formGroupExampleInput">Name</label>
            <input type="text" name="name" class="form-control" id="formGroupExampleInput" placeholder="Please enter name">
          </div> 

        
 
          <div class="form-group">
           <button type="submit" id="send_form" class="btn btn-success">Submit</button>
          </div>
        </form>
      </div>
 
    </div>
  
</div>
</body>
</html>