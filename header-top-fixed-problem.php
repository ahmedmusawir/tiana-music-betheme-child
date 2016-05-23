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
	
	<?php //do_action( 'mfn_hook_top' ); ?>
	
	<?php //get_template_part( 'includes/header', 'sliding-area' ); ?>
	
	<?php //if( mfn_header_style( true ) == 'header-creative' ) get_template_part( 'includes/header', 'creative' ); ?>
	
	<!-- #Wrapper -->
	<div id="Wrapper">
	
	

		<!-- #Header_bg -->
		<div id="Header_wrapper" <?php echo $header_style; ?>>
	
			<!-- #Header -->
			<header id="Header">
				

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
	
</section> <!-- header-call-out -->

			</header>


		
		</div>  <!-- id="Header_wrapper" -->
		

<section class="modal-form">

	<!-- Button trigger modal -->
	<!-- <button type="button" class="btn btn-primary btn-lg hide" data-toggle="modal" data-target="#myModal">
	  Launch demo modal
	</button> -->

	<!-- Modal -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="myModalLabel">ENROLL NOW!</h4>
	      </div>
	      <div class="modal-body">


			<form accept-charset="UTF-8" action="https://rp172.infusionsoft.com/app/form/process/b58c70dd7bb6fe7bb5af3a863c17ec55" class="infusion-form" method="POST">
			   <input name="inf_form_xid" type="hidden" value="b58c70dd7bb6fe7bb5af3a863c17ec55" />
			   <input name="inf_form_name" type="hidden" value="Sign Up For Inspirational Workbook (TG)" />
			   <input name="infusionsoft_version" type="hidden" value="1.53.0.62" />
			   <div class="infusion-field">
			      <label for="inf_field_FirstName">First Name *</label>
			      <input class="infusion-field-input-container" id="inf_field_FirstName" name="inf_field_FirstName" type="text" />
			   </div>
			   <div class="infusion-field">
			      <label for="inf_field_Email">Valid Email *</label>
			      <input class="infusion-field-input-container" id="inf_field_Email" name="inf_field_Email" type="text" />
			   </div>
			   <div class="infusion-field">
			      <span class="infusion-option">
			      <input checked="checked" id="inf_option_SignUpOnMyInspireList" name="inf_option_SignUpOnMyInspireList" type="checkbox" value="223" />
			      <label for="inf_option_SignUpOnMyInspireList">Sign Up On My Inspire List</label>
			      </span>
			   </div>
			   <div class="infusion-submit">
			      <input type="submit" value="Sign Up!" />
			   </div>
			</form>
			<script type="text/javascript" src="https://rp172.infusionsoft.com/app/webTracking/getTrackingCode?trackingId=6de7b0bc66d40391a6653e39e4657709"></script>



	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
	      </div>
	    </div>
	  </div>
	</div>

</section>

		<?php do_action( 'mfn_hook_content_before' ); 
		
// <!-- Omit Closing PHP Tags -->






















