<div class="formata-imagem" id="section3">
    <h2 class="ps-5 pe-5 ps-lg-0 pe-lg-0"><?php echo get_field('phrase-call', 'options') ?></h2>
</div>

<div class="elipse3"></div>
<div class="container-fluid format-call" id="section4" >

    <div class="row">

        <div class="d-none d-lg-flex col-4">
            <div class="linha"></div>
        </div>

        <div class="pe-3 ps-3 pe-lg-0 ps-lg-0 col-12 col-lg-6">
            <div class="text-alinhamentos-branco">
                <h1><?php echo get_field('title-call', 'options') ?></h1>
                <h2><?php echo get_field('text-call', 'options') ?></h2>
                <div class="d-flex mt-5">
                    <a href="#BookVisit" data-bs-toggle="modal" data-bs-target="#BookVisit" class="btn"><?php _e('Book a Visit') ?></a>
                    <a href="#contacto" data-bs-toggle="modal" data-bs-target="#contacto" class="btn btn-white" ><?php _e('Request a contact') ?></a>
                </div>
            </div>
        </div>

    </div>
</div>