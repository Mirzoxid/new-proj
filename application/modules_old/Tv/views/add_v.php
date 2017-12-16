<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">ADD new TV Channel</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->

            <form role="form" method="post" action="<?php echo site_url() . '/Tv/add' ?>" enctype="multipart/form-data">
              <div class="box-body">
                <div><?php echo validation_errors(); ?></div>
                <div><?php echo (isset($msg)&&$msg!='')?$msg:'' ?></div>
                <div class="form-group">
                  <label for="">Channel name</label>
                  <input type="text" name="name" class="form-control" id="" placeholder="Channel">
                </div>
                <div class="form-group">
                  <label for="">Channel url address</label>
                  <input type="text" name="url" class="form-control" id="" placeholder="Url">
                </div>
                <div class="form-group">
                
                  <label for="">Position</label>
                  <input type="text" name="position" class="form-control" placeholder="Position">
                </div>
                <div class="form-group">
                  <label>Channel categories</label>
                  <select class="form-control" name="category">
                    <option value="">Check categories</option>
                    <?php foreach ($cat as $value): ?>
                    <option value="<?php echo $value->id ?>"><?php echo $value->name ?></option>
                    <?php endforeach ?>
                  </select>
                </div>
                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="active"> Channel active?
                  </label>
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Channel icon</label>
                  <input type="file" id="exampleInputFile" name="img">
                  <p class="help-block">Check file for channel icon.</p>

                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          