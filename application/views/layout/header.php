<?php
$site = $this->konfigurasi_model->listing();
?>

<!-- End Pre-Loader -->

<header>
<div class="navbar-container">
<div class="navbar-container">
      <div class="bg-primary navbar-dark" data-sticky="top">
        <div class="container">
          <nav class="navbar navbar-expand-lg">
          <a class="navbar-brand" href="./">
          <?php echo $site->namaweb ?>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <i class="icon-menu h4"></i>
            </button>

    <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
    <form class="form-inline col p-0 pl-md-2 pr-md-3">
        <input class="form-control w-100" type="search" placeholder="Search" aria-label="Search">
    </form>
    <ul class="navbar-nav">
        <?php if($this->session->userdata('userpeneliti')) { ?>
            <li class="nav-item"><a class="nav-link" href="<?php echo base_url('peneliti/dasbor') ?>"><i class="fa fa-dashboard" aria-hidden="true"></i> <?php echo $this->session->userdata('nama_peneliti'); ?></a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo base_url('masuk/logout') ?>"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
        <?php }else{ ?>
            <li class="nav-item"><a class="nav-link" href="https://wa.me/<?php echo str_replace('+','',$site->hp) ?>?text=Saya%20tertarik%20untuk%20Menggunakan%20Layanan%20di%20Perusahan%20Anda.%20Apakah%20bisa%20dibantu?"><i class="fa fa-whatsapp" aria-hidden="true"></i><?php echo $site->hp ?></a></li>
            <li class="nav-item"><a class="nav-link" href="tel:<?php echo $site->telepon ?>"><i class="fa fa-phone" aria-hidden="true"></i> <?php echo $site->telepon ?></a></li>
        <?php } ?>
        <li class="nav-item"><a class="nav-link" href="<?php echo base_url('kontak') ?>"><i class="fa fa-envelope" aria-hidden="true"></i> Kontak</a></li>
    </ul>
    
    </div>
    <!-- .donate-option -->
</div>
<!-- .header-top -->
</div>
<!-- .header-top -->
</div>
<!-- .container -->
</div>
<!-- .bg-header-top -->
