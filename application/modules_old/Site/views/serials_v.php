    <section class="content-header">
      <h1>
        Serials
        <small>all serials on our movies base! </small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#"><i class="fa fa-tv"></i> Serials</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Title</h3>

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
                  <th>Extracted</th>
                  <th>Type post</th>
                  <th>Extract?</th>
                  <th>Clear?</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($data as $value): ?>
                <tr>
                  <td><?php echo $value->id ?></td>
                  <td><a href="<?=site_url('Site/one_movie/').$value->id ?>"> <h4><?php echo $value->title ?></h4></a></td>
                  <td><?php echo $value->autor ?></td>
                  <td><?php echo $value->date ?></td>
                  <td><?php echo $value->sorted ?></td>
                  <td><?php echo $value->type?></td>
                  <td><a href="<?php echo site_url() . '/Site/sorting/' . $value->id.'/'.$back ?>" class="btn btn-default <?php echo ($value->sorted == 1 || $value->is_url_extruct == 1) ? 'disabled' : '' ?>">EXT</a></td>
                  <td><a href="<?php echo site_url() . '/Site/clear_u/' . $value->id . '/serials' ?>" class="btn btn-danger <?php echo ($value->sorted == 0 && $value->is_url_extruct == 0) ? 'disabled' : '' ?>">CLEAR</a></td>
                </tr>
            	<?php endforeach ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>Id</th>
                  <th>Title</th>
                  <th>Autor</th>
                  <th>Date</th>
                  <th>Extracted</th>
                  <th>Type post</th>
                  <th>Extract?</th>
                  <th>Clear?</th>
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
