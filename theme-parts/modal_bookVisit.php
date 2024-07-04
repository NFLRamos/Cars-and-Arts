<div class="modal fade formata-modal" id="BookVisit" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
    <div class="modal-dialog modal-xl  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 col-lg-6 ">
                            <h1 class="w-75">BOOK A VISIT</h1>

                        </div>
                        <div class="col-12 col-lg-6 form-contact">
                            <?php   
                            $lang = get_bloginfo("language");
                            if($lang == 'fr-FR'){ echo do_shortcode('[contact-form-7 id="864" title="Form Contact Us FR"]'); }
						                if($lang == 'en-GB'){ echo do_shortcode('[contact-form-7 id="115" title="Form Contact Us EN"]'); }    
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
//ids: 20 21 22

const input20 = document.getElementById('20');
input20.addEventListener('input', event => {
  if (input20.value === '') {
    input20.style.backgroundColor = '#dadada';
    input20.style.border = 'unset';
  } else {
    input20.style.backgroundColor = 'transparent';
    input20.style.border = '1px solid black';
  }
});

const input21 = document.getElementById('21');
input21.addEventListener('input', event => {
  if (input21.value === '') {
    input21.style.backgroundColor = '#dadada';
    input21.style.border = 'unset';
  } else {
    input21.style.backgroundColor = 'transparent';
    input21.style.border = '1px solid black';
  }
});

const input22 = document.getElementById('22');
input22.addEventListener('input', event => {
  if (input22.value === '') {
    input22.style.backgroundColor = '#dadada';
    input22.style.border = 'unset';
  } else {
    input22.style.backgroundColor = 'transparent';
    input22.style.border = '1px solid black';
  }
});





</script>