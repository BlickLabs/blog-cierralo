<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Shoreditch
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
  return;
}
?>
<?php
  if(! is_single() ) :
?>

<aside id="secondary" class="widget-area widget-area-mobile" role="complementary">
<?php
  endif;
?>

<?php
  if(is_single() ) :
?>

<aside id="secondary" class="widget-area widget-area-mobile cierralo-widget-area-single-post" role="complementary">
<?php
endif;
?>
  <div class="newsletter-banner-container">
    <div class="newsletter-banner">
      <p class="newsLetter-banner-text cierralo-font-helveltica-bold">
        Suscríbete a nuestro Newsletter
      </p>
    </div>
    <form class="form footer_form" onsubmit="sendNewsletterEmail(); return false;" id='getEmailByPerson'>
      <div class="cierralo-form-content">
        <input required type="form_sub" class="suscribe form-control1 cierralo-font-helveltica-neue" id="correo" placeholder="Correo electrónico">
        <div>
          <input class="cierralo-newsletter-submit cierralo-font-helveltica-neue" type="submit" name="" value="Suscribirse">
        </div>
      </div>
    </form>
  </div>
  <div class="cierralo-sidebar-separator-container">
    <div class="cierralo-sidebar-separator"></div>
  </div>
  <?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside><!-- #secondary -->

<script src="<?php echo get_template_directory_uri() . '/lib/js/jquery.min.js' ?>"></script>
<script src="<?php echo get_template_directory_uri() . '/js/newsletter.js' ?>"></script>

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
        url: "http://integrations.blick.mx/cierralo/newsletter/",
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
