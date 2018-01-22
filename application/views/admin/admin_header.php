<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Admin panel</title>
	<?php echo link_tag('images/artpen.jpg');?>
 <?php echo link_tag('assets/css/bootstrap.min.css');?>
  <?php echo link_tag('assets/css/style.css');?>


</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar">1</span>
        <span class="icon-bar">1</span>
        <span class="icon-bar">1</span>
      </button>
      <a class="navbar-brand" href="#">Admin panel</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
      
      
      <ul class="nav navbar-nav navbar-right">
        <li>
          <!-- <a href="<?php echo base_url('login/logout'); ?>">Logout</a>-->
          <?php echo anchor('login/logout', 'Logout') ?>
        </li>
      </ul>
    </div>
  </div>
</nav>
