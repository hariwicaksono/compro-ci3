<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
  <?php $i=1; foreach($slider as $slider): ?>
    <div class="carousel-item <?php if($i==1) { echo 'active'; } ?>">
   
        <img src="<?php echo base_url('assets/upload/image/'.$slider->gambar); ?>" class="d-block w-100" alt="bg-slider-2">
       
           
        <div class="carousel-caption d-none d-md-block">
                            <!-- <h3><?php echo $site->namaweb ?></h3> -->
                            <h2><?php echo $slider->judul_galeri ?></h2>
                            <p><?php echo strip_tags($slider->isi) ?></p>
                            
                                <a href="<?php echo $slider->website ?>" class="btn btn-default">Baca selengkapnya...</a>
                      
            </div>
          
 
</div>
<!-- .items -->
<?php $i++; endforeach; ?>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>