<?php include('public_header.php'); ?>
<div class="container">
	<h3>Article Search List</h3>
	<hr>
	<table class="table">
		<thead>
			<tr>
				<th>Sr. No</th>
				<th>Article Title</th>
				<th>Published on</th>
			</tr>
		</thead>
		<tbody>
			<tr>
			<?php if(count($articles)): ?>
			<?php $count = $this->uri->segment(4, 0); ?>
			<?php foreach( $articles as $article): ?>

				<td><?php echo ++$count; ?></td>
				<td><?php echo $article->articletitle; ?></td>
				<td><?php echo $article->created_at; ?></td>
		</tr>
		<?php endforeach;?>
		<?php else:?>
		
		<tr>
			<td colspan="3">No Record Found....</td>
		</tr>

			<?php endif;?>
		</tbody>
	</table>
<?php echo $this->pagination->create_links(); ?>
</div>



<?php include('public_footer.php'); ?>