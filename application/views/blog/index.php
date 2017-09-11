<div class="container">
	<div class="starter-template py-5">
		<div class="row">
			<div class="col-9">
				<h1><?= $title ?></h1>
			</div class="col flex-last">
				<a class="btn btn-success" href="<?php echo base_url('blog/create/') ?>">Create Post</a>
			<div>
				
			</div>
		</div>
		<?php foreach($posts as $post) : ?>
			<h3><?php echo $post['title']; ?></h3>
			<div class="row">
				<div class="col-md-9">
					<small class="post-date text-white">Posted on: <?php echo $post['date_of_creation'] ?> 
					</small>
					<br>
					<?php echo $post['text'] ?>
					<br><br>
				<p><a class="btn btn-default" href="<?php echo base_url('blog/'.$post['slug']) ?>">Read More</a></p>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
</div><!-- /.container -->
