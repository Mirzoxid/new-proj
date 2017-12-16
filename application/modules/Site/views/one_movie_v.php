  <section class="content-header">
    <h1>
      <?= $data['post']->title?>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">View</a></li>
      <li class="active">One movie or serial</li>
    </ol>
  </section>
  <!-- Main content -->
  <section class="content">

    <div class="row">
      <div class="col-md-3">

        <!-- Profile Image -->
        <div class="box box-primary">
          <div class="box-body box-profile">
            <h3 class="profile-username text-center">Author</h3>
            <p class="text-muted text-center"><?= $data['post']->autor?></p>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->

        <!-- About Me Box -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Created date</h3><br>
            <strong><i class="fa fa-date margin-r-5"></i> <?= $data['post']->date?></strong>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <strong><i class="fa fa-file-text-o margin-r-5"></i> Additional Information</strong>

            <p><?=$data['post']->descr?></p>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- /.col -->
      <div class="col-md-9">
        <div class="nav-tabs-custom">
          <ul class="nav nav-tabs">
            <li class="active"><a href="#activity" data-toggle="tab">Content</a></li>
            <li><a href="#timeline" data-toggle="tab">Links</a></li>
            <li><a href="#settings" data-toggle="tab">Description</a></li>
          </ul>
          <div class="tab-content">
            <div class="active tab-pane" id="activity">
              <!-- Post -->
              <div class="post">
                <?= $data['post']->full_story?>
              </div>
              <!-- /.post -->
            </div>
            <!-- /.tab-pane -->
            <div class="tab-pane" id="timeline">
              <?php if ($data['movie'] == null && $data['urls'] == null) {
                echo "<h2>Links not found</h2>";
              } elseif ($data['movie'] != null) {
                foreach ($data['movie'] as $movie) {
                  echo "<h3> Name: ".$movie->name."</h3> Url: ".$movie->url."</h3><br />";
                }
              } elseif ($data['urls'] != null) {
                foreach ($data['urls'] as $serial) {
                  echo "<h4> Season: " . $serial->season_id ."; Serial: " . $serial->serial ."</h4><h5>Url: " . $serial->url . "</h4><hr />";

                }
              }
              ?>
            </div>
            <!-- /.tab-pane -->

            <div class="tab-pane" id="settings">
                <?php echo $data['post']->description;?>
            </div>
            <!-- /.tab-pane -->
          </div>
          <!-- /.tab-content -->
        </div>
        <!-- /.nav-tabs-custom -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

  </section>
