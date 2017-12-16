<?php
    $m_links = [];
    foreach ($art['links']['movie'] as $val){
        $m_links[$val->movies]['url'] = $val->url;
        $m_links[$val->movies]['name'] = $val->name;
    }

    for ($i=1;$i<=10;$i++){
        if (empty($m_links[$i])){
            $m_links[$i]['name'] = "";
            $m_links[$i]['url'] = "";
        }
    }

?>
    <section class="content-header">
      <h1>
        <?=$art['links']['post']->title;?>
        <small>Editing this post</small>
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
                            <button class="tablinks active" onclick="openCity(event, 'movie')">Movie edit</button>
                        </div>
                        <div id="movie" style="display: block;" class="tabcontent">
                            <form role="form" method="post" action="<?php echo site_url('Site/edit_movie/'.$this->uri->segment(3)); ?>">
                                <div class="form-group row">
                                    <div class="form-group col-lg-12" >
                                        <input type="text" value="<?=$art['links']['post']->description?>" name="description" placeholder="Movie description" class="form-control">
                                    </div>
                                    <?php for($i=1;$i<=10;$i++) :?>
                                        <div class="form-group col-md-6">
                                            <label class="">Movie name</label>
                                            <input class="form-control" name="movie<?=$i?>" type="text" placeholder="name <?=$i?>" value="<?=$m_links[$i]['name']?>"/>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="">Movie url</label>
                                            <input class="form-control" name="url<?=$i?>" type="text" placeholder="url <?=$i?>" value="<?=$m_links[$i]['url']?>"/>
                                        </div>
                                    <?php endfor;?>
                                    <button class="btn btn-success">SEND</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6" style="border: 1px rgba(223,217,217,0.66) solid;overflow: auto">
                        <div class="tab">
                                <button class="tablinks1 active" onclick="openCity1(event, 'content')">Content</button>
                            <button class="tablinks1" onclick="openCity1(event, 'links')">Links</button>
                        </div>
                        <div id="content" style="display: block;" class="tabcontent1">
                            <?php echo $art['links']['post']->full_story;?>
                        </div>
                        <div id="links" class="tabcontent1">
                            <?php foreach ($art['art'] as $item) {echo($item . "<br />" );} ?>
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
