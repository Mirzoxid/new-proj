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
                  <th>Name</th>
                  <th>Img</th>
                  <th>Url</th>
                  <th>Active</th>
                  <th>Position</th>
                  <th>Category</th>
                  <th>Edit?</th>
                  <th>Delete?</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($data as $value): ?>
                <tr>
                  <td><?php echo $value->id ?></td>
                  <td><h4><?php echo $value->name ?></h4></td>
                  <td><img width="100px" src="<?php echo base_url('uploads/').$value->img ?>"></td>
                  <td><?php echo $value->url ?></td>
                  <td><?php echo $value->active ?></td>
                  <td><?php echo $value->position ?></td>
                  <td><?php echo $value->category ?></td>
                  <td><a href="<?php echo site_url() . '/Tv/edit/' . $value->id ?>" class="btn btn-success">EDIT</a></td>
                  <td><a href="<?php echo site_url() . '/Tv/delete_ch/' . $value->id ?>" class="btn btn-danger">DELETE</a></td>
                </tr>
            	<?php endforeach ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>Id</th>
                  <th>Name</th>
                  <th>Img</th>
                  <th>Url</th>
                  <th>Active</th>
                  <th>Position</th>
                  <th>Category</th>
                  <th>Edit?</th>
                  <th>Delete?</th>
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