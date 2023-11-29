
<!-- Page Content  -->
<div id="content" class="p-4 p-md-3">

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid d-flex justify-content-around">
        <h3 class="">WEB CLUB MOTOR</h3>
    </div>
  </nav>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">

      <button type="button" id="sidebarCollapse" class="btn btn-primary">
        <i class="fa fa-bars"></i>
        <span class="sr-only">Toggle Menu</span>
      </button>
      <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fa fa-bars"></i>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="nav navbar-nav mx-auto">
          <li class="nav-item <?php if ($this->uri->segment(1) == 'profil') {echo 'active';} ?>" href="<?php echo base_url('profil'); ?>">
              <a class="nav-link" href="<?php echo base_url('profil')?>">Profile</a>
          </li>
          <li class="nav-item <?php if ($this->uri->segment(1) == 'visi_misi') {echo 'active';} ?>" href="<?php echo base_url('visi_misi'); ?>">
              <a class="nav-link" href="<?php echo base_url('visi_misi')?>">Visi dan Misi</a>
          </li>
          <li class="nav-item <?php if ($this->uri->segment(1) == 'produk') {echo 'active';} ?>" href="<?php echo base_url('produk'); ?>">
              <a class="nav-link" href="<?php echo base_url('produk')?>">Produk Kami</a>
          </li>
          <li class="nav-item <?php if ($this->uri->segment(1) == 'kontak') {echo 'active';} ?>" href="<?php echo base_url('kontak'); ?>">
              <a class="nav-link" href="<?php echo base_url('kontak')?>">Kontak Kami</a>
          </li>
          <li class="nav-item <?php if ($this->uri->segment(1) == 'tentang') {echo 'active';} ?>" href="<?php echo base_url('tentang'); ?>">
              <a class="nav-link" href="<?php echo base_url('tentang')?>">About Us</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
      
  