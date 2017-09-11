<?php if($this->session->userdata('is_admin')) : ?>
<div class="container">
	<div class="starter-template py-5">
		<div class="row">
			<div class="col-9">
				<h1><?= $title ?></h1>			
			</div>
		</div>
		<div class="row">
			<div class="col-sm-3">
				<h3>Usename</h3>			
			</div>
			<div class="col-sm-3">
					<h3>Admin</h3>			
			</div>
			<div class="col-sm-3">
					<h3>Email address</h3>			
			</div>
			<div class="col-sm-3">
				<h3>Regisration date</h3>			
			</div>
		</div>
		<?php foreach($users as $user) : ?>
			<div class="row">
				<div class="col-sm-3">
					<?php echo $user['username'] ?>
				</div>
				<div class="col-sm-3">
				<?php if(!$user['is_admin']) : ?>
					<i class="fa fa-cross"></i>
				<?php endif; ?>
				<?php if($user['is_admin']) : ?>
					<i class="fa fa-check"></i>
				<?php endif; ?>
				</div>
				<div class="col-sm-3">
					<?php echo $user['email'] ?>
				</div>
				<div class="col-sm-3">
					<?php echo $user['register_date'] ?>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
</div><!-- /.container -->
<?php endif; ?>
