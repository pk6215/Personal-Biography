<?php include('public_header.php'); ?>
<div style="margin:80px;">
<h1 style="color:green;"><?php echo $article->articletitle; ?></h1>
<hr style="border:1px solid yellow;">
<p style="color:blue;"><?php echo $article->articlebody; ?></p>

	<?php if(! is_null($article->image_path)):?>
		<img src="<?php echo $article->image_path;?>" alt="Aritcle Image"  style=" float: right; height: 40%; width: 40%;">
	<?php endif;?>

</div>
<?php include('public_footer.php'); ?>