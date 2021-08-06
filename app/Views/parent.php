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
        <form action="<?php echo base_url('/parller/parentdata') ?>" method="post" accept-charset="utf-8">
          
          <div class="form-group">
            <label for="formGroupExampleInput">Roll No.</label>
            <input type="number" name="rollno" class="form-control" id="formGroupExampleInput" placeholder="Please enter roll no">
          </div> 

          <div class="form-group">
            <label for="formGroupExampleInput">Father Name</label>
            <input type="text" name="father" class="form-control" id="formGroupExampleInput" placeholder="Please enter father name">
          </div> 
          <div class="form-group">
            <label for="formGroupExampleInput">Mother Name</label>
            <input type="text" name="mother" class="form-control" id="formGroupExampleInput" placeholder="Please enter mother name">
          </div> 
 
          <div class="form-group">
            <label for="phone">Phone no</label>
            <input type="phone" name="phone" class="form-control" id="phone" placeholder="Please enter phone number">    
          </div>   
 
          <div class="form-group">
            <label for="address">Address</label>
            <textarea name="address" class="form-control"></textarea>
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