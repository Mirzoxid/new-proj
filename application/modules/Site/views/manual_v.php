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
                            <button class="tablinks active" onclick="openCity(event, 'movie')">Movie</button>
                            <button class="tablinks" onclick="openCity(event, 'serial')">Serial</button>
                        </div>
                        <div id="movie" style="display: block;" class="tabcontent">
                            <form role="form" method="post" action="<?php echo site_url('Site/manual_movie/'.$this->uri->segment(3)); ?>">
                                <div class="form-group row">
                                    <div class="form-group col-lg-12" >
                                        <input type="text" name="description" placeholder="Movie description" class="form-control">
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
                        <div id="serial" class="tabcontent">
                            <form role="form" method="post" action="<?php echo site_url('Site/manual_serial/'.$this->uri->segment(3)); ?>">
                                <div style="overflow: auto; height: 250px;" class="form-group row">
                                    <div class="form-group col-lg-12" >
                                        <input type="text" name="description" placeholder="Series description" class="form-control">
                                    </div>
                                    <div class="col-lg-12"><h4>Season 1</h4></div>
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
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name111" placeholder="Serial-11 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url111" placeholder="Serial-11 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name112" placeholder="Serial-12 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url112" placeholder="Serial-12 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name113" placeholder="Serial-13 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url113" placeholder="Serial-13 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name114" placeholder="Serial-14 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url114" placeholder="Serial-14 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name115" placeholder="Serial-15 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url115" placeholder="Serial-15 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name116" placeholder="Serial-16 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url116" placeholder="Serial-16 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name117" placeholder="Serial-17 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url117" placeholder="Serial-17 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name118" placeholder="Serial-18 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url118" placeholder="Serial-18 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name119" placeholder="Serial-19 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url119" placeholder="Serial-19 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name120" placeholder="Serial-20 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url120" placeholder="Serial-20 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name121" placeholder="Serial-21 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url121" placeholder="Serial-21 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name122" placeholder="Serial-22 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url122" placeholder="Serial-22 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name123" placeholder="Serial-23 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url123" placeholder="Serial-23 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name124" placeholder="Serial-24 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url124" placeholder="Serial-24 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name125" placeholder="Serial-25 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url125" placeholder="Serial-25 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name126" placeholder="Serial-26 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url126" placeholder="Serial-26 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name127" placeholder="Serial-27 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url127" placeholder="Serial-27 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name128" placeholder="Serial-28 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url128" placeholder="Serial-28 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name129" placeholder="Serial-29 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url129" placeholder="Serial-29 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name130" placeholder="Serial-30 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url130" placeholder="Serial-30 url" class="form-control">
                                    </div>
                                </div>
                                <div style="overflow: auto; height: 250px;" class="form-group row">
                                    <div class="col-lg-12"><h4>Season 2</h4></div>
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
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name211" placeholder="Serial-11 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url211" placeholder="Serial-11 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name212" placeholder="Serial-12 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url212" placeholder="Serial-12 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name213" placeholder="Serial-13 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url213" placeholder="Serial-13 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name214" placeholder="Serial-14 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url214" placeholder="Serial-14 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name215" placeholder="Serial-15 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url215" placeholder="Serial-15 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name216" placeholder="Serial-16 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url216" placeholder="Serial-16 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name217" placeholder="Serial-17 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url217" placeholder="Serial-17 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name218" placeholder="Serial-18 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url218" placeholder="Serial-18 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name219" placeholder="Serial-19 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url219" placeholder="Serial-19 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name220" placeholder="Serial-20 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url220" placeholder="Serial-20 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name221" placeholder="Serial-21 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url221" placeholder="Serial-21 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name222" placeholder="Serial-22 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url222" placeholder="Serial-22 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name223" placeholder="Serial-23 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url223" placeholder="Serial-23 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name224" placeholder="Serial-24 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url224" placeholder="Serial-24 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name225" placeholder="Serial-25 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url225" placeholder="Serial-25 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name226" placeholder="Serial-26 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url226" placeholder="Serial-26 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name227" placeholder="Serial-27 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url227" placeholder="Serial-27 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name228" placeholder="Serial-28 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url228" placeholder="Serial-28 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name229" placeholder="Serial-29 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url229" placeholder="Serial-29 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name230" placeholder="Serial-30 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url230" placeholder="Serial-30 url" class="form-control">
                                    </div>
                                </div>
                                <div style="overflow: auto; height: 250px;" class="form-group row">
                                    <div class="col-lg-12"><h4>Season 3</h4></div>
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
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name311" placeholder="Serial-11 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url311" placeholder="Serial-11 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name312" placeholder="Serial-12 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url312" placeholder="Serial-12 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name313" placeholder="Serial-13 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url313" placeholder="Serial-13 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name314" placeholder="Serial-14 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url314" placeholder="Serial-14 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name315" placeholder="Serial-15 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url315" placeholder="Serial-15 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name316" placeholder="Serial-16 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url316" placeholder="Serial-16 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name317" placeholder="Serial-17 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url317" placeholder="Serial-17 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name318" placeholder="Serial-18 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url318" placeholder="Serial-18 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name319" placeholder="Serial-19 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url319" placeholder="Serial-19 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name320" placeholder="Serial-20 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url320" placeholder="Serial-20 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name321" placeholder="Serial-21 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url321" placeholder="Serial-21 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name322" placeholder="Serial-22 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url322" placeholder="Serial-22 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name323" placeholder="Serial-23 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url323" placeholder="Serial-23 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name324" placeholder="Serial-24 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url324" placeholder="Serial-24 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name325" placeholder="Serial-25 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url325" placeholder="Serial-25 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name326" placeholder="Serial-26 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url326" placeholder="Serial-26 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name327" placeholder="Serial-27 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url327" placeholder="Serial-27 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name328" placeholder="Serial-28 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url328" placeholder="Serial-28 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name329" placeholder="Serial-29 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url329" placeholder="Serial-29 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name330" placeholder="Serial-30 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url330" placeholder="Serial-30 url" class="form-control">
                                    </div>
                                </div>
                                <div style="overflow: auto; height: 250px;" class="form-group row">
                                    <div class="col-lg-12"><h4>Season 4</h4></div>
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
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name411" placeholder="Serial-11 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url411" placeholder="Serial-11 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name412" placeholder="Serial-12 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url412" placeholder="Serial-12 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name413" placeholder="Serial-13 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url413" placeholder="Serial-13 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name414" placeholder="Serial-14 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url414" placeholder="Serial-14 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name415" placeholder="Serial-15 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url415" placeholder="Serial-15 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name416" placeholder="Serial-16 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url416" placeholder="Serial-16 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name417" placeholder="Serial-17 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url417" placeholder="Serial-17 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name418" placeholder="Serial-18 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url418" placeholder="Serial-18 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name419" placeholder="Serial-19 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url419" placeholder="Serial-19 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name420" placeholder="Serial-20 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url420" placeholder="Serial-20 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name421" placeholder="Serial-21 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url421" placeholder="Serial-21 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name422" placeholder="Serial-22 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url422" placeholder="Serial-22 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name423" placeholder="Serial-23 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url423" placeholder="Serial-32 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name424" placeholder="Serial-24 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url424" placeholder="Serial-24 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name425" placeholder="Serial-25 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url425" placeholder="Serial-25 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name426" placeholder="Serial-26 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url426" placeholder="Serial-26 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name427" placeholder="Serial-27 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url427" placeholder="Serial-27 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name428" placeholder="Serial-28 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url428" placeholder="Serial-28 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name429" placeholder="Serial-29 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url429" placeholder="Serial-29 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name430" placeholder="Serial-30 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url430" placeholder="Serial-30 url" class="form-control">
                                    </div>
                                </div>
                                <div style="overflow: auto; height: 250px;" class="form-group row">
                                    <div class="col-lg-12"><h4>Season 5</h4></div>
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
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name511" placeholder="Serial-11 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url511" placeholder="Serial-11 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name512" placeholder="Serial-12 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url512" placeholder="Serial-12 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name513" placeholder="Serial-13 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url513" placeholder="Serial-13 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name514" placeholder="Serial-14 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url514" placeholder="Serial-14 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name515" placeholder="Serial-15 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url515" placeholder="Serial-15 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name516" placeholder="Serial-16 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url516" placeholder="Serial-16 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name517" placeholder="Serial-17 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url517" placeholder="Serial-17 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name518" placeholder="Serial-18 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url518" placeholder="Serial-18 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name519" placeholder="Serial-19 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url519" placeholder="Serial-19 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name520" placeholder="Serial-20 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url520" placeholder="Serial-20 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name521" placeholder="Serial-21 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url521" placeholder="Serial-21 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name522" placeholder="Serial-22 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url522" placeholder="Serial-22 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name523" placeholder="Serial-23 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url523" placeholder="Serial-23 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name524" placeholder="Serial-24 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url524" placeholder="Serial-24 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name525" placeholder="Serial-25 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url525" placeholder="Serial-25 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name526" placeholder="Serial-26 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url526" placeholder="Serial-26 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name527" placeholder="Serial-27 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url527" placeholder="Serial-27 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name528" placeholder="Serial-28 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url528" placeholder="Serial-28 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name529" placeholder="Serial-29 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url529" placeholder="Serial-29 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name530" placeholder="Serial-30 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url530" placeholder="Serial-30 url" class="form-control">
                                    </div>
                                </div>
                                <div style="overflow: auto; height: 250px;" class="form-group row">
                                    <div class="col-lg-12"><h4>Season 6</h4></div>
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
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name611" placeholder="Serial-11 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url611" placeholder="Serial-11 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name612" placeholder="Serial-12 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url612" placeholder="Serial-12 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name613" placeholder="Serial-13 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url613" placeholder="Serial-13 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name614" placeholder="Serial-14 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url614" placeholder="Serial-14 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name615" placeholder="Serial-15 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url615" placeholder="Serial-15 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name616" placeholder="Serial-16 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url616" placeholder="Serial-16 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name617" placeholder="Serial-17 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url617" placeholder="Serial-17 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name618" placeholder="Serial-18 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url618" placeholder="Serial-18 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name619" placeholder="Serial-19 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url619" placeholder="Serial-19 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name620" placeholder="Serial-20 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url620" placeholder="Serial-20 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name621" placeholder="Serial-21 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url621" placeholder="Serial-21 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name622" placeholder="Serial-22 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url622" placeholder="Serial-22 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name623" placeholder="Serial-23 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url623" placeholder="Serial-23 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name624" placeholder="Serial-24 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url624" placeholder="Serial-24 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name625" placeholder="Serial-25 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url625" placeholder="Serial-25 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name626" placeholder="Serial-26 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url626" placeholder="Serial-26 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name627" placeholder="Serial-27 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url627" placeholder="Serial-27 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name628" placeholder="Serial-28 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url628" placeholder="Serial-28 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name629" placeholder="Serial-29 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url629" placeholder="Serial-29 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name630" placeholder="Serial-30 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url630" placeholder="Serial-30 url" class="form-control">
                                    </div>
                                </div>
                                <div style="overflow: auto; height: 250px;" class="form-group row">
                                    <div class="col-lg-12"><h4>Season 7</h4></div>
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
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name711" placeholder="Serial-11 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url711" placeholder="Serial-11 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name712" placeholder="Serial-12 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url712" placeholder="Serial-12 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name713" placeholder="Serial-13 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url713" placeholder="Serial-13 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name714" placeholder="Serial-14 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url714" placeholder="Serial-14 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name715" placeholder="Serial-15 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url715" placeholder="Serial-15 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name716" placeholder="Serial-16 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url716" placeholder="Serial-16 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name717" placeholder="Serial-17 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url717" placeholder="Serial-17 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name718" placeholder="Serial-18 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url718" placeholder="Serial-18 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name719" placeholder="Serial-19 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url719" placeholder="Serial-19 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name720" placeholder="Serial-20 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url720" placeholder="Serial-20 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name721" placeholder="Serial-21 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url721" placeholder="Serial-21 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name722" placeholder="Serial-22 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url722" placeholder="Serial-22 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name723" placeholder="Serial-23 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url723" placeholder="Serial-23 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name724" placeholder="Serial-24 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url724" placeholder="Serial-24 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name725" placeholder="Serial-25 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url725" placeholder="Serial-25 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name726" placeholder="Serial-26 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url726" placeholder="Serial-26 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name727" placeholder="Serial-27 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url727" placeholder="Serial-27 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name728" placeholder="Serial-28 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url728" placeholder="Serial-28 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name729" placeholder="Serial-29 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url729" placeholder="Serial-29 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name730" placeholder="Serial-30 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url730" placeholder="Serial-30 url" class="form-control">
                                    </div>
                                </div>
                                <div style="overflow: auto; height: 250px;" class="form-group row">
                                    <div class="col-lg-12"><h4>Season 8</h4></div>
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
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name811" placeholder="Serial-11 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url811" placeholder="Serial-11 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name812" placeholder="Serial-12 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url812" placeholder="Serial-12 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name813" placeholder="Serial-13 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url813" placeholder="Serial-13 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name814" placeholder="Serial-14 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url814" placeholder="Serial-14 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name815" placeholder="Serial-15 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url815" placeholder="Serial-15 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name816" placeholder="Serial-16 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url816" placeholder="Serial-16 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name817" placeholder="Serial-17 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url817" placeholder="Serial-17 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name818" placeholder="Serial-18 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url818" placeholder="Serial-18 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name819" placeholder="Serial-19 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url819" placeholder="Serial-19 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name820" placeholder="Serial-20 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url820" placeholder="Serial-20 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name821" placeholder="Serial-21 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url821" placeholder="Serial-21 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name822" placeholder="Serial-22 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url822" placeholder="Serial-22 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name823" placeholder="Serial-23 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url823" placeholder="Serial-23 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name824" placeholder="Serial-24 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url824" placeholder="Serial-24 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name825" placeholder="Serial-25 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url825" placeholder="Serial-25 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name826" placeholder="Serial-26 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url826" placeholder="Serial-26 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name827" placeholder="Serial-27 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url827" placeholder="Serial-27 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name828" placeholder="Serial-28 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url828" placeholder="Serial-28 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name829" placeholder="Serial-29 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url829" placeholder="Serial-29 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name830" placeholder="Serial-30 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url830" placeholder="Serial-30 url" class="form-control">
                                    </div>
                                </div>
                                <div style="overflow: auto; height: 250px;" class="form-group row">
                                    <div class="col-lg-12"><h4>Season 9</h4></div>
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
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name911" placeholder="Serial-11 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url911" placeholder="Serial-11 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name912" placeholder="Serial-12 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url912" placeholder="Serial-12 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name913" placeholder="Serial-13 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url913" placeholder="Serial-13 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name914" placeholder="Serial-14 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url914" placeholder="Serial-14 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name915" placeholder="Serial-15 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url915" placeholder="Serial-15 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name916" placeholder="Serial-16 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url916" placeholder="Serial-16 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name917" placeholder="Serial-17 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url917" placeholder="Serial-17 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name918" placeholder="Serial-18 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url918" placeholder="Serial-18 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name919" placeholder="Serial-19 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url919" placeholder="Serial-19 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name920" placeholder="Serial-20 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url920" placeholder="Serial-20 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name921" placeholder="Serial-21 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url921" placeholder="Serial-21 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name922" placeholder="Serial-22 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url922" placeholder="Serial-22 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name923" placeholder="Serial-23 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url923" placeholder="Serial-23 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name924" placeholder="Serial-24 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url924" placeholder="Serial-24 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name925" placeholder="Serial-25 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url925" placeholder="Serial-25 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name926" placeholder="Serial-26 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url926" placeholder="Serial-26 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name927" placeholder="Serial-27 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url927" placeholder="Serial-27 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name928" placeholder="Serial-28 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url928" placeholder="Serial-28 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name929" placeholder="Serial-29 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url929" placeholder="Serial-29 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name930" placeholder="Serial-30 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url930" placeholder="Serial-30 url" class="form-control">
                                    </div>
                                </div>
                                <div style="overflow: auto; height: 250px;" class="form-group row">
                                    <div class="col-lg-12"><h4>Season 10</h4></div>
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
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name1011" placeholder="Serial-11 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url1011" placeholder="Serial-11 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name1012" placeholder="Serial-12 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url1012" placeholder="Serial-12 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name1013" placeholder="Serial-13 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url1013" placeholder="Serial-13 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name1014" placeholder="Serial-14 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url1014" placeholder="Serial-14 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name1015" placeholder="Serial-15 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url1015" placeholder="Serial-15 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name1016" placeholder="Serial-16 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url1016" placeholder="Serial-16 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name1017" placeholder="Serial-17 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url1017" placeholder="Serial-17 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name1018" placeholder="Serial-18 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url1018" placeholder="Serial-18 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name1019" placeholder="Serial-19 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url1019" placeholder="Serial-19 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name1020" placeholder="Serial-20 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url1020" placeholder="Serial-20 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name1021" placeholder="Serial-21 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url1021" placeholder="Serial-21 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name1022" placeholder="Serial-22 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url1022" placeholder="Serial-22 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name1023" placeholder="Serial-23 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url1023" placeholder="Serial-23 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name1024" placeholder="Serial-24 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url1024" placeholder="Serial-24 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name1025" placeholder="Serial-25 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url1025" placeholder="Serial-25 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name1026" placeholder="Serial-26 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url1026" placeholder="Serial-26 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name1027" placeholder="Serial-27 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url1027" placeholder="Serial-27 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name1028" placeholder="Serial-28 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url1028" placeholder="Serial-28 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name1029" placeholder="Serial-29 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url1029" placeholder="Serial-29 url" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="name1030" placeholder="Serial-30 name" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6" >
                                        <input type="text" name="url1030" placeholder="Serial-30 url" class="form-control">
                                    </div>
                                </div>
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
