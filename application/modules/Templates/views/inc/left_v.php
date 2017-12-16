<?php
//($this->uri->segment(1) === 'Tite' && ($this->uri->segment(1) === false) || $this->uri->segment(2) == false )? 'active':''
$urls = array(
    'all_movies' => (($this->uri->segment(1) === 'Site' || $this->uri->segment(1) == false) &&
        !(($this->uri->segment(2) === 'serials') || ($this->uri->segment(2) === 'notextracted') ||
            ($this->uri->segment(2) === 'one_movie')||($this->uri->segment(2) === 'separated_movies') || ($this->uri->segment(2) === 'separated_serials')) )? 'active':'',
    'separation' => (($this->uri->segment(2) === 'serials') || ($this->uri->segment(2) === 'notextracted'))? 'active':'',
    'tv' => '',
    'separated' => (($this->uri->segment(2) === 'separated_movies') || ($this->uri->segment(2) === 'separated_serials')) ? 'active' : '',
    'identified' => ($this->uri->segment(2) === 'serials')? 'active':'',
    'others' => ($this->uri->segment(2) === 'notextracted')? 'active':'',
    'separated_movies' => ($this->uri->segment(2) === 'separated_movies')? 'active':'',
    'separated_serials' => ($this->uri->segment(2) === 'separated_serials')? 'active':''
);

?>

<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url()?>templates/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo ucfirst($this->session->userdata('user_name')); ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview <?php echo $urls['all_movies']?>">
          <a href="#">
            <i class="fa fa-file-movie-o"></i> <span>All posts</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="<?php echo $urls['all_movies']?>"><a href="<?php echo site_url()?>/"><i class="fa fa-circle-o"></i> All</a></li>
          </ul>
        </li>
        <li class="treeview <?php echo $urls['separation']?>">
          <a href="#">
            <i class="fa fa-th"></i> <span>Arrangies</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
              <li class="<?php echo $urls['others'] ?>"><a href="<?php echo site_url()?>/Site/notextracted"><i class="fa fa-circle-o"></i> Movies</a></li>
              <li class="<?php echo $urls['identified'] ?>"><a href="<?php echo site_url()?>/Site/serials"><i class="fa fa-circle-o"></i> Serials</a></li>
            <!-- <li class="<?php echo ($this->uri->segment(2) === 'add' && $this->uri->segment(1) === 'site')? 'active':'' ?>"><a href="<?php echo site_url()?>/Site/add"><i class="fa fa-circle-o"></i> Add serials</a></li> -->
          </ul>
        </li>
        <li class="treeview <?php echo $urls['separated']?>">
          <a href="#">
            <i class="fa fa-th"></i> <span>Arranged</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="<?php echo $urls['separated_movies'] ?>"><a href="<?php echo site_url()?>/Site/separated_movies"><i class="fa fa-circle-o"></i> Movies</a></li>
            <li class="<?php echo $urls['separated_serials'] ?>"><a href="<?php echo site_url()?>/Site/separated_serials"><i class="fa fa-circle-o"></i> Serials</a></li>
            <!-- <li class="<?php echo ($this->uri->segment(2) === 'add' && $this->uri->segment(1) === 'site')? 'active':'' ?>"><a href="<?php echo site_url()?>/Site/add"><i class="fa fa-circle-o"></i> Add serials</a></li> -->
          </ul>
        </li>
        <li class="treeview <?php echo ($this->uri->segment(1) === 'Tv')? 'active':'' ?>">
          <a href="#">
            <i class="fa fa-tv"></i> <span>TV</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="<?php echo ($this->uri->segment(1) == 'Tv' && $this->uri->segment(2) == false)? 'active':'' ?>"><a href="<?php echo site_url()?>/Tv"><i class="fa fa-circle-o"></i> TV channels</a></li>
            <li class="<?php echo ($this->uri->segment(2) == 'add' && $this->uri->segment('1') === 'Tv')? 'active':'' ?>"><a href="<?php echo site_url()?>/Tv/add"><i class="fa fa-circle-o"></i> Add TV channels</a></li>
            <li class="<?php echo ($this->uri->segment(2) == 'ch_cat')? 'active':'' ?>"><a href="<?php echo site_url()?>/Tv/ch_cat"><i class="fa fa-circle-o"></i> Channel categories</a></li>
          </ul>
        </li>
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
