    <section class="content-header">
      <h1>
        Arranged series
        <small>All arranged series in our posted base! </small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#"><i class="fa fa-tv"></i> Arranged</a></li>
        <li><a href="#"><i class="fa fa-tv"></i> Series</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Series table</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">


              <table id="example" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Id</th>
                  <th>Title</th>
                  <th>Autor</th>
                  <th>Date</th>
                    <th>Edit</th>
                  <th>Dismiss?</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($data as $value): ?>
                <tr>
                  <td><?php echo $value->id ?></td>
                  <td><a href="<?=site_url('Site/one_movie/').$value->id ?>"> <h4><?php echo $value->title ?></h4></a></td>
                  <td><?php echo $value->autor ?></td>
                  <td><?php echo $value->date ?></td>
                  <td><a href="<?php echo site_url() . '/Site/edit_serial/' . $value->id ?>" class="btn btn-success">EDIT</a> </td>
                  <td><a href="<?php echo site_url() . '/Site/clear_u/' . $value->id . '/separated_serials' ?>" class="btn btn-danger <?php echo ($value->sorted == 0 && $value->is_url_extruct == 0) ? 'disabled' : '' ?>">DISMISS</a></td>
                </tr>
            	<?php endforeach ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>Id</th>
                  <th>Title</th>
                  <th>Autor</th>
                  <th>Date</th>
                  <th>Edit</th>
                  <th>Dismiss?</th>
                </tr>
                </tfoot>
              </table>
              <?php echo $pagenation; ?>
            </div>
            <!-- /.box-body -->
        <div class="box-footer">
          Footer
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
