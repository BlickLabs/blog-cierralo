<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Shoreditch
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/lib/css/bootstrap.min.css' ?>">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

<?php wp_head(); ?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/custom-header.css' ?>">
<link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/custom-footer.css' ?>">
</head>

<body <?php body_class(); ?>>
<nav class="cierralo-navbar" id="navigation">
  <button class="hamburger hamburger--collapse" id="cierralo-hamburger-menu" data-navbar="navbar">
    <span class="hamburger-box" data-navbar="navbar">
      <span class="hamburger-inner" data-navbar="navbar"></span>
    </span>
  </button>
  <a class="navbar-brand" href="http://cierralo.com/#!/homepage">
    <img class="fitLogo" id="fit-logo" src="<?php echo get_template_directory_uri() . '/img/logos/cierralo-fit-logo.png'?>"/>
  </a>
  <ul class="nav navbar-nav navbar-right hide-onMobile cierralo-font-helveltica-neue">
    <li class="cierralo-font-helveltica-neue cierralo-purplish-grey">
      <a href="http://cierralo.com/#!/buildings">Departamentos</a>
    </li>
    <li>
      <a class="cierralo-font-helveltica-neue" href="http://cierralo.com/#!/como-funciona">¿Cómo funciona?</a>
    </li>
    <li class="cierralo-font-helveltica-neue cierralo-purplish-grey">
      <a href="http://cierralo.com/#!/login">Inicia sesión</a>
    </li>
    <li class="cierralo-font-helveltica-medium">
      <a class="no-padding-top" href="http://cierralo.com/#!/register">
        <button class="cierralo-font-helveltica-neue cierralo-register-navbar-btn cierralo-btn-secondary cursor-pointer hover-btn-orange-lighter" id="navbarRegister">Regístrate</button>
      </a>
    </li>
    <li class="cierralo-font-helveltica-medium" style="display: none;">
      <a class="no-padding-top">
        <button class="cierralo-font-helveltica-neue cierralo-contact-navbar-btn cierralo-btn-secondary cursor-pointer hover-btn-orange" id="navbarContact">Contacto</button>
      </a>
    </li>
    <li class="cierralo-font-helveltica-neue no-margin-right phone-tooltip-box">
      <a href="">
        <img class="navbar-phone-icon" src="<?php echo get_template_directory_uri() . '/img/icons/page-1-copy-5@3x.png' ?>"/>
      </a>
      <span class="tooltip-shape-navbar cierralo-font-helveltica-neue">  +(52) 55 88527468</span>
      <div class="navbar-arrow-down arrow1"></div>
    </li>
    <li class="cierralo-font-helveltica-neue no-margin-right phone-tooltip-box">
      <a href="">
        <img class="navbar-whatsapp-icon" src="<?php echo get_template_directory_uri() . '/img/icons/page-1-copy-4@3x.png' ?>"/>
      </a>
      <span class="tooltip-shape-navbar cierralo-font-helveltica-neue">+(52) 1 5521413519</span>
      <div class="navbar-arrow-down arrow2"></div>
    </li>
  </ul>
</nav>

<ul id="mobileMenu" data-preventclose="li" style="display:none; margin-top: 0;">
  <li class="item-mobile-menu mg-logo" data-preventclose="">
    <a href="http://cierralo.com/#!/homepage" data-preventclose="">
      <img src="<?php echo get_template_directory_uri() . '/img/logos/cierralo-white-logo.png' ?>" alt="Logo Cíerralo" data-preventclose=""/>
    </a>
  </li>
  
  <li class="item-mobile-menu" data-preventclose="">
    <a class="cierralo-font-helveltica-neue" href="http://cierralo.com/#!/homepage">Inicio</a>
  </li>
  <li class="item-mobile-menu" data-preventclose="">
    <a class="cierralo-font-helveltica-neue" href="http://cierralo.com/#!/como-funciona">¿Cómo funciona?</a>
  </li>
  <li class="item-mobile-menu" data-preventclose="">
    <a class="cierralo-font-helveltica-neue" href="http://cierralo.com/#!/buildings">Departamentos</a>
  </li>
  <li class="item-mobile-menu" data-preventclose="" style="display: none;">
    <a class="cierralo-font-helveltica-neue">Contacto</a>
  </li>
  <li class="item-mobile-menu mg-super" data-preventclose="">
    <a class="cierralo-font-helveltica-neue" href="http://cierralo.com/#!/register">Registro</a>
  </li>
  <li class="item-mobile-menu" data-preventclose="">
    <a class="cierralo-font-helveltica-neue" href="http://cierralo.com/#!/termsConditions">Términos y condiciones</a>
  </li>
  <li class="item-mobile-menu" data-preventclose="">
    <a class="cierralo-font-helveltica-neue" href="http://cierralo.com/#!/privacyNotice">Aviso de privacidad</a>
  </li>
</ul>

	<div id="content" class="site-content">
    <?php if ( get_header_image() ) : ?>
      <div class="header-image">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
          <img src="<?php header_image(); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="">
        </a>
      </div><!-- .header-image -->
    <?php endif; // End header image check. ?>

<script>
  window.addEventListener('touchstart', function (event) {
    var mobileMenu = document.getElementById("mobileMenu");
    if (event.target.dataset.navbar) {
      setTimeout(function(){ mobileMenu.style.width = "80%"; mobileMenu.style.display = "list-item";}, 100);
    }
    if (!event.target.dataset.preventclose) {
      if (!event.target.dataset.navbar){
        mobileMenu.style.width = "0";
      }
    }
  });
</script>
