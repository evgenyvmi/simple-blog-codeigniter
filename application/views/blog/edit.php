<h2 class="py-5"><?= $title; ?></h2>

<div class="alert alert-danger"><?php echo validation_errors(); ?></div>

<?php echo form_open_multipart('blog/update'); ?>
<input type="hidden" name="id" value="<?php echo $post['id'] ?>">
<div class="form col-sm-10 col-md-8">
  <div class="form-group">
    <label>Title</label>
    <input type="text" class="form-control" name="title" placeholder="Add Title" value="<?php echo $post['title'] ?>">
  </div>
  <div class="form-group">
    <label>Text</label>
    <textarea id="editor1" class="form-control" name="text" placeholder="Add Text"><?php echo $post['text'] ?></textarea>
  </div>
  <button type="submit" class="btn btn-default">
  Submit</button>
</div>
</form>