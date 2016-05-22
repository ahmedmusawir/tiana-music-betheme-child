<?php
/**
 * The Header for our theme.
 *
 * @package Betheme
 * @author Muffin group
 * @link http://muffingroup.com
 */
?><!DOCTYPE html>
<?php 
	if( $_GET && key_exists('mfn-rtl', $_GET) ):
		echo '<html class="no-js" lang="ar" dir="rtl">';
	else:
?>
<html class="no-js" <?php language_attributes(); ?><?php mfn_tag_schema(); ?>>
<?php endif; ?>

<!-- head -->
<head>

<!-- meta -->
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<?php 
	if( mfn_opts_get('responsive') ){
		if( mfn_opts_get('responsive-zoom') ){
			echo '<meta name="viewport" content="width=device-width, initial-scale=1">';
		} else {
			echo '<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">';
		}
		 
	}
?>

<?php do_action('wp_seo'); ?>

<link rel="shortcut icon" href="<?php mfn_opts_show( 'favicon-img', THEME_URI .'/images/favicon.ico' ); ?>" />	
<?php if( mfn_opts_get('apple-touch-icon') ): ?>
<link rel="apple-touch-icon" href="<?php mfn_opts_show( 'apple-touch-icon' ); ?>" />
<?php endif; ?>	

<!-- wp_head() -->
<?php wp_head(); ?>
</head>

<!-- body -->
<body <?php body_class(); ?>>
	
	<?php do_action( 'mfn_hook_top' ); ?>
	
	<?php get_template_part( 'includes/header', 'sliding-area' ); ?>
	
	<?php if( mfn_header_style( true ) == 'header-creative' ) get_template_part( 'includes/header', 'creative' ); ?>
	
	<!-- #Wrapper -->
	<div id="Wrapper">
	
	

		<!-- #Header_bg -->
		<div id="Header_wrapper" <?php echo $header_style; ?>>
	
			<!-- #Header -->
			<header id="Header">


			</header>
				

<!--=================================
=            Moose sTuff            =
==================================-->
<section class="header-call-out">

	<article class="call-out-content container-fluid">
		
		<div class="logo-holder col-md-3 col-sm-12 col-xs-12">
			<img class="logo img-responsive" src="/wp-content/uploads/2016/05/MarketMyMusicLogo-350.png" alt="">
		</div>

		<div class="call-out-text col-md-6 col-sm-12 col-xs-12 text-center">

			<h3 id="top-bar-menu">
				<ul>
					
					<li><a rel='m_PageScroll2id' href="#block-2" title=""><i class="fa fa-music" aria-hidden="true"></i> MARKETING YOUR MUSIC</a></li>
					<li><a rel='m_PageScroll2id' href="#block-3" title=""><i class="fa fa-users" aria-hidden="true"></i> WHY JOIN </a></li>
					<li><a rel='m_PageScroll2id' href="#block-4" title=""><i class="fa fa-line-chart" aria-hidden="true"></i> YOUR MARKETING PLAN</a></li>
					<li><a rel='m_PageScroll2id' href="#block-10" title=""><i class="fa fa-pagelines " aria-hidden="true"></i> ABOUT TIANA</a></li>
				
				</ul>
			
			</h3>
			
		</div>

		<div class="call-out-button col-md-3 col-sm-12 col-xs-12">
			<a rel='m_PageScroll2id' class="btn btn-primary btn-block btn-lg" href="#block-6" title="">ENROLL NOW</a>
		</div>
	</article>

</section>

		
		</div>  <!-- id="Header_wrapper" -->
		
		
		<?php do_action( 'mfn_hook_content_before' ); 
		
// <!-- Omit Closing PHP Tags -->






















