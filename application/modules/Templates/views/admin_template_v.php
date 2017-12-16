<!DOCTYPE html>
<html>
<head>
  <?php $this->load->view('Templates/inc/head_v'); ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <?php $this->load->view('header_v'); ?>

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <?php $this->load->view('left_v') ?>
  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <?php $this->load->view($content_v); ?>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.3.8
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <?php $this->load->view('Templates/inc/controls_v'); ?>
</div>
<!-- ./wrapper -->

<?php $this->load->view('Templates/inc/scripts_v') ?>
</body>
</html>
