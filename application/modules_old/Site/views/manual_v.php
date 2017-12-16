    <section class="content-header">
      <h1>
        Blank page
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
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
                            <button class="tablinks active" onclick="openCity(event, 'movie')">Movie</button>
                            <button class="tablinks" onclick="openCity(event, 'serial')">Serial</button>
                        </div>
                        <div id="movie" style="display: block;" class="tabcontent">
                            <form role="form" method="post" action="<?php echo site_url('Site/manual1/'.$this->uri->segment(3)); ?>">
                                <div class="form-group row">
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
                        <div id="serial" class="tabcontent">
                            <form role="form" method="post" action="<?php echo site_url('Site/manual2/'.$this->uri->segment(3)); ?>">

                                <div style="overflow: scroll; height: 250px;" class="form-group row">
                                    <div class="col-lg-12"><h2>Season 1</h2></div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name11" placeholder="Serial-1 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url11" placeholder="Serial-1 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name12" placeholder="Serial-2 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url12" placeholder="Serial-2 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name13" placeholder="Serial-3 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url13" placeholder="Serial-3 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name14" placeholder="Serial-4 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url14" placeholder="Serial-4 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name15" placeholder="Serial-5 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url15" placeholder="Serial-5 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name16" placeholder="Serial-6 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url16" placeholder="Serial-6 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name17" placeholder="Serial-7 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url17" placeholder="Serial-7 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name18" placeholder="Serial-8 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url18" placeholder="Serial-8 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name19" placeholder="Serial-9 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url19" placeholder="Serial-9 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name110" placeholder="Serial-10 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url110" placeholder="Serial-10 url" class="form-control">
                                    </div>
                                </div>
                                <div style="overflow: scroll; height: 250px;" class="form-group row">
                                    <div class="col-lg-12"><h2>Season 2</h2></div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name21" placeholder="Serial-1 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url21" placeholder="Serial-1 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name22" placeholder="Serial-2 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url22" placeholder="Serial-2 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name23" placeholder="Serial-3 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url23" placeholder="Serial-3 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name24" placeholder="Serial-4 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url24" placeholder="Serial-4 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name25" placeholder="Serial-5 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url25" placeholder="Serial-5 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name26" placeholder="Serial-6 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url26" placeholder="Serial-6 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name27" placeholder="Serial-7 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url27" placeholder="Serial-7 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name28" placeholder="Serial-8 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url28" placeholder="Serial-8 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name29" placeholder="Serial-9 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url29" placeholder="Serial-9 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name210" placeholder="Serial-10 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url210" placeholder="Serial-10 url" class="form-control">
                                    </div>
                                </div>
                                <div style="overflow: scroll; height: 250px;" class="form-group row">
                                    <div class="col-lg-12"><h2>Season 3</h2></div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name31" placeholder="Serial-1 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url31" placeholder="Serial-1 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name32" placeholder="Serial-2 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url32" placeholder="Serial-2 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name33" placeholder="Serial-3 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url33" placeholder="Serial-3 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name34" placeholder="Serial-4 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url34" placeholder="Serial-4 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name35" placeholder="Serial-5 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url35" placeholder="Serial-5 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name36" placeholder="Serial-6 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url36" placeholder="Serial-6 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name37" placeholder="Serial-7 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url37" placeholder="Serial-7 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name38" placeholder="Serial-8 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url38" placeholder="Serial-8 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name39" placeholder="Serial-9 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url39" placeholder="Serial-9 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name310" placeholder="Serial-10 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url310" placeholder="Serial-10 url" class="form-control">
                                    </div>
                                </div>
                                <div style="overflow: scroll; height: 250px;" class="form-group row">
                                    <div class="col-lg-12"><h2>Season 4</h2></div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name41" placeholder="Serial-1 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url41" placeholder="Serial-1 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name42" placeholder="Serial-2 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url42" placeholder="Serial-2 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name43" placeholder="Serial-3 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url43" placeholder="Serial-3 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name44" placeholder="Serial-4 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url44" placeholder="Serial-4 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name45" placeholder="Serial-5 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url45" placeholder="Serial-5 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name46" placeholder="Serial-6 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url46" placeholder="Serial-6 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name47" placeholder="Serial-7 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url47" placeholder="Serial-7 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name48" placeholder="Serial-8 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url48" placeholder="Serial-8 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name49" placeholder="Serial-9 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url49" placeholder="Serial-9 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name410" placeholder="Serial-10 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url410" placeholder="Serial-10 url" class="form-control">
                                    </div>
                                </div>
                                <div style="overflow: scroll; height: 250px;" class="form-group row">
                                    <div class="col-lg-12"><h2>Season 5</h2></div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name51" placeholder="Serial-1 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url51" placeholder="Serial-1 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name52" placeholder="Serial-2 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url52" placeholder="Serial-2 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name53" placeholder="Serial-3 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url53" placeholder="Serial-3 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name54" placeholder="Serial-4 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url54" placeholder="Serial-4 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name55" placeholder="Serial-5 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url55" placeholder="Serial-5 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name56" placeholder="Serial-6 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url56" placeholder="Serial-6 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name57" placeholder="Serial-7 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url57" placeholder="Serial-7 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name58" placeholder="Serial-8 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url58" placeholder="Serial-8 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name59" placeholder="Serial-9 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url59" placeholder="Serial-9 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name510" placeholder="Serial-10 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url510" placeholder="Serial-10 url" class="form-control">
                                    </div>
                                </div>
                                <div style="overflow: scroll; height: 250px;" class="form-group row">
                                    <div class="col-lg-12"><h2>Season 6</h2></div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name61" placeholder="Serial-1 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url61" placeholder="Serial-1 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name62" placeholder="Serial-2 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url62" placeholder="Serial-2 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name63" placeholder="Serial-3 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url63" placeholder="Serial-3 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name64" placeholder="Serial-4 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url64" placeholder="Serial-4 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name65" placeholder="Serial-5 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url65" placeholder="Serial-5 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name66" placeholder="Serial-6 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url66" placeholder="Serial-6 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name67" placeholder="Serial-7 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url67" placeholder="Serial-7 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name68" placeholder="Serial-8 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url68" placeholder="Serial-8 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name69" placeholder="Serial-9 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url69" placeholder="Serial-9 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name610" placeholder="Serial-10 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url610" placeholder="Serial-10 url" class="form-control">
                                    </div>
                                </div>
                                <div style="overflow: scroll; height: 250px;" class="form-group row">
                                    <div class="col-lg-12"><h2>Season 7</h2></div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name71" placeholder="Serial-1 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url71" placeholder="Serial-1 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name72" placeholder="Serial-2 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url72" placeholder="Serial-2 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name73" placeholder="Serial-3 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url73" placeholder="Serial-3 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name74" placeholder="Serial-4 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url74" placeholder="Serial-4 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name75" placeholder="Serial-5 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url75" placeholder="Serial-5 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name76" placeholder="Serial-6 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url76" placeholder="Serial-6 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name77" placeholder="Serial-7 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url77" placeholder="Serial-7 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name78" placeholder="Serial-8 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url78" placeholder="Serial-8 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name79" placeholder="Serial-9 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url79" placeholder="Serial-9 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name710" placeholder="Serial-10 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url710" placeholder="Serial-10 url" class="form-control">
                                    </div>
                                </div>
                                <div style="overflow: scroll; height: 250px;" class="form-group row">
                                    <div class="col-lg-12"><h2>Season 8</h2></div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name81" placeholder="Serial-1 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url81" placeholder="Serial-1 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name82" placeholder="Serial-2 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url82" placeholder="Serial-2 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name83" placeholder="Serial-3 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url83" placeholder="Serial-3 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name84" placeholder="Serial-4 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url84" placeholder="Serial-4 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name85" placeholder="Serial-5 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url85" placeholder="Serial-5 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name86" placeholder="Serial-6 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url86" placeholder="Serial-6 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name87" placeholder="Serial-7 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url87" placeholder="Serial-7 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name88" placeholder="Serial-8 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url88" placeholder="Serial-8 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name89" placeholder="Serial-9 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url89" placeholder="Serial-9 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name810" placeholder="Serial-10 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url810" placeholder="Serial-10 url" class="form-control">
                                    </div>
                                </div>
                                <div style="overflow: scroll; height: 250px;" class="form-group row">
                                    <div class="col-lg-12"><h2>Season 9</h2></div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name91" placeholder="Serial-1 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url91" placeholder="Serial-1 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name92" placeholder="Serial-2 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url92" placeholder="Serial-2 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name93" placeholder="Serial-3 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url93" placeholder="Serial-3 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name94" placeholder="Serial-4 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url94" placeholder="Serial-4 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name95" placeholder="Serial-5 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url95" placeholder="Serial-5 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name96" placeholder="Serial-6 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url96" placeholder="Serial-6 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name97" placeholder="Serial-7 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url97" placeholder="Serial-7 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name98" placeholder="Serial-8 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url98" placeholder="Serial-8 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name99" placeholder="Serial-9 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url99" placeholder="Serial-9 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name910" placeholder="Serial-10 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url910" placeholder="Serial-10 url" class="form-control">
                                    </div>
                                </div>
                                <div style="overflow: scroll; height: 250px;" class="form-group row">
                                    <div class="col-lg-12"><h2>Season 10</h2></div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name101" placeholder="Serial-1 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url101" placeholder="Serial-1 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name102" placeholder="Serial-2 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url102" placeholder="Serial-2 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name103" placeholder="Serial-3 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url103" placeholder="Serial-3 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name104" placeholder="Serial-4 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url104" placeholder="Serial-4 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name105" placeholder="Serial-5 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url105" placeholder="Serial-5 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name106" placeholder="Serial-6 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url106" placeholder="Serial-6 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name107" placeholder="Serial-7 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url107" placeholder="Serial-7 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name108" placeholder="Serial-8 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url108" placeholder="Serial-8 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name109" placeholder="Serial-9 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url109" placeholder="Serial-9 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name1010" placeholder="Serial-10 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url1010" placeholder="Serial-10 url" class="form-control">
                                    </div>
                                </div>
                                <button class="btn btn-success">SEND</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="tab" style="padding-left: 10px;"><h4>Links in article</h4></div>
                        <div style="padding:10px;"><?php foreach ($art as $item) {echo($item . "<br />" );} ?></div>
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
    </script>
