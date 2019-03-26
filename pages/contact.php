<?php
/* Template name: contact */
?>
<?php get_header(); ?>
<?php get_template_part('components/item','sidebar'); ?>
  <div class="main page">
    <?php get_template_part('components/item','toggle-sidebar'); ?>
  	<div class="container" id="contact-page">
  		<div class="row pt-md-5 p-0">
        <div class="col-sm-12 text-center">
          <p class="text-muted">Como posso te ajudar?</p>
          <p>
            <a href="#">
              <button class="btn-chat-whats">
                  Conversar pelo Whatsapp
              </button>
            </a>
          </p>
          <p class="text-muted">Ou, se preferir, me enviei uma mensagem:</p>
        </div>
  			<div class="col-sm-12 text-center pt-5">
  				
  				<?php the_post(); ?>
  				<?php the_content(); ?>
  				<?php edit_post_link("Editar"); ?>
  			</div>
  		</div>
  	</div>
  </div>
<?php get_footer(); ?>
