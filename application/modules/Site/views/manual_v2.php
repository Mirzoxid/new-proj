<?php
$s_links = [];
$tmp = $art["slinks"];
//var_dump($tmp);die;
for($i=1;$i<=10;$i++){
    for($j=1;$j<=30;$j++){
        if(!empty($tmp[$i][$j]['url'])){
            $s_links[$i][$j]['url'] = $tmp[$i][$j]['url'];
            $s_links[$i][$j]['name'] = $tmp[$i][$j]['name'];
        } else {
            $s_links[$i][$j]['url'] = "";
            $s_links[$i][$j]['name'] = "";
        }
    }
}
?>
    <section class="content-header">
      <h1>
        <?=$art['title'];?>
        <small>Need fill input areas</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Arrange</a></li>
        <li class="active">Manually</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <div class="row">
                    <div class="col-lg-6">
                        <?php echo validation_errors(); ?>
                        <div class="tab">
                            <button class="tablinks" onclick="openCity(event, 'movie')">Movie</button>
                            <button class="tablinks active" onclick="openCity(event, 'serial')">Serial</button>
                        </div>
                        <div id="movie" class="tabcontent">
                            <form role="form" method="post" action="<?php echo site_url('Site/manual_movie/'.$this->uri->segment(3)); ?>">
                                <div class="form-group row">
                                    <div class="form-group col-lg-12" >

                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="">Movie name</label>
                                        <input class="form-control" name="movie1" type="text" placeholder="name 1"/>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="">Movie url</label>
                                        <input class="form-control" name="url1" type="text" placeholder="url 1"/>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="">Movie name</label>
                                        <input class="form-control" name="movie2" type="text" placeholder="name 2"/>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="">Movie url</label>
                                        <input class="form-control" name="url2" type="text" placeholder="url 2"/>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="">Movie name</label>
                                        <input class="form-control" name="movie3" type="text" placeholder="name 3"/>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="">Movie url</label>
                                        <input class="form-control" name="url3" type="text" placeholder="url 3"/>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="">Movie name</label>
                                        <input class="form-control" name="movie4" type="text" placeholder="name 4"/>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="">Movie url</label>
                                        <input class="form-control" name="url4" type="text" placeholder="url 4"/>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="">Movie name</label>
                                        <input class="form-control" name="movie5" type="text" placeholder="name 5"/>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="">Movie url</label>
                                        <input class="form-control" name="url5" type="text" placeholder="url 5"/>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="">Movie name</label>
                                        <input class="form-control" name="movie6" type="text" placeholder="name 6"/>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="">Movie url</label>
                                        <input class="form-control" name="url6" type="text" placeholder="url 6"/>
                                    </div>
                                    <button class="btn btn-success">SEND</button>
                                </div>
                            </form>
                        </div>
                        <div id="serial" style="display: block;" class="tabcontent">
                            <form role="form" method="post" action="<?php echo site_url('Site/manual_serial/'.$this->uri->segment(3)); ?>">
                                <?php for($i=1;$i<=10;$i++):?>
                                    <div style="overflow: auto; height: 250px;" class="form-group row">
                                        <?php if($i == 1):?>
                                            <div class="col-lg-3">
                                                <h4>Description</h4>
                                            </div>
                                            <div class="form-group col-lg-12" >
                                                <input type="text" name="description" placeholder="Series description" class="form-control" value="">
                                            </div>
                                        <?php endif;?>
                                        <div class="col-lg-12"><h4>Season <?php echo $i?></h4></div>
                                        <?php for($j=1;$j<=30;$j++) : ?>
                                            <div class="form-group col-lg-6" >
                                                <input type="text" name="name<?php echo $i.$j?>" placeholder="Serial-<?=$j?> name" class="form-control" value="<?=$s_links[$i][$j]['name'] ?>">
                                            </div>
                                            <div class="form-group col-lg-6" >
                                                <input type="text" name="url<?php echo $i.$j?>" placeholder="Serial-<?=$j?> url" class="form-control" value="<?=$s_links[$i][$j]['url'] ?>">
                                            </div>
                                        <?php endfor;?>
                                    </div>
                                <?php endfor;?>
                                <button class="btn btn-success">SEND</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6" style="border: 1px rgba(223,217,217,0.66) solid;overflow: auto">
                        <div class="tab">
                                <button class="tablinks1 active" onclick="openCity1(event, 'content')">Content</button>
                            <button class="tablinks1" onclick="openCity1(event, 'links')">Links</button>
                        </div>
                        <div id="content" style="display: block;" class="tabcontent1">
                            <?php echo $art['full_story'];?>
                        </div>
                        <div id="links" class="tabcontent1">
                            <?php foreach ($art['art'][0] as $item) { echo($item . "<br />" );} ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-body">
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                Footer
            </div>
            <!-- /.box-footer-->
        </div>
        <!-- /.box -->

    </section>
    <script type="text/javascript">
        function openCity(evt, cityName) {
            // Declare all variables
            var i, tabcontent, tablinks;

            // Get all elements with class="tabcontent" and hide them
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }

            // Get all elements with class="tablinks" and remove the class "active"
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }

            // Show the current tab, and add an "active" class to the button that opened the tab
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }
        function openCity1(evt, cityName) {
            // Declare all variables
            var i, tabcontent, tablinks;

            // Get all elements with class="tabcontent" and hide them
            tabcontent = document.getElementsByClassName("tabcontent1");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }

            // Get all elements with class="tablinks" and remove the class "active"
            tablinks = document.getElementsByClassName("tablinks1");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }

            // Show the current tab, and add an "active" class to the button that opened the tab
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }
    </script>
