<?php include_once('admin_header.php');?>

<div class="container">
	<div class="row">
		<div class="col-lg-6 col-lg-offset-6">
		<?php echo anchor('admin/store_article', 'Add Article', ['class'=> 'btn btn-primary pull-right']); ?>
		</div>
	</div>




<table class="table">
<thead>
	<tr>
		<th>Sr. no</th>
		<th>Title</th>
		<th>Action</th>
	</tr>
</thead>
<tbody>
	<?php if( count($articles) ): 
		$count = $this->uri->segment(3);
		foreach ($articles as $article): ?>
	<tr>
		<td><?= ++$count; ?></td>
		<td><?php echo $article->articletitle; ?></td>
		<td>
			<?php echo anchor("admin/edit_article/{$article->id}", 'Edit', ['class' => 'btn btn-primary']); ?>
			<!--<a href="" class="btn btn-primary">Edit</a>--> &#x00A0; 
			
		</td>
		<td>
			
			<?php
				echo form_open('admin/delete_article'),
				     form_hidden('article_id', $article->id),
				     form_submit(['name'=>'submit', 'value'=>'Delete', 'class'=>'btn btn-danger']);
				echo form_close();
			?>

		</td>
	</tr>
	
<?php endforeach; ?>
<?php else: ?>
<tr>
	<td colspan="3">No Record Found.</td>
</tr>
<?php endif; ?>

</tbody>
</table>

<?php echo $this->pagination->create_links();?>
</div>

<?php if($feedback = $this->session->flashdata('feedback')):
		$feedback_class = $this->session->flashdata('feedback_class');
		 ?>
<div class="row">
	<div class="col-lg-6">
		<div class="alert alert-dismissible <?php echo 'feedback_class';?>">
			<?php $feedback ?>
		</div>
	</div>
</div>
<?php endif;?>

<?php include_once('admin_footer.php');?>

