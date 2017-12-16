<div class="box box-primary">
  <div class="box-header with-border">
    <h3 class="box-title">ADD new TV Categories</h3>
  </div>
  <!-- /.box-header -->
  <!-- form start -->
  <form role="form" method="post" action="<?php echo site_url() . '/Tv/add_cat' ?>">
    <div class="box-body">
  <?php echo validation_errors(); ?>
      <div class="form-group">
        <label for="">Category name</label>
        <input type="text" name="name" class="form-control" id="" placeholder="name">
      </div>
    </div>
    <!-- /.box-->
    <div class="box-footer">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
</div>
          