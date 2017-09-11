<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="../../../../favicon.ico">

		<title>simple blog</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
		<!-- Bootstrap core CSS -->
		<link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
	</head>

	<body>
		<nav class="navbar navbar-expand-md navbar-dark bg-dark">
			<a class="navbar-brand" href="<?php echo base_url(); ?>">Simple blog</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarsExampleDefault">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a class="nav-link" href="<?php echo base_url('home'); ?>">Home <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo base_url('blog'); ?>">Blog</a>
					</li>
					<?php if($this->session->userdata('is_admin')) : ?>
					<li class="nav-item ">
						<a class="nav-link text-success" href="<?php echo base_url('users'); ?>">Users</a>
					</li>
					<?php endif; ?>
				</ul>
				<div class="form-inline my-2 my-lg-0">
				<ul class="navbar-nav mr-auto">
					<?php if(!$this->session->userdata('logged_in')) : ?>
			            <li><a class="nav-link" href="<?php echo base_url(); ?>users/login">Login</a></li>
			            <li><a class="nav-link" href="<?php echo base_url(); ?>users/register">Register</a></li>
			          <?php endif; ?>
			          <?php if($this->session->userdata('logged_in')) : ?>
			            <li><a class="nav-link" href="<?php echo base_url(); ?>blog/create">Create Post</a></li>
			            <li><a class="nav-link" href="<?php echo base_url(); ?>users/logout">Logout</a></li>
			        <?php endif; ?>
			    </ul>
				</div>
			</div>
		</nav>
		<?php if($this->session->flashdata('user_registered')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_registered').'</p>'; ?>
      <?php endif; ?>

      <?php if($this->session->flashdata('login_failed')): ?>
        <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('login_failed').'</p>'; ?>
      <?php endif; ?>

      <?php if($this->session->flashdata('user_loggedin')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedin').'</p>'; ?>
      <?php endif; ?>

       <?php if($this->session->flashdata('user_loggedout')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedout').'</p>'; ?>
      <?php endif; ?>
