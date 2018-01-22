<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
	<title>Articles list</title>
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
      <!--<a class="navbar-brand" href="#">Articles</a>-->
      <?php echo anchor('', 'Articles', ['class'=>'navbar-brand']);
      ?>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
      <?php echo form_open('user/search',['class'=>'navbar-form navbar-left', 'role'=>'search']); ?>
      
      <!--<form class="navbar-form navbar-left" role="search">-->
        <div class="form-group">
          <input type="text" name="query" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      <?php echo form_close();?>
      <?php echo form_error('query', "<p class='navbar-text text-danger'>", '</p>' ); ?>
      <!--</form>-->
      <ul class="nav navbar-nav navbar-right">
        <li>
          <?php echo anchor('login', 'Login'); ?>
        </li>
      </ul>
    </div>
  </div>
</nav>
