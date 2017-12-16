    <section class="content-header">
      <h1>
        Arranging serials
        <small>All posts detected as a series! </small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#"><i class="fa fa-tv"></i> Arranging</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title" style="background-color: rgba(10,28,204,0.50); padding: 3px;">Arranged serials</h3><h3 class="box-title" style="margin-left: 10px;background-color: rgba(204,53,0,0.50); padding: 3px;">Not arranged</h3>
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
                  <th>Arrange?</th>
                  <th>Dismiss?</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($data as $value): ?>
                <tr>
                    <?php
                    $this->load->model('Site_m');
                    $color = $this->Site_m->color($value->id);
                    if ($color === 0){
                        $rgba = "background-color: rgba(204,53,0,0.50)";
                    } elseif ($color === 1){
                        $rgba = "background-color: rgba(12,204,5,0.50)";
                    } else {
                        $rgba = "background-color: rgba(10,28,204,0.50)";
                    }
                    ?>
                  <td style="<?=$rgba?>"><?php echo $value->id ?></td>
                  <td style="width: 40%"><a href="<?=site_url('Site/one_movie/').$value->id ?>"> <h4><?php echo $value->title ?></h4></a></td>
                  <td><?php echo $value->autor ?></td>
                  <td><?php echo $value->date ?></td>
                  <td>
                      <?php
                      if (preg_match('/[sS](\d+)*[_]*[eE](\d+)/', $value->full_story)):
                      ?>
                        <a href="<?php echo site_url() . '/Site/sorting/' . $value->id.'/'.$back ?>" class="btn btn-default <?php echo ($value->sorted == 1 || $value->is_url_extruct == 1) ? 'disabled' : '' ?>">AUTO</a>
                      <?php endif;?>
                      <a style="margin-left: 3px;" href="<?php echo site_url() . '/Site/manual_serial/' . $value->id ?>" class="btn btn-default <?php echo ($value->sorted == 1)?'disabled':'' ?>">MANUAL</a>
                  </td>
                  <td><a href="<?php echo site_url() . '/Site/clear_u/' . $value->id . '/serials' ?>" class="btn btn-danger <?php echo ($value->sorted == 0 && $value->is_url_extruct == 0) ? 'disabled' : '' ?>">DISMISS</a></td>
                </tr>
            	<?php endforeach ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>Id</th>
                  <th>Title</th>
                  <th>Autor</th>
                  <th>Date</th>
                  <th>Arrange?</th>
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
