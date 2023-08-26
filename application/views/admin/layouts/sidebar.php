<div class="col-md-3 left_col">
  <div class="left_col scroll-view">
    <div class="navbar nav_title" style="border: 0;">
      <a href="" class="site_title"> <img src="<?php echo base_url() ?>assets/images/Logo.png" width="20%" alt="Logo Luwu Timur"> <span>WEB WISATA</span></a>
    </div>

    <div class="clearfix"></div>

    <!-- menu profile quick info -->
    <div class="profile clearfix">
      <div class="profile_pic">

      </div>
      <div class="profile_info">
        <span><?= $this->session->nm_pengguna ?></span>
        <h2><?= $this->session->level ?></h2>
      </div>
      <div class="clearfix"></div>
    </div>
    <!-- /menu profile quick info -->

    <br />

    <!-- sidebar menu -->
    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
      <div class="menu_section">
        <h3>General</h3>
        <ul class="nav side-menu">
          <li><a href="<?= site_url('admin/') ?>"><i class="fa fa-home"></i> Beranda</a></li>
          <?php if ($this->session->level == 'Admin') { ?>
            <li><a><i class="fa fa-folder"></i> Master Data <span class="fa fa-chevron-down"></span></a>
              <ul class="nav child_menu">
                <li><a href="<?= site_url('admin/kecamatan') ?>">Kecamatan</a></li>
                <li><a href="<?= site_url('admin/kategoriwisata') ?>">Kategori wisata</a></li>
              </ul>
            </li>
          <?php } ?>
          <li><a><i class="fa fa-tags"></i> Profile Wisata <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="<?= site_url('admin/wisata') ?>">Wisata</a></li>

            </ul>

          </li>
          <li><a><i class="fa fa-map"></i> MAPS <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="<?= site_url('admin/leafletstandar') ?>">Standar</a></li>
              <li><a href="<?= site_url('admin/leafletpoint') ?>">Point</a></li>
              <li><a href="<?= site_url('admin/leafletroutingmachine') ?>">Routing Machine</a></li>

            </ul>
          </li>
          <li><a href="<?= site_url('admin/auth/out') ?>"><i class="fa fa-sign-out"></i> Keluar</a></li>
        </ul>
      </div>
    </div>
    <!-- /sidebar menu -->


  </div>
</div>