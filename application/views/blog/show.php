<div class="container">
	<div class="starter-template py-5">
		<div class="row">
			<div class="col">
				<h1>

				<?php if($this->session->userdata('user_id') == $post['user_id'] or $this->session->userdata('is_admin') == 1): ?>
				<a href="<?php echo base_url('blog/edit/'.$post['slug']); ?>"><i class="fa fa-edit">  </i></a>
				<?php endif; ?>
				<?= $title ?>
				</h1>
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
			<?php if($this->session->userdata('user_id') == $post['user_id'] or $this->session->userdata('is_admin') == 1): ?>
			<?php echo form_open('blog/delete/'.$post['id']) ?>
			<input type="submit" value="Delete" class="col flex-last btn btn-danger">
			<?php endif; ?>
			</div>
		</div>
	</div>
</div><!-- /.container -->