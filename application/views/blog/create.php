<h2 class="py-5"><?= $title; ?></h2>

<?php echo form_open_multipart('blog/create'); ?>
<div class="form col-sm-10 col-md-8">
  <div class="form-group">
    <label>Title</label>
    <input type="text" class="form-control" name="title" placeholder="Add Title">
  </div>
  <div class="form-group">
    <label>Body</label>
    <textarea id="editor1" class="form-control" name="text" placeholder="Add Text"></textarea>
  </div>
  <!--
  <div class="form-group">
	  <label>Upload Image</label>
	  <input type="file" name="userfile" size="20">
  </div>
    -->
  <button type="submit" class="btn btn-default">
  Submit</button>
</div>
</form>