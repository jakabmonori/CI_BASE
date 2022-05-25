<?php echo view('/Frontend/Common/Header') ?>


<!-- Content start -->

<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" style="z-index: 0">
    <div class="carousel-inner">
        <?php $c = 0; ?>
            <?php foreach ($slides as $i): ?>
                <?php if ($c == 0): ?>
                    <div class="carousel-item active">
                        <img src="<?php echo base_url('assets/uploads/files/slider/'.$i['picture']) ?>" class="d-block w-100" >
                    </div>
                <?php $c++; ?>
                <?php else: ?>
                    <div class="carousel-item">
                        <img src="<?php echo base_url('assets/uploads/files/slider/'.$i['picture']) ?>" class="d-block w-100" >
                    </div>
                <?php $c++; endif; ?>
            <?php endforeach; ?>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<div class="container">
    <div class="row">
        <div class="col-4 g-0 threebox">
            <a href="<?php echo base_url('pages/szolgaltatasok') ?>">
                <img class="img-fluid w-100" src="<?php echo base_url('/assets/img/threebox1.png') ?>" alt="">
                <div class="overlay"></div>
            </a>
        </div>
        <div class="col-4 g-0 threebox">
            <a href="<?php echo base_url('pages/arlista') ?>">
                <img class="img-fluid w-100" src="<?php echo base_url('/assets/img/threebox2.png') ?>" alt="">
                <div class="overlay"></div>
            </a>
        </div>
        <div class="col-4 g-0 threebox">
            <a href="<?php echo base_url('pages/kapcsolat') ?>">
                <img class="img-fluid w-100" src="<?php echo base_url('/assets/img/threebox3.png') ?>" alt="">
                <div class="overlay"></div>
            </a>
        </div>
    </div>
</div>

<div class="my-5">
    <img src="<?php echo base_url('/assets/img/hr.png') ?>" class="img-fluid" alt="">
</div>

<div class="container text-center">
    <div class="col-12 col-lg-6 offset-lg-3">
        <?php echo $content[0]['section_content'] ?>
    </div>
</div>

<hr class="db dt">

<div class="container-fluid ">
    <div class="row">
        <div class="col-12 col-lg-6 offset-lg-2 pt-5 px-5">
            <?php echo $content[1]['section_content'] ?>
        </div>
        <div class="col-12 col-lg-4 text-center text-lg-start">
            <img class="img-fluid" style="max-height: 400px !important;" src="<?php echo base_url('/assets/img/drgalosi.jpg') ?>" alt="">
        </div>
    </div>
</div>

<div class="gallery mt-5">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <img id="gallery_teeth_icon" src="<?php echo base_url('/assets/img/main_gallery_fog.png') ?>" alt="">
            <div class="gallerytitle"></div>
        </div>
        <div class="row" style="height: 30vh !important;">
            <div class="col-12 col-md-6 offset-md-3">
                <div id="gallerySlider" class="carousel slide m-auto" data-bs-ride="carousel" style="max-width: 500px !important;">
                    <div class="carousel-inner" style="max-width: 500px !important;">
                        <?php $c = 0 ?>
                        <?php foreach ($galery as $g): ?>
                            <?php if ($c == 0): ?>
                                <div class="carousel-item active">
                                    <img src="<?php echo base_url('assets/uploads/files/fooldal_galeria/'.$g['picture']) ?>" class="d-block w-100" >
                                </div>
                            <?php $c++; else: ?>
                                <div class="carousel-item">
                                    <img src="<?php echo base_url('assets/uploads/files/fooldal_galeria/'.$g['picture']) ?>" class="d-block w-100" >
                                </div>
                            <?php $c++; endif; ?>
                        <?php endforeach; ?>
<!--                        <div class="carousel-item active">-->
<!--                            <img src="--><?php //echo base_url('/assets/img/1-DSC00414_small.jpg') ?><!--" class="d-block w-100" >-->
<!--                        </div>-->
<!--                        <div class="carousel-item">-->
<!--                            <img src="--><?php //echo base_url('/assets/img/4-drgalosi-parodontologia-varoterem2_small.jpg') ?><!--" class="d-block w-100" >-->
<!--                        </div>-->
<!--                        <div class="carousel-item">-->
<!--                            <img src="--><?php //echo base_url('/assets/img/4-rendelo1_small.jpg') ?><!--" class="d-block w-100" >-->
<!--                        </div>-->
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#gallerySlider" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#gallerySlider" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
        <div class="row text-center mt-5 pt-5">
            <div class="col-12 col-md-4 offset-md-4">
                <a href="<?php echo base_url('pages/kepgaleria') ?>"><button class="btn btn-success">Összes kép</button></a>
            </div>
        </div>
    </div>
</div>

<div class="mt-5 mb-4">
    <img src="<?php echo base_url('/assets/img/hr.png') ?>" class="img-fluid" alt="">
</div>

<div class="container mb-5">
    <p class="spantitle ">Térkép</p>
</div>

<div class="container-fluid p-0">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1069.61764901135!2d19.089112761448504!3d47.504179514623!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4741dc8646ae003d%3A0x7de581c0759be929!2sFOGORVOSOK!5e0!3m2!1shu!2shu!4v1643247304698!5m2!1shu!2shu" style="border:0; width: 100%; height: 65vh !important; z-index: 0;" allowfullscreen="" loading="lazy"></iframe>
</div>

<!-- Main content end -->

<?php echo view('/Frontend/Common/Footer') ?>
