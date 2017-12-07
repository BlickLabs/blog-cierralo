<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Shoreditch
 */

?>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-noty/2.4.1/packaged/jquery.noty.packaged.min.js'></script>
	</div><!-- #content -->

  <footer class="site-footer">
    <div class="site-footer-top-separator-container">
      <div class="site-footer-top-separator"></div>
    </div>
    <div class="footer cierralo-font-helveltica-thin">
      <div class="cierralo-main-footer cierralo-flex-colum">
        <div class="cierralo-row-one cierralo-flex-row cierralo-max-width">
          <div class="cierralo-flex-colum cierralo-no-center">
            <a href="">
              <img class="cierralo-footer-logo" src="<?php echo get_template_directory_uri() . '/img/logos/cierralo-logo-02.png' ?>"/>
            </a>
            <p class="size-2017">© 2017</p>
          </div>
          <div class="cierralo-adjust-footer">
            <ul class="cierralo-footer-list">
              <li class="cursor-pointer">Contacto</li>
              <li class="cursor-pointer">Preguntas Frecuentes</li>
              <!--<li class="cursor-pointer">Acerca de nosotros</li>-->
            </ul>
            <ul class="cierralo-footer-list">
              <li>
                <a class="cierralo-phone" href="mailto:hola@cierralo.com">hola@cierralo.com</a>
              </li>
              <li>
                <a class="cierralo-phone" href="tel:5521413519">+(52) 1 5521413519</a>
              </li>
              <li>
                <a target="_blank" href="https://www.facebook.com/cierralomx/">
                  <img src="<?php echo get_template_directory_uri() . '/img/icons/fb.svg' ?>"/>
                </a>
              </li>
            </ul>
          </div>
          <div class="cierralo-footer-right">
            <a href="">
              <button class="cierralo-font-helveltica-medium cierralo-default-btn cierralo-btn-secondary cierralo-remove-margin cursor-pointer hover-btn-orange">Regístrate</button>
            </a>
          </div>
        </div>
        <div class="cierralo-footer-divider cierralo-flex-row"></div>
        <div class="cierralo-footer-last-text cierralo-flex-row terms-text-size">
          <div>
            <a class="cierralo-phone" target="_blank" href=""> Términos y condiciones</a>
          </div>
          <div>
            <a class="cierralo-phone" target="_blank" href=""> Aviso de privacidad</a>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <footer class="site-footer" id="admin">
    <div class="footer-admin cierralo-font-helveltica-thin" role="contentinfo">
      <div class="cierralo-flex-colum">
        <div class="cierralo-admin-rights-reserved cierralo-font-helveltica-neue">© Ciérralo 2017 · All Rights Reserved</div>
      </div>
    </div>
  </footer>
</div><!-- #page -->

<?php wp_footer(); ?>
<script src="<?php echo get_template_directory_uri() . '/lib/js/jquery.min.js' ?>"></script>
<script src="<?php echo get_template_directory_uri() . '/js/menu.js' ?>"></script>
<script src="<?php echo get_template_directory_uri() . '/js/newsletter.js' ?>"></script>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.7";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<script>
  function sendNewsletterEmail(params) {
    var myform, formElement;
		if (params) {
			myform = document.getElementById("getEmailByPersonRight");
			formElement = document.getElementById("newsLetterWordpress");
		} else {
			myform = document.getElementById("correo");
			formElement = document.getElementById("getEmailByPerson");
		}
    var fd = new FormData(myform );
		try {
			$.ajax({
	      url: "http://alegpaez.com/newsletter/",
	      data: {email: myform.value},
	      type: 'POST',
	      success: function (result) {
	        // do something with the result
	        event.preventDefault();
	        if (result.status === "subscribed") {
	          formElement.reset();
						noty({text: 'Listo, espera las últimas noticias'});
	        } else {
	          if (result.title === "Member Exists") {
							noty({text: 'El correo ya existe, intenta con otro'});
	          } else {
							noty({text: 'El correo no es válido, intenta con otro'});
	          }
	        }
	      }
	    });
		} catch (e) {
			noty({text: 'Sucedió un error, intentalo de nuevo más tarde'});
		}

  }
</script>
</body>
</html>
