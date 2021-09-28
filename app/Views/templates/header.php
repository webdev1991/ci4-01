<!doctype html>
<html>
<head>
    <title>CI !4</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
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

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">CodeIgniter4</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="<?php echo base_url(); ?>/pages">Home</a></li>
      <li class="active"><a href="<?php echo base_url(); ?>/pages/about">About</a></li>
      <li class="active"><a href="<?php echo base_url().'/contact'; ?>">Contact</a></li>
      <li class="active"><a href="<?php echo base_url().'/stuller'; ?>">Student</a></li>
      <li class="active"><a href="<?php echo base_url().'/parller'; ?>">Parent</a></li>
      <li class="active"><a href="<?php echo base_url().'/sealler'; ?>">Get Data</a></li>
      <li class="active"><a href="<?php echo base_url().'/stuller/show'; ?>">All Contact</a></li>
      <li class="active"><a href="<?php echo base_url().'/dbmsller'; ?>">dbms</a></li>
      <li class="active"><a href="<?php echo base_url().'/authller'; ?>">Login</a></li>

    </ul>
  </div>
</nav>



 <!-- JavaScript Alertify -->
  <script src="<?php echo base_url().'/headerlink/alertify.min.js'; ?>"></script>
<script>
  /*
  //success message Alertify
  $(document).ready(function () {

    <?php /* if(session()->getFlashdata('status')) { ?>
    alertify.set('notifier','position', 'top-left');
    alertify.success("<?= session()->getFlashdata('status') ?>");
  <?php } */ ?>

  });

  */
</script>
