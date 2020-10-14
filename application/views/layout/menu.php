<?php 
$site                       = $this->konfigurasi_model->listing(); 
$site_nav                   = $this->konfigurasi_model->listing();
$nav_profil                 = $this->nav_model->nav_profil();
$nav_download               = $this->nav_model->nav_download();
$nav_berita                 = $this->nav_model->nav_berita();
$nav_agenda                 = $this->nav_model->nav_agenda();
$nav_layanan                = $this->nav_model->nav_layanan();
?>
<!-- Start Menu -->
<div class="navbar-container">
<div class="navbar-container">
      <div class="bg-dark navbar-dark" data-sticky="top">
        <div class="container">
          <nav class="navbar navbar-expand-lg">
    <!-- Brand and toggle get grouped for better mobile display -->
        <a class="navbar-brand" href="<?php echo base_url() ?>"><img src="<?php echo $this->website->logo() ?>" alt="logo" class="img-responsive" style="max-height: 56px; width: auto;" /></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse-1" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <i class="icon-menu h4"></i>
            </button>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="navbar-collapse-1">
        <ul class="nav navbar-nav ml-auto">
            <!-- home -->
            <li class="nav-item"><a href="<?php echo base_url() ?>" class="nav-link">Home</a></li>

            <!-- berita -->
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown">Berita</a>
                <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                    <?php foreach($nav_berita as $nav_berita) { ?>
                    <a class="dropdown-item" href="<?php echo base_url('berita/kategori/'.$nav_berita->slug_kategori) ?>"><i class="fa fa-angle-double-right" aria-hidden="true"></i> <?php echo $nav_berita->nama_kategori ?></a>
                    <?php } ?>
                    <a class="dropdown-item" href="<?php echo base_url('berita') ?>"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Indeks Berita</a>            
                </div>
            </li>

            <!-- LAYANAN -->
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="layananDropdown" role="button" data-toggle="dropdown">Layanan</a>
                <div class="dropdown-menu" aria-labelledby="layananDropdown">
                    <?php foreach($nav_layanan as $nav_layanan) { ?>
                    <a class="dropdown-item" href="<?php echo base_url('berita/layanan/'.$nav_layanan->slug_berita) ?>"><i class="fa fa-angle-double-right" aria-hidden="true"></i> <?php echo $nav_layanan->judul_berita ?></a>
                    <?php } ?> 
                </div>
            </li>

            <!-- PROFIL -->
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="profilDropdown" role="button" data-toggle="dropdown">Profil</a>
                <div class="dropdown-menu" aria-labelledby="profilDropdown">
                    <?php foreach($nav_profil as $nav_profil) { ?>
                    <a class="dropdown-item" href="<?php echo base_url('berita/profil/'.$nav_profil->slug_berita) ?>"><i class="fa fa-angle-double-right" aria-hidden="true"></i> <?php echo $nav_profil->judul_berita ?></a>
                    <?php } ?> 
                </div>
            </li>

            <!-- galeri -->
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="galeriDropdown" role="button" data-toggle="dropdown">Galeri</a>
                <div class="dropdown-menu" aria-labelledby="galeriDropdown">
                    <a class="dropdown-item" href="<?php echo base_url('galeri'); ?>"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Galeri Foto</a>
                    <a class="dropdown-item" href="<?php echo base_url('video'); ?>"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Galeri Video</a>         
                </div>
            </li>
            

            <!-- DOWNLOAD -->
            <li class="nav-item"><a class="nav-link" href="<?php echo base_url('download') ?>">Unduhan</a></li>
            
            <!-- kontak  -->
            <li class="nav-item"><a class="nav-link" href="<?php echo base_url('kontak') ?>">Kontak</a></li>
        </ul>
        
        
    </div>
    <!-- .navbar-collapse -->
</nav>
</div>
<!-- .main-menu -->
</div>
<!-- .row -->
</div>
<!-- .container -->
</div>
<!-- .bg-main-menu -->
</header>

