<div class="container">
	<div class="starter-template py-5">
		<div class="row">
			<div class="col">
				<h1><a href="<?php echo base_url('blog/edit/'.$post['slug']); ?>"><i class="fa fa-edit">  </i></a><?= $title ?></h1>
			</div>
		</div>
		<div class="row">
			<div class="col-md-9">
				<small class="post-date text-white">Posted on: <?php echo $post['date_of_creation'] ?> 
				</small>
				<br>
				<?php echo $post['text'] ?>
				<br><br>
			</div>
			<?php echo form_open('blog/delete/'.$post['id']) ?>
			<input type="submit" value="Delete" class="col flex-last btn btn-danger">
			</div>
		</div>
	</div>
</div><!-- /.container -->